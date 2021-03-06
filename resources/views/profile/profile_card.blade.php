<div class="block">
    <div id="profileAvatar" class="bg-image" style="background-image: url('@if($user->avatar_url){{asset($user->avatar_url)}}@else {{asset('image/no-profile.gif')}} @endif');">
        <div class="bg-black-op">
            <a id="profileLink" href="/profile/{{$user->id}}">
                <div class="block-content block-content-full text-center">
                    <h3 id="profileName" class="push-150-t h4 text-uppercase text-white push-30-t push-5">{{$user->name}}</h3>
                    <h4 id="profileAbout" class="h5 text-white-op @if($truncate) respsonsive_truncation @endif push-20">@if($displayAll){{$user->about}} @endif</h4>
                </div>
            </a>
        </div>
    </div>
    <div class="block-content block-content-full">
        <div class="row text-center">
            <div class="row items-push text-center">
                <div class="col-xs col-lg-3 col-xs-3 remove-margin-b">
                    <div class="push-5"><i id="profileGenderIcon"
                            class="si @if($user->gender == 'M') si-user @else si-user-female @endif fa-2x"></i>
                    </div>
                    <div class="h5 font-w300 text-muted">Gender</div>
                </div>
                <div class="col-xs col-lg-3 col-xs-3 remove-margin-b">
                    <div id="profileAge" class="push-5 h3">{{\Carbon\Carbon::parse($user->birthdate)->age}}</div>
                    <div class="h5 font-w300 text-muted">Age</div>
                </div>
                <div class="col-xs col-lg-3 col-xs-3 remove-margin-b">
                    <div class="push-5"><i class="si si-home fa-2x"></i></div>
                    <div id="profilePlace" class="h5 font-w300 text-muted respsonsive_truncation">{{$user->place}}</div>
                </div>
                <div class="col-xs col-lg-3 col-xs-3 remove-margin-b">
                    <div class="push-5"><i class="si si-eye fa-2x"></i></div>
                    <div id="profileLastSeen" class="h5 font-w300 text-muted respsonsive_truncation">@if(\Carbon\Carbon::parse($user->last_login)->diffInDays() < 1)Today @elseif(\Carbon\Carbon::parse($user->last_login)->diffInDays() <= 7) {{\Carbon\Carbon::parse($user->last_login)->diffInDays() . " " . str_plural('day', \Carbon\Carbon::parse($user->last_login)->diffInDays()) . ' ago'}} @else Long ago @endif</div>
                </div>
            </div>
        </div>
    </div>
</div>
