<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Company;
use App\User;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::all();
        return view('countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=> 'required',
            'cover_image'=>'image|max:1999',
            'description'=> 'required',
        ]);

            //return $request->file('cover_image')->getClientOriginalName();

            $filenameWithExt= $request->file('cover_image')->getClientOriginalName();

            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension=$request->file('cover_image')->getClientOriginalName();

            $filenameToStore=$filename. '_'. time(). '.'. $extension;

            $path=$request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);

            $country= new Country;
            $country->name=$request->input('name');
            $country->cover_image=$filenameToStore;
            $country->description=$request->input('description');
            $country->save();

            return redirect('countries.index')->with('success', '正常に作成されました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country=Country::find($id);
        return view('countries.show', ['country'=> $country]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country=Country::find($id);
        return view('countries.edit')->with('country', $country);
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
                'title'=> 'required',
                'cover_image'=>'image|max:1999',
                'description'=> 'required',
                
            ]);

            //$request-> hasFile('cover_image1', 'cover_image2', 'cover_image3')){

            $filenameWithExt= $request-> file('cover_image')-> getClientOriginalName();

            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension= $request-> file('cover_image')->getClientOriginalExtension();

            $fileNameToStore= $filename. '_'. time(). '.'. $extension;

            $path= $request-> file('cover_image')-> storeAs('public/photos', $fileNameToStore);

        $country=Country::find($id);
        $country->name=$request->input('name');
        $country->cover_image=$filenameToStore;
        $country->description=$request->input('description');

        if($request-> hasFile('cover_image1', 'cover_image2', 'cover_image3')){
            $country->cover_image= $fileNameToStore;
        }
        $country-> save();

        return redirect('countries.index')->with('success', '編集が完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country=Country::find($id);

        if(auth()-> user()->id == 1){
            Storage::delete('public/cover_images/'. $country-> cover_image);
        }
        
        $country->delete();

        return redirect('countries.index')->with('success', '正常に削除されました');
    }
}
