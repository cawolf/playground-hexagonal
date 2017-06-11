<?php declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\Event\GreatEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * main entry point
 */
class DefaultController extends Controller
{
    /**
     * @Route("/makeitgreat/{input}", name="makeitgreat")
     * @param string $input
     * @return JsonResponse
     */
    public function greatAction(string $input) : JsonResponse
    {
        $event = new GreatEvent($input);
        $this->get('event_dispatcher')->dispatch(GreatEvent::class, $event);
        return new JsonResponse(['response' => $event->getResponse()]);
    }
}
