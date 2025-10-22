<form action="{{ route('sendMessage') }}" id="callBackForm" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
    </div>
    <div class="form-group">
        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="text" name="requestInput" class="form-control" placeholder="Request" required>
    </div>
    <div class="form-group">
        <textarea name="comment" id="comment" class="form-control" rows="2" placeholder="Comment"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
