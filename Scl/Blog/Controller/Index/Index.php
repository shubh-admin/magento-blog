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

namespace SCl\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Index extends Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}