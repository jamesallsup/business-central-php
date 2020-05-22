<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebUserCompany
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cswebusercompany
 *
 * @property string $userId
 * @property string $companyCode
 * @property string $companyGuid
 * @property int $noOfDocForApproval
 * @property int $noOfSharedDocuments
 * @property string $display
 *
 */
class CsWebUserCompany extends Entity
{
    protected static $schema_type = 'CS_WebUserCompany';

    protected $fillable = [
        'userId',
        'companyCode',
        'companyGuid',
        'noOfDocForApproval',
        'noOfSharedDocuments',
        'display',
    ];

    protected $guarded  = [

    ];
}