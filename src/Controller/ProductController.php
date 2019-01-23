<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function index():Response
    {
      //$product = $this->repository->findBy([], ['nom' => 'ASC']); on peu faire ça pour le trie mais on prefere DI
        $product = $this->repository->findAllByNameAsc();
      return $this->render('product/index.html.twig',[
          "Current_menu" => "products",
          "products" => $product
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

}