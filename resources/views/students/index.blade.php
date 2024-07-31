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
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Zip</th>
                                <th>Birthdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->fullname}}</td>
                                <td>{{ $student->email}}</td>
                                <td>{{ $student->phone}}</td>
                                <td>{{ $student->address}}</td>
                                <td>{{ $student->city}}</td>
                                <td>{{ $student->province}}</td>
                                <td>{{ $student->zip}}</td>
                                <td>{{ $student->birthday}}</td>
                                <td>
                                    <a href="{{ url('students', $student->id) }}/edit" class="btn btn-outline-success btn-sm">edit</a>
                                    <form action="{{ url('students', $student->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">delete</button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
                <div>
            </div>
        </div>
    </div>
</body>
</html>