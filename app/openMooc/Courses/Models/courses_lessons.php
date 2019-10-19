<?php

namespace openMooc\Courses\Models;

use Illuminate\Database\Eloquent\Model;

class courses_lessons extends Model
{
    protected $table      = 'courses_lessons';
    protected $primaryKey = 'lesson_id';
}
