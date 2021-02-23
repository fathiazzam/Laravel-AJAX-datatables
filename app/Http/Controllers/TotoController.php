<?php

namespace App\Http\Controllers;


use App\Toto;
use DataTables;
use Illuminate\Http\Request;

class TotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.toto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Toto();
        return view('pages.toto.form', compact('model'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'CMGUnmaskedID' => 'required|string|',            
            'CMGUnmaskedName' => 'required|string|',
            'ClientTier' => 'required|string|',            
            'GCPStream' => 'required|string|',
            'GCPBusiness' => 'required|string|',            
            'CMGGlobalBU' => 'required|string|',
            'CMGSegmentName' => 'required|string|',            
            'GlobalControlPoint' => 'required|string|',
            'GCPGeography' => 'required|string|',            
            'GlobalRelationshipManagerName' => 'required|string|',
            'REVENUE_FY14' => 'required|string|',            
            'REVENUE_FY15' => 'required|string|',
            'Deposits_EOP_FY14' => 'required|string|',            
            'Deposits_EOP_FY15x' => 'required|string|',
            'TotalLimits_EOP_FY14' => 'required|string|',            
            'TotalLimits_EOP_FY15' => 'required|string|',
            'TotalLimits_EOP_FY15x' => 'required|string|',            
            'RWAFY15' => 'required|string|',
            'RWAFY14' => 'required|string|',            
            'REV_RWA_FY14' => 'required|string|',
            'REV_RWA_FY15' => 'required|string|',            
            'NPAT_AllocEq_FY14' => 'required|string|',
            'NPAT_AllocEq_FY15X' => 'required|string|',            
            'Company_Avg_Activity_FY14' => 'required|string|',
            'Company_Avg_Activity_FY15' => 'required|string|',            
            'ROE_FY14' => 'required|string|',
            'ROE_FY15' => 'required|string|'
        ]);

        $model = Toto::create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Toto::findOrFail($id);
        return view('pages.toto.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Toto::findOrFail($id);
        return view('pages.toto.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'CMGUnmaskedID' => 'required|string|',            
            'CMGUnmaskedName' => 'required|string|',
            'ClientTier' => 'required|string|',            
            'GCPStream' => 'required|string|',
            'GCPBusiness' => 'required|string|',            
            'CMGGlobalBU' => 'required|string|',
            'CMGSegmentName' => 'required|string|',            
            'GlobalControlPoint' => 'required|string|',
            'GCPGeography' => 'required|string|',            
            'GlobalRelationshipManagerName' => 'required|string|',
            'REVENUE_FY14' => 'required|string|',            
            'REVENUE_FY15' => 'required|string|',
            'Deposits_EOP_FY14' => 'required|string|',            
            'Deposits_EOP_FY15x' => 'required|string|',
            'TotalLimits_EOP_FY14' => 'required|string|',            
            'TotalLimits_EOP_FY15' => 'required|string|',
            'TotalLimits_EOP_FY15x' => 'required|string|',            
            'RWAFY15' => 'required|string|',
            'RWAFY14' => 'required|string|',            
            'REV_RWA_FY14' => 'required|string|',
            'REV_RWA_FY15' => 'required|string|',            
            'NPAT_AllocEq_FY14' => 'required|string|',
            'NPAT_AllocEq_FY15X' => 'required|string|',            
            'Company_Avg_Activity_FY14' => 'required|string|',
            'Company_Avg_Activity_FY15' => 'required|string|',            
            'ROE_FY14' => 'required|string|',
            'ROE_FY15' => 'required|string|' . $id
        ]);
        $model = Toto::findOrFail($id);
        $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Toto::findOrFail($id);
        $model->delete();
    }
    public function dataTable()
    {
        $model = Toto::query();
        
        return DataTables::of($model)
            // ->addIndexColumn()
            //     ->toJson();
            ->addColumn('action', function($model){
                 return view('layouts._action', [
                       'model' => $model,
                       'url_show' => route('toto.show', $model->id),
                       'url_edit' => route('toto.edit', $model->id),
                       'url_destroy' => route('toto.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            //->toJson();
            ->rawColumns(['action'])
            ->make(true);
            

    }
}
