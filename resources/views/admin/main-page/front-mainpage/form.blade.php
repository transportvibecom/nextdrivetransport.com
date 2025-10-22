<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit mainpage metadata</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('front-mainpage.update', ['front_mainpage' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ isset($item) ? $item->meta_title : old("meta_title") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" class="form-control" value="{{ isset($item) ? $item->meta_description : old("meta_description") }}">
                    </div>
					
                    <div class="form-group">
                        <label for="">Meta H1</label>
                        <input type="text" name="meta_h1" class="form-control" value="{{ isset($item) ? $item->meta_h1 : old("meta_h1") }}">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
