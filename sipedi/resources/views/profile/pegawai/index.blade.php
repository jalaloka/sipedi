<x-module.profile.pegawai>
    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($pegawai->foto) }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('profile/pegawai', $pegawai->id) }}/edit" class="btn btn-warning btn-sm float-right"><i
                            class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">Detail Pegawai</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-5">Nip</dt>
                                <dd class="col-7">: {{ $pegawai->nip }}</dd>
                                <dt class="col-5">Nama</dt>
                                <dd class="col-7">: {{ $pegawai->nama }}</dd>
                                <dt class="col-5">Jenis Kelamin </dt>
                                <dd class="col-7">: {{ $pegawai->jenis_kelamin }}</dd>
                                <dt class="col-5">Tempat lahir</dt>
                                <dd class="col-7">: {{ $pegawai->tempat_lahir }}</dd>
                                <dt class="col-5">Tanggal lahir</dt>
                                <dd class="col-7">: {{ $pegawai->tanggal_lahir }}</dd>
                                <dt class="col-5">Alamat </dt>
                                <dd class="col-7">: {{ $pegawai->alamat }}</dd>
                                <dt class="col-5">Agama</dt>
                                <dd class="col-7">: {{ $pegawai->agama }}</dd>
                                <dt class="col-5">Email</dt>
                                <dd class="col-7">: {{ $pegawai->email }}</dd>
                                <dt class="col-5">Username</dt>
                                <dd class="col-7">: {{ $pegawai->username }}</dd>
                                <dt class="col-5">Telepon </dt>
                                <dd class="col-7">: {{ $pegawai->telepon }}</dd>

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pegawai>
