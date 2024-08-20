<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'autoload.php';

use RockPaperScissor\Game;

$rounds = 100;
$game = new Game($rounds);

$game->gameOn();
$results = $game->showResults();

echo $results;
?>
