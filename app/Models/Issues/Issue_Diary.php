<?php

namespace App\Models\Issues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue_Diary extends Model {
        use HasFactory;

        protected $primaryKey = 'issue_diary_id';

    protected $fillable = [
        'issue_diary_id',
        'issue_id',
        'client_id',
        'issue_commenter_id',
        'issue_commenter_comment',        
        'issue_status',
        'issue_uploads'
    ];

    public function getIssue() {
        return $this->belongsTo(Issue::class, 'issue_id', 'issue_diary_id');
    }
}
