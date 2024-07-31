<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-end">
            <a href="{{url('students')}}" class="btn btn-primary">Student List</a>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto d-grid gap-2">
                <form action="{{url('students', $student->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{$student->fname}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{$student->lname}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$student->email}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{$student->phone}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$student->address}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control" value="{{$student->city}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Province</label>
                        <input type="text" name="province" class="form-control" value="{{$student->province}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Zip Code</label>
                        <input type="text" name="zip" class="form-control" value="{{$student->zip}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control" value="{{$student->birthdate}}">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-info">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>