<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Customer;
use App\Models\OrderedProject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    public function add_project_view(){
        return view('project.add_projectview');
    }

    public function add_project(Request $request){
        $project = new Project();
        
        $required = [
            'idproject'   => 'required',
            'projectname' => 'required',
            'description' => 'required',
            'picture'     => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
            'start_date'  => 'required',
            'finish_date' => 'required'
        ];

        $validator = Validator::make( $request->all(), $required );
        if( $validator->fails() ){
            return redirect('/add_projectview')->with('error', $validator->errors()->first());
        }
        
        $project->idproject = $request->idproject;
        $project->projectname = $request->projectname;
        $project->description = $request->description;

        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('picture'),$fileName);
            $fileName = $this->ResizeImage($fileName,59,50);
            $project->picture = $fileName;
        }
       
        $project->start_date = $request->start_date;
        $project->finish_date = $request->finish_date;
       
        $project->save();
        
        return redirect('/project')->with('success','insert project success');
    }


    public function get_project(){
        $projects = Project::all();
        return view('project.get_project',compact('projects'));
    }

    public function get_project_customer(){
        $projects_customer = Project::all();
        return view('project.get_project_customer',compact('projects_customer'));

    }

    public function order_project($idproject,Request $request){
      
        if(Auth::check()){
            $iduserlog = Auth::user()->id;
        }

        $customer_id = Customer::select("idcustomer")
        ->where("user",$iduserlog)
        ->first();

        $selected_project = Project::select("idproject","projectname")
        ->where("idproject",$idproject)
        ->first();

        $order_project = new OrderedProject();
        $order_project->idordered = Str::random(8);
        $order_project->quantity = $request->quantity;
        $order_project->orderdate = $request->orderdate;
        

        

    }

    public function choose_project($idproject){
        $project_id = Project::select('idproject','projectname','description','picture','start_date','finish_date')
        ->where('idproject',$idproject)
        ->first();
        return view('project.selected_project',compact('project_id'));
    }

}
