<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleFormRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('backend.roles.create');
    }

    public function store(RoleFormRequest $request)
    {
        Role::create(['name' => $request->get('name')]);
        return redirect('/admin/roles/create')->with('status', 'A new role has been created!');
    }
}
