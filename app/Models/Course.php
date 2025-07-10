<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
use HasFactory;

protected                                                $guarded = [];

/** Relationships */

                // Course can have many students
                        public function enrolledStudents(): BelongsToMany
                                {
                        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'student_id');
            }
        }
