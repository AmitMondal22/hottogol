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
                        <form action="{{route('admin.menubar')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="Email">Name</label>
                                        <input type="text" class="form-control" id="Email" aria-describedby="emailHelp" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">KeyWord</label>
                                        <input type="text" class="form-control" id="Text" name="keyWord" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Icon Code</label>
                                        <input type="text" class="form-control" id="password" placeholder="" name="icon">
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



@endsection
