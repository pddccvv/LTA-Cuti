<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password); // Encrypt the password
        $user->save();

        return response()->json(['message' => 'User created successfully.']);
    }
}
