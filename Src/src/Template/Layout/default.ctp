<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Cocors:Conestoga College Ride Sharing System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('flatly.bootstrap.min.css') ?>
    <?= $this->Html->css('jquery-ui.css') ?> 
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('jquery.timepicker.min.css') ?>
    <?= $this->Html->css('cocors.css') ?>   
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat')?>

    <?= $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') ?> 
    <?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <h1>COCORS<small>Conestoga College Ride Sharing System</small><a href="#"></h1>
    </header>
    <nav class="navbar navbar-default">
        <?= $this->element('navbar'); ?>
    </nav>
    <?= $this->Flash->render() ?>
    <section>
        <?= $this->fetch('content') ?>
    </section>
    <footer>
        <?= $this->element('footer'); ?>
    </footer>
</body>
    <!-- To avoid conflict between script and redering speed, scripts are placed here  (CCH)  -->
    <?= $this->Html->script('facebook') ?>
    <?= $this->Html->script('http://code.jquery.com/ui/1.11.4/jquery-ui.js') ?>
    <?= $this->Html->script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') ?>
    <?= $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.8/jquery.timepicker.min.js') ?>
    <?= $this->Html->script('getinput.js');  ?>
</html>
