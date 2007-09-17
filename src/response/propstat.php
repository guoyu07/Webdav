<?php
/**
 * File containing the class representing a GET response on a collection from
 * the webdav server.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Class used to answer GET responses on a collection by the webdav backend.
 *
 * @version //autogentag//
 * @package Webdav
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
class ezcWebdavPropStatResponse extends ezcWebdavResponse
{
    /**
     * Construct prop stat response.
     *
     * Construct prop stat response, which should be aggregated in a {@link
     * ezcWebdavPropFindResponse} from a property storage and optionally an
     * error stutus code, which will default to 200(OK).
     * 
     * @param ezcWebdavPropertyStorage $properties
     * @param int $status 
     * @return void
     */
    public function __construct( ezcWebdavPropertyStorage $properties, $status = ezcWebdavResponse::STATUS_200 )
    {
        parent::__construct( $status );

        $this->properties = $properties;
    }

    /**
     * Sets a property.
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'properties':
                if ( ! $propertyValue instanceof ezcWebdavPropertyStorage )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavPropertyStorage' );
                }

                $this->properties[$propertyName] = $propertyValue;
                break;

            default:
                parent::__set( $propertyName, $propertyValue );
        }
    }
}

?>