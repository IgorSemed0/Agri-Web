<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data['users']=User::all();

        return view('user.index', $data);
    }

    public function create(){
        return view('user.create.index');
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
    */

    public function store(Request $request){


        try {
            $request->validate([
                'userName' => 'required',
                'vc_image' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],[
                'userName.required' => 'O nome é obrigatório',
                'vc_image.required' => 'A imagem é obrigatória',
                'email.required' => 'O e-mail é obrigatório',
                'password.required' => 'A senha é obrigatória',
            ]);

            $imagePath = $request->file('vc_image')->store('images');

            User::create([
                'userName'=>$request->userName,
                'vc_image' => $imagePath,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

            return redirect()->back()->with('user.create.success',1);
        } catch (\Throwable $th) {
            //throw $th;

            dd($th);

            return redirect()->back()->with('user.create.error',1);
        }
    }

    /**
     * @param int $id
    */

    public function edit($id){
        $response['user']=User::find($id);

        return view('user.edit.index',$response);
    }

    /**
     * @param int $id
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
    */

    public function update(Request $request, $id){


        try {

            $request->validate([
                'userName' => 'required',
                'vc_image' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],[
                'userName.required' => 'O primeiro nome é obrigatório',
                'vc_image.required' => 'A imagem é obrigatória',
                'email.required' => 'O e-mail é obrigatório',
                'password.required' => 'A senha é obrigatória',
            ]);

            $imagePath = $request->file('vc_image')->store('images');
            $user=User::find($id);
            User::findOrFail($id)->update([
                'userName'=>$request->userName,
                'vc_image' => $imagePath,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

            return redirect()->back()->with('user.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.update.error',1);
        }
    }

        /**
     * @param int $id
    */

    public function destroy($id){
        try {
            $user=User::findOrFail($id);
            User::findOrFail($id)->delete();

            return redirect()->back()->with('user.destroy.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.destroy.error',1);
        }
    }

    public function purge($id){
        try {
            $user=User::findOrFail($id);
            User::findOrFail($id)->forceDelete();

            return redirect()->back()->with('user.purge.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.purge.error',1);
        }
    }

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }


}
