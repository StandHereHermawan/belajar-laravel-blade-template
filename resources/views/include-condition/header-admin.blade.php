@if ($user['owner'] == true)
<h1>Selamat datang owner</h1>
<p>Untuk melihat laporan penjualan, silahkan buka menu laporan</p>
@else
<h1>Selamat datang pengunjung</h1>
@endif

@if (isset($desc))
<p>{{$desc}}</p>
@else
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum culpa nihil maiores, perferendis necessitatibus nulla veniam repellendus esse tenetur iure voluptatibus, consectetur aut, aspernatur dolores cumque sed ea cupiditate enim?</p>
@endif