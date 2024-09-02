<?php

class NewsModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNews($page = 1, $limit = 4) {
        $offset = ($page - 1) * $limit;
        $stmt = $this->pdo->prepare('
            SELECT id, date, title, announce, image 
            FROM news 
            ORDER BY date DESC 
            LIMIT :limit OFFSET :offset
        ');
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalNewsCount() {
        $stmt = $this->pdo->query('SELECT COUNT(*) FROM news');
        return $stmt->fetchColumn();
    }

    public function getLatestNews() {
        $stmt = $this->pdo->query('
            SELECT id, date, title, image 
            FROM news 
            ORDER BY date DESC 
            LIMIT 1
        ');
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id) {
        $stmt = $this->pdo->prepare('
            SELECT id, date, title, content, image 
            FROM news 
            WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
