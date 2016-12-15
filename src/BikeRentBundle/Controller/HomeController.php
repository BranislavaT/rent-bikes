<?php
/**
 * Created by PhpStorm.
 * User: anjatomovska
 * Date: 12/15/16
 * Time: 3:48 PM
 */

namespace BikeRentBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class HomeController extends Controller
{

    /**
     * @Route("/", name="br.home.index")
     * @Template()
     */
    public function index(){


        return [];
    }
}