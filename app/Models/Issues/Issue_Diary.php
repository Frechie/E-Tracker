<?php

namespace App\Models\Issues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue_Diary extends Model {
    use HasFactory;

    protected $fillable = [
        'issue_id',
        'client_id',
        'issue_commenter_id',
        'issue_commenter_comment',        
        'issue_status',
        'issue_uploads'
    ];

    public function user() {
        return $this->belongsTo(User::class,  'issue_assignee_id');
    }

    public function issue() {
        return $this->belongsTo(Issue::class, 'issue_id');
    }
}
