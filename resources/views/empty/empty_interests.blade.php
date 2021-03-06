<div class="block">
    <div class="block-content block-content-full text-center">
        <div class="item item-2x item-circle bg-gray-lighter">
            <i class="si si-ghost text-info"></i>
        </div>
    </div>
    <div class="block-content block-content-full text-center text-muted">
        @if($user->id === Auth::user()->id)
            You haven't subscribed to any interests yet. <a class="font-w600" href="/personal/interests">Check out the list</a> and join the fun!
        @else
            This user hasn't subscribed to any interests yet.
        @endif
    </div>
</div>