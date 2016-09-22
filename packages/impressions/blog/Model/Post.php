<?php
namespace Impressions\Blog\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Impressions\Blog\Repository\PostRepository")
 * @ORM\Table(name="blog_post")
 */
class Post extends BaseModel
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
	
	/**ImpressionsBlogModelPostCategory.php
	 * @ORM\Column(type="string")
	 */
	protected $description;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $body;
	
    /**
     * @ORM\ManyToOne(targetEntity="Impressions\Blog\Model\PostCategory", inversedBy="posts")
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