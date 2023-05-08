@extends('partials/data')

@section('container')


<div class="container-fluid">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-7 offset-2">
        <div class="card">
          <h3 class="card-header text-center text-light" style="background-color: rgb(133, 82, 19)">Form Tambah Data
          </h3>
          <div class="card-body">

            <form action="/data/{{ $data->id }}" method="post">
              @csrf
              @method('PUT')
              <div class="row my-3">
                <div class="col-md-2">
                  <label for="pemprov" class="form-label">pemprov
                  </label>
                </div>
                <div class="col">
                  <input type="text" name="pemprov" class="form-control @error('pemprov') is-invalid
                  @enderror" id="pemprov" placeholder="Nama provinsi" value="{{ old('pemprov', $data->pemprov) }}"
                    required>
                  @error('pemprov')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row my-3">
                <div class="col-md-4">
                  <label for="modis" class="form-label">Modal yang telah disetor
                  </label>
                </div>
                <div class="col">
                  <input type="number" name="modis" class="form-control @error('modis') is-invalid
                  @enderror" id="number" placeholder="Jumlah modal disetor" value="{{ old('modis', $data->modis) }}"
                    required>
                  @error('modis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row my-3">
                <div class="col-md-4">
                  <label for="modiz" class="form-label">Modal yang belum disahkan
                  </label>
                </div>
                <div class="col">
                  <input type="number" name="modiz" class="form-control @error('modiz') is-invalid
                  @enderror" id="modiz" placeholder="Modal belum disahkan ojk" value="{{ old('modiz', $data->modiz) }}"
                    required>
                  @error('modiz')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row my-3">
                <div class="col-md-2">
                  <label for="jumlah" class="form-label">jumlah
                  </label>
                </div>
                <div class="col">
                  <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid
                  @enderror" id="jumlah" placeholder="Jumlah" value="{{ old('jumlah', $data->jumlah) }}" required>
                  @error('jumlah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row my-3">
                <div class="col-md-2">
                  <label for="kepemilikan" class="form-label">kepemilikan
                  </label>
                </div>
                <div class="col">
                  <input type="number" step="0.01" name="kepemilikan" class="form-control @error('kepemilikan') is-invalid
                  @enderror" id="kepemilikan" placeholder="Kepemilikan"
                    value="{{ old('kepemilikan', $data->kepemilikan) }}" required>
                  @error('kepemilikan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop