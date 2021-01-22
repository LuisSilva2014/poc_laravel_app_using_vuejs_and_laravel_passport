<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{

    public $scope;
    public function loginTest(Request $request)
    {
        return response()->json([
                'success' => true,
                'message'   => 'Great you have access',
                'authenticatedUser'   => $request->user(),
                'authenticatedUserV2'   =>  auth()->user()
            ], 200);
    }

    public function revokeTokenLogout(Request $request)
    {

        //Get token of the current user;
        $tokens = auth()->user()->tokens;
        foreach($tokens as $token) {
            $token->revoke();
        }

        return response()->json([
                'success' => true,
                'message'   => 'Token revoked',
                'authenticatedUser'   => $request->user()
            ], 200);
    }

    public function welcome()
    {
        return view('welcome');
    }


    public function anyRoute()
    {
        return view('home');
    }



    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            // return redirect()
            //             ->back()
            //             ->withErrors($validator)
            //             ->withInput($request->input());

            return response()->json([
                'message' => 'Invalid request',
                // 'response' => $validator,
                // 'givenParameters' => $request->input()
            ], 400);
        }

        if( Auth::attempt(['email'=>$request->email, 'password'=>$request->password]) ) {

            $user = Auth::user();
            // $userRole = $user->role()->first();

            // if ($userRole) {
            //     $this->scope = $userRole->role;
            // }

            $this->scope = 'basic';

            $token = $user->createToken($user->email.'-'.now(), [$this->scope]);
            //$token = $user->createToken($user->email.'-'.now());

            return response()->json([
                'token' => $token->accessToken
            ]);
        }

        return response()->json([
            'message' => 'Credentials are invalid'
        ], 401);
    }
}
