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
            <form action="{{ route('pertanyaan.update', $datas->id) }}" method="post">
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
                    <label for="jwb_6">Jawaban 6:</label>
                    <input type="text" class="form-control" id="jwb_6" name="jwb_6" value="{{ $datas->jwb_6 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_7">Jawaban 7:</label>
                    <input type="text" class="form-control" id="jwb_7" name="jwb_7" value="{{ $datas->jwb_7 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_8">Jawaban 8:</label>
                    <input type="text" class="form-control" id="jwb_8" name="jwb_8" value="{{ $datas->jwb_8 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_9">Jawaban 9:</label>
                    <input type="text" class="form-control" id="jwb_9" name="jwb_9" value="{{ $datas->jwb_9 }}">
                </div>
                <div class="form-group">
                    <label for="jwb_10">Jawaban 10:</label>
                    <input type="text" class="form-control" id="jwb_10" name="jwb_10" value="{{ $datas->jwb_10 }}">
                </div>
                <!-- <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->alamat }}</textarea>
                </div> -->
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