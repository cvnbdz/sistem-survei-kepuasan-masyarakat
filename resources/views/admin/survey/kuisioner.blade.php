@extends('admin.layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="text-black fs-4">DAFTAR KUISIONER</strong>
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
                        <form autocomplete="off" method="post" action="/panel/dashboard/kuisioner">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" auto>Judul Kuisioner</label>
                                <input type="text" class="form-control" id="kuisioner" name="kuisioner"
                                    placeholder="Judul Kuisioner">
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
                        <th scope="col" style="width: 65%">Kuisioner</th>
                        <th scope="col" style="width: 15%">Aktif</th>
                        <th scope="col" style="width: 8%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kuisioner as $key => $kuisioner)
                        <tr>
                            <td style="display:none;">{{ $kuisioner->id }}</td>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $kuisioner->kuisioner }}</td>
                            <td>
                                @if ($kuisioner->is_active == 1)
                                    Aktif
                                @else
                                    Tidak Aktif
                                @endif
                            </td>
                            <td>
                                {{-- <a href="/panel/dashboard/kuisioner/{{ $kuisioner->id }}"
                                    class="badge badge-pill badge-warning" data-bs-toggle="modal"
                                    data-bs-target="#editdata"><i class="fas fa-edit"></i></a> --}}
                                <button title="Ubah Kategori" class="badge badge-pill bg-warning border-0"><span
                                        data-feather="x-circle" data-bs-toggle="modal"
                                        data-bs-target="#editkuisioner{{ $kuisioner->id }}"
                                        data-id="{{ $kuisioner->id }}"><i class="fas fa-pen"></i></span></button>
                                <div class="modal fade" id="editkuisioner{{ $kuisioner->id }}" tabindex="-1"
                                    aria-labelledby="tambahkuisionerLabel{{ $kuisioner->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tambahdata">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm" autocomplete="off" method="post"
                                                    action="/panel/dashboard/kuisioner/{{ $kuisioner->id }}">
                                                    @method('put')
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="" class="form-label" auto>Judul Kuisioner</label>
                                                        <input type="text"
                                                            class="form-control @error('kuisioner') is-invalid @enderror"
                                                            name="kuisioner" placeholder="Judul Kuisioner" require autofocus
                                                            value="{{ $kuisioner->kuisioner }}" id="kuisioner">
                                                        @error('kuisioner')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        {{-- <input type="text" name="kuisioner" id="kuisioner"
                                                            class="form-control" placeholder="Masukkan Kuisioner Baru!"> --}}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label" auto>Aktif</label>
                                                        <select class="form-control" id="is_active" name="is_active">
                                                            <option selected>
                                                                {{ old('is_active') }}
                                                                @if ($kuisioner->is_active == 1)
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
                                <form action="/panel/dashboard/kuisioner/{{ $kuisioner->id }}" method="POST"
                                    {{-- <form action="{{ route('kuis.destroy', [$kuisioner->id]) }}" method="POST" --}} class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge badge-pill bg-danger border-0 ml-2"
                                        onclick="return confirm('Are you sure?')"><span data-feather="x-circle"><i
                                                class="far fa-trash-alt"></i></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>
@endsection
