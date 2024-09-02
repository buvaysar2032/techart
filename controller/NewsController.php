<?php

class NewsController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index($page = 1) {
        $limit = 4;
        $news = $this->model->getNews($page, $limit);
        $totalNews = $this->model->getTotalNewsCount();
        $latestNews = $this->model->getLatestNews();
        $totalPages = ceil($totalNews / $limit);
        include 'view/newsListView.php';
    }

    public function show($id) {
        $news = $this->model->getNewsById($id);
        include 'view/newsDetailView.php';
    }
}
