@extends('public_view.common.main')
@section('publ_view_content')








<div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">







                        <div class="card">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>


                    <div class="row">
                        <div class="col-md-9">
                        <div class="card">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
                        </div>
                        <div class="col-md-3">
                        <div class="card">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
                        </div>
                    </div>



                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Horizontal layout</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a>
                                                        </li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>In Horizontal Layout V2 - Navigation bar is set in a Horizontal way with fixed width container. It also showing/hidden while scrolling up/down.</p>
                                            <div class="alert alert-info mb-0" role="alert">
                                                <p class="mb-0">It is best suited for those applications where you required your navigation is set to be a Horizontal way with fixed width container.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ horizontal-layout ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                            <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Inline Text Elements</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="lead m-t-0">Your title goes here</p>
                                            You can use the mark tag to
                                            <mark>highlight</mark> text.
                                            <br>
                                            <del>This line of text is meant to be treated as deleted text.</del>
                                            <br>
                                            <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                            <br>
                                            <strong>rendered as bold text</strong>
                                            <br>
                                            <em>rendered as italicized text</em>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Unordered</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Ordered</h5>
                                        </div>
                                        <div class="card-body">
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Unstyled</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Integer molestie lorem at massa
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                            <h5>Inline</h5>
                                            <hr>
                                            <ul class="list-inline m-b-0">
                                                <li class="list-inline-item">Lorem ipsum</li>
                                                <li class="list-inline-item">Phasellus iaculis</li>
                                                <li class="list-inline-item">Nulla volutpat</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                <div class="card">
						<img class="img-fluid card-img-top" src="{{asset('public_view')}}/assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
@section('script_public_view')



@endsection
