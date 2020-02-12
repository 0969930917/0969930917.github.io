<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mau;
use Session;
use Validator;
use App\Http\Requests\MauCreateRequest;
class MauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsachmau = Mau::all();

        return view('backend.mau.index')
                ->with('danhsachmau', $danhsachmau);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.mau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'm_ten' => 'required|min:3|max:50|unique:cusc_mau'
        ]);

        // // Nếu kiểm tra ràng buộc dữ liệu thất bại -> tức là dữ liệu không hợp lệ
        // // Chuyển hướng về view "Thêm mới" với,
        // // - Thông báo lỗi vi phạm các quy luật.
        // // - Dữ liệu cũ (người dùng đã nhập).
        if ($validator->fails()) {
            return redirect(route('backend.mau.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $m = new Mau();
        $m->m_ten = $request->input('m_ten');
        $m->m_trangThai = 2;
        $m->save();

        Session::flash('alert-warning', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.mau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $mau = Mau::find($id);
        return view('backend.mau.edit')
                ->with('mau', $mau);
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
