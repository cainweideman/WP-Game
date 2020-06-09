<?php
/* Header */
$page_title = 'Tic-tac-toe';

include __DIR__ . '/tpl/head.php';

include __DIR__ . '/tpl/body-start.php';
?>
<?php
function p_print($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file = file_get_contents("data/data.json");
$score = json_decode($json_file, true);
$score = array_reverse($score);
$score_board = "";

    $score_board.= '<div class="container">';
    $score_board.= '<div class="row header">';
    $score_board.= '<h1>Tic-Tac-Toe</h1>';
    $score_board.= '<div class="status-bar">';
    $score_board.= '<div class="status col-md-4">';
    $score_board.= '<h3>Name: ' . $score[0]["name"] . '</h3>';
    $score_board.= '<p class="wins">Wins: ' . $score[0]["wins"] . '</p>';
    $score_board.= '<p class="losses">Losses: ' . $score[0]["losses"] . '</p>';
    $score_board.= '<p class="draws">Draws: ' . $score[0]["draws"] . '</p>';
    $score_board.= '</div>';
    $score_board.= '<div class="col-md-4"><h4>It is the turn of (PLAYERNAME)</h4>';
    $score_board.= '</div>';
    $score_board.= '<h3>Name: ' . $score[1]["name"] . '</h3>';
    $score_board.= '<p class="wins">Wins: ' . $score[1]["wins"] . '</p>';
    $score_board.= '<p class="losses">Losses: ' . $score[1]["losses"] . '</p>';
    $score_board.= '<p class="draws">Draws: ' . $score[1]["draws"] . '</p>';
    $score_board.= '</div>';
    $score_board.= '</div>';
    $score_board.= '</div>';

    echo $score_board

?>

<div class="col-md-12">
    <div class="row">

<div class="col-md-12">
    <div class="row">

<h1 id="header">Tic-Tac-Toe</h1>
<div id="content">
    <div id="board">
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div class="clr"></div>
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div class="clr"></div>
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div id="sq" class="square"></div>
        <div class="clr"></div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body-end.php';
?>
