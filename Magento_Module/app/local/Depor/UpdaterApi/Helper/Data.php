<?php

class Summa_Blog_Helper_Data
    extends Mage_Core_Helper_Abstract
{

    const TYPE_CAREERS_ID = 1;
    const TYPE_NEWS_ID = 2;
    const TYPE_PROFILES_ID = 3;
    const TYPE_EVENTS_ID = 4;
    const TYPE_GLOSSARY_ID = 5;
    const TYPE_DOCUMENTATION_ID = 6;
    const TYPE_CAREERS_TEXT = 'careers';
    const TYPE_NEWS_TEXT = 'news';
    const TYPE_PROFILES_TEXT = 'profiles';
    const TYPE_EVENTS_TEXT = 'events';
    const TYPE_GLOSSARY_TEXT = 'glossary';
    const TYPE_DOCUMENTATION_TEXT = 'documentation';
    const TAG_PROFILES = 'company/profiles';
    const TAG_NEWS = 'company/news';
    const TAG_EVENTS = 'company/events';

    protected $_types = array(
        self::TYPE_CAREERS_TEXT => self::TYPE_CAREERS_ID,
        self::TYPE_NEWS_TEXT => self::TYPE_NEWS_ID,
        self::TYPE_PROFILES_TEXT => self::TYPE_PROFILES_ID,
        self::TYPE_EVENTS_TEXT => self::TYPE_EVENTS_ID,
        self::TYPE_GLOSSARY_TEXT => self::TYPE_GLOSSARY_ID,
        self::TYPE_DOCUMENTATION_TEXT => self::TYPE_DOCUMENTATION_ID
    );

    public function getTypeId($type = null)
    {
        if (!$type) {
            $type = Mage::app()->getRequest()->getParam('type');
        }
        $typeId = isset($this->_types[$type]) ? $this->_types[$type] : null;
        return $typeId;
    }

    public function getTypeName($id = null)
    {
        if (!$id) {
            return Mage::app()->getRequest()->getParam('type') ? Mage::app()->getRequest()->getParam('type') : '';
        }
        foreach ($this->_types as $typeName => $typeId) {
            if ($typeId == $id) {
                return $typeName;
            }
        }
        return '';
    }

    public function getHomeUrl() {

        return array(
            "label" => $this->__('Home'),
            "title" => $this->__('Home Page'),
            "link" => Mage::getUrl()
        );
    }

    public function getProfilesUrl() {

        return array(
            "label" => $this->__('Profiles'),
            "title" => $this->__('Profiles'),
            "link" => Mage::getUrl(self::TAG_PROFILES)
        );
    }

    public function getEventsUrl() {

        return array(
            "label" => $this->__('Events'),
            "title" => $this->__('Events'),
            "link" => Mage::getUrl(self::TAG_EVENTS)
        );
    }

    public function getNewsUrl() {

        return array(
            "label" => $this->__('News'),
            "title" => $this->__('News'),
            "link" => Mage::getUrl(self::TAG_NEWS)
        );
    }

    public function getFullUrl($url) {
        return parse_url($url, PHP_URL_SCHEME) === '' ? 'http://'.$url : $url;
    }

    public function getSingularName($str)
    {
        if (substr($str, -1) == 's')
        {
            $str = substr($str, 0, -1);
        }
        return $str;
    }

    public function getTypesWithAdvanceOptions(){
        return array(self::TYPE_CAREERS_TEXT, self::TYPE_EVENTS_TEXT, self::TYPE_NEWS_TEXT, self::TYPE_PROFILES_TEXT);
    }
}