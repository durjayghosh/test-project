
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <p>Hi {{ $user['first_name'] }},</p>

    <p> Use your secret code!</p>
    <p>{{ $otp }}</p>
    <p>You recently requested to reset the password for your Restaurant Review System account. Click the button below to proceed.</p>
    <a href="{{ route('admin.resetpassword', base64_encode($user['email'])) }}">Reset Password</a>
    <p>If you did not request a password reset, please ignore this email or reply to let us know.</p>
    <p>Thanks, the Restaurant Review System team</p>
</body>
</html>


