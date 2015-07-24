<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchIndex
 *
 * @ORM\Table(name="search_index", indexes={@ORM\Index(name="search_index_fk0", columns={"browse_node_id"})})
 * @ORM\Entity
 */
class SearchIndex
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \BrowseNode
     *
     * @ORM\ManyToOne(targetEntity="BrowseNode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="browse_node_id", referencedColumnName="id")
     * })
     */
    private $browseNode;


}
