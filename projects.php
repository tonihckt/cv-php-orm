<?php
use App\Models\Project;

$projects = project::all();

function printProjects($project) {
  $technologies = $project->technologies;
  $techs = [];
  $str = '';
  for($i=0;$i<strlen($technologies);$i++){
    if ($technologies[$i] == '-') {
      array_push($techs, $str);
      $str = '';
    }else{
      $str = $str . $technologies[$i];
    }
  }
  echo '<div class="project">';
  echo '<h5>'.$project->title.'</h5>';
  echo '<div class="row">';
  echo '<div class="col-3">';
  echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
  echo '</div>';
  echo '<div class="col">';
  echo '<p>'.$project->description.'</p>';
  echo '<strong>Technologies used:</strong>';
  for($i=0;$i<count($techs);$i++){
    echo '<span class="badge badge-secondary ml-2">'.strtoupper($techs[$i]).'</span>';
  }
  echo '</div>';
  echo '</div>';
  echo '</div>';
}
?>