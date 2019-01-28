<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController {


    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(ProductRepository $repository, ObjectManager $em)
     {
         $this->repository = $repository;
         $this->em = $em;
     }

    /**
     * @Route("/produits", name="product.index" )
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request):Response
    {
      $product = $paginator->paginate(
          $this->repository->findAllByNameAscQuery(),
          $request->query->getInt('page', 1),
          4
          );

      return $this->render('product/index.html.twig',[
          "Current_menu" => "products",
          "products" => $product,
      ]);

    }

    /**
     * @Route("/produits/{slug}-{id}", name="product.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Product $product
     * @return Response
     */
    public function show(Product $product, string $slug):Response
    {
        if ($product->getSlug() !== $slug)
        {
           return $this->redirectToRoute('product.show', [
                'id'   => $product->getId(),
                'slug' => $product->getSlug()
            ], 301);
        }
        return $this->render('product/show.html.twig',[
            "product" => $product,
            "Current_menu" => "products"
        ]);

    }


    /**
     * @Route("/export", name="product.export" )
     * @return Response
     */
    public function export()
    {
        $events  = $this->repository->findAll();
        $rows = array();
        foreach ($events as $event) {
            $data = array($event->getId(), $event->getNom(), $event->getDescription(), $event->getPrix());
            $rows[] = implode(',', $data);
        }
        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="produits.csv"');
        return $response;
    }

}