<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userc;
class UserController extends Controller
{
  private static function getData()
  {
    return [

    ];
  }
  public function index()
  {
    return view(
      'admin.user.index',
      [
        'users'=> userc::all()
      ]
    );
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.user.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $user =  new userc();

    $user -> username = $request->input('first_name');
    $user -> position = $request->input('position');

    $user->save();

    return redirect()->route('user.show');

  }

  /**
   * Display the specified resource.
   */
  public function show(string $user)
  {
    $users = self::getData();
    $index = array_search($user, array_column($users,'id'));

    if($index === false){
      abort(404);
    }
    return view('admin.user.show' , [
      'user'=>$users[$index]
    ]);
  
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
