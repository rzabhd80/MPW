<form method="POST" action="/contactUs">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">title</label>
        <input type="text" name="title" class="form-control" id="exampleInputPassword1">
        <label class="form-text-label" for="exampleCheck1">Text</label>
        <textarea type="text" name="text" class="form-control" id="exampleCheck1"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>