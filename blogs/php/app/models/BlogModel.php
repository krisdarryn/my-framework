<?php 

namespace Blogs\Models;

use Blogs\Models\BaseModel;

class BlogModel extends BaseModel {

    const TABLE_NAME = 'blogs';
    
    public $blog_id;

    public $title;

    public $subtitle;

    public $summary;

    public $cover_image_filename;

    public $posted_date;

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

        return $statement->fetchAll(\PDO::FETCH_CLASS, 'Blogs\Models\BlogModel');
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
                . ' WHERE blog_id = :blog_id';

        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_id', $id);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        }

        $this->blog_id = $result['blog_id'];
        $this->title = $result['title'];
        $this->subtitle = $result['subtitle'];
        $this->summary = $result['summary'];
        $this->cover_image_filename = $result['cover_image_filename'];
        $this->posted_date = $result['posted_date'];
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

            $query = 'INSERT INTO ' . self::TABLE_NAME . ' (`title`, `subtitle`, `summary`, `cover_image_filename`, `posted_date`, `created_at`)'
                    . ' VALUES (:title, :subtitle, :summary, :cover_image_filename, :posted_date, :created_at);';
            
            $statement = $this->dbInstance->connection->prepare($query);
            
            $statement->bindValue(':title', $this->title);
            $statement->bindValue(':subtitle', $this->subtitle);
            $statement->bindValue(':summary', $this->summary);
            $statement->bindValue(':cover_image_filename', $this->cover_image_filename);
            $statement->bindValue(':posted_date', $this->posted_date);
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
                    . ' SET `title` = :title, 
                        `subtitle` = :subtitle,
                         `summary` = :summary, 
                         `cover_image_filename` = :cover_image_filename, 
                         `posted_date` = :posted_date, 
                         `created_at` = :created_at'
                    . ' WHERE blog_id = :blog_id;';
            
            $statement = $this->dbInstance->connection->prepare($query);
            
            $statement->bindValue(':title', $this->title);
            $statement->bindValue(':subtitle', $this->subtitle);
            $statement->bindValue(':summary', $this->summary);
            $statement->bindValue(':cover_image_filename', $this->cover_image_filename);
            $statement->bindValue(':posted_date', $this->posted_date);
            $statement->bindValue(':created_at', $this->created_at);
            $statement->bindValue(':blog_id', $this->blog_id);

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
            . ' WHERE blog_id = :blog_id';
            
        $statement = $this->dbInstance->connection->prepare($query);
        $statement->bindValue(':blog_id', $id);

        return $statement->execute();
    }

}