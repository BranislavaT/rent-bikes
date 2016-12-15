<?php
/**
 * Created by PhpStorm.
 * User: anjatomovska
 * Date: 12/15/16
 * Time: 4:23 PM
 */

namespace BikeRentBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * Class BikesController
 * @package BikeRentBundle\Controller
 * @Route("/bikes")
 */
class BikesController extends  Controller
{

    /**
     * @Route("/", name="br.bikes.list")
     * @Template()
     */
    public function listAction(){


        return [];
    }


    /**
     * @Route("/rent", name="br.bikes.rent")
     * @Template()
     */
    public function rentAction(){


        return [];
    }

    /**
     * @Route("/pricing", name="br.bikes.pricing")
     * @Template()
     */
    public function pricingAction(){


        return [];
    }
}