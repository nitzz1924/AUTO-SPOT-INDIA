<?php
#-- --------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏------------------------------------- --

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Master;
class MasterController extends Controller
{
    public function addmaster(Request $req)
    {
        //  dd($req->all());
        try {
            $req->validate([
                'label' => 'required',
                'value' => 'required',
            ]);

            $master = new Master;
            $master->label = $req->label;
            $master->value = $req->value;
            $master->type = 'Master';
            $master->status = 'A';
            $master->save();
            return redirect()->route('viewmaster')->with('success', "Master Inserted Successfully..!!!!");
        } catch (\Exception $m) {
            return redirect()->route('viewmaster')->with("error", " Master Not Inserted..Try Again");
        }
    }

    public function deletemaster($id, $type)
    {
        $records = Master::find($id);
        if ($type == 'masterpage') {
            $records->delete();
            return redirect()->route('viewmaster')->with('success', "Deleted Successfully..!!!!");
        } else if ($type == "subcatpage") {
            $records->delete();
            return redirect()->route('viewsubmaster')->with('success', "Deleted");
        } else
            return back()->with('failure', "not Deleted");
    }

    public function getmastercatajax($selectedCat)
    {
        $data = Master::where('type', '=', $selectedCat)->get();
        return response()->json($data);
    }

    public function createsubmaster(Request $req)
    {
        //dd($req->all());
        try {
            $req->validate([
                'type' => 'required',
                'label' => 'required',
                'value' => 'required',
            ]);
            $master = new Master;
            $master->label = $req->label;
            $master->value = $req->value;
            $master->type = $req->type;
            $master->save();
            return back()->with('success', 'Sub-Master Inserted Successfully..!!!!');
        } catch (\Exception $sm) {
            return redirect()->route('viewsubmaster')->with('failure', 'Sub-Master Not Inserted Try Again...');
        }
    }
}
