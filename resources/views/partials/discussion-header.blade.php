<div class="card-header">
        <div class="d-flex justify-content-between">
            <div>
                    <img width="40px" height="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->author->email)}}" alt="">
                    <strong class="ml-2">{{$discussion->author->name}}</strong>
            </div>
            <div>
                <a href="{{route('discussions.show', $discussion->slug)}}" class="btn btn-success btn-sm">View</a>
            </div>
        </div>

    </div>