<?php

namespace Core\Application\Logics\DefaultApp\Entity\Commands;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spatial\Psr7\RequestHandler;

class UpdateEntityHandler extends RequestHandler
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return parent::handle($request); // TODO: Change the autogenerated stub
    }
}