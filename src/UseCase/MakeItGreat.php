<?php declare(strict_types=1);

namespace UseCase;

use Domain\GreatService;

/**
 * Making it great with this use case.
 */
class MakeItGreat
{
    /** @var GreatService */
    private $service;

    /**
     * MakeItGreat constructor.
     * @param GreatService $service
     */
    public function __construct(GreatService $service)
    {
        $this->service = $service;
    }

    /**
     * @param string $string
     * @return string
     */
    public function apply(string $string) : string
    {
        // some more domain services and objects usages

        return $this->service->greatMethod($string);
    }
}
