@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>注册</h4>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" class="form-control" name="name" placeholder="请填写名称" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" class="form-control"  name="email" placeholder="请填写名邮箱" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" class="form-control" name="password" placeholder="请填写密码" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="请填确认密码" value="{{ old('password_confirmation') }}">
                    </div>

                    {{--<div class="form-group">
                        <label for="code"></label>
                    </div>--}}

                    <button type="submit" class="btn btn-primary">注册</button>

                </form>
            </div>
        </div>
    </div>
@stop