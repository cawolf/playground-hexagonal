<?php declare(strict_types=1);

namespace Domain\Entity;

/**
 * A great entity in our domain.
 */
class GreatEntity
{
    /** @var int */
    private $id;

    /** @var string */
    private $attribute;

    /**
     * @param string $attribute
     */
    public function __construct(string $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAttribute(): string
    {
        return $this->attribute;
    }
}
