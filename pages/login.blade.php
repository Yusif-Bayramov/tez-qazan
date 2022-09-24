<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/intlTelInput.css')}}">
    <title>Tez Qazan</title>
</head>

<body>
    <header id="header">
        <nav class="form-nav">
            <div class="nav-mobil-items">
                <div class="logo"><a href="{{route('home')}}">Logo</a></div>
            </div>
        </nav>
    </header>

    <main id="main2">
        <section class="form-c">
            <div class="container">
                <div class="card1">
                    <div class="img"><a href="{{route('home')}}" class="geri-icon"><i class="fa-solid fa-angle-left"></i></a></div>
                    <div class="text">
                        <h2>Oyuna Qoşulmaq Üçün</h2>
                        <h1>DAXİL OL</h1>
                        @if(Session::has('fail'))
                            <h3 style="color: red;">{{Session::get('fail')}}</h3>
                        @endif
                        @if(Session::has('token-auth'))
                            <h3 style="color: red;">{{Session::get('token-auth')}}</h3>
                        @endif
                        <form method="post" action="{{route('otp')}}">
                            @csrf
                        <div class="form-group">
                            <label for="phone">Nömrəniz</label>
                            <div class="form-number">
                                <input type="hidden" name="countryCode" id="countryCode" value = "992">
                                <input type="tel" name="msisdn" id="phone" class="form-control" required inputmode="decimal" autocomplete="one-time-code">
                            </div>
                            <small id="helpId">Telefonunuza birdəfəlik şifrə göndəriləcək.</small>
                        </div>
                        <div class="btn-c">
                            <button class ="btn" type="submit">OTP göndər</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="{{asset('/js/script.js')}}"></script>
    <script src="{{asset('/js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
             initialCountry: "tj",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
             onlyCountries: ['az' , 'kg', 'kz', 'tj', 'tm', 'tr','uz'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{asset('/js/utils.js')}}",
        });



        input.addEventListener("countrychange", function() {
            var iti = window.intlTelInputGlobals.getInstance(input);
            var code = document.querySelector("#countryCode");
            code.value = iti.getSelectedCountryData().dialCode;
            console.log(code.value);
        });
    </script>
</body>

</html>
