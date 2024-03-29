<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller.Component.Acl
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Access Control List interface.
 * Implementing classes are used by AclComponent to perform ACL checks in Cake.
 *
 * @package       Cake.Controller.Component.Acl
 */
interface AclInterface
{

    /**
     * Empty method to be overridden in subclasses
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     */
    public function check($aro, $aco, $action = "*");

    /**
     * Allow methods are used to grant an ARO access to an ACO.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return boolean Success
     */
    public function allow($aro, $aco, $action = "*");

    /**
     * Deny methods are used to remove permission from an ARO to access an ACO.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return boolean Success
     */
    public function deny($aro, $aco, $action = "*");

    /**
     * Inherit methods modify the permission for an ARO to be that of its parent object.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return boolean Success
     */
    public function inherit($aro, $aco, $action = "*");

    /**
     * Initialization method for the Acl implementation
     *
     * @param AclComponent $component
     */
    public function initialize(Component $component);

}
