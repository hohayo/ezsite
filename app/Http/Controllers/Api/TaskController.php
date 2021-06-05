<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // 用於生成 JSON 字串
    private function  makeJson($status, $data = null, $msg = null)
    {
        // 轉 JSON 時確保中文不會變成 Unicode
        return response()->json([
            'status' => $status,
            'data' => $data,
            'message' => $msg,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('enabled', true)->get();
        return $this->makeJson(1, $tasks);
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'salary',
            'desc',
            'enabled'
        ]);

        $task = Task::create($data);

        if (isset($task)) {
            return $this->makeJson(1, $task);
        } else {
            return $this->makeJson(0, null, '工作新增失敗');
        }
    }

    public function show($id)
    {
        $task = Task::find($id);

        if (isset($task)) {
            return $this->makeJson(1, $task);
        } else {
            return $this->makeJson(0, null, '找不到此工作');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
