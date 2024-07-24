<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $students->Fullname}}</td>
                                <td>{{ $students->Email}}</td>
                                <td>{{ $students->Phone}}</td>
                                <td>{{ $students->Address}}</td>
                                <td>{{ $students->City}}</td>
                                <td>{{ $students->Province}}</td>
                                <td>{{ $students->Zip}}</td>
                                <td>{{ $students->Birthdate}}</td>
                                <td>
                                    <a href="{{ url ('students', $students->id}}/edit" class="btn btn-outline-success btn-s"></a>
                                <form action="{{ url('students', $student->id}}" method="post"> 
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onlick="return confirm('Are you sure you want to delete')">delete</button>
                                </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>