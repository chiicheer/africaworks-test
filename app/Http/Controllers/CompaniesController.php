<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//←これが重要!
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use App\Company;
use App\User;
use App\Country;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       /*public function __construct()
    {
        $this->middleware('auth', ['except'=>['show']]);
    }*/


    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'country_id'=> 'nullable',
                'cover_image1'=> 'image|nullable|max:1999',
                'cover_image2'=> 'image|nullable|max:1999',
                'cover_image3'=> 'image|nullable|max:1999',
                'title'=> 'required',
                'description'=> 'required',
                'job_content'=> 'required',
                'place'=> 'required',
                'relate'=> 'required',
                'role'=> 'required',
                'salary'=> 'required',
                'welfare'=> 'required',
                'time'=> 'required',
                'skill'=> 'required',
                'apply_way'=> 'required',
                'company_name'=> 'required',
                'company_place'=> 'required',
                'foundation'=> 'required',
                'employee'=> 'required',
                'company_type'=> 'required',
                'company_content'=> 'required',
            ]);

            //return $request->file('cover_image')->getClientOriginalName();

            $filenameWithExt= $request->file('cover_image1')->getClientOriginalName();
            $filenameWithExt= $request->file('cover_image2')->getClientOriginalName();
            $filenameWithExt= $request->file('cover_image3')->getClientOriginalName();

            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension=$request->file('cover_image1')->getClientOriginalExtension();
            $extension=$request->file('cover_image2')->getClientOriginalExtension();
            $extension=$request->file('cover_image3')->getClientOriginalExtension();
            

            $fileNameToStore=$filename. '_'. time(). '.'. $extension;

            $path=$request->file('cover_image1')->storeAs('public/photos1', $fileNameToStore);
            $path=$request->file('cover_image2')->storeAs('public/photos2', $fileNameToStore);
            $path=$request->file('cover_image3')->storeAs('public/photos3', $fileNameToStore);

           
            $company= new Company();
            $company->country_id= $request->input('country_id');
            $company->cover_image1= $fileNameToStore;
            $company->cover_image2= $fileNameToStore;
            $company->cover_image3= $fileNameToStore;
            $company->title= $request-> input('title');
            $company->description= $request-> input('description');
            $company->job_content= $request-> input('job_content');
            $company->place= $request-> input('place');
            $company->relate= $request-> input('relate');
            $company->role= $request-> input('role');
            $company->salary= $request-> input('salary');
            $company->welfare= $request-> input('welfare');
            $company->time= $request-> input('time');
            $company->skill= $request-> input('skill');
            $company->apply_way= $request-> input('apply_way');
            $company->company_name= $request-> input('company_name');
            $company->company_place= $request-> input('company_place');
            $company->foundation= $request-> input('foundation');
            $company->employee= $request-> input('employee');
            $company->company_type= $request-> input('company_type');
            $company->company_content= $request-> input('company_content');
            $company-> save();

            return redirect('/' . $company->country_id)->with('success', '正常に作成されました');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::find($id);
        return view('companies.show')->with('company', $company);

    }


    public function admin($id)
    {
        $company=Company::find($id);
        return view('companies.admin')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::find($id);
        return view('companies.edit')->with('company', $company);
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
        $this-> validate($request,
            [
                'country_id'=> 'nullable',
                'title'=> 'required',
                'description'=> 'required',
                'job_content'=> 'required',
                'place'=> 'required',
                'relate'=> 'required',
                'role'=> 'required',
                'salary'=> 'required',
                'welfare'=> 'required',
                'time'=> 'required',
                'skill'=> 'required',
                'apply_way'=> 'required',
                'company_name'=> 'required',
                'company_place'=> 'required',
                'foundation'=> 'required',
                'employee'=> 'required',
                'company_type'=> 'required',
                'company_content'=> 'required',
            ]);


            // if($request-> hasFile('cover_image1')){

            // $filenameWithExt= $request->file('cover_image1')->getClientOriginalName();
            // $filenameWithExt= $request->file('cover_image2')->getClientOriginalName();
            // $filenameWithExt= $request->file('cover_image3')->getClientOriginalName();

            // $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // $extension= $request-> file('cover_image1')->getClientOriginalExtension();
            // $extension= $request-> file('cover_image2')->getClientOriginalExtension();
            // $extension= $request-> file('cover_image3')->getClientOriginalExtension();

            // $fileNameToStore= $filename. '_'. time(). '.'. $extension;

            // $path= $request-> file('cover_image1')-> storeAs('public/photos1', $fileNameToStore);
            // $path= $request-> file('cover_image2')-> storeAs('public/photos2', $fileNameToStore);
            // $path= $request-> file('cover_image3')-> storeAs('public/photos3', $fileNameToStore);

            // }   
            
            $company=Company::find($id);
            $company->country_id= $request->input('country_id');
            $company->title= $request-> input('title');
            $company->description= $request-> input('description');
            $company->job_content= $request-> input('job_content');
            $company->place= $request-> input('place');
            $company->relate= $request-> input('relate');
            $company->role= $request-> input('role');
            $company->salary= $request-> input('salary');
            $company->welfare= $request-> input('welfare');
            $company->time= $request-> input('time');
            $company->skill= $request-> input('skill');
            $company->apply_way= $request-> input('apply_way');
            $company->company_name= $request-> input('company_name');
            $company->company_place= $request-> input('company_place');
            $company->foundation= $request-> input('foundation');
            $company->employee= $request-> input('employee');
            $company->company_type= $request-> input('company_type');
            $company->company_content= $request-> input('company_content');

            // if($request-> hasFile('cover_image1')){
            // $company->cover_image1= $fileNameToStore;
            // $company->cover_image2= $fileNameToStore;
            // $company->cover_image3= $fileNameToStore;

            // }

            $company-> save();
            return redirect('/' . $company->country_id)->with('success', 'hello編集が完了しました。　正しく反映されているか確認をして下さい。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Company::find($id);

        if(Auth::user()->role == $company->id || Auth::user()->id == 1){
            Storage::delete('public/photos1'. $company->cover_image1);
            Storage::delete('public/photos2'. $company->cover_image2);
            Storage::delete('public/photos3'. $company->cover_image3);
        }
        $company->users()->detach();
        $company->delete();

        return redirect('/' . $company->country_id)->with('success', '御社の内容が正常に削除されました。　正しく反映されているか確認をして下さい。');
    }
}
