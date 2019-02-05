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
        $this->con->set_charset("utf8");

    }

    public function get_all_posts_ids(){
        return $this->con->query("select id from tbl_post order by id desc")->fetch_array();
    }

    public function get_query_row_num($query){
        try {
            return $this->con->query($query)->num_rows;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_result($query){
        $result = $this->con->query($query);
        return $result;
    }

    public function get_post_data($id){
        $sql = "select * from tbl_post where id = ".$id;
        $result = $this->con->query($sql)->fetch_assoc();
        return $result;
    }

    public function get_admin_data($id){
        return $this->con->query("select * from tbl_admin where id = ".$id)->fetch_assoc();
    }
}