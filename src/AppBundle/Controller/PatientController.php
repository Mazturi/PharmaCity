<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Pharmacy;
use AppBundle\Entity\Patient;
use AppBundle\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/patient", name="")
 */
class PatientController extends Controller
{
    /**
     * @Route("/PharmaList", name="PharmaList")
     */
    public function ListController(){
        $repo=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $pharmacy=new Pharmacy();
        $pharmacy=$repo->findAll();
//        dump($pharmacy);
//        die();
        return $this->render('@App/Patient/list_pharmacy.html.twig',array('pharmas'=>$pharmacy));
    }


    /**
     * @Route("/info", name="info_patient")
     */
    public function indexAction(Request $request)
    {
        return new response("<h1>fzzzzz</h1>");

    }
    /**
     * @Route("/addinfo", name="add_info_patient")
     * @Security("has_role('ROLE_USER')")
     */

    public function addInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('AppBundle:Patient')->findByUser($user);
        if ($patient)
        {
            return $this->redirectToRoute('edit_info_patient');
        } else {
            $patient = new Patient();
            $form = $this->createForm(PatientType::class, $patient);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $patient->setUser($this->getUser());
                $em->persist($patient);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_patient.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/editinfo", name="edit_info_patient")
     * @Security("has_role('ROLE_USER')")
     */
    public function editInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('AppBundle:Patient')->findOneBy(array('user'=>$user));
        if ($patient)
        {
            $form = $this->createForm(PatientType::class, $patient);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $patient->setUser($this->getUser());
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_patient.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('edit_add_patient');
        }

    }
}
