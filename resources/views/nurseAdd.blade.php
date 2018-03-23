@extends('template.template')


@section('body')
<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <form class="ui form" method="post" action="{{route('nurse.store')}}">
                {{csrf_field()}}
                <div class="field">
                    <label>Patient Name</label>
                    <input type="text" name="name" placeholder="Patient Name">
                </div>
                <div class="field">
                    <label>Age</label>
                    <input type="number" name="age" placeholder="Age">
                </div>
                <div class="field">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </div>
                <div class="field">
                    <label>Phone</label>
                    <input type="number" name="phone" placeholder="Phone">
                </div>
                <div class="field">
                    <label>Residence</label>
                    <input type="text" name="residence" placeholder="Residence">
                </div>
                <div class="field">
                    <label>Temperature</label>
                    <input type="text" name="temperature" placeholder="Temperatute">
                </div>
                <div class="field">
                    <label>Weight</label>
                    <input type="number" name="weight" placeholder="Weight">
                </div>
                <div class="field">
                    <label>Blood Pressure</label>
                    <input type="text" name="blood_pressure" placeholder="Blood Pressure">
                </div>

                <button class="ui button" type="submit">Submit</button>
            </form>

        </div>
        <div class="three wide column"></div>
    </div>

</div>
@endsection