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
use MiConta\CuentaBundle\Model\CuentaHijoPeer;
use MiConta\CuentaBundle\Model\CuentaHijoQuery;

/**
 * @method CuentaHijoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CuentaHijoQuery orderByPadreId($order = Criteria::ASC) Order by the padre_id column
 * @method CuentaHijoQuery orderByHijoId($order = Criteria::ASC) Order by the hijo_id column
 * @method CuentaHijoQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method CuentaHijoQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 * @method CuentaHijoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CuentaHijoQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method CuentaHijoQuery groupById() Group by the id column
 * @method CuentaHijoQuery groupByPadreId() Group by the padre_id column
 * @method CuentaHijoQuery groupByHijoId() Group by the hijo_id column
 * @method CuentaHijoQuery groupByCreatedBy() Group by the created_by column
 * @method CuentaHijoQuery groupByUpdatedBy() Group by the updated_by column
 * @method CuentaHijoQuery groupByCreatedAt() Group by the created_at column
 * @method CuentaHijoQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method CuentaHijoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentaHijoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentaHijoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentaHijoQuery leftJoinCuentaRelatedByPadreId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentaRelatedByPadreId relation
 * @method CuentaHijoQuery rightJoinCuentaRelatedByPadreId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentaRelatedByPadreId relation
 * @method CuentaHijoQuery innerJoinCuentaRelatedByPadreId($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentaRelatedByPadreId relation
 *
 * @method CuentaHijoQuery leftJoinCuentaRelatedByHijoId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentaRelatedByHijoId relation
 * @method CuentaHijoQuery rightJoinCuentaRelatedByHijoId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentaRelatedByHijoId relation
 * @method CuentaHijoQuery innerJoinCuentaRelatedByHijoId($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentaRelatedByHijoId relation
 *
 * @method CuentaHijo findOne(PropelPDO $con = null) Return the first CuentaHijo matching the query
 * @method CuentaHijo findOneOrCreate(PropelPDO $con = null) Return the first CuentaHijo matching the query, or a new CuentaHijo object populated from the query conditions when no match is found
 *
 * @method CuentaHijo findOneByPadreId(int $padre_id) Return the first CuentaHijo filtered by the padre_id column
 * @method CuentaHijo findOneByHijoId(int $hijo_id) Return the first CuentaHijo filtered by the hijo_id column
 * @method CuentaHijo findOneByCreatedBy(string $created_by) Return the first CuentaHijo filtered by the created_by column
 * @method CuentaHijo findOneByUpdatedBy(string $updated_by) Return the first CuentaHijo filtered by the updated_by column
 * @method CuentaHijo findOneByCreatedAt(string $created_at) Return the first CuentaHijo filtered by the created_at column
 * @method CuentaHijo findOneByUpdatedAt(string $updated_at) Return the first CuentaHijo filtered by the updated_at column
 *
 * @method array findById(int $id) Return CuentaHijo objects filtered by the id column
 * @method array findByPadreId(int $padre_id) Return CuentaHijo objects filtered by the padre_id column
 * @method array findByHijoId(int $hijo_id) Return CuentaHijo objects filtered by the hijo_id column
 * @method array findByCreatedBy(string $created_by) Return CuentaHijo objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return CuentaHijo objects filtered by the updated_by column
 * @method array findByCreatedAt(string $created_at) Return CuentaHijo objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return CuentaHijo objects filtered by the updated_at column
 */
abstract class BaseCuentaHijoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentaHijoQuery object.
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
            $modelName = 'MiConta\\CuentaBundle\\Model\\CuentaHijo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentaHijoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentaHijoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentaHijoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentaHijoQuery) {
            return $criteria;
        }
        $query = new CuentaHijoQuery(null, null, $modelAlias);

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
     * @return   CuentaHijo|CuentaHijo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentaHijoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentaHijoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CuentaHijo A model object, or null if the key is not found
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
     * @return                 CuentaHijo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `padre_id`, `hijo_id`, `created_by`, `updated_by`, `created_at`, `updated_at` FROM `cuenta_hijo` WHERE `id` = :p0';
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
            $obj = new CuentaHijo();
            $obj->hydrate($row);
            CuentaHijoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CuentaHijo|CuentaHijo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CuentaHijo[]|mixed the list of results, formatted by the current formatter
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
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentaHijoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentaHijoPeer::ID, $keys, Criteria::IN);
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
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CuentaHijoPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CuentaHijoPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaHijoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the padre_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPadreId(1234); // WHERE padre_id = 1234
     * $query->filterByPadreId(array(12, 34)); // WHERE padre_id IN (12, 34)
     * $query->filterByPadreId(array('min' => 12)); // WHERE padre_id >= 12
     * $query->filterByPadreId(array('max' => 12)); // WHERE padre_id <= 12
     * </code>
     *
     * @see       filterByCuentaRelatedByPadreId()
     *
     * @param     mixed $padreId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByPadreId($padreId = null, $comparison = null)
    {
        if (is_array($padreId)) {
            $useMinMax = false;
            if (isset($padreId['min'])) {
                $this->addUsingAlias(CuentaHijoPeer::PADRE_ID, $padreId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($padreId['max'])) {
                $this->addUsingAlias(CuentaHijoPeer::PADRE_ID, $padreId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaHijoPeer::PADRE_ID, $padreId, $comparison);
    }

    /**
     * Filter the query on the hijo_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHijoId(1234); // WHERE hijo_id = 1234
     * $query->filterByHijoId(array(12, 34)); // WHERE hijo_id IN (12, 34)
     * $query->filterByHijoId(array('min' => 12)); // WHERE hijo_id >= 12
     * $query->filterByHijoId(array('max' => 12)); // WHERE hijo_id <= 12
     * </code>
     *
     * @see       filterByCuentaRelatedByHijoId()
     *
     * @param     mixed $hijoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByHijoId($hijoId = null, $comparison = null)
    {
        if (is_array($hijoId)) {
            $useMinMax = false;
            if (isset($hijoId['min'])) {
                $this->addUsingAlias(CuentaHijoPeer::HIJO_ID, $hijoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hijoId['max'])) {
                $this->addUsingAlias(CuentaHijoPeer::HIJO_ID, $hijoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaHijoPeer::HIJO_ID, $hijoId, $comparison);
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
     * @return CuentaHijoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CuentaHijoPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return CuentaHijoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CuentaHijoPeer::UPDATED_BY, $updatedBy, $comparison);
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
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CuentaHijoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CuentaHijoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaHijoPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CuentaHijoPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CuentaHijoPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaHijoPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related Cuenta object
     *
     * @param   Cuenta|PropelObjectCollection $cuenta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaHijoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaRelatedByPadreId($cuenta, $comparison = null)
    {
        if ($cuenta instanceof Cuenta) {
            return $this
                ->addUsingAlias(CuentaHijoPeer::PADRE_ID, $cuenta->getId(), $comparison);
        } elseif ($cuenta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentaHijoPeer::PADRE_ID, $cuenta->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCuentaRelatedByPadreId() only accepts arguments of type Cuenta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentaRelatedByPadreId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function joinCuentaRelatedByPadreId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentaRelatedByPadreId');

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
            $this->addJoinObject($join, 'CuentaRelatedByPadreId');
        }

        return $this;
    }

    /**
     * Use the CuentaRelatedByPadreId relation Cuenta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \MiConta\CuentaBundle\Model\CuentaQuery A secondary query class using the current class as primary query
     */
    public function useCuentaRelatedByPadreIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaRelatedByPadreId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentaRelatedByPadreId', '\MiConta\CuentaBundle\Model\CuentaQuery');
    }

    /**
     * Filter the query by a related Cuenta object
     *
     * @param   Cuenta|PropelObjectCollection $cuenta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaHijoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaRelatedByHijoId($cuenta, $comparison = null)
    {
        if ($cuenta instanceof Cuenta) {
            return $this
                ->addUsingAlias(CuentaHijoPeer::HIJO_ID, $cuenta->getId(), $comparison);
        } elseif ($cuenta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentaHijoPeer::HIJO_ID, $cuenta->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCuentaRelatedByHijoId() only accepts arguments of type Cuenta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentaRelatedByHijoId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function joinCuentaRelatedByHijoId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentaRelatedByHijoId');

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
            $this->addJoinObject($join, 'CuentaRelatedByHijoId');
        }

        return $this;
    }

    /**
     * Use the CuentaRelatedByHijoId relation Cuenta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \MiConta\CuentaBundle\Model\CuentaQuery A secondary query class using the current class as primary query
     */
    public function useCuentaRelatedByHijoIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaRelatedByHijoId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentaRelatedByHijoId', '\MiConta\CuentaBundle\Model\CuentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CuentaHijo $cuentaHijo Object to remove from the list of results
     *
     * @return CuentaHijoQuery The current query, for fluid interface
     */
    public function prune($cuentaHijo = null)
    {
        if ($cuentaHijo) {
            $this->addUsingAlias(CuentaHijoPeer::ID, $cuentaHijo->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(CuentaHijoPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(CuentaHijoPeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(CuentaHijoPeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(CuentaHijoPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(CuentaHijoPeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     CuentaHijoQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(CuentaHijoPeer::CREATED_AT);
    }
}
