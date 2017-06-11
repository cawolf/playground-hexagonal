<?php declare(strict_types=1);

namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * A great event to be dispatched by controllers.
 */
class GreatEvent extends Event
{
    /** @var string */
    private $payload;

    /** @var string */
    private $response;

    /**
     * GreatEvent constructor.
     * @param $payload
     */
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    /**
     * @return string
     */
    public function getPayload() : string
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getResponse() : string
    {
        return $this->response;
    }

    /**
     * @param string $response
     */
    public function setResponse(string $response)
    {
        $this->response = $response;
    }
}
