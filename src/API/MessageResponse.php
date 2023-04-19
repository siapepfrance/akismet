<?php

/*
 * Akismet
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omines\Akismet\API;

use Omines\Akismet\Akismet;
use Omines\Akismet\AkismetMessage;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class MessageResponse extends Response
{
    public function __construct(Akismet $akismet, ResponseInterface $httpResponse, private readonly AkismetMessage $message)
    {
        parent::__construct($akismet, $httpResponse);
    }

    public function getMessage(): AkismetMessage
    {
        return $this->message;
    }
}
