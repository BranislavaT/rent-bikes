<?php
/**
 * Created by PhpStorm.
 * User: anjatomovska
 * Date: 12/16/16
 * Time: 12:44 PM
 */

namespace BikeRentBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class RentController
 * @package BikeRentBundle\Controller
 * @Route("/rent")
 */
class RentController extends Controller
{

    /**
     * @Route("/", name="br.rent.index")
     * @Template()
     */
    public function index(){


        return [];
    }
}