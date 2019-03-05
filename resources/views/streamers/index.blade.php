@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <h4>Add Streamer</h4>

                <form action="/streamers" method="POST">
                    @csrf

                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="nickname" placeholder="Stramer nickname">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link" type="submit">Add Streamer</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="section">
            <div class="container">
                @if($streamers)
                    <h4>My favorite streamers</h4>
                    <div class="list is-hoverable">
                        @foreach($streamers as $streamer)
                            <a class="list-item" href="/streamers/{{ $streamer->id }}">{{ $streamer->nickname }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
