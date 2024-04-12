<?php
// {{-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --}}
namespace App\Http\Controllers;
use App\Models\Master;
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
}
