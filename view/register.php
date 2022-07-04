<form method="POST" action="/_register">
    <div class="mb-3">
        <row class="row">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">LastName</label>
                <input type="text" name="lastName" class="form-control">
            </div>
        </row>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <label class="form-text-label" for="exampleCheck1">password confirmation</label>
        <textarea type="password" name="passwordConfirm" class="form-control" id="exampleCheck1"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>