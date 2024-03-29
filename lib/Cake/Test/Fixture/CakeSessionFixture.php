<?php
/**
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 2.3.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Fixture class for the default session configuration
 *
 * @package       Cake.Test.Fixture
 */
class CakeSessionFixture extends CakeTestFixture
{

    /**
     * name property
     *
     * @var string
     */
    public $name = 'CakeSession';

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'string', 'length' => 128, 'key' => 'primary'),
        'data' => array('type' => 'text', 'null' => true),
        'expires' => array('type' => 'integer', 'length' => 11, 'null' => true)
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array();
}
