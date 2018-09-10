<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Comapny_User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit')->with('user', $user);
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
                'name' => 'required|string|max:255',
                'name_call' => 'required|string|max:255',
                'gender' => 'required|string|max:255',
                'tel' => 'required|string|max:255|unique:users',
                'birthday' => 'required|string|max:255',
                'university_name' => 'required|string|max:255',
                'university_degree' => 'required|string|max:255',
                'university_date' => 'required|string|max:255',
                'master_university' => 'nullable|string|max:255',
                'master_degree' => 'nullable|string|max:255',
                'master_date' => 'nullable|string|max:255',
                'company_name' => 'nullable|string|max:255',
                'position' => 'nullable|string|max:255',
                'period' => 'nullable|string|max:255',
                'company_name2' => 'nullable|string|max:255',
                'position2' => 'nullable|string|max:255',
                'period2' => 'nullable|string|max:255',
                // 'role' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]);

            $user=User::find($id);
            $user->name=$request->input('name');
            $user->name_call=$request->input('name_call');
            $user->tel=$request->input('tel');
            $user->birthday=$request->input('birthday');
            $user->university_name=$request->input('university_name');
            $user->university_degree=$request->input('university_degree');
            $user->university_date=$request->input('university_date');
            $user->master_university=$nullable->input('master_university');
            $user->master_degree=$nullable->input('master_degree');
            $user->master_date=$nullable->input('master_date');
            $user->company_name=$nullable->input('company_name');
            $user->position=$nullable->input('position');
            $user->period=$nullable->input('period');
            $user->company_name2=$nullable->input('company_name2');
            $user->position2=$nullable->input('position2');
            $user->period2=$nullable->input('period2');
            $user->email=$request->input('email');
            $user-> save();

            return redirect('/users/' . $user->id)->with('success', '編集が完了しました。　正しく反映されているか確認をして下さい。');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/countries')->with('success', '正常に削除されました。　ログアウトして下さい。');
    }
}
