<?php


namespace EventFarm\Restforce\Types;

/**
 * Class ContactRelationshipAccount Salesforce
 *
 * @package EventFarm\Restforce\Types
 * @author  Nils Peritore <nperitore@voyageprive.com>
 */
class ContactRelationshipAccount
{
    const SF_OBJECT = 'ProductVP_Contact_Relationship__c';

    const SF_ID = 'Id';
    const SF_PRODUCT = 'Product_VP__c';
    const SF_NAME = 'Name';
    const SF_CONTACT = 'Contact__c';
    const SF_ROLE = 'Contact_Roles__c';

    /**
     * Query fields available in SF for a Contact
     */
    const SF_FIELD_LIST = [
        self::SF_ID,
        self::SF_PRODUCT,
        self::SF_NAME,
        self::SF_CONTACT,
        self::SF_ROLE
    ];
}