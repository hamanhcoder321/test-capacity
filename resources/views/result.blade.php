<!DOCTYPE html>
<html>
<head>
    <title>Kết quả</title>
</head>
<body>

<h2>Thông tin đã nhập</h2>

<p><strong>Họ và tên:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Tuổi:</strong> {{ $data['age'] }}</p>

<a href="{{ route('form.reset') }}">
    <button>Back</button>
</a>

</body>
</html>
