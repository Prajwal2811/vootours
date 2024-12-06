<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Documents;
use App\Models\EmergencyContact;
use App\Models\TaxCodes;
use App\Models\DoctorContact;
use Mail;



use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    public function authenticate(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.users');
        } else {
            session()->flash('error', 'Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();  // Logs out the admin user

        session()->flash('success', 'You have been logged out successfully.');
        
        return redirect()->route('admin.login');  // Redirects to the login page or wherever you'd like
    }

    public function updateAdminProfile(Request $request)
    {
        $user = Auth::user();
        $id  = $user->id;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        

        // Check if a profile picture has been uploaded
        if ($request->hasfile('profile_picture')) {
            $name = $request->file('profile_picture')->getClientOriginalName();
            $extension = $request->file('profile_picture')->getClientOriginalExtension();
            $fileNameToStore  = 'profile_picture_' . date('Ymdhis') . '.' . $extension;
            $path = asset('uploads/' . $fileNameToStore);
            $request->file('profile_picture')->move('uploads/', $fileNameToStore);
            // $decryptedId = $request->input('id');
            Admin::where('id', $id)->update(['profile' => $path]);
        }

        // Update other user details
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
         // Return a response (you can include the new image path in the response for frontend use)
        return redirect()->back()->with('success', 'Profile updated successfully');

    }

    public function changeAdminPassword(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'password' => 'required|string|min:8', // Minimum password length and confirmation
        ]);
    
        // Get the current authenticated user
        $user = Auth::user();
    
        // Optionally, verify if the user entered the correct old password before changing it
        // if (!Hash::check($request->old_password, $user->password)) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'The current password does not match.',
        //     ], 400);
        // }
    
        // Update the user's password
        $user->password = Hash::make($request->password);
    
        // Save the updated password
        $user->save();
    
        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Password changed successfully!',
        ]);
    }
    

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function forgetPassword()
    {
        return view('admin.foregt-password');
    }

    // Forgot Password Submission Function
    public function forgetPasswordSubmit(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ]);

        $email = $request->input('email');
        $admin = Admin::where('email', $email)->first();

        if ($admin) {
            // Generate a secure random password
            $password = "admin@123";  // Generates a 10-character random password

            // Update the admin's password
            $admin->password = Hash::make($password);
            $admin->save();

            return response()->json(['success' => true, 'message' => 'A new password has been sent to the provided email address.']);
        } else {
            return response()->json(['success' => false, 'message' => 'No user found with the provided email address.']);
        }
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }

    public function changeStatusToDeleted($userId)
    {
        $user = User::find($userId);
        if ($user) {
            // Update the user's status to "deleted"
            $user->status = 'deleted';  // Assuming you have a 'status' column
            $user->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }


    public function adminLockScreen()
    {
        return view('admin.lock-screen');
    }
    public function users()
    {
        $users = User::select('users.*')
                    ->orderBy('users.id', 'desc')
                    ->where('status',"!=", 'deleted')
                    ->get();

        // echo "<pre>";print_r($users); die;
	
		return view('admin.users', compact('users'));
    }
    public function addNewUser()
    {
        return view('admin.add-new-user');
    }

    // public function submitAddUser(Request $request)
    // {
    //     // Validate form data
    //     $validatedData = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'middle_name' => 'nullable|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'phone_number' => 'required|string|max:15',
    //         'country_code' => 'required',
    //     ]);


    //     $length = 10;
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $password = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $password .= $characters[rand(0, strlen($characters) - 1)];
    //     }

    //     // Create the user in the database
    //     $user = User::create([
    //         'first_name' => $validatedData['first_name'],
    //         'middle_name' => $validatedData['middle_name'],
    //         'last_name' => $validatedData['last_name'],
    //         'email' => $validatedData['email'],
    //         'phone_number' => $validatedData['country_code']."-".$validatedData['phone_number'],
    //         'status' => 'active',
    //         'password' => $password ,
    //     ]);

        
    //     // Check if the user was created successfully
    //     if ($user) {    
    //         // $msg = 'Test';
    //         // $emailid = $validatedData['email'];
    //         // Mail::send([], [], function ($message) use ($emailid, $msg) {
    //         //     $message->to($emailid)->subject("Welcome to the Biometric Passport Application – You're All Set!")->setBody($msg, 'text/html');
    //         // });
    //         // Return a JSON response for success
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'The user was added successfully and can now access the platform with their credentials.'
    //         ]);
            
    //     } else {
    //         // Return a JSON response for failure
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Failed to add user. Please try again.'
    //         ], 500);
    //     }
        
    // }




    public function submitAddUser(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'country_code' => 'required',
            'phone_number' => 'required|string|max:15',
        ]);
    
        // Generate a random password
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
    
        // External and internal URLs
        $externalurl = $validatedData['first_name'] . $validatedData['last_name'];
        $externalbase = "user/login/external_user/";
        $externalurl = asset($externalbase . $externalurl);
        // print_r($externalurl); die;
        

        $internalurl = $validatedData['first_name'] . $validatedData['last_name'];
        $internalbase = "user/login/";
        $internalurl = asset($internalbase . $internalurl);


        $check = $validatedData['first_name'] . $validatedData['last_name'];
        // Create the user in the database
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'country_code' => $validatedData['country_code'],
            'phone_number' => $validatedData['phone_number'],
            'status' => 'active',
            'password' => Hash::make($password),
            'pass' => $password,
            'profile_url'=> $externalurl,
            'profile_url_internal'=> $internalurl,
            'check'=> $check,
            'profile_pic'=> 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png',
        ]);
        
        // Check if the user was created successfully
        if ($user) {   
            $emailContent = "
                <p>Dear <strong>{$user->first_name} {$user->last_name}</strong>,</p>
            
                <p>Welcome aboard! 🎉 We're excited to have you join the Biometric Passport platform. Below are your account login details to get started:</p>
            
                <ul style='list-style-type: none; padding: 0;'>
                    <li><strong>✨ Registration Number:</strong> REG-{$user->id}</li>
                    <li><strong>📧 Username:</strong> {$user->email}</li>
                    <li><strong>🔑 Password:</strong> {$password}</li>
                </ul>
            
                <p>🌐 Here’s where you can access your account:</p>
                <ul style='list-style-type: none; padding: 0;'>
                    <li>🌎 <strong>External User Login:</strong> <a href='{$user->profile_url}' style='text-decoration: underline; color: #0a3859;'>Click here to log in</a></li>
                    <li>🏢 <strong>Internal User Login:</strong> <a href='{$user->profile_url_internal}' style='text-decoration: underline; color: #0a3859;'>Click here to log in</a></li>
                </ul>
            
                <p>If you have any questions or need assistance, our team is here to help!</p>
            
                <p>Thank you for being part of this journey. Let’s make great things happen!</p>
            
                <p>Best regards,<br/>The Biometric Passport Team</p>
            ";
        
            $emailid = $request->email; // Fetch the email ID from the request.
            
            Mail::html($emailContent, function ($message) use ($emailid) {
                $message->to($emailid) // Send the email to the recipient's address.
                        ->subject('New User Registration'); // Set the subject of the email.
            });
            
            return response()->json([
                'status' => 'success',
                'message' => 'The user was added successfully and can now access the platform with their credentials.'
            ]);
            
        } else {
            // Return a JSON response for failure
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to add user. Please try again.'
            ], 500);
        }
    }
    


    public function destroyUser($id)
    {
        // Find the user and update the status to 'deleted'
        $user = User::find($id);
        if ($user) {
            $user->update(['status' => 'deleted']);
        }

        // Redirect back with a success message
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }


    public function updateUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            $user->status = $request->status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'User status updated']);
        }
        return response()->json(['success' => false, 'message' => 'User not found']);
    }

        public function changeStatus(Request $request)
        {
            $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'status' => 'required|in:active,inactive',
            ]);

            $user = User::find($validated['user_id']);
            $user->status = $validated['status'];
            $user->save();

            return response()->json([
                'message' => 'User status updated successfully.',
                'status' => $user->status
            ]);
        }




    public function getUserList()
    {
        $users = User::select('*')->where('status', "!=", 'deleted')->paginate(10);
        return view('admin.partials-users', compact('users'))->render();
    }

    public function editUser($id)
    {
        // Find the user by ID
        $user = User::find($id);
        // Return the edit view and pass the user data
        return view('admin.edit-user', compact('user'));
    }


    public function externalData($id)
    {
        // Find the user by ID
        $userData = TaxCodes::select('*')->where('user_id', $id)->get();
        return view('admin.external-user-data', compact('userData'));
    }



    public function deleteUser($id)
	{
		// Begin a database transaction
		$deleteUser = User::find($id);
		// Update speaker status to 'delete'
		$deleteUser->status = 'deleted';
		$deleteUser->save();
		// Redirect back with success message
		return redirect()->back()->with('success', 'User has been deleted successfully.');
	
	}

    public function updateUser(Request $request)
    {
        // Validate incoming request data
        $userId = $request->input('userId');
    
        // Update user details
        $updateSuccess = User::where('id', $userId)->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'nationality' => $request->input('nationality'),
            'email' => $request->input('email'),
            'pemail' => $request->input('pemail'),
            'country_code' => $request->input('country_code'),
            'phone_number' => $request->input('phone_number'),
            'place_of_birth' => $request->input('place_of_birth') ?? null,
            'date_of_birth' => $request->input('date_of_birth'),
            'residence_address' => $request->input('residence_address') ?? null,
            'home_address' => $request->input('home_address') ?? null,
            'phone_unlock_code' => $request->input('phone_unlock_code') ?? null,
            'health_insurance_card_number' => $request->input('health_insurance_card_number') ?? null,
            'insurance_card_company' => $request->input('insurance_card_company') ?? null,
            'mutual_card_company' => $request->input('mutual_card_company') ?? null,
            'consent_blood_donation' => $request->input('consent_blood_donation') ?? null,
            'consent_organ_donation' => $request->input('consent_organ_donation') ?? null,
            'consent_bone_marrow_donation' => $request->input('consent_bone_marrow_donation') ?? null,
            'blood_group' => $request->input('blood_group') ?? null,
            'allergies' => $request->input('allergies') ?? null,
            'intolerances' => $request->input('intolerances') ?? null,
            'pathologies' => $request->input('pathologies') ?? null,
            'current_therapies' => $request->input('current_therapies') ?? null,
            'medications_in_use' => $request->input('medications_in_use') ?? null,
            'personal_family_doctor' => $request->input('family_doctor') ?? null,
            'vaccinations' => $request->input('vaccinations') ?? null,
            'prosthetics_medical_devices' => $request->input('prosthetics_medical_devices') ?? null,
            'transplants' => $request->input('transplants') ?? null,
            'last_place_of_stay' => $request->input('last_place_of_stay') ?? null,
            'note' => $request->input('note') ?? null,
        ]);
    
        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $fileNameToStore = 'profile_picture_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileNameToStore);
            $profilePicturePath = asset('uploads/' . $fileNameToStore);
            // Update profile picture in the database
            User::where('id', $userId)->update(['profile_pic' => $profilePicturePath]);
        }

        if ($request->hasFile('documents')) {
            $trainingFiles = $request->file('documents');
				foreach ($trainingFiles as $trainingFile) {
					$name = $trainingFile->getClientOriginalName();
					$fileNameToStore = asset('uploads/') . '/documents' . date('Ymdhis') . '.' . $name;
					$trainingFile->move('uploads/', $fileNameToStore);
                    $document = new Documents;
                    $document->user_id = $userId;
                    $document->documents_file = $fileNameToStore;
                    $document->documents_file_name = $request->document_name;
                    $document->save();
				}
        }

        

        if ($updateSuccess > 0 && $request->filled('e_country_code') && $request->filled('e_phone_number') && $request->filled('relation') && $request->filled('owner')) {
            $countryCodes = $request->input('e_country_code');
            $phoneNumbers = $request->input('e_phone_number');
            $relations = $request->input('relation');
            $owners = $request->input('owner');
        
            // Fetch existing emergency contacts for the user
            $existingContacts = EmergencyContact::where('user_id', $userId)->get();
        
            // Track updated phone numbers to handle deletions
            $newPhoneNumbers = [];
        
            foreach ($phoneNumbers as $index => $countryCode) {
                $countryCode = $countryCodes[$index];
                $phoneNumber = $phoneNumbers[$index];
                $relation = $relations[$index];
                $owner = $owners[$index];
        
                // Check if this contact already exists
                $existingContact = $existingContacts->firstWhere(function ($contact) use ($countryCode, $phoneNumber) {
                    return $contact->e_phone_number == $phoneNumber;
                });
        
                if ($existingContact) {
                    // Update existing contact
                    $existingContact->update([
                        'relation' => $relation,
                        'owners' => $owner,
                    ]);
                } else {
                    // Create new contact
                    EmergencyContact::create([
                        'user_id' => $userId,
                        'e_country_code' => $countryCode,
                        'e_phone_number' => $phoneNumber,
                        'relation' => $relation,
                        'owners' => $owner,
                    ]);
                }
        
                // Add to the list of updated/created phone numbers
                $newPhoneNumbers[] = $phoneNumber;
            }
        
            // Delete contacts that are not in the new list
            $existingContacts->each(function ($contact) use ($newPhoneNumbers) {
                if (!in_array($contact->e_phone_number, $newPhoneNumbers)) {
                    $contact->delete();
                }
            });
        }


        // Handle Emergency Contacts
        if ($updateSuccess > 0 && $request->filled('d_country_code') && $request->filled('d_phone_number') && $request->filled('doctor_type')) {
            // Get input values
            $docCountryCode = $request->input('d_country_code');
            $docPhoneNumbers = $request->input('d_phone_number');
            $docRelations = $request->input('doctor_type');
            $docOwners = $request->input('owner_doc');
            
            // Get existing doctor contacts
            $existingContacts = DoctorContact::where('user_id', $userId)->get();
        
            // Create a map of existing contacts for quick lookup by phone number
            $existingContactsMap = $existingContacts->keyBy('d_phone_number');
        
            foreach ($docPhoneNumbers as $index => $phoneNumber) {
                // Check if the contact already exists
                $existingContact = $existingContactsMap->get($phoneNumber);
        
                if ($existingContact) {
                    // If the contact exists, update the doctor type
                    $existingContact->update([
                        'doctor_type' => $docRelations[$index],
                        'owner_doc' => $docOwners[$index] ?? null, // Ensure owner_doc is set if available
                    ]);
                } else {
                    // If the contact doesn't exist, create a new one
                    DoctorContact::create([
                        'user_id' => $userId,
                        'd_country_code' => $docCountryCode[$index], // Assuming this is an array with codes
                        'd_phone_number' => $phoneNumber,
                        'doctor_type' => $docRelations[$index],
                        'owner_doc' => $docOwners[$index] ?? null, // Ensure owner_doc is set if available
                    ]);
                }
            }
        
            // Collect the new phone numbers for comparison
            $newPhoneNumbers = collect($docPhoneNumbers);
        
            // Delete removed contacts (those that no longer exist in the new phone number list)
            $existingContacts->each(function ($contact) use ($newPhoneNumbers) {
                if (!$newPhoneNumbers->contains($contact->d_phone_number)) {
                    $contact->delete();
                }
            });
        }
        

        
        // Return response
        return $updateSuccess > 0
            ? redirect()->back()->with('success', 'Data has been updated successfully.')
            : redirect()->back()->with('error', 'Failed to update the data. Please try again.');
    }
    


    
}
