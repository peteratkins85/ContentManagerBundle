<?php

namespace Cms\ContentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 */
class Content
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $contentId;

    /**
     * @var string
     */
    private $contentName;

    /**
     * @var integer
     */
    private $contentType;

    /**
     * @var integer
     */
    private $templateId;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var integer
     */
    private $modifiedBy;

    /**
     * @var string
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
     * Set contentId
     *
     * @param integer $contentId
     * @return Content
     */
    public function setContentId($contentId)
    {
        $this->contentId = $contentId;

        return $this;
    }

    /**
     * Get contentId
     *
     * @return integer
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set contentName
     *
     * @param string $contentName
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
     * Set created
     *
     * @param \DateTime $created
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
    /**
     * @var integer
     */
    private $contentsId;

    /**
     * @var integer
     */
    private $homePage;

    /**
     * @var integer
     */
    private $active;

    /**
     * @var string
     */
    private $pageTitle;


    /**
     * Set contentsId
     *
     * @param integer $contentsId
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
     * Set homePage
     *
     * @param integer $homePage
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
}
