<?php declare(strict_types=1);

namespace Infrastructure;

use Doctrine\ORM\EntityRepository;
use Domain\Entity\GreatEntity;
use Domain\GreatInterface;

/**
 * Repository for great entities.
 */
class GreatRepository extends EntityRepository implements GreatInterface
{
    /**
     * @param GreatEntity $entity
     */
    public function greatPersist(GreatEntity $entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush($entity);
    }
}
