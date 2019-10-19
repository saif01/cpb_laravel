@if (!empty($data['name']))
 <p>Hi, This is:  {{ $data['name'] }}</p>
@endif

@if (!empty($data['contact']))
<p>My Contact:  {{ $data['contact'] }}</p>
@endif

@if (!empty($data['email']))
 <p>My Email: {{ $data['email'] }}</p>
@endif

<p>I have some query like {{ $data['message'] }}.</p>
<p>It would be appriciative, if you gone through this feedback.</p>
