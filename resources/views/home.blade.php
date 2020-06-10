@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis voluptate officia consectetur illum praesentium molestias eius vero voluptas omnis quam. Eius ex dolor voluptatum autem consequatur temporibus, dolorum quam accusamus.</p>
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection