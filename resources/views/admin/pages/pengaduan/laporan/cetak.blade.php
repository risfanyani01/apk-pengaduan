<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .print-wrapper>h2 {
            text-align: center;
        }

        .column {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .mb-1 {
            margin-bottom: 1em;
        }

        .mb-2 {
            margin-bottom: 2em;
        }

        .mb-3 {
            margin-bottom: 3em;
        }

        .mb-4 {
            margin-bottom: 4em;
        }

        .mb-5 {
            margin-bottom: 5em;
        }

        .fw-bold {
            font-weight: bold;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #ddd;
        }

        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0081C9;
            color: white;
        }

        .text-center {
            text-align: center;
        }
    </style>
    <title>Surat Perintah Kerja Perbaikan</title>
</head>

<body>
    <div class="print-wrapper">
        <div class="mb-2 text-center">
            <h2>Surat Perintah Kerja Perbaikan</h2>
        </div>
        <div class="row">
            <hr>
            <P class="fw-bold text-center">LAPORAN PENGADUAN</P>        
        </div>
        <table class="table mb-1" style="width: 100%;">
            <colgroup>
                <col style="width: 5%;">
                <col style="width: 20%;">
                <col style="width: 75%;">
            </colgroup>
            <thead class="text-success bg-white bg-gradient">
                <tr>
                    <th class="align-middle text-center">No</th>
                    <th class="align-middle text-center">Nama</th>
                    <th class="align-middle text-center">alamat</th>
                    <th class="align-middle text-center">Jenis Pekerjaan</th>
                    <th class="align-middle text-center">Cabang</th>
                    <th class="align-middle text-center">Status</th>
                </tr>
            </thead>
            <tbody class="text-white bg-secondary bg-gradient">
                @php
                    $i = 1;
                @endphp
                    @foreach ($datas as $data)
                    <tr>
                        <td class="align-middle text-center">{{ $i }}</td>
                        <td class="align-middle text-wrap">{{ $data->nama }}</td>
                        <td class="align-middle text-wrap">{{ $data->alamat }}</td>
                        <td class="align-middle text-wrap">{{ $data->kategori->nama_jenis }}</td>
                        <td class="align-middle text-wrap">{{ $data->cabang->nama_cabang }}</td>
                        <td class="align-middle text-wrap">{{ $data->keterangan }}</td>
                    </tr>
                    @php
                        $i++;
                        @endphp
                    @endforeach
            </tbody>
        </table>
      
</body>

</html>
