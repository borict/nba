@extends('layouts.master')
<h2>All teams</h2>
<ul>
@foreach ($teams as $team)
    <li>
        <a href="{{route('single-team',['id'=>$team->id])}}">{{$team->name}}</a>
    </li>
@endforeach
</ul>
