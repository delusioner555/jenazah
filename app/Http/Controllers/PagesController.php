<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Dashboard Page
    public function dashboard()
    {
        return view('dashboard');
    }

    public function basicUI()
    {
        return view('pages.basic-ui');
    }

    public function tables()
    {
        return view('pages.tables');
    }

    public function charts()
    {
        return view('pages.charts');
    }

    public function icons()
    {
        return view('pages.icons');
    }


    public function blank()
    {
        return view('pages.blank');
    }

    // CRUD for Makam
    public function index()
    {
        return view('pages.makam.index');
    }

    public function create()
    {
        return view('pages.makam.create');
    }

    public function store(Request $request)
    {
        // Logic to store new makam
    }

    public function edit($id)
    {
        return view('pages.makam.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update makam
    }

    public function destroy($id)
    {
        // Logic to delete makam
    }

    // Login Page
    public function login()
    {
        return view('pages.login');
    }
}
