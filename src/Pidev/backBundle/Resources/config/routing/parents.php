<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('parents', new Route('/', array(
    '_controller' => 'PidevbackBundle:Parents:index',
)));

$collection->add('parents_show', new Route('/{id}/show', array(
    '_controller' => 'PidevbackBundle:Parents:show',
)));

$collection->add('parents_new', new Route('/new', array(
    '_controller' => 'PidevbackBundle:Parents:new',
)));

$collection->add('parents_create', new Route(
    '/create',
    array('_controller' => 'PidevbackBundle:Parents:create'),
    array('_method' => 'post')
));

$collection->add('parents_edit', new Route('/{id}/edit', array(
    '_controller' => 'PidevbackBundle:Parents:edit',
)));

$collection->add('parents_update', new Route(
    '/{id}/update',
    array('_controller' => 'PidevbackBundle:Parents:update'),
    array('_method' => 'post|put')
));

$collection->add('parents_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'PidevbackBundle:Parents:delete'),
    array('_method' => 'post|delete')
));

return $collection;
