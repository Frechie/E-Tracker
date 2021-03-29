<?php

namespace App\Models;

use App\Models\Categories\Category;
use App\Models\Issues\Issue;
use App\Models\Issues\Issue_Diary;
use App\Models\Roles\Role;
use App\Models\SupportClient\Client;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCategory(){
       return  $this->hasMany(Category::class, 'cat_created_by_uid', 'id');
    }

    public function issues(){
        return $this->hasMany(Issue::class, 'issue_raised_by_uid');
    }

    public function issuesDiary(){
        return $this->hasMany(Issue_Diary::class, 'issue_assignee_id');
    }

    public function role(){
        return $this->hasMany(Role::class, 'role_id');
    }

    public function getClientName(){     
            return $this->hasMany(Client::class, 'client_id', 'id');
    }
}
