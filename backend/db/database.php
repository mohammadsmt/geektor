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

    public function get_all_posts_ids($page){
        $row_count = $this->get_query_row_num("select id from tbl_post");
        $offset = null;
        $limit = 10;
        if($row_count<=$limit){
            $offset = 0;
        }else{
            $offset = ($page - 1) * $limit;
        }
        $result = $this->con->query("select id from tbl_post order by id desc LIMIT $limit OFFSET $offset");
        $myarray = array();
        while($row = $result->fetch_assoc()){
            $myarray[] = $row["id"];
        }
        return $myarray;
    }

    public function get_all_most_visited_ids(){
        $result = $this->con->query("select id from tbl_post order by views desc LIMIT 5");
        $myarray = array();
        while($row = $result->fetch_assoc()){
            $myarray[] = $row["id"];
        }
        return $myarray;
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

    public function get_paginator_links($page, $active_class)
    {
        $paginator_result = null;
        $pageLimit = 10;
        $num_rows = $this->get_query_row_num("select id from tbl_post");
        if($num_rows - $pageLimit > 0) {
            $pages = ceil($num_rows / $pageLimit);
            $last_page = $pages;
            $midle_pages = $page + 2;
            $first_page = $midle_pages - 2;
            if($page > 1){
                $paginator_result .= '<a href="?page=1">&laquo;</a>';
            }
            for ($i = $first_page - 2; $i <= $midle_pages; $i++){
                if ($i > 0 && $i <= $last_page){
                    if ($i == $page){
                        $paginator_result .= '<a href="?page='.$i.'" class="'.$active_class.'">'.$i.'</a>';
                    }else{
                        $paginator_result .= '<a href="?page='.$i.'">'.$i.'</a>';
                    }
                }
            }
            if($page <= $last_page - 1){
                $paginator_result .= '<a href="?page='.$last_page.'">&raquo;</a>';
            }
        }
        return $paginator_result;
    }
}