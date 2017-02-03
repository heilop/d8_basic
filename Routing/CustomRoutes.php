<?php

  namespace Drupal\d8_basic\Routing;

  use Drupal\Core\Routing\RouteSubscriberBase;
  use Symfony\Component\Routing\RouteCollection;

  /**
   *
   */
  class RouteSubscriber extends RouteSubscriberBase  {

    /**
     *  {@inheritdoc}
     */
    public function alterRoutes(RouteCollection $collection) {
      // Change path of d8_basic.mypage to use hyphen
      if ($route = $collection->get('d8_basic.mypage')) {
        $route->setPath('/my-new-page');
      }
    }
  }
