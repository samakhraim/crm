<?php

namespace App\Models;//where this class belongs 

use Illuminate\Database\Eloquent\Model;//ORM 

class Student extends Model//representation for the students table in the database/
//we make the database tables relationship 
{
    
    protected $fillable = [ //able to be filled //array //mass assignable attributes
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'gender',
        'date_of_birth',
        'age',
        'major',
    ];
    protected $casts=[
        'date_of_birth' => 'date',
        'age' => 'integer',
    ];
    protected $hidden = [//hidden attributes when converting to JSON
        'created_at',
        'updated_at',
    ];
    
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
  

}
