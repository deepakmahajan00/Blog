<?php
/**
 * Created by PhpStorm.
 * User: d.mahajan
 * Date: 23/10/16
 * Time: 09:54
 */

namespace IProgrammer\BlogFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\Table(name="blog_category")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class BlogCategory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups({"rest"})
     *
     * @var integer $id
     */
    protected $id;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Blog", inversedBy="po")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Blog should not be null")
     */
    protected $blog;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="po")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Category should not be null")
     */
    protected $category;

    public function setBlog($blog) {
        $this->blog = $blog;
        return $this;
    }

    public function getBlog() {
        return $this->blog;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getId() {
        return $this->id;
    }



}