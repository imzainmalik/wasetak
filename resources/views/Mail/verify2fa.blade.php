<h1>2FA Email</h1>
   
<p>Before you can enjoy your new account, we will need you to confirm your email.<p>
<p>Click the following link to confirm and activate your new account:. <br><a href="{{url('/verify2fa/'.$token.' ')}}">Click to verify this Email for 2FA TwoFactorAuthentication::where('user_id',Auth::user()->id)->update(array(
    'email' => $request->secondary_email,
    'verification_link' => $verification,
    'is_verified' => 0
));</a></p>
<p>If the above link is not clickable, try copying and pasting it into the address bar of your web browser.</p>
<p>If you’re experiencing problems, please contact support@wasetak.co.</p>

<br><br>
<h4>Thank you.</h4>
<h5><a href="{{url('/verify2fa/'.$token.' ')}}">Click to verify this Email for 2FA</a></h5>
