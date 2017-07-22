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
          <div class="col-md-8"  style="float: none;margin: 0 auto; margin-top: 50px;">
          <a class="btn btn-warning pull-right" href="logout" style="margin: 5px;">Logout</a>
          @if(Auth::user()->usertype == "Admin")
          <a class="btn btn-info pull-right" href="users" style="margin: 5px;">View Users</a>
          @endif
          <a class="btn btn-default pull-left" href="{{ url('/') }}" style="margin: 5px;">Home</a>
          </div>
          <div class="col-md-8"  id="adduser" style="float: none;margin: 0 auto; margin-top: 50px;">
            {!! Form::open(array('url' => 'add-user/save', 'role' => 'form', 'id' => 'form-adduser')) !!}
            <div id="alert-adduser">
            </div>
            <div class="panel panel-default" >
              <div class="panel-heading">Add User</div>
              <div class="panel-body">
                <div>

                  <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="firstname" class="form-control" name="firstname" id="firstname">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="lastname" class="form-control" name="lastname" id="lastname">
                  </div>
                  <div class="form-group">
                    <label for="middlename">Middlename:</label>
                    <input type="middlename" class="form-control" name="middlename" id="middlename">
                  </div>
                  <div class="form-group">
                  <label for="sel1">Sex:</label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="">-- Select --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="birthdate">Birthday:</label>
                    <input type="birthdate" class="form-control" name="birthdate" id="birthdate" readonly="">
                  </div>
                  <div class="form-group">
                  <label for="address">Address:</label>
                    <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="contact_no">Contact No:</label>
                    <input type="contact_no" class="form-control" name="contact_no" id="contact_no">
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                  <hr>
                  <div class="form-group">
                  <label for="sel1">Usertype:</label>
                    <select class="form-control" id="usertype" name="usertype">
                      <option value="">-- Select --</option>
                      <option value="Admin">Admin</option>
                      <option value="Guest">Guest</option>
                    </select>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="username" class="form-control" name="username" id="username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                  </div>
                  <button type="submit" class="btn btn-info btn-save">Save</button>
                </div>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>

      <script src="js/jquery.js"></script>
      <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <script>
        $( function() {
          $( "#birthdate" ).datepicker();
        });

        $("#adduser").find("form").submit(function(e) {

          var form = $("#adduser").find("form");
          var btn = $(".btn-save");

          e.preventDefault();
          btn.attr('disabled', 'disabled');

          $("html, body").animate({ scrollTop: 0 }, "slow");

          $.ajax({
            type: "post",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: "json",
            success: function(response) {
              if(response.error) {
                var errors = '  <div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><p><strong>Please correct the following:</strong></p><ul>';
                $.each(response.error, function(index, value) {
                  errors += '<li>' + value + '</li>';
                });
                errors += '</ul></div></div>';
                $("#alert-adduser").html(errors);
              } else {

                var succeed = '  <div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button><p><strong>User successfully added.</strong></p></div></div>';

                $("#alert-adduser").html(succeed);
                form.trigger('reset');
              }
              btn.removeAttr('disabled');
            }
          });
        });

      </script>
    </body>
  </html>