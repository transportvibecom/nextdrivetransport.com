@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Questions</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Questions</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('questions.create') }}" class="btn btn-primary mb-3">Create Questions</a>

                    @if(count($items))
                        @php $i = 1 @endphp
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->question }}</td>
                                <td>{{ strip_tags($item->answer) }}+</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('questions.edit', ['question' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('questions.destroy', ['question' => $item->id])  }}" method="post" class="float-left">
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
            </div>
        </div>
    </section>
@endsection

