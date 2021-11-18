<?php

namespace App\Repositories;

use App\Models\ClassScheduling;
use App\Repositories\BaseRepository;

/**
 * Class ClassSchedulingRepository
 * @package App\Repositories
 * @version November 7, 2021, 6:35 pm UTC
*/

class ClassSchedulingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject_id',
        'level_id',
        'class_id',
        'day_id',
        'start_time',
        'end_time',
        'status'
    ];
    protected $primaryKey = 'schedule_id';
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
        return ClassScheduling::class;
    }
}
