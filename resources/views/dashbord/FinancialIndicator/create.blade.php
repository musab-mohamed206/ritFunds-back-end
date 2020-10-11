@extends('layouts.app', ['activePage' => 'RitFund', 'titlePage' => __('عقارات الصناديق')])

@section('content')
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <form method="post" action="{{ route('FinancialIndicator.store') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('بيانات المؤشر المالي') }}</h4>
                        <p class="card-category">{{ __('') }}</p>
                     </div>
                     <div class="card-body ">

                        <div class="col-md-3 pull-right">
                            <label>السنة</label>
                            <input placeholder="السنة" name="year" spellcheck="false" class="form-control"/>
                         </div>
                        <div class="col-md-3 pull-right">
                           <label>سعر الوحده</label>
                           <input placeholder="سعر الوحده" name="unit_price" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                            <label> صافي قيمه الاصول</label>
                            <input placeholder=" صافي قيمه الاصول" name="net_asset_value" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>إجمالي الدخل التأجيري</label>
                            <input placeholder="إجمالي الدخل التأجيري" name="total_rental_income" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>سعر الوحده</label>
                            <input placeholder="سعر الوحده" name="total_profits" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>إجمالي األرباح</label>
                            <input placeholder="إجمالي األرباح"   name="unit_price" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>الربح الموزع لكل وحدة</label>
                            <input placeholder="الربح الموزع لكل وحدة"   name="profit_distributed_per_unit" spellcheck="false" class="form-control"/>
                         </div>
                         <input type="hidden" name="fund_id" value="{{ $fund_id }}">


                    </div>
                    <div class="col-md-12">
                        <br/>
                        <br/>
                     </div>

                     <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Submit">
                     </div>

                     <div class="col-md-12">
                        <br/>
                        <br/>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
