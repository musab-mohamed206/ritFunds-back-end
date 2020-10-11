<?php

namespace App\Http\Controllers;

use App\Models\RitFund;
use Illuminate\Http\Request;
use App\Http\Resources\FundProperty as PreopeteResource;

class RitFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get propetes of fund
        $funds = RitFund::orderBy('created_at' , 'asc')->paginate(10);
        return view('dashbord.RitFund.index')->with('funds' , $funds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashbord.RitFund.create');
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
        $input = new RitFund;
        $input->name = $request->input('name');
        $input->overview = $request->input('overview');
        $input->fund_goal = $request->input('fund_goal');
        $input->fund_strategy = $request->input('fund_strategy');
        $input->real_states = $request->input('real_states');
        //$input->logo = $new_name;
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extention;
            $file->move('public/uploads/ritFundImage/',$filename);
            $input->logo = $filename;
        } else {
            $input->image = '';
        }
        $input->save();
        return redirect('RitFund/')->with('success' , 'تم اضافة الصندىق بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RitFund  $ritFund
     * @return \Illuminate\Http\Response
     */
    public function show(RitFund $ritFund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RitFund  $ritFund
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fund = RitFund::find($id);
        return view('dashbord.RitFund.edit')->with('fund' , $fund);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RitFund  $ritFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $input = RitFund::find($id);
        $input->name = $request->input('name');
        $input->overview = $request->input('overview');
        $input->fund_goal = $request->input('fund_goal');
        $input->fund_strategy = $request->input('fund_strategy');
        $input->real_states = $request->input('real_states');
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extention;
            $file->move('uploads/ritFundImage/',$filename);
            $input->logo = $filename;
        }
        $input->save();
        return redirect('RitFund/')->with('success' , 'تم تعديل الصندىق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RitFund  $ritFund
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        RitFund::find($id)->delete($id);
        return redirect('RitFund/')->with('success' , 'تم حذف الصندىق بنجاح');
    }

    public function getFunds()
    {
        //get propetes of fund
        $propetes = RitFund::all();
        return $propetes;
    }

    public function getFund($id)
    {
        //get propetes of fund
        $propetes = RitFund::where('id' , '=' , $id)->get();
        return $propetes;
    }
}
