<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Request.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\AM;

use DHL\Datatype\Base;

/**
 * Request Request model for DHL API
 */
class Requestor extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'AccountType'      => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'AccountNumber'    => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'RequestorContact' => array(
            'type'      => 'RequestorContact',
            'required'  => false,
            'subobject' => true,
        ),
        'CompanyName'      => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'Address1'         => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'Address2'         => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'Address3'         => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'City'             => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'CountryCode'      => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'CountryCode'      => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'DivisionName'     => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
        'PostalCode'       => array(
            'type'      => '',
            'required'  => false,
            'subobject' => false,
        ),
    );
}
