<?php

namespace App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends BaseController
{

    /**
     * @param Request $request
     * @param $guard
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function login(Request $request, $guard, $model)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|exists:' . strtolower(class_basename($model)) . 's,email',
                    'password' => 'required|min:6'
                ]
            );
            if ($validator->fails()) {
                return response()->json(['status' => 500, 'errors' => $validator->errors()], 500);
            }
            $credential = ['email' => $request->email, 'password' => $request->password];
            if (Auth::guard($guard)->attempt($credential, $request->remember)) {
                return response()->json(['message' => 'Login successfully', 'data' => Auth::guard($guard)->user()], 200);
            } else {
                return response()->json(['status' => 500, 'errors' => ['error' => 'Invalid Credentials! Please try again']], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function register(Request $request, $model)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'email' => 'required|unique:' . strtolower(class_basename($model)) . 's,email',
                    'phone' => 'required',
                    'password' => 'required|min:6|confirmed'
                ]
            );
            if ($validator->fails()) {
                return response()->json(['status' => 500, 'errors' => $validator->errors()], 500);
            }
            $user = new $model();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->phone = $request->phone ?? null;
            $user->avatar = $request->avatar ?? null;
            $user->facebook_link = $request->facebook_link ?? null;
            $user->twitter_link = $request->twitter_link ?? null;
            $user->instagram_link = $request->instagram_link ?? null;
            $user->linkedin_link = $request->linkedin_link ?? null;
            $user->youtube_link = $request->youtube_link ?? null;
            $user->save();
            return response()->json(['message' => 'Registration has been completed successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function forgot(Request $request, $model)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $userInformation = $model::where('email', $request->email)->first();

            if($userInformation == null) {
                return response()->json(['errors' => ['email' => ['Email not found']]], 500);
            }

            $random_number = rand(10000000, 99999999);
            $userInformation->reset_code = $random_number;
            $userInformation->save();

            Mail::send('emails.forget', ['userInfo' => $userInformation], function ($message) use ($userInformation) {
                $message->to($userInformation['email'], $userInformation['name'])->subject(env('MAIL_FROM_NAME') . ': Password reset code');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            return response()->json(['message' => 'Forget password has been successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function reset(Request $request, $model)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'email' => 'required|email',
                'reset_code' => 'required',
                'password' => 'required|min:6|confirmed'
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }
            $userInfo = $model::where(['email' => $input['email'], 'reset_code' => $input['reset_code']])->first();
            if($userInfo === null) {
                return response()->json(['status' => 500, 'error' => 'invalid request. Check your reset code']);
            }
            if(Hash::check($input['password'], $userInfo['password'])) {
                return response()->json(['errors' => ['password' => ['Please kindly use another password']]], 500);
            }
            $userInfo->password = bcrypt($input['password']);
            $userInfo->reset_code = null;
            $userInfo->save();
            return response()->json(['message' => 'The password has been reset successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param $guard
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function profileDetails($guard, $model)
    {
        try {
            $user_id = Auth::guard($guard)->id();
            $user = $model::where('id', $user_id)->first();
            return response()->json(['message' => ucfirst($guard) . ' data show successfully', 'data' => $user]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @param $guard
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function profileUpdate(Request $request, $guard, $model)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|unique:' . strtolower(class_basename($model)) . 's,email,' . $request->email . ',email',
                    'name' => 'required|string',
                ]
            );
            if ($validator->fails()) {
                return response()->json(['status' => 500, 'errors' => $validator->errors()], 500);
            }
            $user = $model::where('id', Auth::guard($guard)->id())->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return response()->json(['message' => 'Profile updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @param $guard
     * @param $model
     * @return \Illuminate\Http\JsonResponse
     */

    private function profileUpdatePassword(Request $request, $guard, $model)
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
                return response()->json(['status' => 500, 'errors' => $validator->errors()], 500);
            }
            $user = $model::where('id', Auth::guard($guard)->id())->first();
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = bcrypt($request->password);
                $user->save();
            } else {
                return response()->json(['status' => 500, 'errors' => ['current_password' => ['Current password is not correct! Please type correct password']]]);
            }
            return response()->json(['message' => 'Profile password updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param $guard
     * @return \Illuminate\Http\JsonResponse
     */

    private function profileLogout($guard)
    {
        try {
            Auth::guard($guard)->logout();
            return response()->json(['message' => 'Logout successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_login(Request $request) {
        return $this->login($request, 'users', User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_register(Request $request) {
        return $this->register($request, User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_forgot(Request $request) {
        return $this->forgot($request, User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_reset(Request $request) {
        return $this->reset($request, User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_profile_details(Request $request) {
        return $this->profileDetails('users', User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_profile_update(Request $request) {
        return $this->profileUpdate($request, 'users', User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_profile_update_password(Request $request) {
        return $this->profileUpdatePassword($request, 'users', User::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function user_profile_logout(Request $request) {
        return $this->profileLogout('users');
    }

}
