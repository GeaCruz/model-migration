<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>
<body>
    <div>
        <form action="{{url('students')}}" method="post">
            @csrf
            <div>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 mx-auto d-grid gap-2">
                            <div class="form-group mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control">
                                @error('fname')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                                @error('lname')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                                @error('email')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                                @error('phone')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control">
                                @error('address')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control">
                                @error('city')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Province</label>
                                <input type="text" name="province" class="form-control">
                                @error('province')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" name="zip" class="form-control">
                                @error('zip')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control">
                                @error('birthdate')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                            @if(session('success'))
                                <div>{{ session('success') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>