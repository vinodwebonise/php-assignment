<?php
/**
 * Short description for file.
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package       Cake.Test.Fixture
 */
class ArosAcoFixture extends CakeTestFixture
{

    /**
     * name property
     *
     * @var string 'ArosAco'
     */
    public $name = 'ArosAco';

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'aro_id' => array('type' => 'integer', 'length' => 10, 'null' => false),
        'aco_id' => array('type' => 'integer', 'length' => 10, 'null' => false),
        '_create' => array('type' => 'string', 'length' => 2, 'default' => 0),
        '_read' => array('type' => 'string', 'length' => 2, 'default' => 0),
        '_update' => array('type' => 'string', 'length' => 2, 'default' => 0),
        '_delete' => array('type' => 'string', 'length' => 2, 'default' => 0)
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array();
}
