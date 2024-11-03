<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Club Control Number</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.dataTables.css">
</head>
<body>

<H1>IT CLUB ADA CONTROLL NUMBER</H1>
<table id="example" class="display nowrap" style="width:100%">

<thead class="table-dark">
<tr>
<th>#</th>
<th>FirstName</th>
<th>MiddleName</th>
<th>LastName</th>
<th>Program</th>
<th>Control number</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>
@if(count($controlnumbers)>0)
    
   @foreach ($controlnumbers as $controlnumber)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$controlnumber->FirstName}}</td>
    <td>{{$controlnumber->MiddleName}}</td>
    <td>{{$controlnumber->LastName}}</td>
    <td>{{$controlnumber->Program}}</td>
    <td>{{$controlnumber->controlnumber}}</td>

    </tr> 
   @endforeach
@else 

  
  @endif



</tbody>
</table>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<!-- DataTables Buttons -->
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
<!-- JSZip for exporting to Excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<!-- PDFMake for exporting to PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<!-- DataTables Buttons for exporting as HTML5 formats (Excel, CSV, PDF) -->
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<!-- DataTables Buttons for print view -->
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
<script>
new DataTable('#example', {
    layout: {
        topStart: {
            buttons: []
        }
    }
});
</script>
</body>

</html>