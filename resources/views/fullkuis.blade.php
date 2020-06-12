@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>CBM QUIZ</h1>
            @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success'))
            <div class="form-group">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success2'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success2') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success3'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success3') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success4'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success4') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success5'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success5') !!}</li>
                </ul>
            </div>
            @endif

            <hr>
            @foreach($data as $datas)
            
            <form action="{{ route('kuis.search') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan:</label>
                    <h4>{{ $datas->pertanyaan }}</h4>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="answer" name="answer">
                    <input type="hidden" class="form-control" id="answer" name="id_test" value="{{ $datas->id_pertanyaan }}">
                    <!-- <input name="invisible" type="hidden" class="form-control" id="id_pertanyaan" name = "id_pertanyaan" value="{{ $datas->id_pertanyaan }}"> -->
                    <button type="submit" class=" btn btn-sm btn-primary" id="formButton">JAWAB</a>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" disabled>
                </div>

                

                @if (\Session::has('success'))
                <script type="text/javascript">
                    $("#formButton").click(function(){
                        $("#jawaban_1").show();
                        $("#sample_1").hide();
                    });
                </script>
                <div class="form-group">
                    <input type="text" class="form-control" id="jawaban_1" value="{{ $datas->jwb_1 }}" disabled>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id = "sample_1" disabled>
                </div>
                @endif

                

                @if (\Session::has('success2'))
                <script type="text/javascript">
                    $("#formButton").click(function(){
                        $("#jawaban_2").toggle();
                    });
                </script>
                <div class="form-group">
                <input type="text" class="form-control" id="jawaban_2" value="{{ $datas->jwb_2 }}" disabled>
                </div>
                @endif

                @if (\Session::has('success3'))
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $datas->jwb_3 }}" disabled>
                </div>
                @endif 

                @if (\Session::has('success4'))
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $datas->jwb_4 }}" disabled>
                </div>
                @endif

                @if (\Session::has('success5'))
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $datas->jwb_5 }}" disabled>
                </div>
                @endif
            </form>
            @endforeach
        </div>

        <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Jawaban</th>
                    <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($datatable as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->jawaban }}</td>
                        <td>{{ $datas->poin }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection