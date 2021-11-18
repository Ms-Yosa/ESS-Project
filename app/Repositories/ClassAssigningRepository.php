<?php

namespace App\Repositories;

use App\Models\ClassAssigning;
use App\Repositories\BaseRepository;

/**
 * Class ClassAssigningRepository
 * @package App\Repositories
 * @version November 7, 2021, 6:34 pm UTC
*/

class ClassAssigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject_id',
        'level_id',
        'classroom_id',
        'day_id'
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
