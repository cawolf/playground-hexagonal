<?php declare(strict_types=1);

namespace AppBundle\Listener;

use AppBundle\Event\GreatEvent;
use UseCase\MakeItGreat;

/**
 * Listens for the GreatEvent and applies the appropriate use case.
 */
class MakeItGreatListener
{
    /** @var MakeItGreat */
    private $useCase;

    /**
     * MakeItGreatListener constructor.
     * @param MakeItGreat $useCase
     */
    public function __construct(MakeItGreat $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * @param GreatEvent $event
     */
    public function onAppBundleEventGreatEvent(GreatEvent $event)
    {
        $event->setResponse($this->useCase->apply($event->getPayload()));
    }
}
