@extends('layouts.app')

@section('content')
<div class="container">

   
        <div class="card">
                
                @include('partials.discussion-header')

                <div class="card-body">
                   <div class="text-center">
                       <strong>
                            {{$discussion->title}}
                       </strong>
                   </div>

                    <hr>

                    {!! $discussion->content !!}
                </div>
        </div>

        <div class="card my-5">
            <div class="card-header">Add a Reply</div>
                <div class="card-body">
                    @auth
                        <form action="{{route('replies.store', $dicussion->slug)}}" method="POST">
                            @csrf
                            <input type="hidden" name="reply" id="reply">
                            <trix-editor input="reply">
                            </trix-editor> 

                            <div type="submit" class="btn btn-success my-2">
                                Add Reply
                            </div>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="btn btn-info">Sign in to add a reply</a>
                    @endauth
                </div>
                 
            </div>
          </div>
        </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection

