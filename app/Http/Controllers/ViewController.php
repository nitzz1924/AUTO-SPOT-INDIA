<?php
// {{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
namespace App\Http\Controllers;
use App\Models\Master;
use App\Models\Team;
use Illuminate\Http\Request;

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
        return view('auth.UserAuth.teamregister',compact('userdata'));
    }

    public function thankyouview()
    {
        return view('auth.UserAuth.thankyou');
    }
}
