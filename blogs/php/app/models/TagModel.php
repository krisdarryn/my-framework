<?php

namespace Blogs\Models;

use Blogs\Models\BaseModel;

class TagModel extends BaseModel {
    
    const TABLE_NAME = 'tags';

    public $tag_id;

    public $name;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Fetch all records in the datatabse  
     * 
     * @return array
     */
    public function getAllRecords() {
        $query = 'SELECT * '
                . ' FROM ' . self::TABLE_NAME;

        $statement = $this->dbInstance->connection->query($query);

        return $statement->fetchAll(\PDO::FETCH_CLASS, 'Blogs\Models\TagModel');
    }

    /**
     * Fetch specific record by ID
     * 
     * @param int $id
     * @return boolean
     */
    public  function getRecordById($id) {
        $query = ' SELECT * '
                . ' FROM ' . self::TABLE_NAME
                . ' WHERE tag_id = :tag_id';

        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':tag_id', $id);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        }

        $this->tag_id = $result['tag_id'];
        $this->name = $result['name'];
        $this->created_at = $result['created_at'];

        return true;
    }

    /**
     * OOP way of inserting record to specific table
     * Whitelist are fields that will only be inserted in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    public function create($whiteList = null) {

        if ( !empty($whiteList) ) {
            
            $statement = $this->dbCreateVariation($whiteList, self::TABLE_NAME);            

        } else {

            $query = 'INSERT INTO ' . self::TABLE_NAME . ' (`name`, `created_at`)'
                    . ' VALUES (:name, :created_at);';
            
            $statement = $this->dbInstance->connection->prepare($query);
            
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':created_at', $this->created_at);
   
        }

        return $statement->execute();
    }

    /**
     * Insert record to specific table
     * $data = associative array mapping field => values to insert in the database
     * $whitelist = fields that will only be inserted in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    public function createRecord($data, $whiteList = null) {
        $statement = $this->dbCreateVariation( ( !empty($whiteList) ? $whiteList : $data ), self::TABLE_NAME );            

        return $statement->execute();
    }

    /**
     * OOP way of updating record to specific table
     * Whitelist are fields that will only be updated in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    public function update($whiteList = null) {

        if ( !empty($whiteList) ) {

            $statement = $this->dbUpdateVariation($whiteList, self::TABLE_NAME, 'blog_id');            

        } else {

            $query = 'UPDATE ' . self::TABLE_NAME 
                    . ' SET `name` = :name, 
                         `created_at` = :created_at'
                    . ' WHERE tag_id = :tag_id;';
            
            $statement = $this->dbInstance->connection->prepare($query);
            
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':created_at', $this->created_at);
            $statement->bindValue(':tag_id', $this->tag_id);

        }

        return $statement->execute();
    }

    /**
     * Update record to specific table
     * $data = associative array mapping field => values to update in the database
     * $whitelist = fields that will only be updated in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    public function updateRecord($data, $whiteList = null) {
        $statement = $this->dbUpdateVariation( ( !empty($whiteList) ? $whiteList : $data ), self::TABLE_NAME, 'blog_id' );            

        return $statement->execute();
    }

    /**
     * Delete record by ID
     * 
     * @param int $id
     * @return boolean
     */
    public function deleteById($id) {
        $query = 'DELETE FROM ' . self::TABLE_NAME
            . ' WHERE tag_id = :tag_id';
            
        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':tag_id', $id);

        return $statement->execute();
    }

}