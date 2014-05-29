<?php

/*
 * This file is part of Trident.
 *
 * (c) Elliot Wright <elliot@elliotwright.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Trident\Module\FrameworkModule\Controller;

use Symfony\Component\HttpFoundation\Response;
use Trident\Component\DependencyInjection\ContainerAware;

/**
 * Base Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class Controller extends ContainerAware
{
    public function render($view, array $parameters = null, Response $response = null)
    {
        return $this->container->get('templating')->render($view, $parameters, $response);
    }

    /**
     * Return service with given name
     *
     * @param  string $name
     *
     * @return mixed
     */
    public function get($name)
    {
        return $this->container->get($name);
    }
}
