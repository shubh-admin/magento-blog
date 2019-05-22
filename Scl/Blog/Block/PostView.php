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

namespace Scl\Blog\Block;

class PostView extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\DataObject\IdentityInterface
{

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Scl\Blog\Model\Post $post
     * @param \Scl\Blog\Model\PostFactory $postFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Scl\Blog\Model\Post $post,
        \Scl\Blog\Model\PostFactory $postFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_post = $post;
        $this->_postFactory = $postFactory;
    }

    /**
     * @return \Scl\Blog\Model\Post
     */
    public function getPost()
    {
        // Check if posts has already been defined
        // makes our block nice and re-usable! We could
        // pass the 'posts' data to this block, with a collection
        // that has been filtered differently!
        if (!$this->hasData('post')) {
            if ($this->getPostId()) {
                /** @var \Scl\Blog\Model\Post $page */
                $post = $this->_postFactory->create();
            } else {
                $post = $this->_post;
            }
            $this->setData('post', $post);
        }
        return $this->getData('post');
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Scl\Blog\Model\Post::CACHE_TAG . '_' . $this->getPost()->getId()];
    }

}