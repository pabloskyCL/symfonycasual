<?php


namespace Blog\InicioBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping;

class PostRepository extends EntityRepository
{

    public function listaPosts()
    {
        $conn = $this->getEntityManager()->getConnection();
        return $conn->fetchAll('select * from post;');
    }

    public function buscaPost($nro_post){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select * from post where id = :titulo';
        $query = $conn->prepare($sql);
        $query->bindValue("titulo",$nro_post);
        $query->execute();
        return $query->fetchAll();
    }

    public function eliminaPost($nro_pos){
        $conn   = $this->getEntityManager()->getConnection();
        $sql ='delete from post where nro_post = :nroPost';
        $query = $conn->prepare($sql);
        $query->bindValue("nroPost",$nro_pos);
        $query->execute();
        if($query->rowCount()<=0) {
            return $mesage = 'post no eliminado';
        }
    }

}