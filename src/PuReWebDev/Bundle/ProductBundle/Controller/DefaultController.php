<?php

namespace PuReWebDev\Bundle\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ApaiIO\ApaiIO;
use ApaiIO\Operations\BrowseNodeLookup;
use ApaiIO\Operations\Lookup;
use ApaiIO\Operations\SimilarityLookup;
use ApaiIO\Operations\Search;
use ApaiIO\Operations\CartAdd;
use ApaiIO\Operations\CartCreate;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($nodeid)
    {
        $apaiIO = $this->get('apaiio');
        $browseNodeLookup = new BrowseNodeLookup();
        $browseNodeLookup->setNodeId($nodeid);
        $formattedResponse = $apaiIO->runOperation($browseNodeLookup);
        return $formattedResponse;
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/lookup/{asin}")
     * @Template()
     */
    public function lookupAction($asin)
    {
        $apaiIO = $this->get('apaiio');
        $lookup = new Lookup();
        $lookup->setItemId($asin);
        $lookup->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($lookup);
        return $formattedResponse;
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/similaritylookup")
     */
    public function similaritylookupAction($asin)
    {
        $apaiIO = $this->get('apaiio');
        $lookup = new SimilarityLookup();
        $lookup->setItemId($asin);
        $lookup->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($lookup);
        return $formattedResponse;
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/search")
     */
    public function searchAction($keyword,$category)
    {
        $apaiIO = $this->get('apaiio');
        $search = new Search();
        $search->setCategory($category);
        //$search->setActor('Bruce Willis');
        $search->setKeywords($keyword);
        $search->setPage(3);
        $search->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($search);
        return $formattedResponse;
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/cartcreate")
     */
    public function cartcreateAction($asin,$quantity)
    {
        $apaiIO = $this->get('apaiio');
        $cartCreate = new CartCreate();
        $cartCreate->addItem($asin, $quantity, true);
        $formattedResponse = $apaiIO->runOperation($cartCreate);
        return $formattedResponse;
    }
}
