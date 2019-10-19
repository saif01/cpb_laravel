
<h3>Hi,  {{ $mailData['name'] }}</h3>
<h4>Your Id:  {{ $mailData['email'] }}</h4>
<h4>Your Password: {{ $mailData['password'] }}</h4>

Please Click To Active Your Account .... <a href="{{ $mailData['link'] }}" >{{ $mailData['link'] }} </a>

