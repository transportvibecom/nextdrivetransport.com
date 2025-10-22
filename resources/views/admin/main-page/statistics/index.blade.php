@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Statistic</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Statistic</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(count($items) < 4)
                    <a href="{{ route('statistics.create') }}" class="btn btn-primary mb-3">Create statistic</a>
                    @endif

                    @if(count($items))
                        @php $i = 1 @endphp
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->quantity }}+</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('statistics.edit', ['statistic' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
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

