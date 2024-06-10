@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-succse">{{ session('status') }}</div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Inmport Data</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ url('person/import') }}"method="POST" enctype='multipart/form-data'>
                            @csrf
                            <div class="input-group">
                                <input type="file"name="import_file" class="form-control">
                                <button type="submit" class="btn btn-primary">import</button>
                            </div>


                    </div>
                    </form>
                    <form action="/export-persons" method="GET">
                        <button type="submit" class="btn btn-info">Export to Excel</button>
                    </form>


                </div>

            </div>

        </div>
    </div>
@endsection
