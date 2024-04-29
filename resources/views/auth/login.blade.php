@include('auth.include')
<div class="container">

    <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description">
            Basic form elements
        </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required autofocus autocomplete="username">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check form-check-flat form-check-primary">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-light">Cancel</button>
        </form>



</div>

</div>

