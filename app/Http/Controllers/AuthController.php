<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Http;
use App\Events\MailSend;
use Event;

class AuthController extends Controller
{
    public function __construct(Member $member) {
        $this->member = $member;
    }

    public function index() {
        return view('index');
    }

    public function postRegister(Request $request) {
        $user = $this->member->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'date_of_birth' => $request->date_of_birth
        ]);
        $password = $user;
        $mail= MailSend::dispatch($password);
        return redirect('login');
    }

    public function login() {
        return view('login');
    }

    public function postLogin(Request $request) {
        $user = $this->member->where('email',$request->email)->first();
        if($user){
            $password = $user->where('password',$user->password)->first();
            $members = $this->member->get();
            
            return view('dashboard',compact('members'));
        } else {
            return back();
        }
    }


    // cURL api for age calculation
    public function calculateAge($name) {

        $response = Http::get('https://api.agify.io/', [
            'name' => $name,
        ]);

        return response()->json([
            'status' => true,
            'message' => $response->json()]);
    }
}
