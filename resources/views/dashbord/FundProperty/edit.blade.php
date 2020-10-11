@extends('layouts.app', ['activePage' => 'Property', 'titlePage' => __('عقارات الصناديق')])

@section('content')
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <form method="post" action="{{ route('FundProperty.update' , [$propete->id]) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="put">
                  <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('بيانات العقار') }}</h4>
                        <p class="card-category">{{ __('') }}</p>
                     </div>
                     <div class="card-body ">
                        <div class="col-md-3 pull-right">
                           <label>الصندوق</label>
                           <select data-parsley-="true" class="form-control" name="fund_id">
                              <option value="">المرجو الاختيار</option>
                              @foreach (App\Models\RitFund::all() as $item)
                                 <option value="{{$item->id}}" {{ ( $item->id == $propete->fund_id) ? 'selected' : '' }}>
                                    {{$item->name}}</option>
                              @endforeach
                           </select>
                        </div>

                        <div class="col-md-3 pull-right">
                           <label>الشركة المالية المصدرة للصندوق</label>
                           <input placeholder="الشركة المالية المصدرة للصندوق" value="{{ $propete->financial_company }}"  name="financial_company" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>المدينة</label>
                           <input placeholder="المدينة" value="{{ $propete->city }}"   name="city" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>الحي</label>
                           <input placeholder="الحي" value="{{ $propete->district }}"  name="district" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>اسم العقار</label>
                           <input placeholder="اسم العقار" value="{{ $propete->property_name }}"  name="property_name" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>شركة التقييم</label>
                           <input placeholder="شركة التقييم" value="{{ $propete->evaluation_company }}"  name="evaluation_company" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>نوع العقار</label>
                           <input placeholder="نوع العقار"  value="{{ $propete->property_type }}" name="property_type" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                            <label>ملكية العقار</label>
                            <input placeholder="ملكية العقار" value="{{ $propete->property_ownership }}"  name="property_ownership" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>مساحة الأرض</label>
                           <input placeholder="مساحة الأرض" value="{{ $propete->land_area }} " name="land_area" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>سعر متر الارض</label>
                           <input placeholder="سعر متر الارض" value="{{ $propete->meter_price }}"  name="meter_price" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>مسطحات المباني</label>
                           <input placeholder="مسطحات المباني" value="{{ $propete->building_surfaces }}"  name="building_surfaces" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>قيمة الأرض </label>
                           <input placeholder="قيمة الأرض " value="{{ $propete->land_value }}"  name="land_value" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>قيمة العقار بأسلوب التكلفة </label>
                           <input placeholder="قيمة العقار بأسلوب التكلفة" value="{{ $propete->property_vlaue_by_cost_method }}"  name="property_vlaue_by_cost_method" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>قيمة العقار بأسلوب الدخل </label>
                           <input placeholder="قيمة العقار بأسلوب الدخل " value="{{ $propete->property_value_by_income_method }}"  name="property_value_by_income_method" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>كم عدد سنوات التقيد بملكية العقار</label>
                           <input placeholder="كم عدد سنوات التقيد بملكية العقار" value="{{ $propete->years_of_ownership }}"  name="years_of_ownership" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>نوع المستاجر</label>
                           <input placeholder="نوع المستاجر" value="{{ $propete->tenant_type }} " name="tenant_type" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>قيمة الايجار</label>
                           <input placeholder="قيمة الايجار"  value="{{ $propete->value_rent }}" name="value_rent" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                           <label>عمر العقار</label>
                           <input placeholder="عمر العقار"  value="{{ $propete->property_age }}" name="property_age" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3 pull-right">
                            <label>مدة العقد ومدى الإلتزام به</label>
                            <input placeholder="مدة العقد ومدى الإلتزام به" value="{{ $propete->contract_period }}"  name="contract_period" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                           <label>مراجع التقييم المحاسب</label>
                           <input placeholder="مراجع التقييم المحاسب" value="{{ $propete->accountant_evaluation }}"  name="accountant_evaluation" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                           <label>التقييم القديم</label>
                           <input placeholder="التقييم القديم"  value="{{ $propete->old_evaluation }}" name="old_evaluation" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                           <label>التقيم الجديد</label>
                           <input placeholder="التقيم الجديد" value="{{ $propete->new_evaluation}}"  name="new_evaluation" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                           <label>الفرق بين التقييم القديم والجديد</label>
                           <input placeholder="التقيم الجديد"  value="{{ $propete->deffrence_betwen_old_new_evaluation }} "name="deffrence_betwen_old_new_evaluation" spellcheck="false" class="form-control"/>
                         </div>

                         <div class="col-md-3 pull-right">
                           <label>lat</label>
                           <input placeholder="lat" value="{{ $propete->lat }} " name="lat" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-3 pull-right">
                           <label>lng</label>
                           <input placeholder="lng" value="{{ $propete->lng }}"  name="lat" spellcheck="false" class="form-control"/>
                         </div>
                         <div class="col-md-12 pull-right">
                            <label>صور العقار</label>
                            <input placeholder="" type="file" value="{{ $propete->image }}"   name="file" spellcheck="false" class="form-control"/>
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
