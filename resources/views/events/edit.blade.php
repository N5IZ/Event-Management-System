@extends('layouts.main')

@section('title', 'Editing: ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editing: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Event Image:</label>
                <input type="file" id="image" name="image" class="from-control-file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Name of the event" value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="date">Event Date:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Event location" value="{{ $event->city }}">
            </div>
            <div class="form-group">
                <label for="title">The Event is it private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="About the event...?">{{ $event->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Add infrastructure items:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Chairs"> Chairs
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Stage"> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Free beer"> Free beer
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Free food"> Free food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Gifts">  Gifts
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit Event">
        </form>
    </div>

@endsection
