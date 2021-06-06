<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Repository\EleveRepository;
use App\Repository\EntreRepository;
use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="entre_eleve")
     */
    public function entre(EntreRepository $entreRepository, EleveRepository $eleveRepository): Response
    {

        return $this->render('eleves/entre.html.twig', [
            'entres' => $entreRepository->findBy(["refus"=>false]),
            'class' => $eleveRepository->findAllClass()
        ]);
    }
    /**
     * @Route("/eleves/{id}", name="eleve_show_liste")
     */

    public function show_liste(EntreRepository $entreRepository,Eleve $eleve, SortieRepository $sortieRepository): Response
    {


        return $this->render('eleves/show_liste.html.twig', [
            'entres' => $entreRepository->findBy(["eleve"=>$eleve->getId()]),
            'sorties' => $sortieRepository->findBY(["eleve"=>$eleve->getID()]),
            'eleve' => $eleve,
        ]);
    }

    /**
     * @Route("/sortie", name="sortie_eleve")
     */
    public function sortie(SortieRepository $sortieRepository, EleveRepository $eleveRepository): Response
    {

        return $this->render('eleves/sortie.html.twig', [
            'sorties' => $sortieRepository->findBy(["refus"=>false]),
            'class' => $eleveRepository->findAllClass(),
        ]);
    }
    /**
     * @Route("/refus", name="refus_eleve")
     */
    public function refus(SortieRepository $sortieRepository, EntreRepository $entreRepository, EleveRepository $eleveRepository): Response
    {

        return $this->render('eleves/refus.html.twig',[
            'sortiesRefus' => $sortieRepository->findBy(["refus"=>true]),
            'entreRefus' => $entreRepository->findBy(["refus"=>true]),
            'class' => $eleveRepository->findAllClass()


        ]);
    }

    /**
     * @Route("/entreorderByClass/{class}", name="entre_eleve_orderClass")
     */
    public function entreOrderByClass(EntreRepository $entreRepository, $class, EleveRepository  $eleveRepository): Response
    {

        return $this->render('eleves/entre.html.twig', [
            'entres' => $entreRepository->findByClassEntre($class, false),
            'class' => $eleveRepository->findAllClass()
        ]);
    }

    /**
     * @Route("/sortieorderByClass/{class}", name="sortie_eleve_orderClass")
     */
    public function sortieOrderByClass(SortieRepository  $sortieRepository, $class, EleveRepository  $eleveRepository): Response
    {


        return $this->render('eleves/sortie.html.twig', [
            'sortie' => $sortieRepository->findByClassSortie($class, false),
            'class' => $eleveRepository->findAllClass()
        ]);
    }

    /**
     * @Route("/refusorderByClass/{class}", name="refus_eleve_orderClass")
     */
    public function refusOrderByClass(EntreRepository $entreRepository, $class, EleveRepository  $eleveRepository, SortieRepository $sortieRepository): Response
    {


        return $this->render('eleves/refus.html.twig', [
            'entreRefus' => $entreRepository->findByClassEntre($class, true),
            'sortiesRefus' => $sortieRepository->findByClassSortie($class, true),
            'class' => $eleveRepository->findAllClass()
        ]);
    }



}
