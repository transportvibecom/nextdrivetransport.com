@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Top destinations</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top destinations</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if(count($items))
                        @php $i = 1 @endphp
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Meta H1</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->meta_h1 }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('destination.show', ['slug' => $item->slug]) }}" target="_blank" class="btn btn-sm btn-secondary float-left mr-2">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ route('destinations.edit', ['destination' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>Empty</p>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

