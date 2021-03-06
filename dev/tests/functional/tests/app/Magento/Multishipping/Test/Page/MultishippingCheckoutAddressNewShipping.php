<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Multishipping\Test\Page;

use Magento\Mtf\Client\Locator;
use Magento\Mtf\Factory\Factory;
use Magento\Mtf\Page\Page;

/**
 * class MultishippingCheckoutAddressNewShipping
 * Create Shipping Address page
 *
 */
class MultishippingCheckoutAddressNewShipping extends Page
{
    /**
     * URL for new shipping address page
     */
    const MCA = 'multishipping/checkout_address/newShipping';

    /**
     * Form for edit customer address
     *
     * @var string
     */
    protected $editBlock = '#form-validate';

    /**
     * Custom constructor
     */
    protected function _init()
    {
        $this->_url = $_ENV['app_frontend_url'] . self::MCA;
    }

    /**
     * Get form for edit customer address
     *
     * @return \Magento\Customer\Test\Block\Address\Edit
     */
    public function getEditBlock()
    {
        return Factory::getBlockFactory()->getMagentoCustomerAddressEdit(
            $this->_browser->find($this->editBlock, Locator::SELECTOR_CSS)
        );
    }
}
