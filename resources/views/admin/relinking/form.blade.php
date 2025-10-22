<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($item) ? 'Add link' : 'Edit link' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($item) ? route('services-relinking.store') : route('services-relinking.update', ['services_relinking' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Anchor</label>
                        <input type="text" name="anchor" class="form-control" value="{{ isset($item) ? $item->anchor : old("anchor") }}">
					</div>

                    <div class="form-group">
                        <label for="">Service</label>
                        <select class="form-control" name="service_id">
                            @foreach($services as $k => $v)
                                <option value="{{ $k }}" {{ isset($item) && $item->service_id == $k ? 'selected' : '' }}>{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
					
                    <div class="form-group">
                        <label for="">Service Target</label>
                        <select class="form-control" name="target_service_id">
                            @foreach($services as $k => $v)
                                <option value="{{ $k }}" {{ isset($item) && $item->target_service_id == $k ? 'selected' : '' }}>{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

