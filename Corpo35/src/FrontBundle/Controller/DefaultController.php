<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction()
    {
        return $this->render('FrontBundle:Default:inscription.html.twig');
    }


    /**
     * @Route("/header")
     */
    public function headerAction()
    {
        return $this->render('FrontBundle:Default:header.html.twig');

    }
        /**
         * @Route("/footer")
         */
        public function footerAction()
        {
            return $this->render('FrontBundle:Default:footer.html.twig');

        }

    /**
     * @Route("/reglement", name="reglement")
     */
    public function reglementAction()
    {
        return $this->render('FrontBundle:Default:reglement.html.twig');

    }


    /**
     * @Route("/concours")
     */
    public function concoursAction()
    {
        return $this->render('FrontBundle:Default:concours.html.twig');

    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction()
    {
        return $this->render('FrontBundle:Default:blog.html.twig');
    }

    /**
     * @Route("/laureats")
     */
    public function laureatsAction()
    {
        return $this->render('FrontBundle:Default:laureats.html.twig');

    }
    /**
     * @Route("/archives", name="archives")
     */
    public function archivesAction()
    {
        return $this->render('FrontBundle:Default:archives.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('FrontBundle:Default:contact.html.twig');
    }


}


