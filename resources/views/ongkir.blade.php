<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Cek Ongkir</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    form {
      max-width: 400px;
      margin-bottom: 20px;
    }
    select, input, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    #result div {
      padding: 8px;
      background: #f2f2f2;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

<h2>Cek Ongkir</h2>
<form id="ongkirForm">
  <select name="province" id="province">
    <option value="">Pilih Provinsi</option>
  </select>
  <select name="city" id="city">
    <option value="">Pilih Kota</option>
  </select>
  <input type="number" name="weight" id="weight" placeholder="Berat (gram)">
  <select name="courier" id="courier">
    <option value="">Pilih Kurir</option>
    <option value="jne">JNE</option>
    <option value="tiki">TIKI</option>
    <option value="pos">POS Indonesia</option>
  </select>
  <button type="submit">Cek Ongkir</button>
</form>

<div id="result"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Fetch provinces
  fetch('/provinces')
    .then(response => response.json())
    .then(data => {
      if (data.rajaongkir.status.code === 200) {
        const provinces = data.rajaongkir.results;
        const provinceSelect = document.getElementById('province');
        provinces.forEach(province => {
          const option = document.createElement('option');
          option.value = province.province_id;
          option.textContent = province.province;
          provinceSelect.appendChild(option);
        });
      } else {
        console.error('Gagal mengambil data provinsi:', data.rajaongkir.status.description);
      }
    })
    .catch(error => {
      console.error('Error fetching provinces:', error);
    });

  // Fetch cities based on selected province
  document.getElementById('province').addEventListener('change', function () {
    const provinceId = this.value;
    fetch(`/cities?province_id=${provinceId}`)
      .then(response => response.json())
      .then(data => {
        if (data.rajaongkir.status.code === 200) {
          const cities = data.rajaongkir.results;
          const citySelect = document.getElementById('city');
          citySelect.innerHTML = '<option value="">Pilih Kota</option>';
          cities.forEach(city => {
            const option = document.createElement('option');
            option.value = city.city_id;
            option.textContent = city.city_name;
            citySelect.appendChild(option);
          });
        } else {
          console.error('Gagal mengambil data kota:', data.rajaongkir.status.description);
        }
      })
      .catch(error => {
        console.error('Error fetching cities:', error);
      });
  });

  // Submit form to get shipping cost
  document.getElementById('ongkirForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const origin = 501; // Ganti dengan kode kota asal yang sesuai
    const destination = document.getElementById('city').value;
    const weight = document.getElementById('weight').value;
    const courier = document.getElementById('courier').value;

    fetch('/cost', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
        origin,
        destination,
        weight,
        courier
      })
    })
      .then(response => response.json())
      .then(data => {
        const resultDiv = document.getElementById('result');
        resultDiv.innerHTML = '';

        if (data.rajaongkir.status.code === 200) {
          const results = data.rajaongkir.results[0].costs;
          results.forEach(cost => {
            const div = document.createElement('div');
            div.textContent = `${cost.service}: ${cost.cost[0].value} Rupiah (${cost.cost[0].etd} hari)`;
            resultDiv.appendChild(div);
          });
        } else {
          console.error('Gagal mengambil data ongkir:', data.rajaongkir.status.description);
        }
      })
      .catch(error => {
        console.error('Error fetching cost:', error);
      });
  });
});
</script>

</body>
</html>
