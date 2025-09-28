<?php

namespace App\Http\Controllers\WebsiteManager;

use App\Http\Controllers\Controller;
use App\Models\BoardCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class WebsiteController extends Controller
{
    public function addBoarMembersView()
    {
        $list = BoardCategory::orderBy('name','ASC')->get();
        return view('website-manager.Board-Members',
        ['list'=>$list
    
        ]);
    }

    public function addBoardTitle(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);


        if(BoardCategory::where('name',$request->name)->get()->count() > 0){

            return back()->with('message_error','Record already exist');

        }else{

            $insertCat = new BoardCategory();
            $insertCat->name = trim($request->name);
            $insertCat->status = $request->status;
            ;
            $status = $insertCat->save();

            return $status ? back()->with('message_success','Board Title added successfully') : back()->with('message_error','Something went wrong, please try again.');


        }
    }

    public function editBoarMembersView($id)
    {

        $decodeID = Crypt::decrypt($id);
         
        $data = BoardCategory::find($decodeID);
        $list = BoardCategory::orderBy('name','ASC')->get();
        return view('website-manager.edit-board-category',
        ['list'=>$list,
        'data'=>$data,
        'id'=>$id
    
        ]);
    }

    public function editBoardTitle(Request $request, $id)
    {
         $decodeID = Crypt::decrypt($id);

        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);


        $insertCat =  BoardCategory::find($decodeID);
        $insertCat->name = trim($request->name);
        
        $insertCat->status = $request->status;
        
        $status = $insertCat->update();

        return $status ? back()->with('message_success','Board Title updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }
}
