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

 namespace Scl\Blog\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('scl_blog_post'))
            ->addColumn(
                'post_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Post ID'
            )
            ->addColumn('url_key', Table::TYPE_TEXT, 100, ['nullable' => true, 'default' => null])
            ->addColumn('title', Table::TYPE_TEXT, 255, ['nullable' => false], 'Blog Title')
            ->addColumn('feature',Table::TYPE_TEXT, 100,['nullable' => true], 'Feature Image')
            ->addColumn('content', Table::TYPE_TEXT, '2M', [], 'Blog Content')
            ->addColumn('is_active', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => '1'], 'Is Post Active?')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addIndex($installer->getIdxName('blog_post', ['url_key']), ['url_key'])
            ->setComment('Shubh Computing Blog Posts');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }

}