<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\models\Project;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{   public  function list(){
    $data['projectList'] = Project::orderBy('id', 'asc')->where('status', '1')->get();
    $data['title_page']= "Tất cả dự án";
    
    return view('project.list',$data);
}
    public function detail($id,$slug){
        $data['project_details'] = Project::where(['id' => $id,'slug'=>$slug])->first();
        return view('project.detail',$data);
    }
}
