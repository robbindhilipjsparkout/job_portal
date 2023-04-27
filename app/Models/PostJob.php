<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class PostJob extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     * 
     */
    protected $table = 'post_job';


    protected $fillable = [
        'employer_id',
        'job_title',
        'company_logo',
        'company_name',
        'company_email',
        'job_description',
        'job_location',
        'job_type',
        'job_category',
        'job_salary',
         
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    
    ];

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password_encryted'] = Hash::make($value);
    // }




}
