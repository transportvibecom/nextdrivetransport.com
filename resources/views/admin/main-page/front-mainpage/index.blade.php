@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mainpage Data</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                                <div >
                                    @foreach($items as $item)
                                        <div>
                                            <div class="d-flex">

												<table class="table table-bordered">
													<thead>
													<tr>

														<th>Title</th>
														<th>Description</th>
														<th>H1</th>
														<th style="width: 10px">#</th>
													</tr>
													</thead>
													<tbody>
													<td>{{ $item->meta_title }}</td>
													<td>{{ $item->meta_description }}</td>
													<td>{{ $item->meta_h1 }}</td>
													<td>
													<a href="{{ route('front-mainpage.edit', ['front_mainpage' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                                    <i class="fas fa-pencil-alt"></i> Edit
													</a>
													</td>
													</tbody>
												</table>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

