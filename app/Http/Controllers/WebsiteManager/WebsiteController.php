<?php

namespace App\Http\Controllers\WebsiteManager;

use App\Http\Controllers\Controller;
use App\Models\BoardCategory;
use App\Models\BoardMembers;
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

    public function GoverningBoardView()
    {
        $listboard = BoardMembers::orderBy('name','ASC')->get();
        $listcat = BoardCategory::all();
        return view('website-manager.Governing-Board',
        ['listcat'=>$listcat,'listboard'=>$listboard]
    
    );
    }

    public function addBoardMember(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'category' => 'required',
            'position' => 'required'
        ]);


        

            $insertCat = new BoardMembers();
            if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/boardmembers/',$filename);
            $insertCat->photo = 'uploads/boardmembers/'.$filename;
          }
            $insertCat->category_id = trim($request->category);
            $insertCat->name = trim($request->name);
            $insertCat->position = trim($request->position);
            $insertCat->education = trim($request->education);
            $insertCat->bio = trim($request->bio);
            $insertCat->experience = trim($request->experience);
           
            $insertCat->status = $request->status;
          
            $status = $insertCat->save();

            return $status ? back()->with('message_success','Board Member added successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

      public function destroymember(string $id)
    {
        BoardMembers ::where('id',$id)->delete();
        

        return redirect('Governing-Board')->with('message_success','Member deleted successfully!');
    }

    public function editBoarMembersprofView($id){
         $decodeID = Crypt::decrypt($id);
         
        $data = BoardMembers::find($decodeID);
        $list = BoardMembers::orderBy('name','ASC')->get();
         $listcat = BoardCategory::all();
        return view('website-manager.edit-board-member',
        ['list'=>$list,
        'data'=>$data,
        'id'=>$id,
        'listcat'=>$listcat
    
        ]);
    }


    public function editBoardMember(Request $request, $id)
    {


         $request->validate([
            'name' => 'required',
            'status' => 'required',
            'category' => 'required',
            'position' => 'required'
        ]);


          $decodeId = Crypt::decrypt($id);
         $insertCat =  BoardMembers::find($decodeId);

            
            if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/boardmembers/',$filename);
            $insertCat->photo = 'uploads/boardmembers/'.$filename;
          }
            $insertCat->category_id = trim($request->category);
            $insertCat->name = trim($request->name);
            $insertCat->position = trim($request->position);
            $insertCat->education = trim($request->education);
            $insertCat->bio = trim($request->bio);
            $insertCat->experience = trim($request->experience);
           
            $insertCat->status = $request->status;
          
            $status = $insertCat->save();

            return $status ? back()->with('message_success','Board Member updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function BoarMembersprofView($id){
         $decodeID = Crypt::decrypt($id);
         
        $data = BoardMembers::find($decodeID);
        $list = BoardMembers::orderBy('name','ASC')->get();
         $listcat = BoardCategory::all();
        return view('website-manager.view-board-member',
        ['list'=>$list,
        'data'=>$data,
        'id'=>$id,
        'listcat'=>$listcat
    
        ]);
    }
        
}
