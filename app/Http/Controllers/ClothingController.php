<?php

namespace App\Http\Controllers;

use App\Models\Cloting;
use App\Models\Alamat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ClothingController extends Controller
{
    /**
     * index
     */
    public function index() {
        $clothings = Cloting::all();
        return view('admin.index', [
            'clothings' => $clothings,
            'title' => 'Data Clothing - DealVo ',
        ]);
    }

    public function order() {
        $pengiriman = Alamat::all();
        return view('admin.order', [
            'pengiriman' => $pengiriman,
            'title' => 'Manajemen Order',
        ]);
    }

    public function hapusOrder($id)
    {
    $clothing = Alamat::where('id', $id)->first();
    $clothing->delete();

    if($clothing){
        //redirect dengan pesan sukses
        return redirect()->route('clothing.order')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('clothing.order')->with(['error' => 'Data Gagal Dihapus!']);
    }
    }

        /**
    * create
    *
    * @return void
    */
    public function create()
    {
        return view('admin.create', [
            'title' => 'Buat Data Clothing - XII SIJA 1',
        ]);
    }


    // /**
    //  * show
    //  * 
    //  * 
    //  */

    // public function show(Cloting $clothing) {
    //     return view('cloting', [
    //         'title' => 'Single Cloting',
    //         'clothing' => $clothing,
    //     ]);
    // }

    /**
    * store
    *
    * @param  mixed $request
    * @return void
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'email'         => 'required',
            'nomor_telepon' => 'required',
            'kelas'         => 'required',
            'image'         => 'required|image|mimes:png,jpg,jpeg',
            'avatar'         => 'required|image|mimes:png,jpg,jpeg',
            'title'         => 'required',
            'harga'         => 'required',
            'content'       => 'required',
            'alamat'        => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $avatar = $request->file('avatar');
        
        $filename_image = 'image-' . time() . '.' . $request->image->getClientOriginalExtension();
        $filename_avatar = 'avatar-' . time() . '.' . $request->avatar->getClientOriginalExtension();
        $image->storeAs('public/cloth', $filename_image);
        $avatar->storeAs('public/cloth', $filename_avatar);

        $clothing = Cloting::create([
            'image'         => $filename_image,
            'avatar'        => $filename_avatar,
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'title'         => $request->title,
            'harga'         => $request->harga,
            'content'       => $request->content,
            'email'         => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat'        => $request->alamat
        ]);

        if($clothing){
            //redirect dengan pesan sukses
            return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
* edit
*
* @param  mixed $blog
* @return void
*/
public function edit(Cloting $clothing)
{
    return view('admin.edit', [
        'clothing' => $clothing,
        'title' => 'Edit Data Clothing - XII SIJA 1',
    ]);
}


/**
* update
*
* @param  mixed $request
* @param  mixed $blog
* @return void
*/
public function update(Request $request, Cloting $clothing)
{
    $this->validate($request, [
        'nama'          => 'required',
        'kelas'         => 'required',
        'title'         => 'required',
        'harga'         => 'required',
        'content'       => 'required',
        'email'         => 'required',
        'nomor_telepon' => 'required',
        'alamat'        => 'required',
    ]);

    $image = $request->file('image');
    $avatar = $request->file('avatar');

    //get data Blog by ID
    $clothing = Cloting::findOrFail($clothing->id);

    if($request->file('image') == "" && $request->file('avatar') == "") {

        $clothing->update([
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'title'         => $request->title,
            'harga'         => $request->harga,
            'content'       => $request->content,
            'email'         => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat'        => $request->alamat
        ]);

    } else {
        if(($request->file('image') == "")){
            $filename_avatar = 'avatar-' . time() . '.' . $request->avatar->getClientOriginalExtension();
            $avatar->storeAs('public/cloth', $filename_avatar);

            Storage::disk('local')->delete('public/cloth/'.$clothing->avatar);

            $clothing->update([
                'avatar'    => $filename_avatar,
                'nama'      => $request->nama,
                'kelas'     => $request->kelas,
                'title'     => $request->title,
                'slug'      => $request->slug,
                'harga'     => $request->harga,
                'content'   => $request->content
            ]);
        } else if(($request->file('avatar') == "")){
            $filename_image = 'image-' . time() . '.' . $request->image->getClientOriginalExtension();
            $image->storeAs('public/cloth', $filename_image);

            Storage::disk('local')->delete('public/cloth/'.$clothing->image);

            $clothing->update([
                'image'    => $filename_image,
                'nama'      => $request->nama,
                'kelas'     => $request->kelas,
                'title'     => $request->title,
                'slug'      => $request->slug,
                'harga'     => $request->harga,
                'content'   => $request->content
            ]);
        } else{
            $filename_image = 'image-' . time() . '.' . $request->image->getClientOriginalExtension();
            $filename_avatar = 'avatar-' . time() . '.' . $request->avatar->getClientOriginalExtension();
            $image->storeAs('public/cloth', $filename_image);
            $avatar->storeAs('public/cloth', $filename_avatar);

            //hapus old image
            Storage::disk('local')->delete('public/cloth/'.$clothing->image);
            Storage::disk('local')->delete('public/cloth/'.$clothing->avatar);

            $clothing->update([
                'image'     => $filename_image,
                'avatar'    => $filename_avatar,
                'nama'      => $request->nama,
                'kelas'     => $request->kelas,
                'title'     => $request->title,
                'slug'      => $request->slug,
                'harga'     => $request->harga,
                'content'   => $request->content
            ]);
        }
    }

    if($clothing){
        //redirect dengan pesan sukses
        return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $clothing = Cloting::findOrFail($id);
  Storage::disk('local')->delete('public/cloth/'.$clothing->image);
  Storage::disk('local')->delete('public/cloth/'.$clothing->avatar);
  $clothing->delete();

  if($clothing){
     //redirect dengan pesan sukses
     return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}

public function checkSlug(Request $request) {
    
}
}
