@extends ('layouts.master')



@section ('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ Auth::user()->name }}</h2>
                                    <h6 class="d-block"><a href="#">1,500</a> Video Uploads</h6>
                                    <h6 class="d-block"><a href="#">300</a> Blog Posts</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="/profile/create" >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content ml-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Username</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{ $profile->name}}
                                                    <input type="text" class="form-control" id="username" name="username" value="">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Email</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->email }}--}}
                                                    <input type="email" class="form-control" id="email" name="email" value="">
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">First name</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->firstname }}--}}
                                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Last name</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->lastname }}--}}
                                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Age</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->age }}--}}
                                                    <input type="number" class="form-control" id="age" name="age">
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Birth date</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->birthdate }}--}}
                                                    <input type="number" class="form-control" id="birthdate" name="birthdate">
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Bio</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{--{{ $profile->bio }}--}}
                                                    <textarea id="bio" name="bio" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">

                                                <button type="submit" class="btn btn-primary">Create Profile</button>

                                            </div>
                                            @include('layouts.errors')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection