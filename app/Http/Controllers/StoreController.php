<?php

namespace App\Http\Controllers;
#{{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
use App\Models\Team;
use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Auth;
class StoreController extends Controller
{
    public function signup_submit(Request $req)
    {
        // dd($req->all());
        $randomNumber = rand(100000, 999999);
        $data = new Team;
        $data->fullname=$req->input('fullname');
        $data->mobilenumber=$req->input('mobilenumber');
        $data->verifyotp=$randomNumber;
        $data->save();
        $responseData = [
            'msg' => 'success',
            'data' => $data->toArray(),
        ];
        return response()->json($responseData);
    }

    public function verifteamyotp(Request $request)
    {
        //dd($request->all());
        $reqdata = [$request->digit1,$request->digit2,$request->digit3,$request->digit4,$request->digit5,$request->digit6];
        $optnumber = implode($reqdata);
        // dd($optnumber);
        $teamdata = Team::where('id', $request->id)->where('verifyotp', $optnumber)->first();
        if($teamdata){
            $teamdata->update([
                'verifystatus' => "1",
            ]);
            return redirect()->route('viewteamregister',['id'=>$request->id]);
        }else{
            return back()->with('failure','Enter Valid Details..!!!!!!!!');
        }
    }

    public function registerteam(Request $req)
    {
        // dd($req->all());
        try{
            $req->validate([
                'teamname'=> 'required',
                'email'=> 'required',
                'password'=>'required',
            ]);

            Team::where('id', $req->id)->update([
                'teamid' => $req->teamid,
                'teamname' => $req->teamname,
                'captainname' => $req->captainname,
                'institutionname' => $req->institutionname,
                'coachname' => $req->coachname,
                'institutetype' => $req->instittutetype,
                'instituterecognizedby' => $req->instituterecognizedby,
                'email' => $req->email,
                'teamsize' => $req->teamsize,
                'alternatecontactnumber' => $req->alternatecontactnumber,
                'communicationaddress' => $req->communicationaddress,
                'city' => $req->city,
                'state' => $req->state,
                'buggy' => $req->buggy,
                'quad' => $req->quad,
                'password' => bcrypt($req->password),
            ]);
            return redirect()->route('thankyouview');
        }catch(Exception $e){
             return back()->with('error', $e->getMessage());
            //  return redirect()->route('viewteamregister')->with('error', 'Invalid Details Try Again...');
        }
    }

    public function teamauthlogin(Request $request)
    {
        // dd($request->vendoremail);
        $credentials = $request->only('teamid', 'password');
        $data = Team::where('teamid', $credentials)->get();

        if ($data && Auth::guard('teams')->attempt($credentials)) {
            return redirect()->route('teamdashboard')->with('success', 'Login successful!');
        }
        return redirect()->route('teamlogin')->with('error', 'Invalid credentials Try Again');
    }

    public function logoutteamlogin()
    {
        \Session::flush();
        Auth::guard('teams')->logout();
        return redirect()->route('teamlogin');
    }

    public function createteammember(Request $req)
    {
        // dd($req->all());
        try {
            $req->validate([
                'emailaddress' => 'unique:members',
                'mobile' => 'required|max_digits:10',
            ]);
            $imagePath = null;
            $imagePathinvoice = null;

            //Images Uploading
            if ($req->hasFile('memberphoto')) {
                $image = $req->file('memberphoto');
                $imagePath = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePath);
            }
            if ($req->hasFile('idproofmember')) {
                $image = $req->file('idproofmember');
                $imagePathinvoice = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathinvoice);
            }

            Member::create([
                'teamid' => $req->teamid,
                'member' => $req->membername,
                'emailaddress' => $req->emailaddress,
                'mobile' => $req->mobile,
                'age' => $req->age,
                'role' => $req->role,
                'gender' => $req->gender,
                'graduationyear' => $req->graduationyear,
                'bloodgroup' => $req->bloodgroup,
                'memberphoto' => $imagePath,
                'idproofmember' => $imagePathinvoice,
            ]);
            return redirect()->route('teammemberaddview')->with('success', 'Member Added!!!!');
        }catch (Exception $bv) {
            //return redirect()->route('teammemberaddview')->with('error', $bv->getMessage());
            return redirect()->route('teammemberaddview')->with('error', 'Not added Try Again...');
        }
    }
}
