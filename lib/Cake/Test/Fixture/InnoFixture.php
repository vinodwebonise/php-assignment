<?php
/**
 * Fixture to test be tested exclusively with InnoDB tables
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 2.2.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package       Cake.Test.Fixture
 */
class InnoFixture extends CakeTestFixture
{

    /**
     * name property
     *
     * @var string 'Article'
     */
    public $name = 'Inno';

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => true),
        'tableParameters' => array(
            'engine' => 'InnoDB'
        )
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array(
        array('name' => 'Name 1'),
        array('name' => 'Name 2'),
    );

}
