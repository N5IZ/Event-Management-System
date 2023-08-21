@extends('layouts.main')

@section('title', 'K-homes Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Welcome to K-homes Events</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Seacrch result: {{$search}}</h2>
        @else
        <h2>Upcoming Events</h2>
        <p class="subtitle">See the events of the upcoming days</p>
        @endif
        <div id="cards" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants"> {{ count($event->users) }} Participants</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">See Detail</a>
                    </div>
                </div>
            @endforeach
            @if(count($events)== 0 && $search)
                <p>Unable to find any event with : {{$search}}! <a href="/">Go back</a></p>
            @elseif(count($events)== 0)
                <p>There no available Events</p>
            @endif
        </div>
    </div>

@endsection
