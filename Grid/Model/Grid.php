<?php
namespace Praveen\Grid\Model;

use Praveen\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'student';

    /**
     * @var string
     */
    protected $_cacheTag = 'student';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'student';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Praveen\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData();
    }

    /**
     * Set Title.
     */
    public function setName($Name)
    {
        return $this->setData(TITLE, $Name);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->getData();
    }

    /**
     * Set Content.
     */
    public function setEmail($Email)
    {
        return $this->setData(self::CONTENT, $Email);
    }

    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getMobile()
    {
        return $this->getData();
    }

    /**
     * Set PublishDate.
     */
    public function setMobile($Mobile)
    {
        return $this->setData(self::PUBLISH_DATE, $Mobile);
    }
}