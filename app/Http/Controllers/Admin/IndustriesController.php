<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industries;
use DataTables;
class IndustriesController extends Controller
{
    public function index(){
        return view('admin.industries.index');
    }

    public function IndustriesGetData(Request $request)
    {
        $industries = Industries::select(['id', 'name', 'status', 'created_at']);
        return DataTables::of($industries)
            ->addColumn('action', function ($row) {
                return '
                    <button type="button" class="btn btn-outline-secondary edit_industries" data-id="' . $row->id . '"><i class="icofont-edit text-success"></i></button>
                    <button type="button" class="btn btn-outline-secondary delete_industries" data-id="' . $row->id . '"><i class="icofont-ui-delete text-danger"></i></button>
                ';
            })
            ->rawColumns(['action']) // allow HTML rendering
            ->make(true);
    }

public function IndustriesstoreAndUpdate(Request $request)
{
    $industries_id = $request->industries_id;

    // Prevent duplicate names (excluding current record if updating)
    $exists = Industries::where('name', $request->industries_name)
        ->when($industries_id, fn($q) => $q->where('id', '!=', $industries_id))
        ->exists();

    if ($exists) {
        return response()->json(['result' => false, 'message' => 'Industries name already exists.']);
    }

    $createData = $industries_id 
        ? Industries::find($industries_id) 
        : new Industries();

    $createData->name = $request->industries_name;
    $createData->status = $request->industries_status;

    if ($request->hasFile('industries_image')) {
        $imageFile = $request->file('industries_image');
        $extension = $imageFile->getClientOriginalExtension();

        $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitizedOriginal = Str::slug($originalName);
        $uniqueName = $sanitizedOriginal . '-' . uniqid() . '.' . $extension;

        $uploadPath = public_path('admin/industries/');
        $savePath   = $uploadPath . $uniqueName;

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        if ($request->has('compress')) {
            $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
            $image   = $manager->read($imageFile->getRealPath());

            // Compress only
            $image->toJpeg(75)->save($savePath);
        } else {
            $imageFile->move($uploadPath, $uniqueName);
        }

        // Save relative path (better for asset())
        $createData->image = 'admin/industries/' . $uniqueName;
    }

    $createData->save();

    return response()->json([
        'result'  => true,
        'message' => $industries_id ? "Industries Updated Successfully" : "Industries Created Successfully.",
    ]);
}

    public function edit($id){
        $get_data = Industries::find($id);
        if(empty($get_data)){
            return response()->json([
                'result' => false,
                'message' => "Data Not Found",
            ]);
        }

        return response()->json([
            'result' => true,
            "message" => "Data Found",
            "data" => $get_data,
        ]); 
    }

    public function destroy($id){
        $get_data = Industries::find($id);
        if(empty($get_data)){
            return response()->json([
                'result' => false,
                'message' => "Data Not Found",
            ]);
        }
        $get_data->delete();
        return response()->json([
            'result' => true,
            "message" => "Data Deleted Successfully.",
        ]); 
    }
}
