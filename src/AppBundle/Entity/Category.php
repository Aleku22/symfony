<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author Jan Klat <jenik@klatys.cz>
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 * @ORM\Table("categories")
 */
class Category
{

	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $title;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $slug;

	/**
	 * @var int
	 * @ORM\Column(type="integer")
	 */
	private $rank;

	/**
	 * @var Product[]
	 * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
	 */
	private $products;

	public function __construct()
	{
		$this->products = new ArrayCollection();
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return self
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return self
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param string $slug
	 * @return self
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRank()
	{
		return $this->rank;
	}

	/**
	 * @param int $rank
	 * @return self
	 */
	public function setRank($rank)
	{
		$this->rank = $rank;
		return $this;
	}

	/**
	 * @return Product[]
	 */
	public function getProducts()
	{
		return $this->products;
	}

	/**
	 * @param Product[] $products
	 * @return self
	 */
	public function setProducts($products)
	{
		$this->products = $products;
		return $this;
	}

}