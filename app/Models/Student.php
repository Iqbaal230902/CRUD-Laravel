<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'fullname',
        'nickname',
        'gender',
        'dob',
        'pob',
        'address',
        'religion',
        'citizen',
        'child_order',
        'sibling_blood',
        'sibling_step',
        'sibling_adoption',
        'status_child',
        'language',
        'blood_type',
        'height',
        'weight',
        'disease',
        'imunization',
        'ideal_job',
        'father_name',
        'mother_name',
        'father_religion',
        'mother_religion',
        'father_citizen',
        'mother_citizen',
        'father_last_education',
        'mother_last_education',
        'father_job',
        'mother_job',
        'father_phone',
        'mother_phone',
        'father_address',
        'mother_address',
        'father_job_address',
        'mother_job_address',
        'guardian_name',
        'guardian_relation',
        'guardian_last_education',
        'guardian_phone',
        'guardian_job',
        'guardian_address',
        'status',
        'accepted_at',
        'from_school',
        'left_school',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'dob' => 'date',
        'accepted_at' => 'timestamp',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
