<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PanierController extends AbstractController {


    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @param ProductRepository $repository
     */


    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * @param Request $request
     * @return Response
     */
    public  function nbArticle(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));


        return $this->render('panier/boutonPanier/boutonPanier.html.twig',[
            "articles" => $articles
        ]);



    }

    /**
     * @Route("/suppimer/{id}", name="panier.suppArticle")
     * @param SessionInterface $session
     * @param $id
     * @return Response
     */

    public function supprimerArticle(SessionInterface $session, $id)
    {
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->addFlash('danger', 'Article supprimé avec succès !');
        }

        return $this->redirect($this->generateUrl('panier'));

    }



    /**
     * @Route("/suppimer", name="panier.supprime")
     * @param Request $request
     * @return Response
     */

    public function supprimer(Request $request): Response
    {
        $session = $request->getSession();
        $session->clear();
        $session->set('panier', array());

        return $this->redirect($this->generateUrl('panier'));

    }


    /**
     * @Route("/ajouter/{id}", name="panier.ajout")
     * @param SessionInterface $session
     * @param Request $request
     * @param $id
     * @return Response
     */

    public function ajouter(SessionInterface $session, Request $request, $id)
    {


        if (!$session->has('panier'))
            $session->set('panier', array());
            $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {

            if ($request->query->get('qte') != null)

                $panier[$id] = $request->query->get('qte');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;
            $this->addFlash('success', 'Article ajouté avec succès !');

        }

        $session->set('panier', $panier);


        return $this->redirect($this->generateUrl('panier'));
    }

    /**
     * @Route("/panier}", name="panier")
     * @param Request $request
     * @return Response
     */

    public function index(Request $request): Response
    {
        $session = $request->getSession();

        $product = $this->repository->findArray(array_keys($session->get('panier')));

        if (!$session->has('panier')) $session->set('panier', array());

        return $this->render('panier/panier.html.twig',[
            "products" => $product,
            "panier" => $session->get('panier')
        ]);
    }

}

