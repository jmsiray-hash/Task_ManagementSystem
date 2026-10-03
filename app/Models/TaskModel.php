<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table      = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];

    // Kunin ang mga task para sa araw na ito lamang
    public function getTodayTasks()
    {
        return $this->where('task_date', date('Y-m-d'))->findAll();
    }

    // Kunin ang lahat ng task na naka-order sa petsa
    public function getAllTasksOrdered()
    {
        return $this->orderBy('task_date', 'ASC')->findAll();
    }
}