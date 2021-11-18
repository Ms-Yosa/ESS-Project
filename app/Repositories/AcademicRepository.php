<?php

namespace App\Repositories;

use App\Models\Academic;
use App\Repositories\BaseRepository;

/**
 * Class AcademicRepository
 * @package App\Repositories
 * @version November 7, 2021, 6:33 pm UTC
*/

class AcademicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
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
        return Academic::class;
    }
}
