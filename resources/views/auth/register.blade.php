@include('auth.include')
<div class="container">
    <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description">
            Basic form elements
        </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" required autofocus autocomplete="name" value="{{ old('name') }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" required autocomplete="username" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-light">Cancel</button>
        </form>
    </div>

</div>
