<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesOrdersBySalesPerson
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#salesordersbysalesperson
 *
 * @property string $itemNo
 * @property string $itemDescription
 * @property string $documentNo
 * @property float $amount
 * @property int $lineNo
 * @property int $dimensionSetID
 * @property string $postingDate
 * @property string $currenyDescription
 * @property string $currencyCode
 * @property string $salesPersonCode
 * @property string $salesPersonName
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 * @property string $auxiliaryIndex3
 * @property string $auxiliaryIndex4
 *
 */
class SalesOrdersBySalesPerson extends Entity
{
    protected static $schema_type = 'SalesOrdersBySalesPerson';

    protected $fillable = [
        'itemNo',
        'itemDescription',
        'documentNo',
        'amount',
        'lineNo',
        'dimensionSetID',
        'postingDate',
        'currenyDescription',
        'currencyCode',
        'salesPersonCode',
        'salesPersonName',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
        'auxiliaryIndex3',
        'auxiliaryIndex4',
    ];

    protected $guarded  = [

    ];
}