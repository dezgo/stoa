@extends('layouts.app')

@section('content')

{!! Form::model($time, ['route' => ['time.store', $time->id]]) !!}

<div class="form-group">
    <label for="txtStartTime">Start Time</label>
    <input type="text" class="form-control" id="txtStartTime" placeholder="Start Time">
</div>

<div class="form-group">
    <label for="txtEndTime">End Time</label>
    <input type="text" class="form-control" id="txtEndTime" placeholder="End Time">
</div>

<div class="form-group">
    <label for="txtBreakTime">Break</label>
    <input type="text" class="form-control" id="txtBreakTime" placeholder="Break">
</div>

<div class="form-group">
    <label for="chkBillable">Billable?</label><br>
    <input type="checkbox" id="chkBillable">
</div>

<div class="form-group">
    <label for="selClient">Client</label>
    <select class="form-control" id="selClient">
    </select>
</div>

<button type="submit" class="btn btn-default">Submit</button>

{!! Form::close() !!}
@endsection
