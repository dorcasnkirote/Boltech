<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{
    protected function logAction($action, $details = [])
    {
        DB::table('logs')->insert([
            'user_id' => auth()->id(),
            'action' => $action,
            'details' => json_encode(array_merge([
                'email' => auth()->user()->email,
                'ip' => request()->ip(),
                'timestamp' => now(),
            ], $details)),
        ]);
    }

    /**
     * Display a listing of topics.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $topics = Topic::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        })->paginate(5);

        // Log the action
        $this->logAction('viewed topics', $search ? ['search_query' => $search] : []);

        return view('topics.index', compact('topics', 'search'));
    }



    public function showTopic(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }
    /**
     * Show the form for creating a new topic.
     */


    /**
     * Store a newly created topic in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        Topic::create([
            'name' => $request->name,
            'description' => $request->description,
            'created_by' => auth()->id(),
        ]);

        // Log the action
        $this->logAction('created topic', ['topic_name' => $request->name]);

        return redirect()->route('topics.index')->with('success', 'Topic created successfully.');
    }

    /**
     * Display the specified topic and its subtopics.
     */
    public function show(Topic $topic)
    {
        $subtopics = $topic->subtopics;

        // Log the action

        return view('Topic.show', compact('topic', 'subtopics'));
    }

    /**
     * Show the form for editing the specified topic.
     */
    public function edit(Topic $topic)
    {
        // Log the action
        $this->logAction('viewed edit topic form', ['topic_id' => $topic->id]);

        return view('topics.edit', compact('topic'));
    }

    /**
     * Update the specified topic in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $topic->fill($validated);
        $topic->save();

        // Log the action
        $this->logAction('updated topic', ['topic_name' => $topic->name, 'topic_id' => $topic->id]);

        return redirect()->route('topics.index')->with('success', 'Topic updated successfully.');
    }

    /**
     * Remove the specified topic from storage.
     */
    public function destroy(Topic $topic)
    {
        // Get the topic name
        $topicName = $topic->name;

        // Perform the deletion
        $topic->delete();

        // Log the action
        $this->logAction('deleted topic', [
            'topic_id' => $topic->id,
            'topic_name' => $topicName,
        ]);

        return redirect()->route('topics.index')->with('success', 'Topic deleted successfully.');
    }


    // TopicController.php
public function create() {
    return view('topics.create');
}

}
