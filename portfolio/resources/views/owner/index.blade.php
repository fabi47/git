@extends('...common.layout')

@section('owner_index')
    // 表示方法を記載

    @foreach ($owners as $owner)
    名前：{{ $owner -> name }}---電話：{{ $owner -> tel }}<br>
    車種：{{ $owner -> car_name }}---車番：{{ $owner -> car_number }}<br>

@endsection
