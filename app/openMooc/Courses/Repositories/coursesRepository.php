<?php
/**
 * Created by PhpStorm.
 * User: Syam
 * Date: 10/19/2019
 * Time: 09:29 م
 */

namespace openMooc\Courses\Repositories;


use openMooc\Courses\Models\courses;
use OpenMooc\Repository;

class coursesRepository extends Repository{
    public function createCourse(){
        $course = new courses();
    }
} 