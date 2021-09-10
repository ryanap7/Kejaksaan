<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4 landscape;
        }
    </style>

    <title>LAPORAN PERKARA TINDAK PIDANA KORUPSI</title>
</head>

<body class="A4 landscape">
    <section class="sheet padding-10mm">
        <p>KEJAKSAAN NEGERI PAGAR ALAM</p>

        <h4 class="text-center">LAPORAN PERKARA TINDAK PIDANA KORUPSI</h4>
        <h5 class="text-center">Bulan.......Tahun .......</h5>
        <br />

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="report">
                <thead class="table">
                    <tr class="text-center text-wrap" style="width: 8rem">
                        <th rowspan="2">No</th>
                        <th rowspan="2">IDENTITAS TERDAKWA</th>
                        <th rowspan="2">PASAL YANG DILANGGAR</th>
                        <th rowspan="2">PENYELIDIKAN</th>
                        <th colspan="2">PENYIDIKAN</th>
                        <th rowspan="2">PENUNTUTAN</th>
                        <th rowspan="2">EKSEKUSI</th>
                        <th rowspan="2">UPAYA HUKUM</th>
                        <th rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th>KEJAKSAAN</th>
                        <th>POLRI</th>
                    </tr>
                    <tr height="5px" class="fs-6 text-center">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                </thead>
                {{-- <!-- @foreach($data as $item) --> --}}
                <tbody>
                    <tr height="40px">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>