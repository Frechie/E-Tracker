<?php

namespace App\Models\SupportClient;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    use HasFactory;

    protected $primaryKey = 'client_id';

    protected $fillable = [
        'client_name',
        'client_description',
        'support_type_id'
    ];

    public function getClientSupportStaff(){
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

}
