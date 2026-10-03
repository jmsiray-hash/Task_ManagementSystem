<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class MainController extends BaseController
{
    protected $taskModel;
    protected $userModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
        $this->userModel = new UserModel();
    }

    // 1. Welcome Page (/) - Today's tasks
    public function welcome()
    {
        $data['tasks'] = $this->taskModel->getTodayTasks();
        $data['title'] = "Welcome - Tasks Today";
        return view('welcome_page', $data);
    }

    // 2. Task List Page (/tasks) - All tasks ordered by date
    public function tasks()
    {
        $data['tasks'] = $this->taskModel->getAllTasksOrdered();
        $data['title'] = "All Task List";
        return view('task_list', $data);
    }

    // 3. Profile Page (/profile) - Demo user
    public function profile()
    {
        $data['user'] = $this->userModel->getDemoUser();
        $data['title'] = "User Profile";
        return view('profile', $data);
    }

    // 4. About Page (/about) - Developer Info
    public function about()
    {
        $data['title'] = "About Developer";
        $data['developer_name'] = "Juraly Siray"; 
        $data['section'] = "IT0049/DW21";   
        return view('about', $data);
    }
}