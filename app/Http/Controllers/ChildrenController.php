<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Orphanages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChildrenController extends Controller
{

    public function create(Orphanages $orphanage)
    {
        return view('admin.childrenForm', compact('orphanage'));
    }

    public function store(Request $request, Orphanages $orphanage)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_tgl_lahir' => 'required|string|max:255',
            'umur' => 'required|string|max:3',
            'jenis_kelamin' => 'required|string',
            'jenjang' => 'nullable|string|max:50',
            'kelas' => 'nullable|string|in:,1,2,3,4,5,6,7,8,9,10,11,12',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama.required' => 'Nama anak harus diisi',
            'tempat_tgl_lahir.required' => 'Tempat tanggal lahir harus diisi',
            'umur.required' => 'Umur harus diisi',
            'umur.integer' => 'Umur harus berupa angka',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'kelas.in' => 'Kelas harus sesuai dengan pilihan',
            'photo.image' => 'File harus berupa gambar',
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('images/children', $filename);
            $data['photo'] = $filename;
        }
        $orphanage->children()->create($data);
        return redirect()->route('adminChildren')->with('success', 'Berhasil Tambah Anak');
    }

    public function update(Request $request, Orphanages $orphanage, Children $child)
    {

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_tgl_lahir' => 'required|string|max:255',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'jenjang' => 'nullable|string|max:50',
            'kelas' => 'nullable|integer|max:50',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama.required' => 'Nama anak harus diisi',
            'tempat_tgl_lahir.required' => 'Tempat tanggal lahir harus diisi',
            'umur.required' => 'Umur harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'kelas.integer' => 'Kelas harus berupa angka',
            'photo.image' => 'File harus berupa gambar',
        ]);

        $data['orphanage_id'] = $orphanage->id;

        if ($request->hasFile('photo')) {
            if ($child->photo) {
                $oldPhotoPath = public_path('images/children/' . $child->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('images/children', $filename);
            $data['photo'] = $filename;
        }


        $child->update($data);

        return redirect()->route('adminChildren')->with('success', 'Berhasil Update Anak');
    }


    public function edit(Orphanages $orphanage, Children $child)
    {
        return view('admin.childrenForm', compact('child', 'orphanage'));
    }


    public function destroy(Children $child)
    {
        $orphanage_id = $child->orphanage_id;

        if ($child->photo) {
            $oldPhotoPath = public_path('images/children/' . $child->photo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        $child->delete();
        return redirect()->route('adminChildren', $orphanage_id)->with('success', 'Berhasil Hapus data Anak');
    }
}
