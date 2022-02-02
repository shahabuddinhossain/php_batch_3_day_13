<?php

require_once '../vendor/autoload.php';
use App\classes\Series;

$series= new Series($_POST);
$result = $series->makeSeries();

if ( isset($_POST['submit']) )
{
    include ('index.php');

} else
{
    header('Location: index.php');
}



