<?php

namespace MiConta\CuentaBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use MiConta\CuentaBundle\Model\Cuenta;
use MiConta\CuentaBundle\Model\CuentaHijo;
use MiConta\CuentaBundle\Model\CuentaPeer;
use MiConta\CuentaBundle\Model\CuentaQuery;

/**
 * @method CuentaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CuentaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method CuentaQuery orderByActivo($order = Criteria::ASC) Order by the activo column
 * @method CuentaQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method CuentaQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 * @method CuentaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CuentaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method CuentaQuery groupById() Group by the id column
 * @method CuentaQuery groupByNombre() Group by the nombre column
 * @method CuentaQuery groupByActivo() Group by the activo column
 * @method CuentaQuery groupByCreatedBy() Group by the created_by column
 * @method CuentaQuery groupByUpdatedBy() Group by the updated_by column
 * @method CuentaQuery groupByCreatedAt() Group by the created_at column
 * @method CuentaQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method CuentaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentaQuery leftJoinCuentaHijoRelatedByPadreId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentaHijoRelatedByPadreId relation
 * @method CuentaQuery rightJoinCuentaHijoRelatedByPadreId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentaHijoRelatedByPadreId relation
 * @method CuentaQuery innerJoinCuentaHijoRelatedByPadreId($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentaHijoRelatedByPadreId relation
 *
 * @method CuentaQuery leftJoinCuentaHijoRelatedByHijoId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentaHijoRelatedByHijoId relation
 * @method CuentaQuery rightJoinCuentaHijoRelatedByHijoId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentaHijoRelatedByHijoId relation
 * @method CuentaQuery innerJoinCuentaHijoRelatedByHijoId($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentaHijoRelatedByHijoId relation
 *
 * @method Cuenta findOne(PropelPDO $con = null) Return the first Cuenta matching the query
 * @method Cuenta findOneOrCreate(PropelPDO $con = null) Return the first Cuenta matching the query, or a new Cuenta object populated from the query conditions when no match is found
 *
 * @method Cuenta findOneByNombre(string $nombre) Return the first Cuenta filtered by the nombre column
 * @method Cuenta findOneByActivo(boolean $activo) Return the first Cuenta filtered by the activo column
 * @method Cuenta findOneByCreatedBy(string $created_by) Return the first Cuenta filtered by the created_by column
 * @method Cuenta findOneByUpdatedBy(string $updated_by) Return the first Cuenta filtered by the updated_by column
 * @method Cuenta findOneByCreatedAt(string $created_at) Return the first Cuenta filtered by the created_at column
 * @method Cuenta findOneByUpdatedAt(string $updated_at) Return the first Cuenta filtered by the updated_at column
 *
 * @method array findById(int $id) Return Cuenta objects filtered by the id column
 * @method array findByNombre(string $nombre) Return Cuenta objects filtered by the nombre column
 * @method array findByActivo(boolean $activo) Return Cuenta objects filtered by the activo column
 * @method array findByCreatedBy(string $created_by) Return Cuenta objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Cuenta objects filtered by the updated_by column
 * @method array findByCreatedAt(string $created_at) Return Cuenta objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Cuenta objects filtered by the updated_at column
 */
abstract class BaseCuentaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'MiConta\\CuentaBundle\\Model\\Cuenta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentaQuery) {
            return $criteria;
        }
        $query = new CuentaQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Cuenta|Cuenta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Cuenta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Cuenta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nombre`, `activo`, `created_by`, `updated_by`, `created_at`, `updated_at` FROM `cuenta` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Cuenta();
            $obj->hydrate($row);
            CuentaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Cuenta|Cuenta[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Cuenta[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentaPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CuentaPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CuentaPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the activo column
     *
     * Example usage:
     * <code>
     * $query->filterByActivo(true); // WHERE activo = true
     * $query->filterByActivo('yes'); // WHERE activo = true
     * </code>
     *
     * @param     boolean|string $activo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByActivo($activo = null, $comparison = null)
    {
        if (is_string($activo)) {
            $activo = in_array(strtolower($activo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CuentaPeer::ACTIVO, $activo, $comparison);
    }

    /**
     * Filter the query on the created_by column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedBy('fooValue');   // WHERE created_by = 'fooValue'
     * $query->filterByCreatedBy('%fooValue%'); // WHERE created_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createdBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByCreatedBy($createdBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createdBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $createdBy)) {
                $createdBy = str_replace('*', '%', $createdBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentaPeer::CREATED_BY, $createdBy, $comparison);
    }

    /**
     * Filter the query on the updated_by column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedBy('fooValue');   // WHERE updated_by = 'fooValue'
     * $query->filterByUpdatedBy('%fooValue%'); // WHERE updated_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $updatedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByUpdatedBy($updatedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($updatedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $updatedBy)) {
                $updatedBy = str_replace('*', '%', $updatedBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentaPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CuentaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CuentaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CuentaPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CuentaPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related CuentaHijo object
     *
     * @param   CuentaHijo|PropelObjectCollection $cuentaHijo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaHijoRelatedByPadreId($cuentaHijo, $comparison = null)
    {
        if ($cuentaHijo instanceof CuentaHijo) {
            return $this
                ->addUsingAlias(CuentaPeer::ID, $cuentaHijo->getPadreId(), $comparison);
        } elseif ($cuentaHijo instanceof PropelObjectCollection) {
            return $this
                ->useCuentaHijoRelatedByPadreIdQuery()
                ->filterByPrimaryKeys($cuentaHijo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentaHijoRelatedByPadreId() only accepts arguments of type CuentaHijo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentaHijoRelatedByPadreId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function joinCuentaHijoRelatedByPadreId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentaHijoRelatedByPadreId');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CuentaHijoRelatedByPadreId');
        }

        return $this;
    }

    /**
     * Use the CuentaHijoRelatedByPadreId relation CuentaHijo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \MiConta\CuentaBundle\Model\CuentaHijoQuery A secondary query class using the current class as primary query
     */
    public function useCuentaHijoRelatedByPadreIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaHijoRelatedByPadreId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentaHijoRelatedByPadreId', '\MiConta\CuentaBundle\Model\CuentaHijoQuery');
    }

    /**
     * Filter the query by a related CuentaHijo object
     *
     * @param   CuentaHijo|PropelObjectCollection $cuentaHijo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaHijoRelatedByHijoId($cuentaHijo, $comparison = null)
    {
        if ($cuentaHijo instanceof CuentaHijo) {
            return $this
                ->addUsingAlias(CuentaPeer::ID, $cuentaHijo->getHijoId(), $comparison);
        } elseif ($cuentaHijo instanceof PropelObjectCollection) {
            return $this
                ->useCuentaHijoRelatedByHijoIdQuery()
                ->filterByPrimaryKeys($cuentaHijo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentaHijoRelatedByHijoId() only accepts arguments of type CuentaHijo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentaHijoRelatedByHijoId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function joinCuentaHijoRelatedByHijoId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentaHijoRelatedByHijoId');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CuentaHijoRelatedByHijoId');
        }

        return $this;
    }

    /**
     * Use the CuentaHijoRelatedByHijoId relation CuentaHijo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \MiConta\CuentaBundle\Model\CuentaHijoQuery A secondary query class using the current class as primary query
     */
    public function useCuentaHijoRelatedByHijoIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaHijoRelatedByHijoId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentaHijoRelatedByHijoId', '\MiConta\CuentaBundle\Model\CuentaHijoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cuenta $cuenta Object to remove from the list of results
     *
     * @return CuentaQuery The current query, for fluid interface
     */
    public function prune($cuenta = null)
    {
        if ($cuenta) {
            $this->addUsingAlias(CuentaPeer::ID, $cuenta->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(CuentaPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(CuentaPeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(CuentaPeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(CuentaPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(CuentaPeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     CuentaQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(CuentaPeer::CREATED_AT);
    }
}
