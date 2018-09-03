@extends('pdf.layout')

@section('content')
 
<table>
  <tbody>
    <tr>
      <td colspan="3" style="width: 70%"><h4>SOCIEDAD COMERCIAL ALFAPLAS Y CIA, LTDA.<h4></td>
      <td rowspan="2" class="text-center" style="border-width: 5px;border: solid; border-color: #000000;">
        <h4>RUT: 77.516.610-K<h4>
          <p>COTIZACIÓN DE VENTA</p>
          N° 063933
      </td>
    </tr>
    <tr>
      <td><p><small>Casa Matriz:<br/> 9 Poniente Parcela #235 Lote B - Paine 02 28243085</small></p></td>
      <td><p class="small">Sucursal Antofagasta:<br/> Liparitas # 250 A Barrio Industrial - Antofagasta 055-216154</p></td>
      <td><p class="small">Sucursal Concepción:<br/> 9 Poniente Parcela #235 Lote B - Paine 02 28243085</p></td>
    </tr>    
  </tbody>
</table>

<table>
  <tbody>
    <tr>
      <td>Señor(es):</td>
      <td></td>
      <td>R.U.T.:</td>
      <td></td>
      <td>Giro:</td>
      <td></td>      
    </tr>
    <tr>
      <td>Dirección:</td>
      <td></td>
      <td>Comuna:</td>
      <td></td>
      <td>Fecha:</td>
      <td></td>
    </tr>
    <tr>
      <td>Ciudad:</td>
      <td></td>
      <td>Teléfono:</td>
      <td></td>
      <td>Email:</td>
      <td></td>
    </tr>
    <tr>
      <td>O/C:</td>
      <td></td>
      <td>Bodega:</td>
      <td></td>
      <td>Vendedor:</td>
      <td></td>
    </tr>                  
  </tbody>
</table>

<table class="table table-hover table-striped">
  <thead>
    <tr>
        <th style="width: 15%">Articulo</th>
        <th style="width: 5%">Unidad</th>
        <th style="width: 50%">Descripción</th>
        <th style="width: 5%">Cantidad</th>
        <th style="width: 10%">Precio</th>
        <th style="width: 15%">Valor</th>
    </tr>                            
  </thead>
  <tbody>
    <tr>
        <td>{{-- $product->id --}}</td>
        <td>{{-- $product->name --}}</td>
        <td>{{-- $product->description --}}</td>
        <td class="text-right">{{-- $product->stock --}}</td>
        <td class="text-right">{{-- $product->stock --}}</td>
        <td class="text-right">{{-- $product->stock --}}</td>
    </tr>
  </tbody>
</table>

<hr>

<p>
    <a href="{{ route('sbif.index') }}" class="btn btn-sm btn-primary">
        Descargar productos en PDF
    </a>
</p>
@endsection


<!-- 
<div id="details" class="clearfix">
  <div id="invoice">
    <h1></h1>
    <div class="date">Date of Invoice: {{-- $fecha --}}</div>
  </div>
</div>

<table border="0" cellspacing="0" cellpadding="0">
  <thead>
    <tr>
      <th class="no">#</th>
      <th class="desc">DESCRIPTION</th>
      <th class="unit">UNIT PRICE</th>
      <th class="total">TOTAL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="no">{{-- $data['quantity'] --}}</td>
      <td class="desc">{{-- $data['description'] --}}</td>
      <td class="unit">{{-- $data['price'] --}}</td>
      <td class="total">{{-- $data['total'] --}} </td>
    </tr>

  </tbody>
  <tfoot>
    <tr>
      <td colspan="2"></td>
      <td >TOTAL</td>
      <td>$6,500.00</td>
    </tr>
  </tfoot>
</table> 
-->