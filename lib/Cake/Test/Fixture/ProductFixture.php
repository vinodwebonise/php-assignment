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
class ProductFixture extends CakeTestFixture
{

    /**
     * name property
     *
     * @var string 'Product'
     */
    public $name = 'Product';

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'length' => 255, 'null' => false),
        'type' => array('type' => 'string', 'length' => 255, 'null' => false),
        'price' => array('type' => 'integer', 'null' => false)
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array(
        array('name' => 'Park\'s Great Hits', 'type' => 'Music', 'price' => 19),
        array('name' => 'Silly Puddy', 'type' => 'Toy', 'price' => 3),
        array('name' => 'Playstation', 'type' => 'Toy', 'price' => 89),
        array('name' => 'Men\'s T-Shirt', 'type' => 'Clothing', 'price' => 32),
        array('name' => 'Blouse', 'type' => 'Clothing', 'price' => 34),
        array('name' => 'Electronica 2002', 'type' => 'Music', 'price' => 4),
        array('name' => 'Country Tunes', 'type' => 'Music', 'price' => 21),
        array('name' => 'Watermelon', 'type' => 'Food', 'price' => 9)
    );
}
