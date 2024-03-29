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
class AroFixture extends CakeTestFixture
{

    /**
     * name property
     *
     * @var string 'Aro'
     */
    public $name = 'Aro';

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'parent_id' => array('type' => 'integer', 'length' => 10, 'null' => true),
        'model' => array('type' => 'string', 'null' => true),
        'foreign_key' => array('type' => 'integer', 'length' => 10, 'null' => true),
        'alias' => array('type' => 'string', 'default' => ''),
        'lft' => array('type' => 'integer', 'length' => 10, 'null' => true),
        'rght' => array('type' => 'integer', 'length' => 10, 'null' => true)
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array(
        array('parent_id' => null, 'model' => null, 'foreign_key' => null, 'alias' => 'ROOT', 'lft' => 1, 'rght' => 8),
        array('parent_id' => '1', 'model' => 'Group', 'foreign_key' => '1', 'alias' => 'admins', 'lft' => 2, 'rght' => 7),
        array('parent_id' => '2', 'model' => 'AuthUser', 'foreign_key' => '1', 'alias' => 'Gandalf', 'lft' => 3, 'rght' => 4),
        array('parent_id' => '2', 'model' => 'AuthUser', 'foreign_key' => '2', 'alias' => 'Elrond', 'lft' => 5, 'rght' => 6)
    );
}
