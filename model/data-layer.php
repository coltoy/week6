<?php
/*
 * author: Colton Marty
 * date: 2/8/22
 * filepath: week6/model/data-layer.php
 * description:
 */

function getDesserts() {
    $desserts = array(
        'chocolate'=>'Chocolate Mousse',
        'vanilla'=>'Vanilla Custard',
        'strawberry'=>'Strawberry Shortcake'
    );
    return $desserts;
}

function getColors() {
    return array('red', 'orange', 'yellow', 'green', 'blue', 'purple', 'pink');
}