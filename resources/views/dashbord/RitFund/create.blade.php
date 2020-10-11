@extends('layouts.app', ['activePage' => 'RitFund', 'titlePage' => __('عقارات الصناديق')])

@section('content')
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <form method="post" action="{{ route('RitFund.store') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('بيانات الصندوق') }}</h4>
                        <p class="card-category">{{ __('') }}</p>
                     </div>
                     <div class="card-body ">

                        <div class="col-md-3">
                           <label>اسم الصندوق</label>
                        </div>
                        <div class="col-md-12 ">
                           <input placeholder="اسم الصندوق"   name="name" spellcheck="false" class="form-control"/>
                        </div>
                        <div class="col-md-3">

                         </div>

                        <div class="col-md-3">
                           <label class="control-label">نظره عامة</label>
                        </div>
                        <div class="col-md-12">
                           <textarea name="overview" class="form-control" placeholder="نظره عامة"  id="" cols="12" rows="5"></textarea>
                        </div>

                        <div class="col-md-3">
                           <label class="control-label">اهداف الصندوق </label>
                        </div>
                        <div class="col-md-12">
                           <textarea name="fund_goal" class="form-control" placeholder="اهداف الصندوق"  id="" cols="12" rows="5"></textarea>
                        </div>

                         <div class="col-md-3">
                           <label class="control-label">استراتجيات الصندوق </label>
                        </div>
                        <div class="col-md-12">
                           <textarea name="fund_strategy" class="form-control" placeholder="استراتجيات الصندوق"  id="" cols="12" rows="5"></textarea>
                        </div>

                        <div class="col-md-3">
                           <label class="control-label">عقارات الصندوق </label>
                        </div>
                        <div class="col-md-12">
                           <textarea name="real_states" class="form-control" placeholder="عقارات الصندوق"  id="" cols="12" rows="5"></textarea>
                        </div>

                         <div class="col-md-12 pull-right">
                            <label>صور العقار</label>
                            <input placeholder="" type="file"   name="file" spellcheck="false" class="form-control"/>
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
