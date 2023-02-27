<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SinginRequest;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Course;
use App\Models\Knowledge;
use App\Http\Requests\GeneralRequest;
use App\Http\Requests\AdminRequest;

class UserController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contact() {
        return view('contact');
    }

    public function confirm(UserRequest $request) {
        $inputs = $request->all();
        return view('confirm',['inputs' => $inputs]);
    }

    public function send(UserRequest $request) {
        $inputs = $request->all();

        if($request->input('action') == 'send'){
            Contact::create($inputs);
            return view('complete');

        }elseif($request->input('action') == 'back'){
            return redirect()->route('contact')->withInput($inputs);
        }
    }

    public function register() {
        return view('register');
    }

    public function register_complete(RegisterRequest $request) {
        $inputs = $request->all();

        if($request->input('register_complete') == '登録する'){
            User::create([
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'password' => Hash::make($inputs['password']),
                'role' => $inputs['role']
            ]);
            return view('register_complete');

        }
    }

    public function login() {
        return view('login');
    }

    public function sign_in(SinginRequest $request) {

        $credentials = $request->only('email','password');


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $role = Auth::user()->role;
            if($role == 0){
                return redirect()->route('admin');
            }elseif($role == 1){
                return redirect('general');
            }
            
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    public function general() {
        $courses = Course::all();
        return view('general',['courses' => $courses]);
    }

    public function general_course(GeneralRequest $request) {

        //course_idに該当するページへ遷移する
        //study_course => １で送られてくる内容を受けて、その該当する知識をDBからテーブル結合、取得して、general_courseに値を渡して、表示する
        //または元々該当するページを作っておいて、course_idに該当するページを返せばいいだけ
        $course_id = $request->study_course;

        switch($course_id) {
            case'1':
            $knowledges = Course::find($course_id)->knowledges;

            return view('general_course',['knowledge' => $knowledges]);
            break;

            case'2':
            $knowledges = Course::find($course_id)->knowledges;
    
            return view('general_face',['knowledge' => $knowledges]);
            break;
        }
        
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(GeneralRequest $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }

    public function admin() {
        $courses = Course::all();
        return view('admin',['courses' => $courses]);
    }

    public function admin_create(AdminRequest $request) {
        $course = $request->create_course;
        $content = $request->create_add;
        Knowledge::create([
            'course_id' => $course,
            'content' => $content
        ]);
        $courses = Course::all();
        return redirect()->route('admin')->with('created','コンテンツが追加完了しました！');
    }

    public function reset() {
        return view('reset');
    }

    public function reset_register(SinginRequest $request) {

        $inputs = $request->all();
        
        $user = User::where('email', '=' ,$inputs['email'])->first();
        $user->password = Hash::make($inputs['password']);
        $user->save();

        return redirect()->route('reset')->with('reset','パスワードを変更しました！');
        
        
    }

}
