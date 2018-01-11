<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Node;
use AppBundle\Entity\Pipe;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * Get all nodes data
     * 
     * @Route("nodes", name="nodes")
     */
    public function getNodesAction(Request $request) {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can get this data only per ajax.', 'status' => false), 400);
    	}
        
        $nodes = $this->getDoctrine()->getRepository(Node::class)->findAll();
        
        return new JsonResponse(array(
            'data' => $nodes,
            'status' => true
    	));
    }
    
    /**
     * Get pipes data
     * 
     * @Route("pipes", name="pipes")
     */
    public function getPipesAction(Request $request) {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can get this data only per ajax.', 'status' => false), 400);
    	}
        
        $em = $this->getDoctrine()->getManager();
        $pipes = $em->getRepository('AppBundle:Pipe')->findAll();
        
        return new JsonResponse(array(
            'data' => $pipes,
            'status' => true
    	));
    }
    
    /**
     * Get closest way
     * 
     * @Route("distance", name="distance")
     */
    public function calculateDistanceAction(Request $request) {
        
        // all data
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT ann, art, ws FROM pipe ORDER BY ann ASC';        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $points = $statement->fetchAll();
        $_distArr = array();
        foreach ($points as $point) {
            $_distArr[$point['ann']][$point['art']] = $point['ws'];
        }
        
        //the start and the end
        $a = $request->request->get('start');
        $b = $request->request->get('end');
        
        //initialize the array for storing
        $S = array(); //the nearest path with its parent and weight
        $Q = array(); //the left nodes without the nearest path
        foreach(array_keys($_distArr) as $val) {
            $Q[$val] = 99999;
        }
        $Q[$a] = 0;
        
        //start calculating
        while(!empty($Q)){
            $min = array_search(min($Q), $Q);//the most min weight
            if($min == $b) break;
            foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
                $Q[$key] = $Q[$min] + $val;
                $S[$key] = array($min, $Q[$key]);
            }
            unset($Q[$min]);
        }

        //list the path
        $path = array();
        $pos = $b;
        if (!array_key_exists($b, $S)) {
            return new JsonResponse(array(
                'message' => 'Found no way.',
                'status' => false
            ));
        }
        while($pos != $a){
            $path[] = $pos;
            $pos = $S[$pos][0];
        }
        $path[] = $a;
        $path = array_reverse($path);
        
        return new JsonResponse(array(
            'results' => $path,
            'status' => true
    	));
    }
    
}
