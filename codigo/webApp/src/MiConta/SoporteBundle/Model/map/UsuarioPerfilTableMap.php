<?php

namespace MiConta\SoporteBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'usuario_perfil' table.
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
class UsuarioPerfilTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.MiConta.SoporteBundle.Model.map.UsuarioPerfilTableMap';

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
        $this->setName('usuario_perfil');
        $this->setPhpName('UsuarioPerfil');
        $this->setClassname('MiConta\\SoporteBundle\\Model\\UsuarioPerfil');
        $this->setPackage('src.MiConta.SoporteBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('perfil_id', 'PerfilId', 'INTEGER', 'perfil', 'id', true, null, null);
        $this->addForeignKey('usuario_id', 'UsuarioId', 'INTEGER', 'usuario', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'MiConta\\SoporteBundle\\Model\\Usuario', RelationMap::MANY_TO_ONE, array('usuario_id' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Perfil', 'MiConta\\SoporteBundle\\Model\\Perfil', RelationMap::MANY_TO_ONE, array('perfil_id' => 'id', ), null, null);
    } // buildRelations()

} // UsuarioPerfilTableMap
