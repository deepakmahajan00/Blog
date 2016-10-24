<?php

namespace IProgrammer\BlogFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Category Entity
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="IProgrammer\BlogFrontBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @Groups({"rest"})
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    private $id;

    /**
     * @var string
     *
     * @Groups({"rest"})
     *
     * @ORM\Column(name="category_name", type="string", length=100, nullable=false)
     * @Assert\NotNull(message = "Category name should not be null")
     */
    private $categoryName;

    /**
     * @Groups({"rest"})
     *
     * @ORM\OneToMany(targetEntity="BlogCategory" , mappedBy="category" , cascade={"all"})
     * */
    protected $po;

    public function __construct() {
    }

    public function getPo() {
        return $this->po;
    }

    public function __toString()
    {
        return $this->categoryName;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
