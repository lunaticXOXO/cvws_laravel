
<h3>Data Customer Terakhir</h3>

<table class="table">
  <thead class="table-light">
    <th>ID Customer</th>
    <th>Nama Customer</th>
    <th>Adress</th>
    <th>City</th>
  </thead>
  <tbody>
    @isset($customer_max)
      <tr>
          <th scope="row">{{ $customer_max->idcustomer }}</th>
          <td>{{ $customer_max->namacustomer }}</td>
          <td>{{ $customer_max->adress }}</td>
          <td>{{ $customer_max->city }}</td>


      </tr>
    @endisset
  </tbody>
</table>

