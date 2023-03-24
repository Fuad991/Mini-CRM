<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;


class CompaniesController extends Controller
{

    public function index()
    {
        $model= companies::all()->paginate(10);
        return view('company.index',compact('model'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $model = companies::create($request->all());
        return Redirect()->route('company.index')-> with('success','company added succesflly');
    }

    public function edit(companies $companies)
    {
        return view('company.update');
    }

    public function update(Request $request, companies $companies)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $companies ->update($request->all());
        return Redirect()->route('company.index')-> with('success','company updated succesflly');
    }

    public function destroy(companies $companies)
    {
        $companies -> delete();
        return Redirect()->route('companies.index')-> with('success','company deleted succesflly');
    }
}
