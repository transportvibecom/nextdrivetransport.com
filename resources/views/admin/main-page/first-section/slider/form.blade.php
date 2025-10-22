<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($item) ? 'Add image' : 'Edit image' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($item) ? route('slider.store') : route('slider.update', ['slider' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="ico">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="thumbnails">Choose file</label>
                            </div>
                        </div>
                        @if(isset($item))
                            <div><img src="{{ $item->getImage() }}" alt="" class="img-thumbnail mt-2" style="width: 150px"></div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
