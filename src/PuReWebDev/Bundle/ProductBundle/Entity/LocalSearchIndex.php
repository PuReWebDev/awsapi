<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalSearchIndex
 *
 * @ORM\Table(name="local_search_index", indexes={@ORM\Index(name="local_search_index_fk0", columns={"locale_id"}), @ORM\Index(name="local_search_index_fk1", columns={"search_index_id"})})
 * @ORM\Entity
 */
class LocalSearchIndex
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
     * @var \Locale
     *
     * @ORM\ManyToOne(targetEntity="Locale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="id")
     * })
     */
    private $locale;

    /**
     * @var \SearchIndex
     *
     * @ORM\ManyToOne(targetEntity="SearchIndex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="search_index_id", referencedColumnName="id")
     * })
     */
    private $searchIndex;


}
