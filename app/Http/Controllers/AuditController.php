<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditController extends Controller
{
    public function index(){
        $audit = Audit::paginate(10);

        return view("audit.index", compact('audit'));
    }
}

