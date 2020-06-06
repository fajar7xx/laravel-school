
{{-- untuk dompdf lebih bagus menggunakan css inline --}}
<table class="table" style="border: 1px solid #ddd">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>ALamat</th>
            <th>Nilai Rata Rata</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $item) 
        <tr>
            <td>{{ $item->namaLengkap() }}</td>
            <td>{{ $item->kelamin }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->nilaiRata() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>