<?php

namespace MiConta\CuentaBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'cuenta' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.MiConta.CuentaBundle.Model.map
 */
class CuentaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.MiConta.CuentaBundle.Model.map.CuentaTableMap';

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
        $this->setName('cuenta');
        $this->setPhpName('Cuenta');
        $this->setClassname('MiConta\\CuentaBundle\\Model\\Cuenta');
        $this->setPackage('src.MiConta.CuentaBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nombre', 'Nombre', 'VARCHAR', true, 45, null);
        $this->addColumn('activo', 'Activo', 'BOOLEAN', true, 1, false);
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
        $this->addRelation('CuentaHijoRelatedByPadreId', 'MiConta\\CuentaBundle\\Model\\CuentaHijo', RelationMap::ONE_TO_MANY, array('id' => 'padre_id', ), null, null, 'CuentaHijosRelatedByPadreId');
        $this->addRelation('CuentaHijoRelatedByHijoId', 'MiConta\\CuentaBundle\\Model\\CuentaHijo', RelationMap::ONE_TO_MANY, array('id' => 'hijo_id', ), null, null, 'CuentaHijosRelatedByHijoId');
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

} // CuentaTableMap
