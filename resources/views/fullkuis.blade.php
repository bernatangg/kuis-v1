@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>CBM QUIZ</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pertanyaan.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan:</label>
                    <h4>{{ $datas->pertanyaan }}</h4>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="answer" name="answer">
                    <a href="" class=" btn btn-sm btn-primary">JAWAB</a>
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