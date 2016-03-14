<?php

/*
 * This file is part of Laravel Payment Details.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\PaymentDetails\Providers;

/**
 * Class BankTransfer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class BankTransfer extends Provider
{
    /**
     * @return array
     */
    public function getFields()
    {
        return ['holder', 'bank', 'account_number', 'bank_code'];
    }
}
