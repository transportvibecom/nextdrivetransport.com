<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($item) ? 'Add destination' : 'Edit destination' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($item) ? route('destinations.store') : route('destinations.update', ['destination' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ isset($item) ? $item->title : old("title") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ isset($item) ? $item->meta_title : old("meta_title") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" class="form-control" value="{{ isset($item) ? $item->meta_description : old("meta_description") }}">
                    </div>

                    <div class="form-group">
                        <label for="">H1</label>
                        <input type="text" name="meta_h1" class="form-control" value="{{ isset($item) ? $item->meta_h1 : old("meta_h1") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Menu Anchor</label>
                        <input type="text" name="menu_anchor" class="form-control" value="{{ isset($item) ? $item->menu_anchor : old("menu_anchor") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Short description</label>
                        <textarea name="shortDesc" class="form-control editor" cols="30" rows="10">{{ isset($item) ? $item->shortDesc : old("shortDesc") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="desc" class="form-control editor" id="" cols="30" rows="10">{{ isset($item) ? $item->desc : old("desc") }}</textarea>
                    </div>

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

