<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container">
            <div class=""row>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $students)
                            <tr>
                                <td>{{ $students->fullname }}</td>
                                <td>{{ $students->email }}</td>
                                <td>{{ $students->phone }}</td>
                                <td>{{ $students->address }}</td>
                                <td>{{ $students->city }}</td>
                                <td>{{ $students->province }}</td>
                                <td>{{ $students->zip }}</td>
                                <td>{{ $students->birthday }}</td>
                                <td>
                                    <a href="{{ url ('students', $students->id)}}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                                <form action="{{ url('students', $students->id)}}" method="POST"> 
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onlick="return confirm('Are you sure you want to delete')">delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>