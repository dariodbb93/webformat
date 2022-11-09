<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
use App\Models\Worker;
use App\Models\Project;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PublicController extends Controller
{
    public function welcome()


    {

        $teams = Team::all();
        return view('welcome', compact('teams'));
    }


    public function storeEmployer(Request $request)
    {




        $employer = Employer::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'role' => $request->input('role'),
            'team_id' => $request->input('team_id')

        ]);

        return view('team');
    }

    public function showEmployer()
    {
        $employers = Employer::all();

        return view('team', compact('employers'));
    }

    public function storeTeam(Request $request)
    {
        $teams = Team::create([

            'nameTeam' => $request->input('nameTeam')

        ]);


        return view('team');
    }


    public function project()
    {
        $employers = Employer::all();

        return view('project', compact('employers'));
    }

    public function storeProject(Request $request)
    {



        $employers = Employer::all();
        $project = Project::create([
            'nameProject' => $request->input('nameProject'),
            'employer_id' => $request->input('employer_id')


        ]);

        return view('project', compact('employers'));
    }


    public function task()
    {
        $employers = Employer::all();

        return view('task', compact('employers'));
    }



    public function storeTask(Request $request)
    {

        $employers = Employer::all();
        $tasks = Task::create([
            'nameTask' => $request->input('nameTask'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
            'employer_id' => $request->input('employer_id'),
            'deadline' => $request-> input ('deadline')
        ]);

        return view('task', compact('employers'));
    }



    public function hireWorker()
    {

        $employers = Employer::all();

        return view('hireWorker', compact('employers'));
    }

    public function storeWorker(Request $request)
    {
        $employers = Employer::all();
        $workers = Worker::create([
            'employer_id' => $request->input('employer_id')
        ]);

        return view('hireWorker', compact('employers'));
    }



    public function showTask()
    {

        $tasks = Task::all();

        return view('showTask', compact('tasks'));
    }


    public function destroy(Task $task)
    {




        $task->delete();
        return redirect(route('welcome'));
    }
}

