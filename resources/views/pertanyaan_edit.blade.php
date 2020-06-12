@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>CBM QUIZ -  Edit Kontak</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pertanyaan.update', $datas->id_pertanyaan) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan:</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{ $datas->pertanyaan }}">
                </div>
                <div class="form-group">
                    <label for="jwb_1">Jawaban 1:</label>
                    <input type="text" class="form-control" id="jwb_1" name="jwb_1" value="{{ $datas->jwb_1 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_2">Jawaban 2:</label>
                    <input type="text" class="form-control" id="jwb_2" name="jwb_2" value="{{ $datas->jwb_2 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_3">Jawaban 3:</label>
                    <input type="text" class="form-control" id="jwb_3" name="jwb_3" value="{{ $datas->jwb_3 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_4">Jawaban 4:</label>
                    <input type="text" class="form-control" id="jwb_4" name="jwb_4" value="{{ $datas->jwb_4 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_5">Jawaban 5:</label>
                    <input type="text" class="form-control" id="jwb_5" name="jwb_5" value="{{ $datas->jwb_5 }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection