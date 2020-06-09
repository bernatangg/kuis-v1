@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>CBM QUIZ</h1>
            <!-- <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
            </div> -->
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif


            <hr>
            @foreach($data as $datas)
            
            <form action="{{ route('kuis.check') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan:</label>
                    <h4>{{ $datas->pertanyaan }}</h4>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="answer" name="answer">
                    <button type="submit" class=" btn btn-sm btn-primary">JAWAB</a>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="jwb_1" name="jwb_1" value="{{ $datas->jwb_1 }}" disabled>
                </div>
                <div class="form-group">
                    <label for="jwb_2">Jawaban 2:</label>
                    <input type="text" class="form-control" id="jwb_2" name="jwb_2" value="{{ $datas->jwb_2 }}" disabled>
                </div>
 
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection