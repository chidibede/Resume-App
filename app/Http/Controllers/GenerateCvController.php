<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Language;
use App\Currentjob;
use App\Work;
use App\Education;
use App\Volunteer;
use App\Project;

class GenerateCvController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generate_cv(){

        
        $user = auth()->user();
        $skills = Skill::where('user_id', '=', $user->id)->get();
        $languages = Language::where('user_id', '=', $user->id)->get();
        $current_jobs = Currentjob::where('user_id', '=', $user->id)->get();
        $former_jobs = Work::where('user_id', '=', $user->id)->get();
        $educations = Education::where('user_id', '=', $user->id)->get();
        $volunteers = Volunteer::where('user_id', '=', $user->id)->get();
        $projects = Project::where('user_id', '=', $user->id)->get();

        // This variable controls the visibility of current job form
        $currentJobRowCount = $current_jobs->count();
    
   
        $data = [
            'skills'=> $skills,
            'languages' => $languages,
            'current_jobs' => $current_jobs,
            'former_jobs' => $former_jobs,
            'educations' => $educations,
            'volunteers' => $volunteers,
            'projects' => $projects,
            'currentJobRowCount' => $currentJobRowCount,
            'user'=> $user
        ];
        return view('pages.generate_cv', $data);
    }


    public function updateProfession(Request $request) {

        $user = auth()->user();
        $user->profession = $request->input('profession');
        $user->save();

        return response()->json(['success'=>'Profession updated','data'=> $request->profession]);
    }

    public function updateLocation(Request $request) {

        $user = auth()->user();
        $user->nationality = ucfirst($request->input('nationality'));
        $user->location = ucfirst($request->input('location'));
        $user->save();

        return response()->json(['success'=>'Location updated','data'=> [$request->location, $request->nationality]]);
    }

    public function updateEmail(Request $request) {

        $user = auth()->user();
        $user->cv_email = $request->input('email');
        $user->save();

        return response()->json(['success'=>'Email updated','data'=> $request->email]);
    }

    public function updatePhone(Request $request) {

        $user = auth()->user();
        $user->phone_number = $request->input('phone');
        $user->save();

        return response()->json(['success'=>'Phone updated','data'=> $request->phone]);
    }


    // Skills Controller
    public function createSkills(Request $request) {

        $skill = new Skill();
        $skill->skill_name = ucfirst($request->get('skill_name'));
        $skill->user_id = auth()->user()->id;
        $skill_level = $request->get('level');
        $skill_level = str_replace('%', '', $skill_level);
        $skill->level = $skill_level;
        $skill->save ();

        return response()->json(['success'=> 'Skills updated']);
    }


    public function updateSkills(Request $request, $id) {

        $skill = Skill::find($id);
        $skill->skill_name = ucfirst($request->get('skill_name'));
        $skill_level = $request->get('level');
        $skill_level = str_replace('%', '', $skill_level);
        $skill->level = $skill_level;
        $skill->save ();
        return response()->json(['success'=> 'Skills updated']);
       
   }

    // Languages Controller
    public function createLanguages(Request $request) {

        $language = new Language();
        $language->language_name = ucfirst($request->get('language_name'));
        $language->user_id = auth()->user()->id;
        $language_level = $request->get('level');
        $language_level = str_replace('%', '', $language_level);
        $language->level = $language_level;
        $language->save ();
        // return redirect('/generate_cv')->with('success', '  updated successfully');
        return response()->json(['success'=> 'Language updated']);
    }


        public function updateLanguages(Request $request, $id) {

            $language = Language::find($id);
            $language->language_name = ucfirst($request->get('language_name'));
            $language_level = $request->get('level');
            $language_level = str_replace('%', '', $language_level);
            $language->level = $language_level;

            $language->save ();
            return response()->json(['success'=> 'Language updated']);
        
        }


        // Current Jobs Controller
        public function createCurrentJob(Request $request) {

            $current_job = new Currentjob();
            $current_job->job_title = ucfirst($request->get('job_title'));
            $current_job->user_id = auth()->user()->id;
            $current_job->employer = ucfirst($request->get('employer'));
            $current_job->location = ucfirst($request->get('location'));
            $current_job->start_date = $request->get('start_date');
            $current_job->job_description = ucfirst($request->get('job_description'));
            $current_job->save();

            return response()->json(['success'=> 'Current Job updated']);
        }

        public function updateCurrentJob(Request $request, $id) {

            $current_job = Currentjob::find($id);
            $current_job->job_title = ucfirst($request->get('job_title'));
            $current_job->employer = ucfirst($request->get('employer'));
            $current_job->location = ucfirst($request->get('location'));
            $current_job->start_date = $request->get('start_date');
            $current_job->job_description = ucfirst($request->get('job_description'));
            $current_job->save();

            return response()->json(['success'=> 'Current Job updated']);

        }

            // Current Jobs Controller
        public function createFormerJobs(Request $request) {

            $former_job = new Work();
            $former_job->job_title = ucfirst($request->get('job_title'));
            $former_job->user_id = auth()->user()->id;
            $former_job->employer = ucfirst($request->get('employer'));
            $former_job->location = ucfirst($request->get('location'));
            $former_job->start_date = $request->get('start_date');
            $former_job->end_date = $request->get('end_date');
            $former_job->job_description = ucfirst($request->get('job_description'));
            $former_job->save();

            return response()->json(['success'=> 'Former Job updated']);
        }

        public function updateFormerJobs(Request $request, $id) {

            $former_job = Work::find($id);
            $former_job->job_title = ucfirst($request->get('job_title'));
            $former_job->employer = ucfirst($request->get('employer'));
            $former_job->location = ucfirst($request->get('location'));
            $former_job->start_date = $request->get('start_date');
            $former_job->job_description = ucfirst($request->get('job_description'));
            $former_job->save();

            return response()->json(['success'=> 'Former Job updated']);
        
    }


       // Education Controller
       public function createEducation(Request $request) {

        $education = new Education();
        $education->school = ucfirst($request->get('school'));
        $education->user_id = auth()->user()->id;
        $education->location = ucfirst($request->get('location'));
        $education->start_date = $request->get('start_date');
        $education->end_date = $request->get('end_date');
        $education->certificate = ucfirst($request->get('certificate'));
        $education->save();

        return response()->json(['success'=> 'Education Job updated']);
    }

    public function updateEducation(Request $request, $id) {

        $education = Education::find($id);
        $education->school = ucfirst($request->get('school'));
        $education->user_id = auth()->user()->id;
        $education->location = ucfirst($request->get('location'));
        $education->start_date = $request->get('start_date');
        $education->end_date = $request->get('end_date');
        $education->certificate = ucfirst($request->get('certificate'));
        $education->save();

        return response()->json(['success'=> 'Education Job updated']);
    
}

    // Volunteer
    // Volunteer Jobs Controller
    public function createVolunteer(Request $request) {

        $volunteer = new Volunteer();
        $volunteer->job_title = ucfirst($request->get('job_title'));
        $volunteer->user_id = auth()->user()->id;
        $volunteer->organization = ucfirst($request->get('organization'));
        $volunteer->location = ucfirst($request->get('location'));
        $volunteer->start_date = $request->get('start_date');
        $volunteer->end_date = $request->get('end_date');
        $volunteer->job_description = ucfirst($request->get('job_description'));
        $volunteer->save();

        return response()->json(['success'=> 'Volunteer Job updated']);
    }

    public function updateVolunteers(Request $request, $id) {

        $volunteer = Volunteer::find($id);
        $volunteer->job_title = ucfirst($request->get('job_title'));
        $volunteer->organization = ucfirst($request->get('organization'));
        $volunteer->location = ucfirst($request->get('location'));
        $volunteer->start_date = $request->get('start_date');
        $volunteer->end_date = $request->get('end_date');
        $volunteer->job_description = ucfirst($request->get('job_description'));
        $volunteer->save();

        return response()->json(['success'=> 'Volunteer Job updated']);

    
    }

     // Project Controller
     public function createProject(Request $request) {

        $project = new Project();
        $project->user_id = auth()->user()->id;
        $project->link = $request->get('link');
        $project->name = ucfirst($request->get('name'));
        $project->description = ucfirst($request->get('description'));
        $project->save();

        return response()->json(['success'=> 'Projects updated']);
    }

    public function updateProject(Request $request, $id) {

        $project = Project::find($id);
        $project->link = $request->get('link');
        $project->name = ucfirst($request->get('name'));
        $project->description = ucfirst($request->get('description'));
        $project->save();

        return response()->json(['success'=> 'Projects updated']);

    
    }


    public function destroyProject($id){
         //For Deleting Project
         Project::find($id)->delete();
        return redirect('/generate_cv')->with('success','Project deleted successfully');
    }

    public function destroyEducation($id){
        //For Deleting Education
        Education::find($id)->delete();
       return redirect('/generate_cv')->with('success','Education deleted successfully');
   }

   public function destroyVolunteer($id){
    //For Deleting Volunteer Job
        Volunteer::find($id)->delete();
        return redirect('/generate_cv')->with('success','Volunteer deleted successfully');
    }

    public function destroyFormerJob($id){
        //For Deleting Former Employment
        Work::find($id)->delete();
        return redirect('/generate_cv')->with('success','Job deleted successfully');
    }

    public function destroyCurrentJob($id){
        //For Deleting Current Employment
        Currentjob::find($id)->delete();
       return redirect('/generate_cv')->with('success','Job deleted successfully');
    }

    public function destroySkill($id){
        //For Deleting Skill
        Skill::find($id)->delete();
       return redirect('/generate_cv')->with('success','Skill deleted successfully');
    }

    public function destroyLanguage($id){
        //For Deleting Language
        Language::find($id)->delete();
       return redirect('/generate_cv')->with('success','Language deleted successfully');
    }
   
}
