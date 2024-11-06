<?php

use app\model\News;

require_once __DIR__ . '/../model/News.php';


class NewsController
{
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new News();
    }

    public function news($page){
        $news = $this->newsModel->getAllNews($page);
        $lastNews = $this->newsModel->getLastNews();
        $count = $this->newsModel->getCountNews();
        $sample = 'NewsPage.php';
        require __DIR__ . '/../views/layout.php';
    }

    public function showNews($id){
        $news = $this->newsModel->getNewsById($id);
        $sample = 'detailedNews.php';
        require __DIR__ . '/../views/layout.php';
    }
}