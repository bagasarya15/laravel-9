@section('title')
    Laporan Pengeluaran
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    @include('helper.report_css')
    <title>{{ $store_information->name }} | @yield('title')</title>
</head>
<body onload="window.print()">
    <div class="mt-2 ms-1">
        <div class="d-flex">
            <a href=""><img src="{{ asset('storage/' . $store_information->image) }}" alt="Logo" width="100" class="ms-5"></a>
            <div class="m-auto">
                <h2 class="text-uppercase text-center mt-3">LAPORAN DATA PENGELUARAN</h2>
                <h6 class="text-muted" width="100" style="font-size: 12px;">{{ $store_information->address }}</h6>
            </div>
        </div>
    </div>
    
    <section class="section mx-3 mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="mb-2">
                            @if ($firstDate == $lastDate)    
                                <small class="text-danger fst-italic">Laporan Pengeluaran  {{ Carbon\Carbon::parse($firstDate)->translatedFormat('d F Y') }}</small>
                            @else
                                <small class="text-danger fst-italic">Laporan Pengeluaran {{ Carbon\Carbon::parse($firstDate)->translatedFormat('d F Y') }} - {{ Carbon\Carbon::parse($lastDate)->translatedFormat('d F Y') }}</small>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="small">
                                    <tr class="small">
                                        <th>Tanggal Pengeluaran</th>
                                        <th>Deskripsi</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    @foreach ($query as $spend)
                                    <tr class="small">
                                        <td>{{ $spend->created_at }}</td>
                                        <td>{{ $spend->desc }}</td>
                                        <td>Rp {{ number_format($spend->nominal) }}</td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                                <tfoot class="small">
                                    <tr class="small">
                                        <th>Total Pengeluaran</th>
                                        <th colspan="3">Rp {{ number_format($query->sum('nominal'))}}  </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('helper.report_script')
</body>
</html>