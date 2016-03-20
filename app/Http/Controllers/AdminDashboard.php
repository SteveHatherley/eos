<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminDashboard extends Controller
{
    //

    function index()
    {
    	return view('admin.home');
    }

	function menus()
	{
	    return view('admin.menus');
	}

	function settings ()
	{
	    return view('admin.settings');
	}

	function pages()
	{
	    return view('admin.pages');
	}

	function plugins()
	{
	    return view('admin.plugins');
	}

	function chunks()
	{
	    return view('admin.chunks');
	}

	function templates()
	{
	    return view('admin.templates');
	}

	function layouts()
	{
	    return view('admin.layouts');
	}

	function themes()
	{
	    return view('admin.themes');
	}

	function css()
	{
	    return view('admin.css');
	}

	function typography()
	{
	    return view('admin.typography');
	}

	function glyphs()
	{
	    return view('admin.glyphs');
	}
	
	function emojii()
	{
	    return view('admin.emojii');
	}
}
