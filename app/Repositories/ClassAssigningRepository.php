<?php

namespace App\Repositories;

use App\Models\ClassAssigning;
use App\Repositories\BaseRepository;

/**
 * Class ClassAssigningRepository
 * @package App\Repositories
 * @version November 26, 2021, 10:54 pm UTC
*/

class ClassAssigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'class_schedule_id'
    ];

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
        return ClassAssigning::class;
    }
}
