<?php
namespace Impressions\Blog\Model;

use Doctrine\ORM\Mapping as ORM;
use Impressions\Blog\Model;

/**
 * @ORM\Entity
 * @ORM\Table(name="post_category")
 */
class PostCategory extends BaseModel
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $name;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $createdAt;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updatedAt;
	
	/**
	 * @ORM\OneToMany(targetEntity="Impressions\Blog\Model\Post", mappedBy="category")
	 */
	protected $posts;
	
}