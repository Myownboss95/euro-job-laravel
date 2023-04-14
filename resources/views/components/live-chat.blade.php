@production
@if(in_array(request()->getHost(),[front_domain(), user_domain()]))
{!! config('constants.live-chat') !!}
@endif
@endproduction
