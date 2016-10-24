<?php

namespace IProgrammer\BlogFrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Blog Entity
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity(repositoryClass="IProgrammer\BlogFrontBundle\Repository\BlogRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Blog
{
    /**
     * @var integer
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Title should not be null")
     */
    private $title;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Description should not be null")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    protected $updatedAt;

    /**
     * @var integer
     *
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\OneToMany(targetEntity="BlogCategory", mappedBy="blog", cascade={"all"})
     * @Assert\NotNull(message = "Category should not be null")
     * @Assert\NotBlank(message = "Category should not be null")
     * */
    protected $po;

    /*
     * @Groups({"rest", "detail"})
     */
    protected $categories;

    public function __construct()
    {
        $this->po = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getPo() {
        return $this->po;
    }

    // Getters and Setters
    public function __toString()
    {
        return $this->title;
    }

    // Important
    public function getCategory()
    {
        $categories = new ArrayCollection();

        foreach($this->po as $p)
        {
            $categories[] = $p->getCategory();
        }

        return $categories;
    }
    // Important
    public function setCategory($categories)
    {
        foreach($categories as $p)
        {
            $po = new BlogCategory();

            $po->setBlog($this);
            $po->setCategory($p);

            $this->addPo($po);
        }
    }

    public function getBlog()
    {
        return $this;
    }

    public function addPo($blogCategory)
    {
        $this->po[] = $blogCategory;
    }

    public function removePo($blogCategory)
    {
        return $this->po->removeElement($blogCategory);
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
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Blog
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return Blog
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Blog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Blog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $now = new \DateTime();
        $this->setCreatedAt($now);
        $this->setUpdatedAt($now);
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $now = new \DateTime();
        $this->setUpdatedAt($now);
    }
}
