<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Como hacer tablas bien chingonas</title>
  </head>
  <body>
<!-- tablas -->

<table border="1">
  <tr>  <!--  fila   linea de la tabla      -->
    <td>columna1</td>     <!-- celda -->
    <td>columna2</td>
  </tr>
  <tr>
    <td>fila2 columna1</td>
    <td>fila2 columna2</td>
  </tr>
</table>

<table border="1">

  <tr>
    <th>columna 1 con th</th>
    <th>columna 2 con th</th>
  </tr>
  <tr>
    <td>calor 2 fila 2</td>
    <td>valor 2 fila 2</td>
    <td>valor 3</td>
  </tr>
</table>

<!-- tablas con estructura -->

<table border="1">
  <thead>  <!-- encabezado -->
    <tr>
      <th>titulo 1</th>
      <th>titulo 2</th>
      <th>titulo 3</th>
    </tr>
  </thead>
  <tbody>   <!-- cuerpo  -->

    <tr>
      <td>f2 c1</td>
      <td>f2 c2</td>
      <td>f2 c3</td>
    </tr>
    <tr>
      <td>f3 c1</td>
      <td>f3 c2</td>
      <td>f3 c3</td>
    </tr>
  </tbody>
  <tfoot>   <!-- pie de pagina de la tabla (algo asi ajja)  -->
    <tr>
      <th>titulo 1</th>
      <th>titulo 2</th>
      <th>titulo 3</th>
    </tr>
  </tfoot>
  <caption>Descripción de la tabla</caption>
</table>

<table>
  <tr>
    <th>Nombre</th>
    <td>Daniel</td>
  </tr>
  <tr>
    <th>Apellido</th>
    <td>Calle</td>
  </tr>
</table>

<table border="1">
  <tr>
    <td>a</td>
    <td>b</td>
    <td>c</td>
  </tr>
  <tr>
    <td>d</td>
    <td colspan="2">ef</td> <!-- tomas el espacio de columnas (horizontal) -->
  </tr>
</table>

<table border="1">
  <tr>
    <td rowspan="2">a</td> <!-- toma el espacio de filas  (vertical)-->
    <td>b</td>
    <td>c</td>
  </tr>
  <tr>
    <td>d</td>
    <td>e</td>
  </tr>
</table>


<table border="7">
  <tr>
    <td>#</td>
    <th>A</th>
    <th>B</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1A</td>
    <td>1A</td>
  </tr>
  <tr>
    <td>2</td>
   <td colspan="2">2AB</td>
  </tr>
  <tr>
    <td>3</td>
    <td rowspan="2">34A</td>
    <td>3B</td>
  </tr>
  <tr>
    <td>4</td>

    <td>4B</td>
  </tr>
</table>

<audio src="images/sample house.wav" controls="controls"></audio>



  </body>
</html>
