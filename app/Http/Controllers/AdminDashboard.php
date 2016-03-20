<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AdminDashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
    	return view('admin.home');
    }

    /**
     * Show menu administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function menus()
	{
	    return view('admin.menus');
	}

    /**
     * Show application settings panel.
     *
     * @return \Illuminate\Http\Response
     */
	function settings ()
	{
	    return view('admin.settings');
	}

    /**
     * Show pages administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function pages()
	{
	    return view('admin.pages');
	}

    /**
     * Show plugins administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function plugins()
	{
	    return view('admin.plugins');
	}

    /**
     * Show chunks administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function chunks()
	{
	    return view('admin.chunks');
	}

    /**
     * Show template administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function templates()
	{
	    return view('admin.templates');
	}

    /**
     * Show layout administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function layouts()
	{
	    return view('admin.layouts');
	}

    /**
     * Show theme administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function themes()
	{
	    return view('admin.themes');
	}

    /**
     * Show css task administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function css()
	{
	    return view('admin.css');
	}

    /**
     * Show typography administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function typography()
	{
	    return view('admin.typography');
	}

    /**
     * Show glyphs administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function glyphs()
	{
	    return view('admin.glyphs');
	}
	
	 /**
     * Show emojii administration panel.
     *
     * @return \Illuminate\Http\Response
     */
	function emojii()
	{
	    return view('admin.emojii');
	}
}
