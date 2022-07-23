<x-module.pegawai>
    <x-template.button.back-button url="pegawai/koleksi-buku/fiksi" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($fiksi->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Show Data Buku Fiksi</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-5">Kode Buku</dt>
                                <dd class="col-7">: {{ $fiksi->kode_buku }}</dd>
                                <dt class="col-5">Judul</dt>
                                <dd class="col-7">: {{ $fiksi->judul }}</dd>
                                <dt class="col-5">Penerbit</dt>
                                <dd class="col-7">: {{ $fiksi->penerbit }}</dd>
                                <dt class="col-5">Pengarang</dt>
                                <dd class="col-7">: {{ $fiksi->pengarang }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-5">Tahun Terbit</dt>
                                <dd class="col-7">: {{ $fiksi->tahun_terbit }}</dd>
                                <dt class="col-5">Lokasi Rak</dt>
                                <dd class="col-7">: {{ $fiksi->lokasi_rak }}</dd>
                                <dt class="col-5">Jumlah Buku</dt>
                                <dd class="col-7">: {{ $fiksi->jumlah }}</dd>
                                <dt class="col-5">Jumlah Halam</dt>
                                <dd class="col-7">: {{ $fiksi->jumlah_halaman }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</x-module.pegawai>
