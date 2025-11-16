<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cvnazwasyafiya', 'Cv::index');
$routes->get('/education', 'Cv::education');
$routes->get('/experience', 'Cv::experience');
$routes->get('/skills', 'Cv::skills');
$routes->get('/portofolio', 'Cv::portofolio');