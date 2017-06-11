<?php declare(strict_types=1);

namespace Domain;

use Domain\Entity\GreatEntity;

/**
 * A great domain service.
 */
class GreatService
{
    /** @var GreatInterface */
    private $repository;

    /**
     * @param GreatInterface $repository
     */
    public function __construct(GreatInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $string
     * @return string
     */
    public function greatMethod(string $string) : string
    {
        $converted = 'great: ' . strtoupper($string);
        $entity = new GreatEntity($converted);
        $this->repository->greatPersist($entity);
        return $entity->getAttribute();
    }
}
