<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 09/04/2018
 * Time: 15:00
 */

namespace AppBundle\Controller;

use AppBundle\Entity\People;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/*
 * @Route("/people")
 */
class PeopleController extends Controller
{
    /**
     * @Route("/people")
     *
     */

    public function indexAction()
    {
        $people= $this->getDoctrine()
                      ->getRepository('AppBundle:People')
                      ->findAll();

        $people= $this->get('jms_serializer')->serialize($people,'json');
        return new Response($people);
    }

    /**
     * @Route("/people/{id}")
     * @Method("GET")
     */

    public function getAction(People $id)
    {

        $people = $this->get('jms_serializer')->serialize($id,'json');
        return new Response($people);
    }

    /**
     * @Route("/people/save")
     * @Method("POST")
     */

    public function saveAction(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        //$request = xmlrpc_decode_request($request->getContent());

        return new Response($json);
    }

    /**
     * @Route("/people/update")
     * @Method("PUT")
     */

    public function updateAction()
    {

    }


    /**
     * @Route("/people/delete")
     * @Method("DELETE")
     */

    public function deleteAction()
    {

    }



}