<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FundProperty extends Model
{
    //

    public function ritFundName()
    {
        return $this->belongsTo('App\Models\RitFund' , 'fund_id');
    }
}
