@extends('layouts.app')

@section('content')
<section>
    <div class="row container">
        <div class="profile-data col-md-6">
            @foreach($users as $user)
                
            <form action="{{ route('update-profile') }}" method="post">
                @csrf
                <div>
                    <label> Name </label>
                    <input type="text" name="name" value="{{old('name', $user->name)}}">
                </div>

                <div> 
                    <label> Email </label>
                    <input type="email" name="email" value="{{old('email', $user->email)}}">
                 </div>

                <input type="submit" value="Edit">
            </form>
            @endforeach
        </div>
    </div>
</section>
@endsection