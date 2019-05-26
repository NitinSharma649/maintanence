<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function complaint(){
        return $this->belongsTo(Maintenance::class, 'complaint_id');
    }
    public function engineer(){
        return $this->belongsTo(User::class, 'engineer_id');
    }
    public function warranty(){
        return $this->belongsTo(Warranty::class, 'warranty_id');
    }
}
