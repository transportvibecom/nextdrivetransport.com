@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Services</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Create service</a>
                    @if(count($services))
                        @php $i = 1 @endphp
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Short description</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ strip_tags($service->title) }}</td>
                                <td>{{ strip_tags($service->shortDesc) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('service.show', ['slug' => $service->slug]) }}" target="_blank" class="btn btn-sm btn-secondary float-left mr-2">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ route('services.edit', ['service' => $service->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('services.destroy', ['service' => $service->id])  }}" method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
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
                <div class="card-footer clearfix">
                    {{ $services->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection

