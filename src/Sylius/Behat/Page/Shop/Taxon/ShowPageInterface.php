<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Behat\Page\Shop\Taxon;

/**
 * @author Anna Walasek <anna.walasek@lakion.com>
 */
interface ShowPageInterface
{
    /**
     * @param string $productName
     *
     * @return bool
     */
    public function isProductInList($productName);

    /**
     * @return bool
     */
    public function isEmpty();
}
