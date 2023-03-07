<nav class="navbar navbar-dark bg-dark   d-flex text-light">
    <div class="d-flex justify-content-between" style="padding: 10px">
        <div>
            <a href="{{ url('/') }}"><img src="https://lh3.googleusercontent.com/jiXLE-UP97SB2ULWp4zaXFgrELCWOY0Fo2SuLcoj-J5lIMgqXo0gsEGmjPuWTAc_PHCu-BT2bFxhTZ4UGc4nkL2mPJXE9Osc2HKRJMnGJW2DQK__8nE829Z7LRWxkKK6muoqo79Ja1berd9nSClSVaZLqhAQZEGR8Ja3YrxljKJgoXNqQ778YHuhTMCa0mMm173Ble6-ECMJIuRbAH-QfE3mWx3Tr6GIkDW7h8UdBiAa-PhXcQJOdLCOjBAoYKfBeXvZRxVjtPBJmX8QXPjJ27xhkdK9vPJcsNjq3-ndH5ZOlYL7nlUuTUtIuIXB_mEptksmmUUNv2xWN0P2Jny4mgFDXXkRtC2GbUIU_1KX3f3cTG1iZy2lLSXryu26McqVsct_nUEjCsNZrKCLw6gMh2rW0fRWzR_qRG84BPOtrfVVBNKFHtVMRjR5BOqhRLHo4mMarm3Hqfsdhm95EpB8BJ1tSUZM-UMQPfZXkrlvlANzYL2sGEnS3DrxzU7qoXPCJbtVgCNVqufS6UZUK2WF-zdlkomN3z8rPoq4Q-V7o123-PhMeqtBLpXvEF6zwLAKa9LlHW0VDaDzZDKHiKTNfuDL-DCYN3kh2gSJCOUfBWrm9tBPol59eO-qAAYtk0Shh7Xlk5xrdjD8LlnyntkoXsjBSvh7GfsSRdu1OBMx6FfzMpeNR8Jq2oksGSxG3ezlHPMONFAJVyx_1NdEMubFYvqN3tv_1RUEl-v2jFXtUHlYXH_qQ8WIWOBqJ80S9QfUMmCH-uE0Xr-UnT57T2_FhFtzO0GlowRZqdVT6V2UcqlxXQHSvEXsLPjAuqbDLC6GjwBpTwKXxCBJvHJTHasVDTp_lJhQSZOgxl0QZ024nHFe1ytZvXCFq8C-vMrd8gtHulEsRq3eG-0XTNJeeQ_vnYTVCJqBSJm8SBWUrGq5SdgSrTTh=w1366-h432-no?authuser=0" alt="no img" style="max-width: 10%"></a>
        </div>
            @if (Route::has('login'))
            <div class="form-inline">
                @auth
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('/orders') }}" class="navbar-brand">Orders</a>
                        <a href="{{ url('/profile') }}" class="navbar-brand">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="navbar-brand">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                @else
                    <div class="navbar-brand">
                        <a href="{{ route('login') }}" class="navbar-brand">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-brand">Register</a>
                        @endif
                    </div>
                @endauth
            </div>
           @endif
    </div>
</nav>




