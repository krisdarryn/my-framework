<?php

namespace Blogs\Models;

use Blogs\Models\BaseModel;

class BlogImageModel extends BaseModel {

    const TABLE_NAME = 'blog_images';

    public $blog_image_id;

    public $blog_id;

    public $filename;

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
                . ' FROM ' . self::TABLE_NAME
                . ' WHERE blog_id = :blog_id';

        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_id', $blogId);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS, 'Blogs\Models\BlogImageModel');
    }

    /**
     * Fetch all records in the datatabse by blog_id
     * 
     * @param int $blogId
     * @return array
     */
    public function getAllRecordsByBlogId($blogId) {
        $query = 'SELECT * '
                . ' FROM ' . self::TABLE_NAME
                . ' WHERE blog_id = :blog_id';

        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_id', $blogId);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS, 'Blogs\Models\BlogImageModel');
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
                . ' WHERE blog_image_id = :blog_image_id';

        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_image_id', $id);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        }

        $this->blog_image_id = $result['blog_image_id'];
        $this->blog_id = $result['blog_id'];
        $this->filename = $result['filename'];
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
    public function deleteById($id) {
        $query = 'DELETE FROM ' . self::TABLE_NAME
            . ' WHERE blog_image_id = :blog_image_id';
            
        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_image_id', $id);

        return $statement->execute();
    }

}