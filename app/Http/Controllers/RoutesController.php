<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoutesController extends Controller
{
    public function createcitizen(Request $request)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json'
        ])->post('http://apicdc.me/api/Citizen', [
            'name'=>$request['name'],
            'sex'=>$request['sex'],
            'dob'=>$request['dob'],
            'nic'=>$request['nic'],
            'mobile'=>$request['mobile'],
            'address'=>$request['address'],
            'profession'=>$request['profession'],
            'affiliation'=>$request['affiliation'],
            'health_status'=>$request['health_status'],
            'cl_latitude'=>$request['cl_latitude'],
            'cl_longitude'=>$request['cl_longitude'],
            'category'=>$request['category'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'password_confirmation'=>$request['password_confirmation'],
        ]);
        if (isset($response['user']))
        {
            $access_token = $response['access_token'];
            session(['access_token' => $access_token]);
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/Citizen');
            // return $response;
            return view('Citizen.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function createphi(Request $request)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json'
        ])->post('http://apicdc.me/api/PHI', [
            'name'=>$request['name'],
            'nic'=>$request['nic'],
            'phi_id'=>$request['phi_id'],
            'contact'=>$request['contact'],
            'region'=>$request['region'],
            'category'=>$request['category'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'password_confirmation'=>$request['password_confirmation'],
        ]);
        if (isset($response['user']))
        {
            $access_token = $response['access_token'];
            session(['access_token' => $access_token]);
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/PHI');
            return $response;
            return view('Citizen.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function login(Request $request)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json'
        ])->post('http://apicdc.me/api/login', [
            'email'=>$request['email'],
            'password'=>$request['password']
        ]);
        // return $response;
        if (isset($response['user']))
        {
            $access_token = $response['access_token'];
            session(['access_token' => $access_token]);

            if ($response['user']=="Citizen")
            {
                $response = Http::withHeaders([
                    'accept' => 'application/json',
                    'authorization' => "Bearer $access_token"
                ])->get('http://apicdc.me/api/Citizen');
                // return $response;
                return view('Citizen.Dashboard')->with('response', $response);
            }
            elseif ($response['user']=="PHI")
            {
                $response = Http::withHeaders([
                    'accept' => 'application/json',
                    'authorization' => "Bearer $access_token"
                ])->get('http://apicdc.me/api/PHI');
                // return $response;
                return view('PHI.Dashboard')->with('response', $response);
            }
        }
        else
        {
            return back();
        }
    }
    public function logout()
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/logout");
        if (isset($response['Status']))
        {
            return view('Main.index');
        }
        else
        {
            return back();
        }
    }
    public function editcitizen($id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Editcitizen$id");
        return view('Citizen.Edit')->with('response', $response);
    }
    public function updatecitizen(Request $request)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->put('http://apicdc.me/api/EditCitizen', [
            'user_id'=>$request['user_id'],
            'mobile'=>$request['mobile'],
            'address'=>$request['address'],
            'profession'=>$request['profession'],
            'affiliation'=>$request['affiliation'],
            'health_status'=>$request['health_status'],
        ]);
        // return $response;
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/Citizen');
            // return $response;
            return view('Citizen.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function opencam()
    {

    }
    public function editlocid($id)
    {
        $access_token = session('access_token', 'default value');
        return view('Qr.QrMap')->with('id', $id);
    }
    public function editmapid($id)
    {
        $access_token = session('access_token', 'default value');
        return view('Qr.Map')->with('id', $id);
    }
    public function updatemap(Request $request,$id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->put("http://apicdc.me/api/Citizens/$id", [
            'cl_latitude'=>$request['cl_latitude'],
            'cl_longitude'=>$request['cl_longitude'],
        ]);
        // return $response;
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/Citizen');
            // return $response;
            return view('Citizen.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function editphi($id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/PHI$id");
        return view('PHI.Edit')->with('response', $response);
    }
    public function updatephi(Request $request)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->put('http://apicdc.me/api/PHIS', [
            'user_id'=>$request['user_id'],
            'contact'=>$request['contact'],
            'region'=>$request['region'],
        ]);
        // return $response;
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/PHI');
            // return $response;
            return view('PHI.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function viewcitizen($id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Citizen/$id/");
        // return $response;
        return view('PHI.Citizen_dashboard')->with('response', $response);
    }
    public function viewcontacts($id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Citizens/$id/contacts");
        // return $response;
        return view('Citizen.Contacts')->with('response', $response);
    }
    public function viewlocations($id)
    {
        $access_token = session('access_token', 'default value');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Location/$id");
        // return $response;
        return view('Citizen.Locations')->with('response', $response);
    }
    public function reportstore(Request $request)
    {
        $access_token = session('access_token', 'default value');
        if ($request->hasFile('file')) {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->attach(
                'file', file_get_contents($request->file), $request['file'])
            ->post('http://apicdc.me/api/Report', [
                'citizen_id'=>$request['citizen_id'],
                'status'=>$request['status'],
                'file'=>$request->file
            ]);
        }
        $id = $request['id'];
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get("http://apicdc.me/api/Citizen/$id/");
            // return $response;
            return view('PHI.Citizen_dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function positive($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Positive/$id");

        if (isset($response['Status']))
        {
            return back();
        }
        else
        {
            return back();
        }
    }
    public function negative($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Negative/$id");

        if (isset($response['Status']))
        {
            return back();
        }
        else
        {
            return back();
        }
    }
    public function recovered($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->get("http://apicdc.me/api/Recovered/$id");

        if (isset($response['Status']))
        {
            return back();
        }
        else
        {
            return back();
        }
    }
    public function destroy($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->delete("http://apicdc.me/api/Citizens/$id");

        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://apicdc.me/api/PHI');
            // return $response;
            return view('PHI.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function search(Request $request)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->post('http://apicdc.me/api/Search', [
            'nic'=>$request['nic'],
        ]);
        if (isset($response['user']))
        {
            return view('PHI.Dashboard')->with('response', $response);
        }
        else
        {
            return back();
        }
    }

    public function QR(Request $request)
    {
        $response = Http::post('http://apicdc.me/api/QR', [
            'name'=>$request['name'],
            'contact'=>$request['contact'],
            'address'=>$request['address'],
            'latitude'=>$request['latitude'],
            'longitude'=>$request['longitude'],
        ]);
        if (isset($response))
        {
            return view('QR.View')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function ViewQR($id)
    {
        $response = Http::get("http://apicdc.me/api/QR/$id");
        if (isset($response))
        {
            return view('QR.View')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
}
