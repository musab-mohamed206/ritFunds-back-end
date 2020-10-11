<?php

namespace App\Http\Controllers;

use App\Models\FinancialIndicator;
use Illuminate\Http\Request;

class FinancialIndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       //get propetes of fund
       $financials = FinancialIndicator::where('fund_id' , '=' , $id)->paginate(10);
       $fund_id = $id;
       return view('dashbord.FinancialIndicator.index')->with([
           'financials' => $financials,
           'fund_id' => $fund_id,
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('dashbord.FinancialIndicator.create')->with('fund_id' , $id);
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
        $input = new FinancialIndicator;
        $input->unit_price = $request->input('unit_price');
        $input->net_asset_value = $request->input('net_asset_value');
        $input->total_rental_income = $request->input('total_rental_income');
        $input->total_profits = $request->input('total_profits');
        $input->profit_distributed_per_unit = $request->input('profit_distributed_per_unit');
        $input->year = $request->input('year');
        $input->fund_id = $request->input('fund_id');
        $input->save();
        return redirect('RitFund/')->with('success' , 'تم اضافة المؤشر بنجاح');
    }

    /**RitFund
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialIndicator $financialIndicator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FinancialIndicator  $financialIndicator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $financial = FinancialIndicator::find($id);
        return view('dashbord.FinancialIndicator.edit')->with('financial' , $financial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FinancialIndicator  $financialIndicator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = FinancialIndicator::find($id);
        $input->unit_price = $request->input('unit_price');
        $input->net_asset_value = $request->input('net_asset_value');
        $input->total_rental_income = $request->input('total_rental_income');
        $input->total_profits = $request->input('total_profits');
        $input->profit_distributed_per_unit = $request->input('profit_distributed_per_unit');
        $input->year = $request->input('year');
        //$input->fund_id = $request->input('fund_id');
        $input->save();
        return redirect('RitFund/')->with('success' , 'تم تعديل المؤشر بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FinancialIndicator  $financialIndicator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        FinancialIndicator::find($id)->delete($id);
        return redirect('RitFund/')->with('success' , 'تم حذف المؤشر بنجاح');
    }

    public function getFinancialIndicator($id)
    {
       //get propetes of fund
       $propetes = FinancialIndicator::where('fund_id' , '=' , $id)->get();
       return $propetes;
    }
}
