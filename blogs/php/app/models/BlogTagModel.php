<?php

namespace Blogs\Models;

use Blogs\Models\BaseModel;

class BlogTagModel extends BaseModel {

    const TABLE_NAME = 'blog_tags';

    public $blog_id;

    public $tag_id;

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Fetch all records in the datatabse  
     * 
     * @return array
     */
    public function getAllRecords() {}

    /**
     * Fetch specific record by ID
     * 
     * @param int $id
     * @return boolean
     */
    public  function getRecordById($id) {}

    /**
     * OOP way of inserting record to specific table
     * Whitelist are fields that will only be inserted in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    public function create($whiteList = null) {}

    /**
     * Insert record to specific table
     * $data = associative array mapping field => values to insert in the database
     * $whitelist = fields that will only be inserted in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    public function createRecord($data, $whiteList = null) {}

    /**
     * OOP way of updating record to specific table
     * Whitelist are fields that will only be updated in the database
     * 
     * @param null|array $whiteList
     * @return boolean
     */
    public function update($whiteList = null) {}

    /**
     * Update record to specific table
     * $data = associative array mapping field => values to update in the database
     * $whitelist = fields that will only be updated in the database
     * 
     * @param array $data
     * @param null|array $whiteList
     * @return boolean
     */
    public function updateRecord($data, $whiteList = null) {}

    /**
     * Delete record by ID
     * 
     * @param int $id
     * @return boolean
     */
    public function deleteById($id) {}
}