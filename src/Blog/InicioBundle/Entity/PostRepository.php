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
}