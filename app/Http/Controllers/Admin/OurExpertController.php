<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurExpert;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use DataTables;
use Str;

class OurExpertController extends Controller
{
    public function index(Request $request){
        return view('admin.our_expert.index');
    }  

    public function getData(Request $request)
    {
        $ourexpert = OurExpert::select(['id', 'name','image', 'status', 'created_at']);
        return DataTables::of($ourexpert)
            ->addColumn('action', function ($row) {
                return '
                    <button type="button" class="btn btn-outline-secondary edit_ourexpert" data-id="' . $row->id . '"><i class="icofont-edit text-success"></i></button>
                    <button type="button" class="btn btn-outline-secondary delete_ourexpert" data-id="' . $row->id . '"><i class="icofont-ui-delete text-danger"></i></button>
            
                ';
            })
            ->rawColumns(['action']) // allow HTML rendering
            ->make(true);
    }

    public function store(Request $request)
    {
        $exists = OurExpert::where('id', $request->ourexpert_id)->exists();
        if ($exists) {
            return response()->json(['result' => false, 'message' => 'Image already exists.']);
        }

        $ourexpert = new OurExpert();
        $ourexpert->status = $request->status;
        $ourexpert->name = $request->name;
        $ourexpert->designation = $request->designation;

        if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        $extension = $imageFile->getClientOriginalExtension();

        $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitizedOriginal = Str::slug($originalName);
        $uniqueName = $sanitizedOriginal . '-' . uniqid() . '.' . $extension;

        $uploadPath = public_path('admin/ourexperts/');
        $savePath = $uploadPath . $uniqueName;

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        if ($request->has('compress')) {
            $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
            $image = $manager->read($imageFile->getRealPath());

            // No resizing — only quality reduction
            $image->toJpeg(75)->save($savePath);
        } else {
            $imageFile->move($uploadPath, $uniqueName);
        }

    $ourexpert->image = 'public/admin/ourexperts/' . $uniqueName;
}

        $ourexpert->save();

        return response()->json([
            'result' => true,
            'message' => 'Data Save Successfully.',
            'image' => $ourexpert->image
        ]);
    }

    public function update(Request $request, $id)
    {
        $ourexpert = OurExpert::find($id);
        if (!$ourexpert) {
            return response()->json(['result' => false, 'message' => 'Image not found.']);
        }

        // Optional: prevent name duplication
        $exists = OurExpert::where('id', $request->id)->where('id', '!=', $id)->exists();
        if ($exists) {
            return response()->json(['result' => false, 'message' => 'Image already exists.']);
        }

        $ourexpert->status = $request->status;
        $ourexpert->name = $request->name;
        $ourexpert->designation = $request->designation;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $extension;

            $uploadPath = public_path('admin/ourexperts/');
            $savePath = $uploadPath . $imageName;

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Optional compression if checkbox is selected
            if ($request->has('compress')) {
                $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                $img = $manager->read($image->getRealPath());

                // Save as JPEG with 75% quality without changing dimensions
                $img->toJpeg(50)->save($savePath);
            } else {
                $image->move($uploadPath, $imageName);
            }

            // Optionally delete old image if updating
            if (!empty($ourexpert->image)) {
                $oldImagePath = public_path(str_replace('public/', '', $ourexpert->image));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $ourexpert->image = 'public/admin/ourexperts/' . $imageName;
        }
        $ourexpert->save();

        return response()->json([
            'result' => true,
            'message' => 'Image Updated Successfully.',
        ]);
    }
    public function edit($id){
        $get_data = OurExpert::find($id);
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
        $get_data = OurExpert::find($id);
        if(empty($get_data)){
            return response()->json([
                'result' => false,
                'message' => "Data Not Found",
            ]);
        }
        $get_data->delete();
        return response()->json([
            'result' => true,
            "message" => "Data Deleted SuccessFulyy.",
        ]); 
    }
}
