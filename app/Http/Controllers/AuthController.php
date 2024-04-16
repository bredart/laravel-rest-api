<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Регистрация пользователя
     */
    public function register(UserRequest $request)
    {
//        try {
//            //Validated
//            $validateUser = Validator::make($request->all(),
//                [
//                    'name' => 'required',
//                    'email' => 'required|email|unique:users,email',
//                    'password' => 'required'
//                ]);
//
//            if($validateUser->fails()){
//                return response()->json([
//                    'status' => false,
//                    'message' => 'validation error',
//                    'errors' => $validateUser->errors()
//                ], 401);
//            }
//
//            $user = User::create([
//                'name' => $request->name,
//                'email' => $request->email,
//                'password' => Hash::make($request->password)
//            ]);
//
//            return response()->json([
//                'status' => true,
//                'message' => 'User Created Successfully',
//                'token' => $user->createToken("API TOKEN")->plainTextToken
//            ], 200);
//
//        } catch (\Throwable $th) {
//            return response()->json([
//                'status' => false,
//                'message' => $th->getMessage()
//            ], 500);
//        }

        $params = $request->safe()->except('file');
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('auth-token');

        return $this->success([
            'user' => $user,
            'token' => $token->plainTextToken,
        ],201);
    }

    /**
     * Авторизация и создание токена
     *
     * @return Responsable
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            abort(401, trans('auth.failed'));
        }

        $token = Auth::user()->createToken('auth-token');

        return $this->success(['token' => $token->plainTextToken,]);
    }

    /**
     * Выход (logout)
     */
    public function logout()
    {
        Auth::user()->tokens()->delete();

        return $this->success(null, 204);
    }


}
