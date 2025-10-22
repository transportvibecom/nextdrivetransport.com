<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($service) ? 'Add service' : 'Edit service' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($service) ? route('services.store') : route('services.update', ['service' => $service->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ isset($service) ? $service->title : old("title") }}">
{{--                        <textarea name="title" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->title : old("title") }}</textarea>--}}
                    </div>
                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ isset($service) ? $service->meta_title : old("meta_title") }}">
                    </div>
					
                    <div class="form-group">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" class="form-control" value="{{ isset($service) ? $service->meta_description : old("meta_description") }}">
                    </div>
					
                    <div class="form-group">
                        <label for="">H1</label>
                        <input type="text" name="meta_h1" class="form-control" value="{{ isset($service) ? $service->meta_h1 : old("meta_h1") }}">
                    </div>
					
                    <div class="form-group">
                        <label for="">Menu Anchor</label>
                        <input type="text" name="menu_anchor" class="form-control" value="{{ isset($service) ? $service->menu_anchor : old("menu_anchor") }}">
                    </div>
					
                    <div class="form-group">
                        <label for="">Short description</label>
                        <textarea name="shortDesc" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->shortDesc : old("shortDesc") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="desc" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->desc : old("desc") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Block 1</label>
                        <textarea name="descOne" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->descOne : old("descOne") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Block 2</label>
                        <textarea name="descTwo" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->descTwo : old("descTwo") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Block 3</label>
                        <textarea name="descThree" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->descThree : old("descThree") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fact title</label>
                        <textarea name="factTitle" class="form-control editor" cols="30" rows="10">{{ isset($service) ? $service->factTitle : old("factTitle") }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fact #1</label>
                        <input type="text" name="factOne" class="form-control" value="{{ isset($service) ? $service->factOne : old("factOne") }}">
                    </div>
                    <div class="form-group">
                        <label for="">Fact #2</label>
                        <input type="text" name="factTwo" class="form-control" value="{{ isset($service) ? $service->factTwo : old("factTwo") }}">
                    </div>
                    <div class="form-group">
                        <label for="">Fact #3</label>
                        <input type="text" name="factThree" class="form-control" value="{{ isset($service) ? $service->factThree : old("factThree") }}">
                    </div>
                    <div class="form-group">
                        <label for="">Fact #4</label>
                        <input type="text" name="factFour" class="form-control" value="{{ isset($service) ? $service->factFour : old("factFour") }}">
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
                        @if(isset($service))
                            <div><img src="{{ $service->getImage(null, null, 75, 0 ,'thumb') }}" alt="" class="img-thumbnail mt-2" style="width: 150px"></div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="ico">Image Full Size</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="full_image"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="full_image">Choose file</label>
                            </div>
                        </div>
                        @if(isset($service))
                            <div><img src="{{ $service->getImage(null, null, 75, 0 ,'full') }}" alt="" class="img-thumbnail mt-2" style="width: 150px"></div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

