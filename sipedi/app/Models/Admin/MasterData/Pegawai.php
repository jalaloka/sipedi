<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\Admin\MasterData\Role;
use Illuminate\Support\Str;


class Pegawai extends ModelAuthenticate
{
    protected $table = 'admin__pegawai';

    public $fillabel = ['nama', 'email'];

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/pegawai";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }
}
