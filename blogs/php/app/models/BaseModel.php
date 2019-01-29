<?php

namespace Blogs\Models;

use Blogs\DB\Database;

abstract class BaseModel {

    const DATETIME_FORMAT = 'Y-m-d H:i:s';

    protected $dbInstance = null;

    public $created_at;

    public function __construct() {
        $this->dbInstance = Database::getInstance();
    }

    /**
     * Fetch all records in the datatabse  
     * 
     * @return array
     */
    abstract public function getAllRecords();
    
    /**
     * Fetch specific record by ID
     * 
     * @param int $id
     * @return Blogs\Models\BaseModel
     */
    abstract public function getRecordById($id);

    /**
     * OOP way of inserting record to specific table
     * Whitelist are fields that will only be inserted in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    abstract public function create($whiteList = null);

    /**
     * Insert record to specific table
     * $data = associative array mapping field => values to insert in the database
     * $whitelist = fields that will only be inserted in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    abstract public function createRecord($data, $whiteList = null);

    /**
     * OOP way of updating record to specific table
     * Whitelist are fields that will only be updated in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    abstract public function update($whiteList = null);

    /**
     * Update record to specific table
     * $data = associative array mapping field => values to update in the database
     * $whitelist = fields that will only be updated in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    abstract public function updateRecord($data, $whiteList = null);

    /**
     * Delete record by ID
     * 
     * @param int $id
     * @return boolean
     */
    abstract public function deleteById($id);

    /**
     * Process another variation of database insert
     * 
     * @param array $data
     * @param string $tableName
     * @return \PDOStatement
     */
    public function dbCreateVariation($data, $tableName) {
        $query = 'INSERT INTO ' . $tableName . ' ( `' . implode( '`, `', array_keys($data) ) . '`)'
                . ' VALUES (:' . implode( ',: ', array_keys($data) ) . ');';

        $statement = $this->dbInstance->connection->prepare($query);

        foreach ($data as $field => $value) {
            
            $statement->bindValue(":{$field}", $value);

        }

        return $statement;
    }

    /**
     * Process another variation of database update
     * 
     * @param array $data
     * @param string $tableName
     * @param int $idKey
     * @return \PDOStatement
     */
    public function dbUpdateVariation($data, $tableName, $idKey) {
        $id = $data[$idKey];
        unset($data[$idKey]);
        $query = 'UPDATE ' . $tableName
                . ' SET ';   
        
        foreach ($data as $field => $value) {
    
            $query .= " {$field} = :{$value},";

        }

        $query = rtrim($query, ',');
        $query .= " WHERE {$idKey} = :{$idKey};";

        $statement = $this->dbInstance->connection->prepare($query);

        foreach ($data as $field => $value) {
            
            $statement->bindValue(":{$field}", $value);

        }

        $statement->bindValue(":{$idKey}", $id);

        return $statement;
    }

}