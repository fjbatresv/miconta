<?php

namespace MiConta\CuentaBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'cuenta_hijo' table.
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
class CuentaHijoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.MiConta.CuentaBundle.Model.map.CuentaHijoTableMap';

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
        $this->setName('cuenta_hijo');
        $this->setPhpName('CuentaHijo');
        $this->setClassname('MiConta\\CuentaBundle\\Model\\CuentaHijo');
        $this->setPackage('src.MiConta.CuentaBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('padre_id', 'PadreId', 'INTEGER', 'cuenta', 'id', true, null, null);
        $this->addForeignKey('hijo_id', 'HijoId', 'INTEGER', 'cuenta', 'id', true, null, null);
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
        $this->addRelation('CuentaRelatedByPadreId', 'MiConta\\CuentaBundle\\Model\\Cuenta', RelationMap::MANY_TO_ONE, array('padre_id' => 'id', ), null, null);
        $this->addRelation('CuentaRelatedByHijoId', 'MiConta\\CuentaBundle\\Model\\Cuenta', RelationMap::MANY_TO_ONE, array('hijo_id' => 'id', ), null, null);
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

} // CuentaHijoTableMap
