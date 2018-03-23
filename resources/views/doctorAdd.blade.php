@extends('template.template')


@section('body')
<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <div class="ui segments">
                <div class="ui blue inverted segment">Patient TRIAGE Details</div>
                <div class="ui segment">Name: {{$patient->name}}</div>
                <div class="ui segment">Temperature: {{$patient->temperature}}</div>
                <div class="ui segment">weight: {{$patient->weight}}</div>
                <div class="ui segment">Blood Pressure: {{$patient->blood_pressure}}</div>
            </div>
            <form class="ui form" method="post" action="{{route('doctor.update',['upc'=>$patient->upc])}}">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="field">
                    <label>Observation</label>
                    <input type="text" name="observation" placeholder="Observation">
                </div>
                <div class="field">
                    <label>Diagnosis</label>
                    <input type="text" name="diagnosis" placeholder="Diagnosis">
                </div>
                <div class="field">
                    <label>Prescription</label>
                    <input type="text" name="prescription" placeholder="Prescription">
                </div>


                <button class="ui button" type="submit">Submit</button>
            </form>

        </div>
        <div class="three wide column"></div>
    </div>

</div>
@endsection