<?php
namespace App\Table;

use Core\Table\Table;

class PostTable extends Table{

    protected $table = 'biens';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT biens.id, biens.titre, biens.contenu, biens.date, categories.titre as categorie
            FROM biens
            LEFT JOIN categories ON category_id = categories.id
            ORDER BY biens.date DESC");
    }

    /**
     * Récupère les derniers articles de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT biens.id, biens.titre, biens.contenu, biens.date, categories.titre as categorie
            FROM biens
            LEFT JOIN categories ON category_id = categories.id
            WHERE biens.category_id = ?
            ORDER BY biens.date DESC", [$category_id]);
    }

    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT biens.id, biens.titre, biens.contenu, biens.date, categories.titre as categorie
            FROM biens
            LEFT JOIN categories ON category_id = categories.id
            WHERE biens.id = ?", [$id], true);
    }
}