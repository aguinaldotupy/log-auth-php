@auth
    <link rel="stylesheet" href="{{ asset('vendor/Tupy/AuthenticationLog/css/session-modal.css') }}" />

    {{-- Modal --}}
    @include('vendor.Tupy.AuthenticationLog.modal')

<script type="text/javascript">
    window.authenticationLog = window.authenticationLog || {};
    authenticationLog.authpingEndpoint = "{{ route('authentication.check_auth') }}";
    authenticationLog.requestGap = {{ config('authentication-log.gap_seconds') }};
    authenticationLog.userId = {{ auth()->user()->id }};
    authenticationLog.usingBroadcasting = {{ config('authentication-log.avail_broadcasting') === true? 1 : 0 }};
</script>

<script type="text/javascript" src="{{ asset('vendor/Tupy/AuthenticationLog/dist/js/main.js') }}"></script>

<script type="text/javascript">

    function closeSessionOutModal(){
        document.getElementById("modal-authenticated").style.visibility = "hidden";
    }

</script>
@endauth