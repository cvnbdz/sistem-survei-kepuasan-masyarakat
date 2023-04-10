@extends('admin.layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="text-black fs-4">DAFTAR KATEGORI PERTANYAAN</strong>
            <button href="" class="btn btn-sm btn-success float-right" data-bs-toggle="modal"
                data-bs-target="#tambahdata">Tambah
                Data</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahdata">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" method="post" action="/panel/dashboard/kategori">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Kuisioner</label>
                                <select id="kuisioner_id" class="form-control @error('kuisioner_id') is-invalid @enderror"
                                    name="kuisioner_id" autofocus>
                                    <option value="" selected>Pilih Kuisioner</option>
                                    @foreach ($kuisioners as $kuisioner)
                                        <option value="{{ $kuisioner->id }}">{{ $kuisioner->kuisioner }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('departemen_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Kategori Pertanyaan</label>
                                <input type="text" class="form-control" id="kategori" name="kategori"
                                    placeholder="Kategori Pertanyaan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Aktif</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option selected>-Pilih-</option>
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Body --}}
        <div class="card-body">
            <table id="datatable" class="table">
                {{-- @foreach --}}
                <thead>
                    <tr>
                        <th style="display:none;">No.</th>
                        <th scope="col" style="width: 4%">No.</th>
                        <th scope="col" style="width: 65%">Kategori Pertanyaan</th>
                        <th scope="col" style="width: 15%">Aktif</th>
                        <th scope="col" style="width: 8%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $key => $kategori)
                        @if ($kategori->kuisioner->is_active == 1)
                            <tr>
                                <td style="display:none;">{{ $kategori->id }}</td>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $kategori->kategori }}</td>
                                <td>
                                    @if ($kategori->is_active == 1)
                                        Aktif
                                    @else
                                        Tidak Aktif
                                    @endif
                                </td>
                                <td>
                                    {{-- <a href="/panel/dashboard/kategori/{{ $kategori->id }}"
                                    class="badge badge-pill badge-warning" data-bs-toggle="modal"
                                    data-bs-target="#editdata"><i class="fas fa-edit"></i></a> --}}
                                    {{-- <a href="#" class="badge badge-pill badge-warning edit1"><i class="fas fa-edit"></i></a> --}}
                                    <button title="Ubah Kategori" class="badge badge-pill bg-warning border-0"><span
                                            data-feather="x-circle" data-bs-toggle="modal"
                                            data-bs-target="#editkategori{{ $kategori->id }}"
                                            data-id="{{ $kategori->id }}"><i class="fas fa-pen"></i></span></button>
                                    <div class="modal fade" id="editkategori{{ $kategori->id }}" tabindex="-1"
                                        aria-labelledby="tambahkategoriLabel{{ $kategori->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tambahdata">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editForm1" autocomplete=" off" method="post"
                                                        action="/panel/dashboard/kategori/{{ $kategori->id }}">
                                                        @method('put')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label" auto>Kuisioner
                                                            </label>
                                                            <select id="kuisioner_id"
                                                                class="form-control @error('kuisioner_id') is-invalid @enderror"
                                                                name="kuisioner_id" autofocus>
                                                                @foreach ($kuisioners as $kuisioner)
                                                                    @if (old('kuisioner_id', $kategori->kuisioner_id) == $kuisioner->id)
                                                                        <option value="{{ $kuisioner->id }}" selected>
                                                                            {{ $kuisioner->kuisioner }}</option>
                                                                    @else
                                                                        <option value="{{ $kuisioner->id }}">
                                                                            {{ $kuisioner->kuisioner }}</option>
                                                                    @endif
                                                                    {{-- <option value="{{ $kategori->id }}">
                                                                    {{ $kategori->kategori }}</option> --}}
                                                                @endforeach

                                                            </select>
                                                            @error('departemen_id')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            {{-- <input type="text" class="form-control" id="kategori" name="kategori"
                                                            placeholder="Kategori Pertanyaan"> --}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label" auto>Kategori
                                                                Pertanyaan</label>
                                                            <input type="text"
                                                                class="form-control @error('kategori') is-invalid @enderror"
                                                                name="kategori" placeholder="Kategori Pertanyaan" require
                                                                autofocus
                                                                value="{{ old('kategori', $kategori->kategori) }}"
                                                                id="kategori">
                                                            @error('kategori')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            {{-- <input type="text" name="kategori" id="kategori"
                                                            class="form-control" placeholder="Masukkan Kategori Baru!"> --}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label" auto>Aktif</label>
                                                            <select class="form-control" id="is_active" name="is_active">
                                                                <option selected>
                                                                    {{ old('is_active') }}
                                                                    @if ($kategori->is_active == 1)
                                                                        Aktif
                                                                    @else
                                                                        Tidak Aktif
                                                                    @endif
                                                                </option>
                                                                <option value="0">Tidak Aktif</option>
                                                                <option value="1">Aktif</option>
                                                            </select>
                                                            @error('is_active')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror

                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/panel/dashboard/kategori/{{ $kategori->id }}" method="POST"
                                        {{-- <form action="{{ route('kuis.destroy', [$kategori->id]) }}" method="POST" --}} class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge badge-pill bg-danger border-0 ml-2"
                                            onclick="return confirm('Are you sure?')"><span data-feather="x-circle"><i
                                                    class="far fa-trash-alt"></i></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>
@endsection
