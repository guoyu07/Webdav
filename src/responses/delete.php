<?php
/**
 * File containing the ezcWebdavDeleteResponse class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Class generated by the backend to respond to DELETE requests on a resource.
 *
 * If a {@link ezcWebdavBackend} receives an instance of {@link
 * ezcWebdavDeleteRequest} it might react with an instance of {@link
 * ezcWebdavDeleteResponse} or with producing an error.
 *
 * @version //autogentag//
 * @package Webdav
 */
class ezcWebdavDeleteResponse extends ezcWebdavResponse
{
    /**
     * Creates a new response object.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct( ezcWebdavResponse::STATUS_204 );
    }
}

?>
