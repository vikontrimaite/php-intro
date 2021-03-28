<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment {
     /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Tweet", inversedBy="comments")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $tweet;

    public function getName()
    {
        return $this->name;
    }
}
