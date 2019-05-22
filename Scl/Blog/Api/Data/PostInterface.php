<?php 
/**
 * Shubh Computing LLP
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Shubhcomputing.com license that is
 * available through the world-wide-web at this URL:
 * https://shubhcomputing.com/license.html *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Shubh Computing LLP
 * @package     Scl_Blog
 * @copyright   Copyright (c) Shubhcomputing (https://shubhcomputing.com/)
 * @license     https://shubhcomputing.com/license.html
 */

namespace Scl\Blog\Api\Data;

interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID       = 'post_id';
    const URL_KEY       = 'url_key';
    const TITLE         = 'title';
    Const FEATURE_IMAGE = 'feature_image';
    const CONTENT       = 'content';
    Const CATEGORY      = 'category';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getFeatureImage();

    /**
     * Get image name
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCategory();

    /**
     * Get category
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $url_key
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setUrlKey($url_key);

    /**
     * Set title
     *
     * @param string $title
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setTitle($title);

    /**
     * Set feature Image
     *
     * @param string $feature_image
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setFeatureImage($feature_image);

    /**
     * Set content
     *
     * @param string $content
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setContent($content);

    /**
     * Set category
     *
     * @param string $category
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setCategory($category);

    /**
     * Set content
     *
     * @param string $content
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Scl\Blog\Api\Data\PostInterface
     */
    public function setIsActive($isActive);
}