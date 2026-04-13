<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::withCount('users')->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'description' => 'nullable|string'
        ]);

        Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description
        ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully!');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id,
            'description' => 'nullable|string'
        ]);

        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description
        ]);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully!');
    }

    public function destroy(Role $role)
    {
        if ($role->users_count > 0) {
            return redirect()->back()->with('error', 'Cannot delete role that has active users!');
        }

        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully!');
    }
}
