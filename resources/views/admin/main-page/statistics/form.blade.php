<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($item) ? 'Add statistic' : 'Edit statistic' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($item) ? route('statistics.store') : route('statistics.update', ['statistic' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ isset($item) ? $item->title : old("title") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="{{ isset($item) ? $item->quantity : old("quantity") }}">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

