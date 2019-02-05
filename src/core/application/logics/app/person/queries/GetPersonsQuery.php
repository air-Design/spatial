<?php
namespace Core\Application\Logics\App\Queries;

use Cqured\MediatR\IRequest;
use Cqured\MediatR\IRequestHandler;
use Cqured\MediatR\Response;

class GetPersonsQueryHandler implements IRequestHandler
{
    /**
     * Handles Server Response
     *
     * @param OneWay $request
     * @return Response
     */
    public function handle(IRequest $request)
    {
        // Return response
        return $request->getPersons();
    }
}
