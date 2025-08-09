<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailChange;
use App\Models\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Config;
use App\Models\User;

class UserController extends Controller
{// 儲存新email並發送驗證信
    public function store(Request $request)
    {
        $validate = $request->validate(['email' => 'required|email|unique:users,email']);

        $user = $request->user();
        $user->new_email = $request->email;
        $user->save();

        Mail::to($request->email)->send(new VerifyEmailChange($user));

        return response()->json(['message' => '驗證郵件已發送到您的新電子郵件地址，必需確認電郵才能完成修改步驟。']);
    }

    // 執行驗證
    public function verify(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->email = $user->new_email;
        $user->new_email = null;
        $user->save();

        return redirect('/user/profile')->with('success', 'Email更新成功');
    }
}
