<?php

namespace App\Http\Controllers;

use App\Models\FundProperty;
use Illuminate\Http\Request;
use App\Http\Resources\FundProperty as PreopeteResource;

class FundPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get propetes of fund
        $propetes = FundProperty::orderBy('created_at' , 'asc')->paginate(10);
        return view('dashbord.FundProperty.index')->with('propetes' , $propetes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.FundProperty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = new FundProperty;
        $input->financial_company = $request->input('financial_company');

        $input->city = $request->input('city');
        $input->district = $request->input('district');
        $input->property_name = $request->input('property_name');
        $input->evaluation_company = $request->input('evaluation_company');
        $input->property_type = $request->input('property_type');
        $input->property_ownership = $request->input('property_ownership');
        $input->land_area = $request->input('land_area');
        $input->meter_price = $request->input('meter_price');
        $input->building_surfaces = $request->input('building_surfaces');
        $input->land_value = $request->input('land_value');
        $input->property_vlaue_by_cost_method = $request->input('property_vlaue_by_cost_method');
        $input->property_value_by_income_method = $request->input('property_value_by_income_method');
        $input->years_of_ownership = $request->input('years_of_ownership');
        $input->tenant_type = $request->input('tenant_type');
        $input->value_rent = $request->input('value_rent');
        $input->property_age = $request->input('property_age');
        $input->contract_period = $request->input('contract_period');
        $input->accountant_evaluation = $request->input('accountant_evaluation');
        $input->old_evaluation = $request->input('old_evaluation');
        $input->new_evaluation = $request->input('new_evaluation');
        $input->deffrence_betwen_old_new_evaluation = $request->input('deffrence_betwen_old_new_evaluation');
        $input->lat = $request->input('lat');
        $input->lng = $request->input('lng');
        $input->fund_id = $request->input('fund_id');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extention;
            $file->move('uploads/propertyImage/',$filename);
            $input->image = $filename;
        } else {
            $input->image = '';
        }

        $input->save();
        return redirect('/FundProperty')->with('success' , 'تم اضافة المعاملة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FundProperty  $fundProperty
     * @return \Illuminate\Http\Response
     */
    public function show(FundProperty $fundProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FundProperty  $fundProperty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $propete = FundProperty::find($id);
        return view('dashbord.FundProperty.edit')->with('propete' , $propete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FundProperty  $fundProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = FundProperty::find($id);
        $input->financial_company = $request->input('financial_company');
        $input->city = $request->input('city');
        $input->district = $request->input('district');
        $input->property_name = $request->input('property_name');
        $input->evaluation_company = $request->input('evaluation_company');
        $input->property_type = $request->input('property_type');
        $input->property_ownership = $request->input('property_ownership');
        $input->land_area = $request->input('land_area');
        $input->meter_price = $request->input('meter_price');
        $input->building_surfaces = $request->input('building_surfaces');
        $input->land_value = $request->input('land_value');
        $input->property_vlaue_by_cost_method = $request->input('property_vlaue_by_cost_method');
        $input->property_value_by_income_method = $request->input('property_value_by_income_method');
        $input->years_of_ownership = $request->input('years_of_ownership');
        $input->tenant_type = $request->input('tenant_type');
        $input->value_rent = $request->input('value_rent');
        $input->property_age = $request->input('property_age');
        $input->contract_period = $request->input('contract_period');
        $input->accountant_evaluation = $request->input('accountant_evaluation');
        $input->old_evaluation = $request->input('old_evaluation');
        $input->new_evaluation = $request->input('new_evaluation');
        $input->deffrence_betwen_old_new_evaluation = $request->input('deffrence_betwen_old_new_evaluation');
        $input->lat = $request->input('lat');
        $input->lng = $request->input('lng');
        $input->fund_id = $request->input('fund_id');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extention;
            $file->move('uploads/propertyImage/',$filename);
            $input->image = $filename;
        }
        $input->save();
        return redirect('/FundProperty')->with('success' , 'تعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FundProperty  $fundProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        FundProperty::find($id)->delete($id);
        return redirect('FundProperty/')->with('success' , 'تم حذف العقار بنجاح');
    }

    public function propertysinfo($id)
    {
        //get propetes of fund
        $propetes = FundProperty::where('fund_id' , '=' , $id)->get();
        return $propetes;

    }
    public function getpropertyLocation($id)
    {
        //get propetes of fund
        $propetes = FundProperty::where('fund_id' , '=' , $id)->get();
        return PreopeteResource::collection($propetes);

    }

    public function propertysdetails($id)
    {
        //get details of propete
        $propetes = FundProperty::where('id' , '=' , $id)->get();
        return $propetes;
    }
}
