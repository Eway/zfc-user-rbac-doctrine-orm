<?php
/**
 * Doctrine2 ORM storage adapter for ZfcUser and Rbac.
 *
 * @author    Juan Pedro Gonzalez Gutierrez
 * @link      http://github.com/zend-modules/zfc-user-rbac-doctrine-orm
 * @copyright Copyright (c) 2016 Juan Pedro Gonzalez Gutierrez.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 */

namespace ZfcUserRbacDoctrineORM\Options;

use ZfcUser\Options\ModuleOptions as BaseModuleOptions;

class ModuleOptions extends BaseModuleOptions
{
    /**
     * @var string
     */
    protected $userEntityClass = 'ZfcUserRbacDoctrineORM\Entity\User';

    /**
     * @var string
     */
    protected $roleEntityClass = 'ZfcUserRbacDoctrineORM\Entity\Role';
    
    /**
     * @var bool
     */
    protected $enableDefaultEntities = true;

    /**
     * @param boolean $enableDefaultEntities
     */
    public function setEnableDefaultEntities($enableDefaultEntities)
    {
        $this->enableDefaultEntities = $enableDefaultEntities;
        
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDefaultEntities()
    {
        return $this->enableDefaultEntities;
    }
    
    /**
     * set role entity class name
     *
     * @param string $roleEntityClass
     * @return ModuleOptions
     */
    public function setRoleEntityClass($roleEntityClass)
    {
        $this->roleEntityClass = $roleEntityClass;
        return $this;
    }
    
    /**
     * get role entity class name
     *
     * @return string
     */
    public function getRoleEntityClass()
    {
        return $this->roleEntityClass;
    }
}
