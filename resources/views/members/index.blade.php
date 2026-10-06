<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
</head>
<body>

    <h1>Daftar Anggota</h1>

    @foreach($members as $member)
        <p>Nama: {{ $member->nama }}</p>
        <p>Email: {{ $member->email }}</p>
        <p>No. HP: {{ $member->no_hp }}</p>
        <hr>
    @endforeach

</body>
</html>