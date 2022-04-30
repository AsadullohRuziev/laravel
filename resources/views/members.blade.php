@extends('app')

@section('title', 'Bu members file ')

@section('content')
    <h1>This is members</h1>
    <ul>
{{--        @foreach($members as $member)--}}

{{--            <li>{{$member}}</li>--}}
{{--        @endforeach--}}
        @forelse($members as $member)

            <li>{{$member}}</li>
        @empty
            bu yer bosh
        @endforelse
    </ul>
@endsection





{{--//kelgan malumotlarni forelse da va foreachda chiqarish amalga oshirdik--}}
