@extends('v_layouts.app')

@section('content')
<!-- Template -->
<div class="col-md-12">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fungsi untuk mengubah kota berdasarkan provinsi yang dipilih
        $(document).ready(function() {
            $('#provinsi').change(function() {
                var provinsi = $(this).val();
                var kotaOptions = '<option value="">Pilih Kota</option>';
                
                // Ambil kota berdasarkan provinsi yang dipilih
                var kotaList = @json($provinsiKota);
                if (provinsi && kotaList[provinsi]) {
                    kotaList[provinsi].forEach(function(kota) {
                        kotaOptions += <option value="${kota}">${kota}</option>;
                    });
                }

                $('#kota').html(kotaOptions);
            });
        });
    </script>

    <h1>Cek Ongkir</h1>

    <form action="{{ route('cekOngkir') }}" method="POST">
        @csrf
        <div class="row">
         <div class="col-md-6 mb-3">
                <label for="provinsi" class="form-label">Provinsi:</label>
                <select name="provinsi" id="provinsi" class="input">
                    <option value="">Pilih Provinsi</option>
                    @foreach($provinsiKota as $provinsi => $kotaList)
                        <option value="{{ $provinsi }}">{{ $provinsi }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="kota" class="form-label">Kota:</label>
                <select name="kota" id="kota" class="input">
                    <option value="">Pilih Kota</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (gram):</label>
            <input type="number" name="berat" id="berat" class="form-control" value="1" min="1" />
        </div>

        <div class="mb-3">
            <label for="kurir" class="form-label">Kurir:</label>
            <select name="kurir" id="kurir" class="input">
                <option value="JNE">JNE</option>
                <option value="Tiki">Tiki</option>
                <option value="Pos">Pos</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="kode_pos" class="form-label">Kode Pos:</label>
            <input type="text" name="kode_pos" id="kode_pos" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Lengkap:</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="4" required></textarea>
        </div>
<br>
        <button type="submit" class="btn btn-primary">Cek Ongkir</button>
    </form>

    <br><hr>

    @if(isset($ongkir))
        <h3>Hasil Ongkir</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Berat</th>
                        <th>Kurir</th>
                        <th>Ongkir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $provinsiInput }}</td>
                        <td>{{ $kotaInput }}</td>
                        <td>{{ $beratInput }} gram</td>
                        <td>{{ $kurirInput }}</td>
                        <td>{{ $ongkir }}</td>
                        <td>
                            <!-- Tombol untuk mengupdate data ke tabel -->
                            <form action="{{ url('/updateongkir') }}" method="POST">
                                @csrf
                                <!-- Input hidden untuk pengiriman data ke database -->
                                <input type="hidden" name="province" value="{{ $provinsiInput }}">
                                <input type="hidden" name="city" value="{{ $kotaInput }}">
                                <input type="hidden" name="berat" value="{{ $beratInput }}">
                                <input type="hidden" name="kurir" value="{{ $kurirInput }}">
                                <input type="hidden" name="ongkir" value="{{ $ongkir }}">
                                <input type="hidden" name="alamat" value="{{ $alamat }}">
                                <input type="hidden" name="kode_pos" value="{{ $kode_pos }}">

                                <!-- Tombol submit di dalam tabel -->
                                <button type="submit" class="btn btn-success">Update Ongkir</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection