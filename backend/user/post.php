<?php
/**
 * Created by PhpStorm.
 * User: Shahab
 * Date: 2/3/2019
 * Time: 11:26 PM
 */
class post
{
    private $id;
    private $admin_id;
    private $created_date;
    private $title;
    private $content;
    private $img_link;
    private $admin;
    /**
     * post constructor.
     */
    public function __construct($type,$id)
    {
        if ($type == 1) {
            $this->id = $id;
            $db = new database();
            $result = $db->get_post_data($id);
            $this->admin_id = $result["admin_id"];
            $this->title = $result["title"];
            $this->created_date = $result["create_date"];
            $this->content = $result["content"];
            $this->img_link = $result["img_link"];
            $this->admin = new admin(2,"","",$this->admin_id);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getImgLink()
    {
        return $this->img_link;
    }

}