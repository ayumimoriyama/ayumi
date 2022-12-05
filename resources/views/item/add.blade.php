@extends('adminlte::page')

@section('title', 'ゆるキャラ登録')

@section('content_header')
    <h1>ゆるキャラ登録</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="postcode">郵便番号</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="1234567">
                        </div>

                        <div class="form-group row">
                            <label for="pref" class="col-md-4 col-form-label text-md-right">{{ __('Prefectures') }}</label>

                            <div class="col-md-6">
                                <select name="pref_id" id="pref_id" class="form-control @error('pref_id') is-invalid @enderror">
                                    <option value="">-- 選択してください --</option>
                                    @foreach (App\Models\Item::$prefs as $key => $pref)
                                    <option value="{{ $key }}" @if (old('pref_id') == $key) selected @endif>{{ $pref }}</option>
                                    @endforeach
                                </select>

                                @error('pref_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" placeholder="広島市中区">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="town" class="col-md-4 col-form-label text-md-right">{{ __('Town') }}</label>

                            <div class="col-md-6">
                                <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ old('town') }}" autocomplete="town" placeholder="基町1丁目1-1">

                                @error('town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="building" class="col-md-4 col-form-label text-md-right">{{ __('Building') }}</label>

                            <div class="col-md-6">
                                <input id="building" type="text" class="form-control @error('bilding') is-invalid @enderror" name="building" value="{{ old('building') }}" autocomplete="building" placeholder="基町○○ビル101号室">

                                @error('building')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
