<?php

  namespace Drupal\d8_basic\Routing;
  use Symfony\Component\Routing\Route;

  /**
   *
   */
  class CustomRoutes {

    public function routes() {
      $routes = [];

      // Create mypage route programmatically.
      $routes['d8_basic.mypage'] = new Route(
        // Path definition.
        'mypage',
        [
          '_controller' => '\Drupal\d8_basic\Controller\MyPageController::customPage',
          '_title' => 'My Custom Page 2',
        ],
        // Route requirements.
        [
          '_permission' => 'view d8_basic pages',
        ]
      );


      // Create my-page/{name} route programmatically.
      $routes['d8_basic.paths'] = new Route(
        // Path definition with name argument.
        'my-page/{name}',
        [
          '_controller' => '\Drupal\d8_basic\Controller\MyPageController::paths',
        ],
        // Route requirements.
        [
          '_permission' => 'view d8_basic pages', // Permissions.
          'name' => '[a-zA-Z]+', // Filter for name arguments.
        ]
      );

      return $routes;
    }
  }
