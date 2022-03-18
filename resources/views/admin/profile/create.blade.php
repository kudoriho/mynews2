@extends('layouts.admin')
@section('title', 'My プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">氏名(name)</label>
                        <div class="col-md-10">
                        <td><input type="text" name="name" id="name" size="40" maxlength="20" placeholder="工藤里穂" autofocus required></td>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">性別(gender)</label>
                        <div class="col-md-10">
                        <td><label for="male"><input type="radio" name="gender" id="male" value="男性">男性</label><br><label for="female"><input type="radio" name="gender" id="female" value="女性">女性</label></td>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">趣味(hobby)</label>
                        <div class="col-md-10">
                        <td><textarea name="question" cols="40" rows="3" placeholder="音楽鑑賞です。"></textarea></td>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2" for="title">自己紹介欄(introduction)</label>
                        <div class="col-md-10">
                        <td><textarea name="question" cols="40" rows="3" placeholder="私の名前はkudorihoです。"></textarea></td>
                        </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection