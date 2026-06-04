<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Session Registration Confirmation</title>
</head>
<body>
<h1>Thank you for registering!</h1>
<p>We are excited to have you join our upcoming Skills Co‑op session.</p>
<p><a href="{{ $eventLink }}" style="display:inline-block;padding:10px 20px;background:#038b89;color:#fff;text-decoration:none;">View Event Details</a></p>
@if(isset($imageUrl))
<img src="{{ $imageUrl }}" alt="Event Banner" style="width:100%;max-width:600px;border-radius:8px;margin-top:20px;" />
@endif
<p>Thanks,<br>{{ config('app.name') }} Team</p>
</body>
</html>
