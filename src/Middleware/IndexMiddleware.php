<?php
namespace Pebbles\MyLanding\Middleware;

use Bricks\Middleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class IndexMiddleware implements MiddlewareInterface{
  public function __invoke(Request $request, Response $response, MiddlewareInterface $next = null){
    $response->getBody()->write('<h1>Main page</h1>');
    return $response;
  }
}
