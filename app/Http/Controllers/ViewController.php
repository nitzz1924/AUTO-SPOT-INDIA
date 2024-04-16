<?php
// {{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
namespace App\Http\Controllers;

use App\Models\Master;
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
    public function teamdashboard()
    {
        if (Auth::guard('teams')->check()) {
            return view('TeamPanel.dashboard');
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
        return view('TeamPanel.addteammember');
    }
}
