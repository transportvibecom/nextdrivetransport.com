@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Slider</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('slider.create') }}" class="btn btn-primary mb-2">Add image</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @php $i = 0 @endphp
                                    @foreach($items as $item)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i++ }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach($items as $item)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="d-flex" style="position: absolute; top: 10px; left: 10px; z-index: 2;">
                                                <a href="{{ route('slider.edit', ['slider' => $item->id]) }}" class="btn btn-sm btn-info float-left mr-2">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <form action="{{ route('slider.destroy', ['slider' => $item->id])  }}" method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Подтвердите удаление')">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                            <img class="d-block w-100" src="{{ $item->getImage() }}" alt="First slide" style="height: 450px; object-fit: cover">
                                        </div>
                                    @endforeach
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-left"></i>
                                    </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

