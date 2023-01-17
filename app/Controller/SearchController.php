<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;
class SearchController extends AppController{

    protected  $template = 'search';
    public function __construct(){
        parent::__construct();
        $this->loadModel('Search');
        $this->loadModel('Category');

    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        $this->render('search.index', compact('posts', 'categories'));
    }
public function test(){
    $this->render('posts.test', compact('posts', 'categories'));
}
    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('search.category', compact('articles', 'categories', 'categorie'));
    }

    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('search.show', compact('article'));
    }

}