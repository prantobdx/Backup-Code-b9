
@extends('frontEnd.master')
<!-- section -->

@section('content')

    <section class="inner_banner mt-3 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Courses</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Popular </span>Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('frontEndAssets')}}/images/p1.png" alt="#" />
                        <h4>Financial Accounting</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('frontEndAssets')}}/images/p2.png" alt="#" />
                        <h4>Managerial Accounting</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('frontEndAssets')}}/images/p3.png" alt="#" />
                        <h4>Intermediate Accounting</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection

