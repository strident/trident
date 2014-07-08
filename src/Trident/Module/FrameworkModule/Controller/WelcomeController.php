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

/**
 * Welcome Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class WelcomeController
{
    public function indexAction()
    {
        return new Response("Welcome to Trident.");
    }
}
