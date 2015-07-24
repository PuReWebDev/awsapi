<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchIndexSortValues
 *
 * @ORM\Table(name="search_index_sort_values", indexes={@ORM\Index(name="search_index_sort_values_fk0", columns={"search_index_id"}), @ORM\Index(name="search_index_sort_values_fk1", columns={"sort_values_id"})})
 * @ORM\Entity
 */
class SearchIndexSortValues
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
     * @var \SortValues
     *
     * @ORM\ManyToOne(targetEntity="SortValues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sort_values_id", referencedColumnName="id")
     * })
     */
    private $sortValues;


}
