<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Task;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        if (auth()->user()->points >= 16000) {
            return inertia('Tasks/Index', [
                'tasks' => Task::all(),
                'message' => 'Congratulations! nrzCTF{beshCTF_w0w_r4ce_1s_p0w3rful}',
            ]);
        }

        if (auth()->user()->points >= 12000) {
            return inertia('Tasks/Index', [
                'tasks' => Task::all(),
                'message' => 'Congratulations! nrzCTF{beshCTF_y0u_c4nt_h1d3_fr0m_m3}',
            ]);
        }

        if (auth()->user()->points >= 8000) {
            return inertia('Tasks/Index', [
                'tasks' => Task::all(),
                'message' => 'Congratulations! nrzCTF{beshCTF_t1ny_4nd_del1c1ous}',
            ]);
        }

        return inertia('Tasks/Index', [
            'tasks' => Task::all(),
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'flag' => 'required|string',
            'task_id' => 'required|integer'
        ]);

        $task = Task::findOrFail($request->task_id);
        $user = $request->user();


        if ($task->flag === $request->flag) {
            if (Score::where('user_id', $request->user()->id)->where('task_id', Task::findOrFail($request->task_id)->id)->exists()) {    
                return back()->with('error', 'You have already solved this task!');
            }
            $request->user()->points = $request->user()->points + $task->points;
            $request->user()->save();
            sleep(1);
            Score::create([
                'user_id' => $request->user()->id,
                'task_id' => Task::findOrFail($request->task_id)->id,
            ]);
            return back()->with('success', 'Flag is correct!');
        }

        return back()->with('error', 'Flag is incorrect!');
    }
}
