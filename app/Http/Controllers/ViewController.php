<?php
// {{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Auth;

class ViewController extends Controller
{
    public function viewmaster(Request $res)
    {
        $masterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.master', compact('masterdata'));
    }

    public function viewsubmaster()
    {
        $masterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster', compact('masterdata'));
    }

    public function viewteamsignup()
    {
        return view('auth.UserAuth.teamsignup');
    }

    public function viewteamregister(Request $request)
    {
        $userdata = Team::find($request->id);
        return view('auth.UserAuth.teamregister', compact('userdata'));
    }

    public function thankyouview()
    {
        return view('auth.UserAuth.thankyou');
    }
    public function teamdashboard(Request $req)
    {
        if (Auth::guard('teams')->check()) {
            $teamdata = Auth::guard('teams')->user();
            $teammembers = Member::where('teamid',$req->teamid)->get();
            return view('TeamPanel.dashboard',compact('teamdata','teammembers'));
        } else {
            return redirect()->route('teamlogin');
        }
    }
    public function teamlogin()
    {
        return view('auth.TeamAuth.login');
    }

    public function teammemberaddview(Request $request)
    {
         $teamdata = Auth::guard('teams')->user();
        return view('TeamPanel.addteammember',compact('teamdata'));
    }

    public function allteammembersview(Request $request)
    {
        $teamdata = Auth::guard('teams')->user();
        $teammembers = Member::where('teamid',$teamdata->teamid)->get();
        return view('TeamPanel.viewmem',compact('teammembers'));
    }

}
