<?php

namespace Modules\WebStack\Http\Controllers;

use App\Support\Helpers\ModuleHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Models\Content;

class WebStackController extends Controller
{
    use ViewTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('webstack::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('webstack::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('webstack::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('webstack::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

trait ViewTrait
{
    public function view_index(Request $request)
    {
        $contents = \App\Models\Content::take(10)->get();
        // var_dump($contents);

        return view('webstack::' . ((ModuleHelper::current_config('theme') ?? 'default') . '.')  . 'index', ['module_config' => Config::get('webstack')]);
    }
    public function view_about(Request $request)
    {
        return view('webstack::' . ((ModuleHelper::current_config('theme') ?? 'default') . '.') . 'about', ['module_config' => Config::get('webstack')]);
    }
}
