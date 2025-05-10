<?php

use App\Models\Orphanages;
use Illuminate\Support\Facades\Route;
use App\Models\gallery;
use App\Models\user;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('Home', ['panti_list' => Orphanages::all()]);
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/children', function () {
    $nama_panti = Orphanages::with('children')->get();
    return view('children', compact('nama_panti'));
})->name('children');

Route::get('/legalities', function () {
    return view('legalities');
});

Route::get('/gallery', function () {
    return view('gallery', ['gallery' => gallery::all()]);
});

Route::post('/gallery', [galleryController::class, 'store'])->name('gallery.store');



Route::get('/supportUs', function () {
    return view('supportUs');
});

//ADMIN
Route::middleware(['auth'])->group(function(){
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::middleware(['status:0'])->group(function(){
        Route::get('/admin/editAdmin', function () {return view('admin.editAdmin', ['admin' => User::all()]);})->name('admin.list');
    
        Route::get('/admin/editAdmin/create',[UserController::class, 'create'])->name('admin.create');
        
        Route::post('/admin/editAdmin/insert', [UserController::class, 'insert'])->name('admin.insert');
        
        Route::get('/admin/editAdmin/edit/{id}', [UserController::class, 'edit'])->name('admin.edit');
        
        Route::put('/admin/editAdmin/update/{id}', [UserController::class, 'update'])->name('admin.update');
        
        //DELETE
        Route::delete('/admin/editAdmin/delete/{id}',[UserController::class, 'delete'])->name('admin.delete');
    });
    
    //CHILDREN
    Route::get('/admin/children',function(){
    $nama_panti = Orphanages::with('children')->get();
    return view('admin.childrenAdmin', compact('nama_panti'));
    })->name('adminChildren');

    Route::get('/admin/gallery', function(){
    return view('admin/galleryAdmin', ['gallery' => gallery::all()]);
    })->name('adminGallery');
  
    Route::get('children/create/orphanages/{orphanage}', [ChildrenController::class, 'create'])->name('children.create');
    
    Route::post('children/orphanages/{orphanage}', [ChildrenController::class, 'store'])->name('children.store');
    
    Route::get('orphanages/{orphanage}/children/{child}/edit', [ChildrenController::class, 'edit'])->name('children.edit');
    
    Route::put('orphanages/{orphanage}/children/{child}', [ChildrenController::class, 'update'])->name('children.update');
    
    Route::delete('children/{child}', [ChildrenController::class, 'destroy'])->name('children.destroy');

    //Delete Gallery
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});

Route::get('/admin/login', [AuthController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login_auth', [AuthController::class, 'login_auth'])->name('login_post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');