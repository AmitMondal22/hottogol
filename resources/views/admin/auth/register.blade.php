@extends('admin.common.main')
@section('admin_view_content')






<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->







                    <div class="card">
                    <div class="card-header">
                        <h5>Menu Bar</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.register')}}" method="post" id="myform">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="email">email</label>
                                        <input type="email" class="form-control" id="email" name="email" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="" name="password">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-block" value="Save">
                            </div>
                        </form>
                    </div>
                </div>



    </div>
</div>

<!--

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->





@endsection
@section('script_admin_view')
<!-- jQuery Validate library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<!--end jQuery Validate library  -->
<script>

  $("#myform").validate({
    rules: {
        email: {
        required: true,
        email: true
      },
      name: {
        required: true,
        minlength: 2
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    messages: {
      email: {
        required: "Please enter an email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long"
      },
      name: {
        required: "Please enter your name",
        minlength: "Please enter a valid Full Name"
      },
    }
  });
</script>


@endsection




