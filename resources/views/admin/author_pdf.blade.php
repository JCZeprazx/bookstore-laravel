<!DOCTYPE html>
<html>

<head>
    <title>Report Author</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col-lg-12">
        <div class="bordered">
            <div class="card-header">
                <strong class="card-title">Data Author</strong>
            </div>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Author First Name</th>
                            <th>Author Last Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($names as $name)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $name->author_firstname }}</td>
                            <td>{{ $name->author_lastname }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>