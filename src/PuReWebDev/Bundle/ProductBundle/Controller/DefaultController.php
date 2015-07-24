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
    public function indexAction($name)
    {
        $apaiIO = $this->get('apaiio');
        $browseNodeLookup = new BrowseNodeLookup();
        $browseNodeLookup->setNodeId(1000);
        $formattedResponse = $apaiIO->runOperation($browseNodeLookup);
        print_r($formattedResponse);
        exit();
        return array('name' => $name);
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/lookup/{asin}")
     * @Template()
     */
    public function lookupAction($asin)
    {
        $apaiIO = $this->get('apaiio');
        $lookup = new Lookup();
        $lookup->setItemId('B009GDHYPQ,B00RPM6UZA');
        $lookup->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($lookup);

        print_r($formattedResponse);
        exit();
        return array('name' => $name);
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/similaritylookup")
     */
    public function similaritylookupAction()
    {
        $apaiIO = $this->get('apaiio');
        $lookup = new SimilarityLookup();
        $lookup->setItemId('B009GDHYPQ');
        $lookup->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($lookup);
        print_r($formattedResponse);
        exit();
        return array('name' => $name);
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/search")
     */
    public function searchAction()
    {
        $apaiIO = $this->get('apaiio');
        $search = new Search();
        $search->setCategory('DVD');
        $search->setActor('Bruce Willis');
        $search->setKeywords('Die Hard');
        $search->setPage(3);
        $search->setResponseGroup(array('Large', 'Small'));
        $formattedResponse = $apaiIO->runOperation($search);
        print_r($formattedResponse);
        exit();
        return array('name' => $name);
    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/cartcreate")
     */
    public function cartcreateAction()
    {
        $apaiIO = $this->get('apaiio');

        $cartCreate = new CartCreate();
        $cartCreate->addItem("B005OVC4G8", 1, true);
        $formattedResponse = $apaiIO->runOperation($cartCreate);

        print_r($formattedResponse);
        exit();
        return array('name' => $name);
    }
}
