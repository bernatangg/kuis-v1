@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>CBM QUIZ -  Tabel Pertanyaan</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            @foreach($data AS $datas)
                <a href="{{ route('kuis.runquiz',$datas->id) }}" class=" btn btn-sm btn-primary">Pertanyaan : {{ $datas->id }}</a>
            @endforeach
            
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection