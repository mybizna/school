<?php

namespace Modules\School\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Grade extends BaseModel
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
    protected $table = "school_grade";


    public function migration(Blueprint $table): void
    {


        $table->string('name');
        $table->string('description');
        $table->string('published');

    }
}
