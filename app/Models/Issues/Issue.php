<?php

namespace App\Models\Issues;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model {
    use HasFactory;

    protected $fillable = [
        'issue_subject',
        'issue_description',
        'issue_raised_by_uid',
        'issue_category',
        'issue_sub_category',
        'issue_status',
        'issue_uploads',
        'severity'
    ];

    public function getUser(){
       return $this->belongsTo(User::class, 'issue_raised_by_uid', 'id');
    }

    public function getIssueDiary(){
       return $this->hasMany(Issue_Diary::class, 'issue_id', 'id');
    }
}
