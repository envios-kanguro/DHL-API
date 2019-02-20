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
 * File:        BookPickupRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AM;

use DHL\Entity\Base;

/**
 * BookPickupRequest Request model for DHL API
 */
class BookPickupRequest extends Base
{
    /**
     * Parameters to be send in the body
     * Version 3.0 requiere nuevos parametros
     * RegionCode, RequestorParams, PickupParams
     * PickupContacs
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode'      => array(
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
        ),
        'Requestor'       => array(
            'type'      => 'Requestor',
            'required'  => false,
            'subobject' => true,
        ),
        'Place'           => array(
            'type'      => 'Place',
            'required'  => false,
            'subobject' => true,
        ),
        'Pickup'          => array(
            'type'      => 'Pickup',
            'required'  => false,
            'subobject' => true,
        ),
        'PickupContact'   => array(
            'type'      => 'PickupContact',
            'required'  => false,
            'subobject' => true,
        ),
        'ShipmentDetails' => array(
            'type'      => 'ShipmentDetails',
            'required'  => false,
            'subobject' => true,
        ),
        'PickupType'      => array(
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
        ),
        'LargestPiece'    => array(
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
        ),
    );

    /**
     * Display the schema version
     * Version 3.0 de DHL pide mostrar esquema
     * @var boolean
     */
    protected $_displaySchemaVersion = true;

    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * @var string
     * Se actualia a la version 3.0
     * The schema version
     */
    protected $_schemaVersion = '3.0';

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'BookPURequest';

    /**
     * @var string
     * Servicio BookPURequest es que usa region AM
     * Service XSD
     */
    protected $_serviceXSD = 'BookPURequest.xsd';
}
