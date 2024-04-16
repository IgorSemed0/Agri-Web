<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data['users']=User::all();

        return view('admin.user.index', $data);
    }

    public function create(){
        return view('admin.user.create.index');
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
    */

    public function store(Request $request){


        try {
            $request->validate([
                'vc_firstName' => 'required',
                'vc_lastName' => 'required',
                'name' => 'required',
                'vc_gender' => 'required',
                'vc_profile' => 'required',
                'vc_image' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],[
                'vc_firstName.required' => 'O primeiro nome é obrigatório',
                'vc_lastName.required' => 'O último nome é obrigatório',
                'name.required' => 'O apelido é obrigatório',
                'vc_gender.required' => 'O gênero é obrigatório',
                'vc_profile.required' => 'O perfil é obrigatório',
                'vc_image.required' => 'A imagem é obrigatória',
                'email.required' => 'O e-mail é obrigatório',
                'password.required' => 'A senha é obrigatória',
            ]);

            $imagePath = $request->file('vc_image')->store('images');

            User::create([
                'vc_firstName'=>$request->vc_firstName,
                'vc_lastName'=>$request->vc_lastName,
                'name'=>$request->name,
                'vc_gender'=>$request->vc_gender,
                'vc_profile'=>$request->vc_profile,
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

        return view('admin.user.edit.index',$response);
    }

    /**
     * @param int $id
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
    */

    public function update(Request $request, $id){


        try {

            $request->validate([
                'vc_firstName' => 'required',
                'vc_lastName' => 'required',
                'name' => 'required',
                'vc_gender' => 'required',
                'vc_profile' => 'required',
                'vc_image' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],[
                'vc_firstName.required' => 'O primeiro nome é obrigatório',
                'vc_lastName.required' => 'O último nome é obrigatório',
                'name.required' => 'O apelido é obrigatório',
                'vc_gender.required' => 'O gênero é obrigatório',
                'vc_profile.required' => 'O perfil é obrigatório',
                'vc_image.required' => 'A imagem é obrigatória',
                'email.required' => 'O e-mail é obrigatório',
                'email.email' => 'Digite um endereço de e-mail válido',
                'email.unique' => 'Este e-mail já está sendo usado',
                'password.required' => 'A senha é obrigatória',
                'password.min' => 'A senha deve ter pelo menos 8 caracteres',
            ]);

            $imagePath = $request->file('vc_image')->store('images');
            $user=User::find($id);
            User::findOrFail($id)->update([
                'vc_firstName'=>$request->vc_firstName,
                'vc_lastName'=>$request->vc_lastName,
                'name'=>$request->name,
                'vc_gender'=>$request->vc_gender,
                'vc_profile'=>$request->vc_profile,
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
