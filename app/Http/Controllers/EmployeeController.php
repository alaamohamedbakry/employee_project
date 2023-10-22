<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees =
        DB::table('employees')
            ->join('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
            ->join('employees as managers', 'employees.MANAGER_ID', '=', 'managers.EMPLOYEE_ID')
            ->select('employees.*', 'managers.FIRST_NAME as MANAGER_NAME', 'departments.DEPARTMENT_NAME as DEPARTMENT_NAME')
            ->get();
        return View("employee", compact('employees'));
    }
}
