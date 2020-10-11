<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialIndicator extends Model
{
    //
    public function ritFund()
    {
        return $this->belongsTo('App\Models\RitFund');
    }
}
