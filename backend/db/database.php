<?php

/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 28/01/2019
 * Time: 03:01 PM
 */
class database
{

    public $con;
    /**
     * database constructor.
     */
    public function __construct()
    {
        $this->con = mysqli_connect("localhost","root","","geektor");
    }

    public function get_query_row_num($query){
        try {
            return $this->con->query($query)->num_rows;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function get_resutl($query){
        $result = $this->con->query($query);
        return $result;
    }
}