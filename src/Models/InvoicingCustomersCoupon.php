<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingCustomersCoupon
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingcustomerscoupon
 *
 * @property string $claimId
 * @property string $graphContactId
 * @property string $customerId
 * @property string $usage
 * @property string $offer
 * @property string $terms
 * @property string $code
 * @property string $expiration
 * @property float $discountValue
 * @property string $discountType
 * @property string $createdDateTime
 * @property bool $isValid
 * @property string $status
 * @property string $amount
 * @property bool $isApplied
 *
 */
class InvoicingCustomersCoupon extends Entity
{
    protected static $schema_type = 'nativeInvoicingCustomersCoupons';

    protected $fillable = [
        'claimId',
        'graphContactId',
        'customerId',
        'usage',
        'offer',
        'terms',
        'code',
        'expiration',
        'discountValue',
        'discountType',
        'createdDateTime',
        'isValid',
        'status',
        'amount',
        'isApplied',
    ];

    protected $guarded  = [

    ];
}