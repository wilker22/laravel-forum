@extends('layouts.app')

@section('content')
<div class="container">

   
        <div class="card">
                <div class="card-header">Notifications</div>

                <div class="card-body">
                    @foreach($notifications as $notification)
                        <li class="list-group-item">
                            @if($notification->type ===  'LaravelForum\Notifications\NewReplyAdded')
                                A new reply Added in you discusssion forum
                                <strong>
                                    {{$notification->data['discussion']['title']}}
                                </strong>

                                <a href="{{route('discussions.show', $notification->data['discussion']['slug'])}}" class="btn btn-sm btn-info">
                                    View Discussion
                                </a>
                            @endif
                        </li>
                    @endforeach

                    
                </div>
            </div>
</div>
@endsection
