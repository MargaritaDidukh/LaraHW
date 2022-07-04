<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users = [["id" => 0, "name" => "Marny Frost", "phone" => "(858) 752-3713"], ["id" => 1, "name" => "Adrienne Abbott", "phone" => "(570) 618-5436"], ["id" => 2, "name" => "Cade Marsh", "phone" => "1-654-748-1878"], ["id" => 3, "name" => "Caleb Matthews", "phone" => "1-808-608-5482"], ["id" => 4, "name" => "Genevieve Wilder", "phone" => "1-381-954-4752"]];
    public $videos = [["author" => 4, "nameOfVideo" => "Mauris quis turpis"], ["author" => 0, "nameOfVideo" => "Pellentesque habitant morbi"], ["author" => 2, "nameOfVideo" => "orci sem eget"], ["author" => 4, "nameOfVideo" => "ipsum. Suspendisse sagittis."], ["author" => 3, "nameOfVideo" => "commodo at, libero."]];

    public function showUser($id)
    {
        return view('users.profile')->with('user', $this->users[$id]);
    }
    public function showUsers()
    {
        return view('users.list')->with('users', $this->users);

    }

    public function addUser(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $new = array_push($this->users, ["id" => $id, "name" => $name, "phone" => $phone]);
        return view('users.list')->with('users', $this->users);
    }

    public function updateUser(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $phone = $request->input('phone');

        $this->users[$id]['name'] = $name;
        $this->users[$id]['phone'] = $phone;

        return view('users.list')->with('users', $this->users);
    }

    public function deleteUser(Request $request)
    {
        $id = $request->input('id');
        unset($this->users[$id]);
        return view('users.list')->with('users', $this->users);
    }

    public function listVideosOfUser($id)
    {
        $videosOfUser = [];
        foreach ($this->videos as $video)
        {
            if ($video['author'] == $id)
            {
                array_push($videosOfUser, $video);
            }
        }
        return view('videos.list')->with('videos', $videosOfUser)->with('user', $this->users[$id]);
    }

    public function listVideos()
    {
        return view('videos.listVideos')->with('videos', $this->videos);
    }

    public function videoPage($id)
    {
        return view('videos.videoPage')->with('video', $this->videos[$id]);
    }

    public function updateVideo(Request $request, $id)
    {

        $name = $request->input('name');
        $author = $request->input('author');

        $this->videos[$id]['nameOfVideo'] = $name;
        $this->videos[$id]['author'] = $author;

        return view('videos.listVideos')->with('videos', $this->videos);
    }

    public function addVideo(Request $request)
    {

        $name = $request->input('name');
        $author = $request->input('author');
        $new = array_push($this->videos, ["nameOfVideo" => $name, "author" => $author]);
        return view('videos.listVideos')->with('videos', $this->videos);
    }

    public function deleteVideo(Request $request)
    {
        $nameOfVideo = $request->input('name');
        $author = $request->input('author');
        for ($i = 0;$i < count($this->videos);$i++)
        {
            if ($this->videos[$i]['nameOfVideo'] == $nameOfVideo && $this->videos[$i]['author'] == $author)
            {
                unset($this->videos[$i]);
            }
        }
        return view('videos.listVideos')->with('videos', $this->videos);
    }
}

