<?php

namespace MiConta\SoporteBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'perfil_menu' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.MiConta.SoporteBundle.Model.map
 */
class PerfilMenuTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.MiConta.SoporteBundle.Model.map.PerfilMenuTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('perfil_menu');
        $this->setPhpName('PerfilMenu');
        $this->setClassname('MiConta\\SoporteBundle\\Model\\PerfilMenu');
        $this->setPackage('src.MiConta.SoporteBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('perfil_id', 'PerfilId', 'INTEGER', 'perfil', 'id', true, null, null);
        $this->addForeignKey('menu_id', 'MenuId', 'INTEGER', 'menu', 'id', true, null, null);
        $this->addColumn('created_by', 'CreatedBy', 'VARCHAR', false, 50, null);
        $this->addColumn('updated_by', 'UpdatedBy', 'VARCHAR', false, 50, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Perfil', 'MiConta\\SoporteBundle\\Model\\Perfil', RelationMap::MANY_TO_ONE, array('perfil_id' => 'id', ), 'CASCADE', null);
        $this->addRelation('Menu', 'MiConta\\SoporteBundle\\Model\\Menu', RelationMap::MANY_TO_ONE, array('menu_id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
  'disable_updated_at' => 'false',
),
        );
    } // getBehaviors()

} // PerfilMenuTableMap
