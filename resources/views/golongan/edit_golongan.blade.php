@extends('layouts.index')
@section('css')
<style>
  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }

  .card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }

  .card-signin .card-body {
    padding: 2rem;
  }
</style>
@endsection
@section('content')
<div class="card card-signin" style="margin-top: 83px;">
  <div class="card-body">
    <h3 class="display-5">Edit Golongan</h3>

    <form method="POST" action="/edit_golongan" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="kode">Kode</label>
        <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukan Kode Golongan" value="{{ $golongan[0]->kode }}" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Golongan" value="{{ $golongan[0]->nama }}" required>
      </div>
      <div class="form-group">
        <label for="tunjangan_suami_istri">Tunjangan Suami Istri</label>
        <input type="number" name="tunjangan_suami_istri" class="form-control" id="tunjangan_suami_istri" placeholder="Masukan Tunjangan Suami Istri" value="{{ $golongan[0]->tunjangan_suami_istri }}" required>
      </div>
      <div class="form-group">
        <label for="tunjangan_anak">Tunjangan Anak</label>
        <input type="number" name="tunjangan_anak" class="form-control" id="tunjangan_anak" placeholder="Masukan Tunjangan Anak" value="{{ $golongan[0]->tunjangan_anak }}" required>
      </div>
      <div class="form-group">
        <label for="uang_makan">Uanga Makan</label>
        <input type="number" name="uang_makan" class="form-control" id="uang_makan" placeholder="Masukan Uang Makan" value="{{ $golongan[0]->uang_makan }}" required>
      </div>
      <div class="form-group">
        <label for="uang_lembur">Uang Lembur</label>
        <input type="number" name="uang_lembur" class="form-control" id="uang_lembur" placeholder="Masukan Uang Lembur" value="{{ $golongan[0]->uang_lembur }}" required>
      </div>
      <input id="idx" name="idx" type="hidden" value="{{ $golongan[0]->id  }}">
      <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Edit</button>
    </form>
  </div>
</div>
@endsection