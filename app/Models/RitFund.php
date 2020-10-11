<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RitFund extends Model
{
    //

    public function property(){
        return $this->hasMany('App\Models\FundProperty');
    }

    public function financialIndicator(){
        return $this->hasMany('App\Models\FinancialIndicator');
    }
}
