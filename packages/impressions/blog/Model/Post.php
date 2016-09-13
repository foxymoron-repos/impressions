<?php
namespace Impressions\Blog\Model;

use Illuminate\Database\Eloquent\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="post")
 */
class Post extends Model
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
	protected $title;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $description;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $body;
	
    /**
     * @ORM\ManyToOne(targetEntity="PostCategory", inversedBy="posts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
	protected $category;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $createdAt;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updatedAt;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $thumbnailUrl;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $primaryImageUrl;
	
	
}