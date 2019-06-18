<?php
// var_dump($_GET);
// var_dump($_POST);

// $title= $_POST['title'];
// $description = $_POST['description'];

// echo "<h2> ADD JOB </h2>";
// echo "el titulo recibido es: " . $title . "<br/>";
// echo "la descripcion recibido es: " . $description . "<br/>";

// require_once 'vendor/autoload.php';
// require_once 'conect_db.php';

// use App\Models\Job;

// // creamos una instacia de job
// if (!empty($_POST)) {
//     $job = new Job();
//     $job->title = $_POST['title'];
//     $job->description = $_POST['description'];
//     $job->save();
// }

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cv-php',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if (!empty($_POST)) {
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

?>
<html>
    <head>
        <title>Add Job</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add Job</h1>
        <form action="addJob.php" method="_POST" >
            <label for="">Title:</label>
            <input type="text" name="title" ><br>
            <label for="">Description:</label>
            <input type="text" name="description"><br>
            <button type="submit">Save</button>
        </form>
    </body>
</html>