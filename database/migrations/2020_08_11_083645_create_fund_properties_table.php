<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_properties', function (Blueprint $table) {
            $table->id();
            $table->string('financial_company'); //الشركة المالية المصدرة للصندوق
            $table->string('city'); //المدينة
            $table->string('district'); //الحي
            $table->string('property_name'); //اسم العقار
            $table->string('evaluation_company'); //شركة التقييم
            $table->string('property_type'); //نوع العقار
            $table->string('property_ownership'); //ملكية العقار
            $table->string('land_area'); //مساحة الأرض
            $table->string('meter_price'); //سعر متر  الارض
            $table->string('building_surfaces'); //مسطحات المباني
            $table->string('land_value'); //قيمة الأرض بالريال
            $table->string('property_vlaue_by_cost_method'); //قيمة العقار بأسلوب التكلفة
            $table->string('property_value_by_income_method'); //قيمة العقار بأسلوب الدخل بالريال
            $table->string('years_of_ownership'); //كم عدد سنوات التقيد بملكية العقار
            $table->string('tenant_type'); //نوع المستاجر
            $table->string('value_rent'); //قيمة الايجار
            $table->string('property_age'); //عمر العقار
            $table->string('contract_period'); //مدة العقد ومدى الإلتزام به
            $table->string('accountant_evaluation'); //مراجع التقييم المحاسب
            $table->string('old_evaluation'); //التقييم القديم
            $table->string('new_evaluation'); //التقيم الجديد
            $table->string('deffrence_betwen_old_new_evaluation'); //الفرق بين التقييم القديم والجديد
            $table->decimal('lat', 10,6);
            $table->decimal('lng', 10,6);
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
        Schema::dropIfExists('fund_properties');
    }
}
