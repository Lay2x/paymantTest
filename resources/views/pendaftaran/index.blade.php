@extends('layouts.admin')
@section('content')
<div class="mx-auto w-md-50 p-4">
    <div class="card">
        <div class="card-header">
           Pendaftaran
        </div>
        <div class="card-body">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-success">
                <p class="m-0">{{ $message }}</p>
            </div>
            @endif
            <form action="pendaftaran.store">
                <div class="form-group mb-2">
                    <label for="">Email <abbr title="" style="color: black">*</abbr> </label>
                    <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda">
                </div>
                <div class="form-group mb-2">
                    <label for="">Nama Lengkap <abbr title="" style="color: black">*</abbr> </label>
                    <input type="name" name="name" class="form-control" placeholder="Masukan Nama Lengkap Anda">
                </div>
                <div class="form-group mb-2">
                    <label for="">Nomor Telp <abbr title="" style="color: black">*</abbr> </label>
                    <input type="number" name="no_telp" class="form-control" placeholder="Masukan Nomor Telepon Aktif">
                </div>
                <div class="form-group mb-2">
                    <label for="">Pilih Paket Seminar <abbr title="" style="color: black">*</abbr></label>
                    <select required class="form-control" id="select2" name="user">
                        @foreach ($paket as $item)
                        <option value="{{$item->id_paket}}"><span>{{ $item->nama_paket }}</span>| <br><b>Rp. {{ number_format($item->harga_paket) }}</b></option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full d-flex justify-content-center">
                    <button type="submit" class="text-white btn btn-secondary">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection