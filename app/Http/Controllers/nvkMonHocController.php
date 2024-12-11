<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nvkMonHocController extends Controller
{
    #INDEX
    // Đọc toàn bộ dữ liệu trong bảng môn học
    public function getMonHocs()
    {
        $monHocs = DB::select('select * from monhoc');
        return view('monhoc.index',['monHocs'=>$monHocs]);
    }
    // Đọc chi tiết thông tin môn học theo mã môn
    public function getMonHocById($mamh)
    {
        $monHoc = DB::table('monhoc')->where('nvkMaMH',$mamh)->first();
        return view('monhoc.detail',['monHoc'=>$monHoc]);
    }
    #Create Form
    public function create()
    {
        return view('monhoc.create');
    }
    public function createSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'nvkMaMH' => 'required|max:2',
                'nvkTenMH' => 'required|max:50',
                'nvkSoTiet' => 'required|max:2'
            ],
            [
                'nvkMaMH.required' => 'Vui lòng nhập mã môn học',
                'nvkMaMH.max' => 'Mã môn học tối đa 2 ký tự',
                'nvkTenMH.required' => 'Vui lòng nhập tên môn học',
                'nvkTenMH.max' => 'Tên môn học tối đa 50 ký tự',
                'nvkSoTiet.required' => 'Vui lòng nhập số tiết',
                'nvkSoTiet.max' => 'Số tiết tối đa 2 ký tự',
            ]
            );
        DB::insert('insert into monhoc(nvkMaMH, nvkTenMH, nvkSoTiet) values(?,?,?)',
        [$request->nvkMaMH,$request->nvkTenMH,$request->nvkSoTiet]);
        return redirect('/monhoc');
    }
    #Sửa
    public function edit($mamh)
    {
        $monhoc = DB::table('monhoc')->where('nvkMaMH',$mamh)->first();
        return view('monhoc.edit',['monhoc'=>$monhoc]);
    }
    public function editSubmit(Request $request)
    {
        DB::table('monhoc')
            ->where('nvkMaMH',$request->nvkMaMH)
            ->update(
            [
                'nvkMaMH' =>$request->nvkMaMH,
                'nvkTenMH' =>$request->nvkTenMH,
                'nvkSoTiet' =>$request->nvkSoTiet,
            ]
            );
        return redirect('/monhoc');
    }
    // delete -> $mamh
    public function delete($mamh)
    {
        DB::table('monhoc')->where('nvkMaMH','=', $mamh)->delete();
        return redirect('/monhoc');
    }
}
