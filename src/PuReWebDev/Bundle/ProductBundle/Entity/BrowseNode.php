<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrowseNode
 *
 * @ORM\Table(name="browse_node")
 * @ORM\Entity
 */
class BrowseNode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="browsenodeId", type="integer", nullable=false)
     */
    private $browsenodeid;


}
