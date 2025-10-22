<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ !isset($item) ? 'Add question' : 'Edit question' }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ !isset($item) ? route('questions.store') : route('questions.update', ['question' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($item))  @method('PUT') @endif
                    <div class="form-group">
                        <label for="">Question</label>
                        <input type="text" name="question" class="form-control" value="{{ isset($item) ? $item->question : old("question") }}">
                    </div>

                    <div class="form-group">
                        <label for="">Answer</label>
                        <textarea name="answer" class="form-control editor" id="" cols="30" rows="10">{{ isset($item) ? $item->answer : old("answer") }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

