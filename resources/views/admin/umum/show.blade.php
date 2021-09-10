
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4 landscape;
        }
    </style>

    <title>Tindak Pidana Umum</title>
</head>

<body class="A4 landscape">
    <section class="sheet padding-10mm">
        <p>KEJAKSAAN NEGERI PAGAR ALAM</p>

        <h4 class="text-center">LAPORAN PERKARA TINDAK PIDANA UMUM</h4>
        <h5 class="text-center">Bulan.......Tahun .......</h5>
        <br />

        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="report">
                <thead class="table">
                    <tr height="50px" class="text-center text-wrap" style="width: 8rem">
                        <th scope="col">No</th>
                        <th scope="col">IDENTITAS TERDAKWA</th>
                        <th scope="col">PRA PENUNTUTAN</th>
                        <th scope="col">PENUNTUTAN</th>
                        <th scope="col">EKSEKUSI</th>
                        <th scope="col">UPAYA HUKUM</th>
                        <th scope="col">KETERANGAN</th>
                    </tr>
                    <tr height="5px" class="fs-6 text-center">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
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
                    </tr>
                </tbody>
                {{-- <!-- @endforeach --> --}}
            </table>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>