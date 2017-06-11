<?php declare(strict_types=1);

namespace Domain;

use Domain\Entity\GreatEntity;

/**
 * A great interface for persistence operations.
 */
interface GreatInterface
{
    /**
     * @param GreatEntity $entity
     */
    public function greatPersist(GreatEntity $entity);
}
