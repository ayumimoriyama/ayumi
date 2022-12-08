<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>   
<body>
<div style="width: 500px; margin: 100px auto;">
<form action="{{route('user.update',$item->id)}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">名前</label>
    <input value='{{$item->name}}' name='name' type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">郵便番号</label>
    <input value='{{$item->postcode}}' name='postcode' type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="form-group row">
                            <label for="pref" class="col-md-4 col-form-label text-md-right">{{ __('Prefectures') }}</label>

                            <div class="col-md-6">
                                <select name="pref_id" id="pref_id" class="form-control @error('pref_id') is-invalid @enderror">
                                    <option value="">-- 選択してください --</option>
                                    @foreach (App\Models\Item::$prefs as $key => $pref)
                                    @if ($item->pref_id == $key)
                                    <option value="{{ $key }}" selected>{{ $pref }}</option>
                                    @else
                                    <option value="{{ $key }}">{{ $pref }}</option>
                                    @endif
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
                                <input value='{{$item->city}}' name='city' type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

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
                            <input value='{{$item->town}}' name='town' type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

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
                            <input value='{{$item->building}}' name='building' type="input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                @error('building')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">詳細</label>
    <input value='{{$item->detail}}' name='detail' type="input" class="form-control" id="exampleInputPassword1">
</div>
<button type="submit" class="btn btn-success">編集</button>
</form>
    <form action="{{ url('UserDelete/'.$item->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha384-q81/x+9650z00rT7abK41JStQIAqVgRVzpbo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>