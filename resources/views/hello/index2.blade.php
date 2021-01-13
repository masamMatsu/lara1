@extends('layouts.helloapp')

@section('title', '松Laravel')

@section('menubar')
    HOME
   @parent
@endsection

@section('content')


{{Form::select('age', [
   'young' => 'Under 18',
   'adult' => '19 to 30',
   'adult2' => 'Over 30']
)}}

@php
    $job_name_loop = [
        ''      => '選択してください' ,
        '公務員' => '公務員' ,
        '医師'   => '医師' ,
        '弁護士' => '弁護士' ,
    ];
@endphp
{{ Form::select('job_name', $job_name_loop, old('job_name'), ['class' => 'my_class']) }}


@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
