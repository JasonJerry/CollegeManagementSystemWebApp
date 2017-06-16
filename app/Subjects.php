<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    const CREATED_AT = 'subjectCreatedAt';
    const UPDATED_AT = 'subjectUpdatedAt';
    protected $primaryKey = "subjectId";
}
