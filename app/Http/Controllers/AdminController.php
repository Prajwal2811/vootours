<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Admin;
class AdminController extends Controller
{
    public function authenticate(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function Alladmins()
    {
        return view('admin.admin-list');
    }

     public function creatAdmin ()
    {
        return view('admin.create-admin ');
    }


    public function Allagents()
    {
        return view('admin.agents-list');
    }


    public function AllSubAgents()
    {
        return view('admin.sub-agents-list');
    }

    public function creatAgents ()
    {
        return view('admin.create-agents');
    }

    public function creatSubAgents ()
    {
        return view('admin.create-sub-agents');
    }


    public function AllAgencies()
    {
        return view('admin.agencies -list');
    }


    public function createAgencies ()
    {
        return view('admin.create-agencies');
    }


    public function AllRole()
    {
        return view('admin.role-list');
    }


    public function createRole ()
    {
        return view('admin.create-role');
    }

    public function AllPackages()
    {
        return view('admin.packages-list');
    }

    public function createPackages ()
    {
        return view('admin.create-packages');
    }

    public function AllTransportation()
    {
        return view('admin.transportation-list');
    }

    public function createTransportation ()
    {
        return view('admin.create-transportation');
    }


    public function AllPricingSlabs()
    {
        return view('admin.pricing-slabs-list');
    }

    public function createPricingSlabs ()
    {
        return view('admin.create-pricing-slabs');
    }


    public function AllBookings()
    {
        return view('admin.bookings-list');
    }

    public function createBookings ()
    {
        return view('admin.create-bookings');
    }


    public function adminSignOut()
    {
        Auth::guard('admin')->logout();  // Logs out the admin user

        session()->flash('success', 'You have been logged out successfully.');
        
        return redirect()->route('admin.login');  // Redirects to the login page or wherever you'd like
    }

}
