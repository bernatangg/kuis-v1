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
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban 1</th>
                    <th>Jawaban 2</th>
                    <th>Jawaban 3</th>
                    <th>Jawaban 4</th>
                    <th>Jawaban 5</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->pertanyaan }}</td>
                        <td>{{ $datas->jwb_1 }}</td>
                        <td>{{ $datas->jwb_2 }}</td>
                        <td>{{ $datas->jwb_3 }}</td>
                        <td>{{ $datas->jwb_4 }}</td>
                        <td>{{ $datas->jwb_5 }}</td>
                        <td>
                            <form action="{{ route('pertanyaan.destroy', $datas->id_pertanyaan) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('pertanyaan.edit',$datas->id_pertanyaan) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection