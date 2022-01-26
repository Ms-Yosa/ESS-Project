<?php

namespace App\Repositories;

use App\Models\Grade;
use App\Repositories\BaseRepository;

/**
 * Class SubjectRepository
 * @package App\Repositories
 * @version November 7, 2021, 6:32 pm UTC
*/

class SubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject_name',
        'subject_code',
        'description',
        'status'
    ];

    protected $primaryKey = 'grade_id';

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
        return Grade::class;
    }
}
