@extends('template.template')


@section('body')

<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            @include('shared.errors')
            <form class="ui form" method="post">
                {{csrf_field()}}
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>

                <button class="ui button" type="submit">Login</button>
            </form>

        </div>
        <div class="three wide column"></div>
    </div>

</div>
@endsection