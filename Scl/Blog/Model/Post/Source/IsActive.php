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

namespace Scl\Blog\Model\Post\Source;

class IsActive implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Scl\Blog\Model\Post
     */
    protected $post;

    /**
     * Constructor
     *
     * @param \Scl\Blog\Model\Post $post
     */
    public function __construct(\Scl\Blog\Model\Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->post->getAvailableStatuses();
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
