<?php
namespace Impressions\Blog\Model;

use Illuminate\Database\Eloquent\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="post_category")
 */
class PostCategory extends Model
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
	 * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
	 */
	protected $posts;
	
}