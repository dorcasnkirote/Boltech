<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Subtopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubtopicController extends Controller
{
    /**
     * Log action with details.
     *
     * @param string $action
     * @param array $details
     */
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
     * Display a listing of the subtopics.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $subtopics = Subtopic::with('topic')  // Eager load the 'topic' relationship
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('description', 'like', '%' . $search . '%');
            })
            ->paginate(5);

        // Log the action
        $this->logAction('viewed subtopics', $search ? ['search_query' => $search] : []);

        return view('subtopics.index', compact('subtopics'));
    }

    /**
     * Show the form for creating a new subtopic.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $topics = Topic::all();
        return view('subtopics.create', compact('topics'));
    }

    /**
     * Store a newly created subtopic in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'topic_id' => 'required|exists:topics,id', // Ensure topic_id is provided and exists in the topics table
        ]);

        // Create a new subtopic associated with the specified topic
        Subtopic::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'topic_id' => $validated['topic_id'], // Set the topic_id
            'created_by' => auth()->id(),
        ]);

        // Log the action with subtopic and topic name
        $this->logAction('created subtopic', [
            'subtopic' => $validated['name'],
            'topic' => Topic::find($validated['topic_id'])->name, // Get the topic name
        ]);

        // Redirect back to the subtopics index with a success message
        return redirect()->route('subtopics.index')->with('success', 'Subtopic created successfully.');
    }

    /**
     * Show the form for editing the specified subtopic.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $subtopic = Subtopic::findOrFail($id);  // Find the subtopic by ID
        $topics = Topic::all();  // Get all topics

        // Log the action
        $this->logAction('editing subtopic', ['subtopic_id' => $id]);

        return view('subtopics.edit', compact('subtopic', 'topics'));
    }

    /**
     * Update the specified subtopic in storage.
     *
     * @param Request $request
     * @param Topic $topic
     * @param Subtopic $subtopic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Topic $topic, Subtopic $subtopic)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $subtopic->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Log the action
        $this->logAction('updated subtopic', ['subtopic_id' => $subtopic->id, 'subtopic_name' => $request->name]);

        return redirect()->route('subtopics.index', $topic)->with('success', 'Subtopic updated successfully.');
    }

    /**
     * Remove the specified subtopic from storage.
     *
     * @param Topic $topic
     * @param Subtopic $subtopic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Topic $topic, Subtopic $subtopic)
    {
        $subtopic->delete();

        // Log the action
        $this->logAction('deleted subtopic', ['subtopic_id' => $subtopic->id, 'subtopic_name' => $subtopic->name]);

        return redirect()->route('subtopics.index', $topic)->with('success', 'Subtopic deleted successfully.');
    }

    public function show(Subtopic $subtopic)
    {
        // Log the action of viewing the subtopic along with the topic name

        return view('Subtopics.show', compact('subtopic'));
    }



    public function Topiccreate()
    {
        // Log the action
        $this->logAction('viewed create topic form');

        return view('topics.create');
    }

}
