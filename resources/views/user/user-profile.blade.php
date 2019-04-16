@extends('welcome')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-10"><h1>Nombre de Usuario</h1></div>
            <div class="col-sm-2">
                <a href="/users" class="pull-right">
                    <img title="logo app"
                         class="img-circle logo text-center img-responsive"
                         src="{{ asset('images/logo.png') }}">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->

                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                         alt="avatar">
                    @if($)
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                </ul>


            </div><!--/col-3-->
            <div class="col-sm-9">

                <h1>Mi Perfil</h1>

                <hr>
                <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="first_name"><h4>First name</h4></label>
                            <input type="text" class="form-control" name="first_name" id="first_name"
                                   placeholder="first name" title="enter your first name if any.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                            <input type="text" class="form-control" name="last_name" id="last_name"
                                   placeholder="last name" title="enter your last name if any.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                                   title="enter your email.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="password"><h4>Password</h4></label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="password" title="enter your password.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Save
                            </button>
                        </div>
                    </div>

                </form>

                <hr>

            </div><!--/col-9-->
        </div><!--/row-->

@endsection