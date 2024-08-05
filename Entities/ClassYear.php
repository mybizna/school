<?php

namespace Modules\School\Entities;

use Modules\Base\Entities\BaseModel;

class ClassYear extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'description', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "school_class_year";

}
