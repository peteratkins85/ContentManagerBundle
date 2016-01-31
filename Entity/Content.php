<?php

namespace Oni\ContentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="Content")
 * @ORM\Entity(repositoryClass="Oni\ContentManagerBundle\Entity\ContentRepository")
 */
class Content
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contentsId", type="integer")
     */
    private $contentsId;

    /**
     * @var string
     *
     * @ORM\Column(name="contentName", type="string", length=50)
     */
    private $contentName;

    /**
     * @var integer
     *
     * @ORM\Column(name="contentType", type="integer")
     */
    private $contentType;

    /**
     * @var integer
     *
     * @ORM\Column(name="templateId", type="integer")
     */
    private $templateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="homePage", type="integer")
     */
    private $homePage;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle", type="string", length=70)
     */
    private $pageTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="time")
     */
    private $modified;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifiedBy", type="integer")
     */
    private $modifiedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contentsId
     *
     * @param integer $contentsId
     *
     * @return Content
     */
    public function setContentsId($contentsId)
    {
        $this->contentsId = $contentsId;

        return $this;
    }

    /**
     * Get contentsId
     *
     * @return integer
     */
    public function getContentsId()
    {
        return $this->contentsId;
    }

    /**
     * Set contentName
     *
     * @param string $contentName
     *
     * @return Content
     */
    public function setContentName($contentName)
    {
        $this->contentName = $contentName;

        return $this;
    }

    /**
     * Get contentName
     *
     * @return string
     */
    public function getContentName()
    {
        return $this->contentName;
    }

    /**
     * Set contentType
     *
     * @param integer $contentType
     *
     * @return Content
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return integer
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set templateId
     *
     * @param integer $templateId
     *
     * @return Content
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get templateId
     *
     * @return integer
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set homePage
     *
     * @param integer $homePage
     *
     * @return Content
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return integer
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Content
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return Content
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Content
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Content
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     *
     * @return Content
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Content
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
