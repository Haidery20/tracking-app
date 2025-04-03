<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->paginate(10);
        $totalUsers = User::count();
        $activeUsers = User::where('status', 'active')->count();
        $staffCount = User::whereHas('roles', function($q) {
            $q->where('name', 'staff');
        })->count();

        return view('admin.dashboard', compact('users', 'totalUsers', 'activeUsers', 'staffCount'));
    }

    public function createStaff(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'active',
        ]);

        $user->roles()->attach(Role::where('name', 'staff')->first());

        return redirect()->back()->with('success', 'Staff member created successfully');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        
        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'Cannot delete admin users');
        }

        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function updateUserStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'Cannot modify admin status');
        }

        $user->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'User status updated successfully');
    }
}
