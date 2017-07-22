<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>{{ $title }}</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

</head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12"  style="float: none;margin: 0 auto; margin-top: 50px;">
            <a class="btn btn-warning pull-right" href="logout" style="margin: 5px;">Logout</a>
            @if(Auth::user()->usertype == "Admin")
              <a class="btn btn-success pull-right" href="add-user" style="margin: 5px;">Add User</a>
            @endif
            <a class="btn btn-default pull-left" href="{{ url('/') }}" style="margin: 5px;">Home</a>
          </div>
          <div class="col-md-12"  id="adduser" style="float: none;margin: 0 auto; margin-top: 50px;">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Sex</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>Usertype</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($users as $row)
                    <tr>
                      <td>{{ $row->lastname }}</td>
                      <td>{{ $row->firstname }}</td>
                      <td>{{ $row->middlename }}</td>
                      <td>{{ $row->gender }}</td>
                      <td>{{ date_format(date_create(substr(Auth::user()->birthdate, 0,10)),'m/d/Y') }}</td>
                      <td>{{ $row->address }}</td>
                      <td>{{ $row->contact_no }}</td>
                      <td>{{ $row->email }}</td>
                      <td>{{ $row->username }}</td>
                      <td>{{ $row->usertype }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>

      <script src="js/jquery.js"></script>
      <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script src="js/bootstrap.min.js"></script>

    </body>
  </html>