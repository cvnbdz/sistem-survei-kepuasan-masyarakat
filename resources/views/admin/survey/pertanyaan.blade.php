@extends('admin.layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="text-black fs-4">DAFTAR PERTANYAAN</strong>
            <button href="" class="btn btn-sm btn-success float-right" data-bs-toggle="modal"
                data-bs-target="#tambahdata">Tambah
                Data</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahdata">Tambah Pertanyaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" method="post" action="/panel/dashboard/pertanyaan">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Kategori Pertanyaan</label>
                                <select id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror"
                                    name="kategori_id" autofocus>
                                    <option value="" selected>Pilih Kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        @if ($kategori->kuisioner->is_active == 1)
                                            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('departemen_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                {{-- <input type="text" class="form-control" id="kategori" name="kategori"
                                    placeholder="Kategori Pertanyaan"> --}}
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Pertanyaan</label>
                                {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                <input type="text" name="pertanyaan" id="pertanyaan"
                                    class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Pertanyaan"
                                    require value="">
                                @error('pertanyaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>
                            {{-- <div class="mb-3">
                                <label for="" class="form-label" auto>Mode Ikon</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option selected>-Pilih-</option>
                                    <option value="0">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                            </div> --}}

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($pertanyaans as $pertanyaan)
            <div class="modal fade" id="tambahopsi{{ $pertanyaan->id }}" tabindex="-1"
                aria-labelledby="tambahopsiLabel{{ $pertanyaan->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahopsi">Tambah Opsi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form autocomplete="off" method="post" action="/panel/dashboard/pertanyaan/opsi">
                                @csrf
                                <div class="mb-3">
                                    {{-- <label for="" class="form-label" auto>Pertanyaan</label> --}}
                                    <input type="hidden" class="form-control @error('pertanyaan') is-invalid @enderror"
                                        name="pertanyaan_id" placeholder="Pertanyaan" require autofocus
                                        value="{{ old('pertanyaan_id', $pertanyaan->id) }}" id="pertanyaan_id">
                                    @error('pertanyaan_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    {{-- <input type="text" class="form-control" id="kategori" name="kategori"
                                    placeholder="Kategori Pertanyaan"> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" auto>Opsi Jawaban</label>
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                    <input type="text" name="opsi_jawaban" id="opsi_jawaban"
                                        class="form-control @error('opsi_jawaban') is-invalid @enderror"
                                        placeholder="Opsi Jawaban" require value="">
                                    @error('opsi_jawaban')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" auto>Nilai</label>
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                    <input type="number" name="value" id="value"
                                        class="form-control @error('value') is-invalid @enderror"
                                        placeholder="Nilai Jawaban" require value="">
                                    @error('value')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                {{-- <div class="mb-3">
                                <label for="" class="form-label" auto>Mode Ikon</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option selected>-Pilih-</option>
                                    <option value="0">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                            </div> --}}

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($opsi_jawabans as $opsi)
            <div class="modal fade" id="editopsi{{ $opsi->id }}" tabindex="-1"
                aria-labelledby="tambahopsiLabel{{ $opsi->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahopsi">Edit Opsi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form autocomplete="off" method="post"
                                action="/panel/dashboard/pertanyaan/opsi/{{ $opsi->id }}">
                                @method('put')
                                @csrf
                                {{-- <div class="mb-3">
                                    <label for="" class="form-label" auto>Pertanyaan</label>
                                    <select id="pertanyaan_id"
                                        class="form-control @error('pertanyaan_id') is-invalid @enderror"
                                        name="pertanyaan_id" autofocus>
                                        <option value="" selected>Pilih Pertanyaan</option>
                                        @foreach ($pertanyaans as $pertanyaan)
                                            <option value="{{ $pertanyaan->id }}">{{ $pertanyaan->pertanyaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pertanyaan_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    {{-- <label for="" class="form-label" auto>Pertanyaan</label> --}}
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                    <input type="hidden"
                                        class="form-control @error('pertanyaan_id') is-invalid @enderror"
                                        name="pertanyaan_id" placeholder="Pertanyaan" require autofocus
                                        value="{{ old('pertanyaan_id', $opsi->pertanyaan_id) }}" id="pertanyaan_id">
                                    @error('pertanyaan_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" auto>Opsi Jawaban</label>
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                    <input type="text" class="form-control @error('opsi_jawaban') is-invalid @enderror"
                                        name="opsi_jawaban" placeholder="Opsi Jawaban" require autofocus
                                        value="{{ old('opsi_jawaban', $opsi->opsi_jawaban) }}" id="opsi_jawaban">
                                    @error('opsi_jawaban')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" auto>Nilai</label>
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan"></textarea> --}}
                                    <input type="number" class="form-control @error('value') is-invalid @enderror"
                                        name="value" placeholder="Nilai Jawaban" require autofocus
                                        value="{{ old('value', $opsi->value) }}" id="value">
                                    @error('value')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                {{-- <div class="mb-3">
                                <label for="" class="form-label" auto>Mode Ikon</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option selected>-Pilih-</option>
                                    <option value="0">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                            </div> --}}

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Body --}}
        <div class="card-body">
            <table id="datatable" class="table">
                {{-- @foreach --}}
                <thead>
                    <tr>
                        <th style="display:none;">No.</th>
                        <th scope="col" style="width: 4%">No.</th>
                        <th scope="col" style="width: 40%">Pertanyaan</th>
                        {{-- <th scope="col" style="width: 40%">Kategori</th> --}}
                        <th scope="col" style="width: 6%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaans as $pertanyaan)
                        @if ($pertanyaan->kategori->kuisioner->is_active == 1)
                            <tr>
                                <td style="display:none;">{{ $pertanyaan->id }}</td>
                                <th scope="row">{{ $loop->iteration }}</th>
                                {{-- <td>{{ $pertanyaan->pertanyaan }}</td> --}}
                                <td align="left" valign="top">
                                    {{ $pertanyaan->pertanyaan }}<br>
                                    <hr style="width: 50%">
                                    @foreach ($opsi_jawabans as $opsi)
                                        @if ($pertanyaan->id == $opsi->pertanyaan_id)
                                            <button title="Edit Opsi" class="badge badge-pill bg-warning border-0"><span
                                                    data-feather="x-circle" data-bs-toggle="modal"
                                                    data-bs-target="#editopsi{{ $opsi->id }}"
                                                    data-id="{{ $opsi->id }}"><i
                                                        class="fas fa-pen"></i></span></button>
                                            {{-- <a href="" class="" title="Ubah Opsi"><i
                                                class="fa fa-pen"></i></a> --}}
                                            <form action="/panel/dashboard/pertanyaan/opsi/{{ $opsi->id }}"
                                                method="POST" {{-- <form action="{{ route('kuis.destroy', [$pertanyaan->id]) }}" method="POST" --}} class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button title="Hapus Opsi"
                                                    class="badge badge-pill bg-danger border-0 ml-2"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        data-feather="x-circle"><i
                                                            class="far fa-trash-alt"></i></span></button>&nbsp;
                                            </form>
                                            {{-- <a href="" class="" title="Hapus Opsi"><i
                                                class="fa fa-trash"></i></a>&nbsp; --}}
                                            <b>[{{ $opsi->value }}]</b> {{ $opsi->opsi_jawaban }}<br>
                                        @endif
                                    @endforeach
                                </td>
                                {{-- <td>{{ $pertanyaan->kategori->kategori }} </td> --}}
                                <td>
                                    {{-- <a href="/panel/dashboard/pertanyaan/{{ $pertanyaan->id }}"
                                    class="badge badge-pill badge-warning" data-bs-toggle="modal"
                                    data-bs-target="#editdata"><i class="fas fa-edit"></i></a> --}}
                                    <button title="Tambah Opsi" class="badge badge-pill bg-success border-0 mr-2"><span
                                            data-feather="x-circle" data-bs-toggle="modal"
                                            data-bs-target="#tambahopsi{{ $pertanyaan->id }}"
                                            data-id="{{ $pertanyaan->id }}"><i class="fas fa-plus"></i></span></button>
                                    <button title="Edit Pertanyaan" class="badge badge-pill border-0 badge-warning"><span
                                            data-feather="x-circle" data-bs-toggle="modal"
                                            data-bs-target="#editpertanyaan{{ $pertanyaan->id }}"
                                            data-id="{{ $pertanyaan->id }}"><i class="fas fa-pen"></i></span></button>
                                    {{-- <a href="#" title="Edit Pertanyaan" class="badge badge-pill badge-warning edit2"><i
                                        class="fas fa-edit"></i></a> --}}
                                    <div class="modal fade" id="editpertanyaan{{ $pertanyaan->id }}" tabindex="-1"
                                        aria-labelledby="tambahpertanyaanLabel{{ $pertanyaan->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tambahdata">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editForm2" autocomplete="off" method="post"
                                                        action="/panel/dashboard/pertanyaan/{{ $pertanyaan->id }}">
                                                        @method('put')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label" auto>Kategori
                                                                Pertanyaan</label>
                                                            <select id="kategori_id"
                                                                class="form-control @error('kategori_id') is-invalid @enderror"
                                                                name="kategori_id" autofocus>
                                                                @foreach ($kategoris as $kategori)
                                                                    @if ($kategori->kuisioner->is_active == 1)
                                                                        @if (old('kategori_id', $pertanyaan->kategori_id) == $kategori->id)
                                                                            <option value="{{ $kategori->id }}"
                                                                                selected>
                                                                                {{ $kategori->kategori }}</option>
                                                                        @else
                                                                            <option value="{{ $kategori->id }}">
                                                                                {{ $kategori->kategori }}</option>
                                                                        @endif
                                                                    @endif
                                                                    {{-- <option value="{{ $kategori->id }}">
                                                                    {{ $kategori->kategori }}</option> --}}
                                                                @endforeach

                                                            </select>
                                                            @error('departemen_id')
                                                                <div class="invalid-feedback">{{ $message }}
                                                                </div>
                                                            @enderror
                                                            {{-- <input type="text" class="form-control" id="kategori" name="kategori"
                                                            placeholder="Kategori Pertanyaan"> --}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label"
                                                                auto>Pertanyaan</label>
                                                            <input type="text"
                                                                class="form-control @error('pertanyaan') is-invalid @enderror"
                                                                name="pertanyaan" placeholder="Pertanyaan" require
                                                                autofocus
                                                                value="{{ old('pertanyaan', $pertanyaan->pertanyaan) }}"
                                                                id="pertanyaan">
                                                            @error('pertanyaan')
                                                                <div class="invalid-feedback">{{ $message }}
                                                                </div>
                                                            @enderror
                                                            {{-- <input type="text" name="pertanyaan" id="pertanyaan"
                                                            class="form-control" placeholder="Masukkan Pertanyaan Baru!"> --}}
                                                        </div>
                                                        {{-- <div class="mb-3">
                                                        <label for="" class="form-label" auto>Aktif</label>
                                                        <select class="form-control" id="is_active" name="is_active">
                                                            <option selected>{{ old('is_active') }}
                                                                @if ($pertanyaan->is_active == 1)
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

                                                    </div> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/panel/dashboard/pertanyaan/{{ $pertanyaan->id }}" method="POST"
                                        {{-- <form action="{{ route('kuis.destroy', [$pertanyaan->id]) }}" method="POST" --}} class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button title="Hapus Pertanyaan" class="badge badge-pill bg-danger border-0 ml-2"
                                            onclick="return confirm('Are you sure?')"><span data-feather="x-circle"><i
                                                    class="far fa-trash-alt"></i></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            @endsection
