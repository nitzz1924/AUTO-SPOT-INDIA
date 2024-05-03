<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;
use Auth;

class EditController extends Controller
{
    public function memberedit($id)
    {
        $teams = Member::where('id', '=', $id)->get();
        // dd($teams);
        return view('TeamPanel.teamedit', compact('teams'));
    }

    public function update_team_member(Request $request)
    {
        //  dd($request->all());
        $imagePathinvoice = null;
        $imagePath = null;

        //Images Uploading
        if ($request->hasFile('memberphoto')) {
            $image1 = $request->file('memberphoto');
            $imagePath = time() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads'), $imagePath);
        }
        if ($request->hasFile('idproofmember')) {
            $image2 = $request->file('idproofmember');
            $imagePathinvoice = time() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('uploads'), $imagePathinvoice);
        }
        try {
            Member::where('id', $request->teamid)->update([
                'member' => $request->membername,
                'emailaddress' => $request->emailaddress,
                'mobile' => $request->mobile,
                'age' => $request->age,
                'role' => $request->role,
                'gender' => $request->gender,
                'graduationyear' => $request->graduationyear,
                'bloodgroup' => $request->bloodgroup,
                'memberphoto' => $imagePath == null ? $request->pmemberphoto : $imagePath,
                'idproofmember' => $imagePathinvoice == null ? $request->pidmember : $imagePathinvoice,
            ]);
            return redirect()->route('allteammembersview')->with('success', "Updated..!!!");
        } catch (\Exception $e) {
            return redirect()->route('allteammembersview')->with('error', $e->getMessage());
            //return redirect()->route('allteammembersview')->with('error', 'Member Not Updated..Try Again.....');
        }
    }

    public function deleteteamcard(Request $req)
    {
        $id = $req->input('id');
        $index = $req->input('index');
        $member = Member::find($id);
        if ($member) {
            $member->delete();
            return response()->json(['message' => 'Member deleted successfully']);
        } else {
            return response()->json(['error' => 'Member not found'], 404);
        }
    }
}
