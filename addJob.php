<?php

// require_once 'errors.php';
// require_once 'vendor/autoload.php';
// require_once 'conect_orm.php';

// var_dump($_GET);
// var_dump($_POST);

// $title= $_POST['title'];
// $description = $_POST['description'];

// echo "<h2> ADD JOB </h2>";
// echo "el titulo recibido es: " . $title . "<br/>";
// echo "la descripcion recibido es: " . $description . "<br/>";


use App\Models\Job;



if (!empty($_POST)) {
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
      <link rel="stylesheet"href="style.css">
      <title>Add Job</title>
    </head>
    <body>
      <h1 class="pl-5 pt-5">Add Job</h1>
      <div class="row">
        <div class="col-6 m-5">
          <form action="addJob.php"method="post">
            <div class="form-group">
              <label for="title">Title: </label>
              <input class="form-control"type="text"name="title">
            </div>
            <div class="form-group">
              <label for="description">Description: </label>
              <input class="form-control"type="text"name="description">
            </div>
            <button type="submit"class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </body>
  </html>


