<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_indicators', function (Blueprint $table) {
            $table->id();
            $table->string('unit_price'); //سعر الوحده
            $table->string('net_asset_value'); // صافي قيمه الاصول
            $table->string('total_rental_income'); // إجمالي الدخل التأجيري
            $table->string('total_profits'); //إجمالي األرباح
            $table->string('profit_distributed_per_unit'); //الربح الموزع لكل وحدة
            $table->string('year'); // السنة
            $table->integer('fund_id'); //اسم الصندوق
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_indicators');
    }
}
