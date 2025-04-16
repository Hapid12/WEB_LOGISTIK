@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8fafc;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }
    h1 {
      text-align: center;
      color: #1e293b;
      font-size: 32px;
      margin-bottom: 20px;
      position: relative;
    }
    h1::after {
      content: "";
      display: block;
      width: 80px;
      height: 4px;
      background-color: #3b82f6;
      margin: 10px auto 0;
      border-radius: 2px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      font-size: 16px;
    }
    th, td {
      padding: 16px;
      text-align: center;
      border-bottom: 1px solid #e2e8f0;
    }
    th {
      background-color:gray;
      color: white;
      font-weight: 600;
    }
    td {
      color: #334155;
    }
    @media (max-width: 600px) {
      .container {
        margin: 20px;
        padding: 20px;
      }
      table, thead, tbody, th, td, tr {
        display: block;
      }
      tr {
        margin-bottom: 15px;
      }
      td, th {
        text-align: right;
        padding-left: 50%;
        position: relative;
      }
      td::before, th::before {
        content: attr(data-label);
        position: absolute;
        left: 16px;
        width: calc(50% - 16px);
        white-space: nowrap;
        font-weight: bold;
        color: #64748b;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cek {{ $title }}</h1>
    <div class="table-responsive">
      <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center"
       style="border-collapse: separate; border-spacing: 0 8px;">
          <thead class="table-dark">
              <tr style="border-radius: 10px;">
          <th>Layanan</th>
          <th>Estimasi</th>
          <th>Alamat Pengirim</th>
          <th>Alamat Penerima</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Layanan">Udara</td>
          <td data-label="Estimasi">2-3 Hari</td>
          <td data-label="Alamat Pengirim">Jakarta</td>
          <td data-label="Alamat Penerima">Bandung</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
@endsection
