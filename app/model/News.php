<?php

namespace app\model;


class News
{
    private $db;

    public function __construct()
    {
        $this->db = dbConnect();

    }

    public function getNewsById($id) {
        $sql = "SELECT * FROM news WHERE id=$id";
        $result = $this->db->query($sql);

        return $result->fetch_assoc();
    }

    public function getAllNews($page) {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 4 OFFSET " . ($page - 1) * 4;
        $result = $this->db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getLastNews() {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 1";
        $result = $this->db->query($sql);

        return $result->fetch_assoc();
    }

    public function getCountNews() {
        $sql = "SELECT COUNT(*) FROM news";
        $result = $this->db->query($sql);
        $count = ceil(($result->fetch_column()) / 4);

        return $count;
    }
}