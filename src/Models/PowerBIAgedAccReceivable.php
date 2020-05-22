<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIAgedAccReceivable
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbiagedaccreceivable
 *
 * @property int $iD
 * @property float $value
 * @property string $periodType
 * @property string $date
 * @property string $measureName
 * @property int $dateSorting
 * @property int $periodTypeSorting
 *
 */
class PowerBIAgedAccReceivable extends Entity
{
    protected static $schema_type = 'Power_BI_Aged_Acc_Receivable';

    protected $fillable = [
        'iD',
        'value',
        'periodType',
        'date',
        'measureName',
        'dateSorting',
        'periodTypeSorting',
    ];

    protected $guarded  = [

    ];
}