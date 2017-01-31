<?php
namespace Pebbles\MyLanding;

use Bricks\Http\RoutingPsr\Rule\PathLiteralRule;

return [
  'services' => [
    'invokables' => [
      Middleware\IndexMiddleware::class => Middleware\IndexMiddleware::class,
    ],
  ],
  'routing' => [
    new PathLiteralRule('/', [
      'middleware' => [
        Middleware\IndexMiddleware::class,
      ],
    ]),
  ],
];
