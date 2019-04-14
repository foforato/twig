<?php

require_once __DIR__ . '/../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader, ['cache' => false]);
$products = ['product1',
    'product2',
    'product3',
    'product4',
    'product5'];

echo $twig->render('index.html.twig', array('products' => $products));