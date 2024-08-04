<?php

namespace App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends BaseController
{

    public static function login(Request $request)
    {

        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|exists:users,email',
                    'password' => 'required|min:6'
                ]
            );

            if ($validator->fails()) {
                return ['status' => 500, 'errors' => $validator->errors()];
            }

            $credential = ['email' => $request->email, 'password' => $request->password];
            if (Auth::guard('users')->attempt($credential, $request->remember)) {
                return [ 'message' => 'Login successfully', 'data' => Auth::guard('users')->user()];
            } else {
                return ['status' => 500, 'errors' => ['error' => 'Invalid Credentials! Please try again']];
            }
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

    public static function register(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'phone' => 'required|string',
                    'email' => 'required|unique:users,email',
                    'password' => 'required|min:6|confirmed'
                ]
            );
            if ($validator->fails()) {
                return ['status' => 500, 'errors' => $validator->errors()];
            }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);
            $user->avatar =  null;
            $user->save();

            return [ 'message' => 'Registration has been completed successfully.'];
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

    public static function forgot(Request $request)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }
            $userInfo = User::where('email', $input['email'])->first();
            if ($userInfo == null) {
                return ['status' => 500, 'error' => ['email' => ['Email not found.']]];
            }
            $reset_code = rand(100000, 999999);
            $userInfo->reset_code = $reset_code;
            $userInfo->save();

            Mail::send('emails.forgot', ['userInfo' => $userInfo], function ($message) use ($userInfo) {
                $message->to($userInfo['email'], $userInfo['name'])->subject(env('MAIL_FROM_NAME') . ': Password reset code');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });
            return [ 'message' => 'A reset code has been sent to your email. Please check your email'];
        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

    public static function reset(Request $request)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'email' => 'required|email',
                'code' => 'required',
                'password' => 'required|min:6|confirmed'
            ]);
            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }
            $userInfo = User::where(['email' => $input['email'], 'reset_code' => $input['code']])->first();
            if ($userInfo == null) {
                return ['status' => 500, 'error' => ['code' => ['Invalid request. Kindly check your reset code please.']]];
            }
            if (Hash::check($input['password'], $userInfo['password'])) {
                return ['status' => 500, 'error' => ['password' => ['Password repetition is not allowed. Please try another password']]];
            }
            $userInfo->password = bcrypt($input['password']);
            $userInfo->reset_code = null;
            $userInfo->save();
            return [ 'message' => 'The password has been reset successfully.'];
        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

    public static function profile_details(Request $request)
    {
        try {
            $user_id = Auth::guard('users')->id();
            $user = User::where('id', $user_id)->first();
            return [ 'message' => 'Admin data show successfully', 'data' => $user];
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

    public static function profile_update(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|unique:users,email,' . $request->email . ',email',
                    'name' => 'required|string',
                    'phone' => 'required|string',
                ]
            );
            if ($validator->fails()) {
                return ['status' => 500, 'errors' => $validator->errors()];
            }

            $user = User::where('id', Auth::guard('users')->id())->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->avatar = $request->avatar ?? null;
            $user->save();

            return ['message' => 'Profile update successfully'];
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

    public static function profile_update_password(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'current_password' => 'required|min:6',
                    'password' => 'required|min:6|confirmed',
                ]
            );
            if ($validator->fails()) {
                return ['status' => 500, 'errors' => $validator->errors()];
            }

            $user = User::where('id', Auth::guard('users')->id())->first();
            if(Hash::check($request->current_password, $user->password)){
                $user->password = bcrypt($request->password);
                $user->save();
            } else {
                return ['status' => 500, 'errors' => ['current_password' => ['Current is not correct! Please type correct password.']]];
            }

            return ['message' => 'Profile update password successfully'];
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

    public static function profile_logout(Request $request)
    {
        try {
            Auth::guard('users')->logout();
            return ['message' => 'Admin logout successfully'];
        } catch (\Exception $e) {
            return ['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()];
        }
    }

}
