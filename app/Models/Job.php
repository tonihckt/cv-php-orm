<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    // public function __construct($title, $description) {
    //     $newTitle = 'Job: ' . $title;
    //     $this->title = $newTitle;
    // }
    // defin¡e la tabàl quw queremos usar
    protected $table = 'jobs';

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }
}