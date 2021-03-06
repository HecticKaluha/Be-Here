<div class="block">
    <div class="bg-image" style="background-image: url('@if($loggedInUser->avatar_url){{asset($loggedInUser->avatar_url)}}@else {{asset('image/no-profile.gif')}} @endif');">
        <div class="bg-black-op">
            <a href="/profile">
                <div class="block-content block-content-full text-center">
                    <h3 class="push-150-t h4 text-uppercase text-white push-30-t push-5">{{$loggedInUser->name}}</h3>
                    <h4 class="h5 text-white-op push-20">{{$loggedInUser->place}}</h4>
                </div>
            </a>
        </div>
    </div>
    <div class="block-content block-content-full">
        <div class="row text-center">
            <div class="col-xs-4">
                <a class="h2 font-w300" href="/personal/interests">{{$loggedInUser->interests->count()}}</a>
                <div class="h5 text-muted push-5-t">Interests</div>
            </div>
            <div class="col-xs-4">
                <a class="h2 font-w300" href="/personal/likes">{{$loggedInUser->likes->count()}}</a>
                <div class="h5 text-muted push-5-t">Likes</div>
            </div>
            <div class="col-xs-4">
                <a class="h2 font-w300" href="/personal/matches">{{$loggedInUser->matches->count()}}</a>
                <div class="h5 text-muted push-5-t">Matches</div>
            </div>
        </div>
    </div>
</div>
