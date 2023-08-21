@extends('layouts.main')

@section('title', 'Create Event')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create your Event</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Event Image :</label>
                <input type="file" id="image" name="image" class="from-control-file" >
            </div>
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="event name..">
            </div>
            <div class="form-group">
                <label for="date">Event Date:</label>
                <input type="date" nam="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="event Location..">
            </div>
               <div class="form-group">
                <label for="private">The Event is it private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="about the event.."></textarea>
            </div>
            <div class="form-group">
                <label for="items[]">Add infrastructure items:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Chairs"> Chairs
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Stage"> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Free beer
"> Free beer

                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="free Food"> Free food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Gifts"> Gifts
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Create Event">
        </form>
    </div>

@endsection
