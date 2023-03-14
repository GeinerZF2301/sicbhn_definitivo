<?php
    namespace App\Repositories\Interfaces;
    
     interface ArticuloRepositorioInterface{
        public function allArticles();
        public function storeArticle($data);
        public function findArticle($id);
        public function updateArticle($data, $id); 
        public function destroyArticle($id);
    }
