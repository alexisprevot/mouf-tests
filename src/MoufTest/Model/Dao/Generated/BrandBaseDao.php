<?php

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the BrandDao class instead!
 */

namespace MoufTest\Model\Dao\Generated;

use Mouf\Database\TDBM\TDBMService;
use Mouf\Database\TDBM\ResultIterator;
use Mouf\Database\TDBM\ArrayIterator;
use MoufTest\Model\Bean\BrandBean;


/**
 * The BrandBaseDao class will maintain the persistence of BrandBean class into the brands table.
 *
 */
class BrandBaseDao
{

    /**
     * @var TDBMService
     */
    protected $tdbmService;

    /**
     * The default sort column.
     *
     * @var string
     */
    private $defaultSort = null;

    /**
     * The default sort direction.
     *
     * @var string
     */
    private $defaultDirection = 'asc';

    /**
     * Sets the TDBM service used by this DAO.
     *
     * @param TDBMService $tdbmService
     */
    public function __construct(TDBMService $tdbmService)
    {
        $this->tdbmService = $tdbmService;
    }

    /**
     * Persist the BrandBean instance.
     *
     * @param BrandBean $obj The bean to save.
     */
    public function save(BrandBean $obj)
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all Brand records.
     *
     * @return BrandBean[]|ResultIterator|ResultArray
     */
    public function findAll()
    {
        if ($this->defaultSort) {
            $orderBy = 'brands.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('brands',  null, [], $orderBy);
    }
    
    /**
     * Get BrandBean specified by its ID (its primary key)
     * If the primary key does not exist, an exception is thrown.
     *
     * @param string|int $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return BrandBean
     * @throws TDBMException
     */
    public function getById(int $id, $lazyLoading = false)
    {
        return $this->tdbmService->findObjectByPk('brands', ['id' => $id], [], $lazyLoading);
    }
    
    /**
     * Deletes the BrandBean passed in parameter.
     *
     * @param BrandBean $obj object to delete
     * @param bool $cascade if true, it will delete all object linked to $obj
     */
    public function delete(BrandBean $obj, $cascade = false)
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }


    /**
     * Get a list of BrandBean specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param array $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return BrandBean[]|ResultIterator|ResultArray
     */
    protected function find($filter = null, array $parameters = [], $orderBy=null, array $additionalTablesFetch = [], $mode = null)
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'brands.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('brands', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode);
    }

    /**
     * Get a list of BrandBean specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "brands JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param int $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return BrandBean[]|ResultIterator|ResultArray
     */
    protected function findFromSql($from, $filter = null, array $parameters = [], $orderBy=null, $mode = null)
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'brands.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('brands', $from, $filter, $parameters, $orderBy, $mode);
    }

    /**
     * Get a single BrandBean specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @return BrandBean
     */
    protected function findOne($filter=null, array $parameters = [])
    {
        return $this->tdbmService->findObject('brands', $filter, $parameters);
    }

    /**
     * Get a single BrandBean specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "brands JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @return BrandBean
     */
    protected function findOneFromSql($from, $filter=null, array $parameters = [])
    {
        return $this->tdbmService->findObjectFromSql('brands', $from, $filter, $parameters);
    }

    /**
     * Sets the default column for default sorting.
     *
     * @param string $defaultSort
     */
    public function setDefaultSort($defaultSort)
    {
        $this->defaultSort = $defaultSort;
    }
}