
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "bd">


<section  class = "sec-cont">
         

         @if (session('status'))
             <div>
                 {{ session('status') }}
             </div>
         @endif
 
         <form class = "formm" method="POST" action="{{ route('login') }}">
             @csrf

             <h2>Event Login Form</h2>


             
 
             <div class = "emaill">
                 <x-jet-label for="email" value="{{ __('Email') }}" />
                 <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
             </div>
 
             <div class = "passs">
                 <x-jet-label for="password" value="{{ __('Password') }}" />
                 <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
             </div>
 
            
 
             <div class = "logbtns">
               
                 
                 <x-jet-button >
                     {{ __('Log in') }}
                 </x-jet-button>
             </div>
         </form>
         </section>
    
</body>
</html>
