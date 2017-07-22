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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-8" style="float: none;margin: 0 auto; margin-top: 50px;">
            <a class="btn btn-warning pull-right" href="logout" style="margin: 5px;">Logout</a>
            @if(Auth::user()->usertype == "Admin")
            <a class="btn btn-success pull-right" href="add-user" style="margin: 5px;">Add User</a>
            <a class="btn btn-info pull-right" href="users" style="margin: 5px;">View Users</a>
            @endif
          </div>
          <div class="col-md-8"  style="float: none;margin: 0 auto; margin-top: 50px;">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th colspan="2">
                      User Information
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lastname</td>
                    <td>{{ Auth::user()->lastname }}</td>
                  </tr>
                  <tr>
                    <td>Firstname</td>
                    <td>{{ Auth::user()->firstname }} </td>
                  </tr>
                  <tr>
                    <td>Middlename</td>
                    <td>{{ Auth::user()->middlename }}</td>
                  </tr>
                  <tr>
                    <td>Email Address</td>
                    <td>{{ Auth::user()->email }}</td>
                  </tr>
                  <tr>
                    <td>Contact No</td>
                    <td>{{ Auth::user()->contact_no }}</td>
                  </tr>
                  <tr>
                    <td>Sex</td>
                    <td>{{ Auth::user()->gender }}</td>
                  </tr>
                  <tr>
                    <td>Birthday</td>
                    <td>{{ date_format(date_create(substr(Auth::user()->birthdate, 0,10)),'m/d/Y') }}</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>{{ Auth::user()->address }}</td>
                  </tr>

                  <tr>
                    <td>Usertype</td>
                    <td>{{ Auth::user()->usertype }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <script src="js/jquery.js"></script>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>

    </body>
    </html>