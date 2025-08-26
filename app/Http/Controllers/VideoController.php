<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(10);
        return view('dashboard.admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('dashboard.admin.videos.create');
    }

    public function store(Request $request)
    {
        // Limit to 4 videos
        if (Video::count() >= 4) {
            return redirect()->route('videos.index')->with('error', 'You can only upload a maximum of 4 videos.');
        }

        $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:30240',
        ]);

        $videoName = time() . '.' . $request->video->extension();
        $request->video->move(public_path('videos'), $videoName);

        Video::create([
            'video' => 'videos/' . $videoName,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully.');
    }

    public function edit(Video $video)
    {
        return view('dashboard.admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:30240',
        ]);

        $data = [];

        if ($request->hasFile('video')) {
            if ($video->video && file_exists(public_path($video->video))) {
                unlink(public_path($video->video));
            }

            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('videos'), $videoName);

            $data['video'] = 'videos/' . $videoName;
        }

        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        if ($video->video && file_exists(public_path($video->video))) {
            unlink(public_path($video->video));
        }

        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
