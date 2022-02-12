<?php

namespace App\Repositories;

use App\Models\Classes;
use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * Class ClassesRepository
 * @package App\Repositories
 * @version November 17, 2021, 3:44 pm UTC
*/

class ClassesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code',
        'level',
        'subject_id',
        'faculty_id',
        'day_id',
        'start_time',
        'end_time',
    ];
    protected $primaryKey = 'class_id';
    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classes::class;
    }
}
