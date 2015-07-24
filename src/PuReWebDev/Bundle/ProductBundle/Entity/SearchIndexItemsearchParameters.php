<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchIndexItemsearchParameters
 *
 * @ORM\Table(name="search_index_itemsearch_parameters", indexes={@ORM\Index(name="search_index_itemsearch_parameters_fk0", columns={"search_index_id"}), @ORM\Index(name="search_index_itemsearch_parameters_fk1", columns={"itemsearch_parameters"})})
 * @ORM\Entity
 */
class SearchIndexItemsearchParameters
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
     * @var \SearchIndex
     *
     * @ORM\ManyToOne(targetEntity="SearchIndex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="search_index_id", referencedColumnName="id")
     * })
     */
    private $searchIndex;

    /**
     * @var \ItemsearchParameters
     *
     * @ORM\ManyToOne(targetEntity="ItemsearchParameters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemsearch_parameters", referencedColumnName="id")
     * })
     */
    private $itemsearchParameters;


}
