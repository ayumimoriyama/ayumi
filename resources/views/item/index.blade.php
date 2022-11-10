@extends('adminlte::page')

@section('title', 'ゆるキャラ登録一覧')

@section('content_header')
    <h1>ゆるキャラ登録一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ゆるキャラ登録一覧</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ url('/add') }}" class="btn btn-default">ゆるキャラ登録</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
        <th>名前</th>
        <th>郵便番号</th>
        <th>住所</th>
        <th></th>
        <th></th>
        <th></th>
        <th>詳細</th>
    </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->postcode }}</td>
                                    <td>{{ App\Models\Item::$prefs[$item->pref_id] }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->town }}</td>
                                    <td>{{ $item->building }}</td>
                                    <td>{{ $item->detail }}</td>
                                    <td><a href="/edit/{{ $item->id }}">編集</a></td>
                                    <td><a href="/item/{{ $item->id }}">削除</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
