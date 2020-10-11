@extends('layouts.app', ['activePage' => 'RitFund', 'titlePage' => __('عقارات الصناديق')])

@section('content')
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <form method="post" action="{{ route('FinancialIndicator.update' , [$financial->id]) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="put">
                  <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('بيانات المؤشر المالي') }}</h4>
                        <p class="card-category">{{ __('') }}</p>
                     </div>
                     <div class="card-body ">

                        <div class="col-md-3 pull-right">
                            <label>السنة</label>
                            <input placeholder="السنة" value="{{ $financial->year }}" name="year" spellcheck="false" class="form-control"/>
                         </div>
                        <div class="col-md-3 pull-right">
                           <label>سعر الوحده</label>
                           <input placeholder="سعر الوحده" value="{{ $financial->unit_price }}" name="unit_price" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                            <label> صافي قيمه الاصول</label>
                            <input placeholder=" صافي قيمه الاصول" value="{{ $financial->net_asset_value }}" name="net_asset_value" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>إجمالي الدخل التأجيري</label>
                            <input placeholder="إجمالي الدخل التأجيري" value="{{ $financial->total_rental_income }}" name="total_rental_income" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>سعر الوحده</label>
                            <input placeholder="سعر الوحده" value="{{ $financial->total_profits }}" name="total_profits" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>إجمالي األرباح</label>
                            <input placeholder="إجمالي األرباح" value="{{ $financial->unit_price }}"  name="unit_price" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                            <label>الربح الموزع لكل وحدة</label>
                            <input placeholder="الربح الموزع لكل وحدة" value="{{ $financial->profit_distributed_per_unit }}"  name="profit_distributed_per_unit" spellcheck="false" class="form-control"/>
                         </div>


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
