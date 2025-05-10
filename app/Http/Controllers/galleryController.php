<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'src' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string|max:255'
        ], [
            'src.required' => 'Please select an image file to upload',
            'src.image' => 'The file must be an image file (jpeg, png, jpg, gif)',
            'src.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif',
            'src.max' => 'The image file must not exceed 2MB',
            'title.string' => 'The title must be a string',
            'title.max' => 'The title must not exceed 255 characters'
        ]);

        if ($request->file('src')) {
            $file = $request->file('src');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('images/gallery', $filename);

            Gallery::create([
                'src' =>  $filename,
                'title' => $request['title']
            ]);
        }
        return redirect()->route('adminGallery')->with('success', 'Image uploaded successfully');
    }

    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);
    
        $filePath = public_path('images/gallery/' . $image->src);
    
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    
        $image->delete();
    
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
    
}
