@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Relinking links</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('services-relinking.create') }}" class="btn btn-primary mb-3">Create link</a>
                    @if(count($items))
                        @php $i = 1 @endphp
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Anchor</th>
							<th>What service</th>
							<th>Where to show</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->anchor }}</td>
								<td>{{ $item->service->title }}</td>
								<td>{{ $item->serviceTarget->title }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('services-relinking.edit', ['services_relinking' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('services-relinking.destroy', ['services_relinking' => $item->id])  }}" method="post" class="float-left">
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
                    {{ $items->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection

