<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\OurTeam;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Str;
use DataTables;
class OurTeamController extends Controller
{
    public function index(){
        return view('admin.our_team.index');
    }

    public function create(){
        return view('admin.our_team.create');
    }

    public function Store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'short_description' => 'required|string',
            'image'             => 'required|file|mimes:jpg,jpeg,png,webp|max:2048',
            'name'              => 'required|string|max:255',
            'designation'       => 'required|string|max:255',
            'status'            => 'nullable|in:Active,In-Active',
            'alt'           => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fix the validation errors.');
        }

        try {
            $imagePath = null;

            if ($request->hasFile('image')) {   // ✅ changed from whychooseus_image → image
                $imageFile = $request->file('image');
                $extension = $imageFile->guessExtension() ?? 'png';
                $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $sanitizedOriginal = \Str::slug($originalName);
                $uniqueName = $sanitizedOriginal . '-' . uniqid() . '.' . $extension;

                $uploadPath = public_path('admin/our_team/');  // ✅ renamed folder
                $savePath = $uploadPath . $uniqueName;

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                if ($request->has('compress')) {
                    $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                    $image = $manager->read($imageFile->getRealPath());
                    $image->toJpeg(75)->save($savePath);
                } else {
                    $imageFile->move($uploadPath, $uniqueName);
                }

                $imagePath = 'public/admin/our_team/' . $uniqueName;  // ✅ updated path
            }

            // Save in DB (OurTeam Model)
            OurTeam::create([
                'title'             => $request->title,
                'description'       => $request->description,
                'short_description' => $request->short_description,
                'name'              => $request->name,
                'designation'       => $request->designation,
                'status'            => $request->status ?? 'Active',
                'alt_tag'           => $request->alt,
                'image'             => $imagePath,
            ]);

            return redirect()->route('ourteam')->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            \Log::error('OurTeam Store Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to save: ' . $e->getMessage());
        }
    }
 

    public function getData()
    {
        $ourteam = OurTeam::whereNull('deleted_at')->get();
        return DataTables::of($ourteam)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                
                $editUrl = route('ourteam.edit', $row->id);
                return '
                    <a href="' . $editUrl . '" class="btn btn-outline-primary btn-sm">
                        <i class="icofont-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm delete_ourteam" data-id="' . $row->id . '">
                        <i class="icofont-ui-delete"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function Edit($id){
        $ourteam = OurTeam::find($id);
        return view('admin.our_team.edit' , compact('ourteam'));
    }

    public function Destory($id){
        $ourteam = OurTeam::find($id);
        if(empty($ourteam)){
            return response()->json([
                'result' => false,
                "message" => "Data Not Found."
            ]);
        }
        $ourteam->delete();
        return response()->json([
            'result' => true,
            'message' => "Data Deleted."
        ]);
    }


    public function Update(Request $request, $id)
    {
        // 1. Validate the request
        $validator = Validator::make($request->all(), [
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'short_description' => 'required|string',
            'name'              => 'required|string|max:255',
            'designation'       => 'required|string|max:255',
            'status'            => 'required|in:Active,In-Active',
            'alt'           => 'required|string|max:255',
            'image'             => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048', // ✅ optional
        ]);

        if ($validator->fails()) {
            return 1;
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the highlighted errors.');
        }

        try {
            // 2. Find the team member
            $ourTeam = OurTeam::findOrFail($id);

            $imagePath = $ourTeam->image;

            // 3. Handle new image upload (replace old one if uploaded)
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $extension = $imageFile->guessExtension() ?? 'jpg';
                $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $sanitizedOriginal = \Str::slug($originalName);
                $uniqueName = $sanitizedOriginal . '-' . uniqid() . '.' . $extension;

                $uploadPath = public_path('admin/our_team/');
                $savePath = $uploadPath . $uniqueName;

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Delete old image if exists
                if ($imagePath && file_exists(public_path($imagePath))) {
                    @unlink(public_path($imagePath));
                }

                if ($request->has('compress')) {
                    $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                    $image = $manager->read($imageFile->getRealPath());
                    $image->toJpeg(75)->save($savePath);
                } else {
                    $imageFile->move($uploadPath, $uniqueName);
                }

                $imagePath = 'public/admin/our_team/' . $uniqueName;
            }

            // 4. Update team member data
            $ourTeam->update([
                'title'             => $request->title,
                'description'       => $request->description,
                'short_description' => $request->short_description,
                'name'              => $request->name,
                'designation'       => $request->designation,
                'status'            => $request->status,
                'alt_tag'           => $request->alt,
                'image'             => $imagePath,
            ]);

            return redirect()->route('ourteam')->with('success', 'Team member updated successfully!');
        } catch (\Exception $e) {
            \Log::error('OurTeam update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update: ' . $e->getMessage());
        }
    }


}
