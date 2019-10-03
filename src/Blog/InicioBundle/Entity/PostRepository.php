<?php


namespace Blog\InicioBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function listaPosts()
    {
        $conn = $this->getEntityManager()->getConnection();
        return $conn->fetchAll('select * from post;');
    }

    public function buscaPost($titulo){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select * from post where id = :titulo';
        $query = $conn->prepare($sql);
        $query->bindValue("titulo",$titulo);
        $query->execute();
        return $query->fetchAll();
    }
}