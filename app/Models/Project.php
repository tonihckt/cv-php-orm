<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $table = 'projects';

    public function getDurationAsString()
    {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;


        if ($years > 0and $extraMonths > 0)
        {
          return"$years years $extraMonths Months";
        }elseif ($years > 0 && $extraMonths == 0) 
        {
          return"$years years";
        }else
        {
          return"$months Months";
        }
      }
}