@extends('layouts.sidebar')

@section('content')
    <h3>Pet Lab Test</h3><br>
        <div class="table-responsive-sm">
            <table id="myTable" class="table table-striped" style="width:100%">
            </table>
        </div>

         <div class="modal fade" id="labTestReport">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Lab Test Report</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive-sm">
                                <table id="labtest-table" class="table table-striped"></table>
                            </div>
                        </div>   
                    </div>
            </div>
        </div>
    @endsection
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            responsive: true,
            select: true,
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Add Pet',  
                    className: 'btn btn-primary',
                    action: function () {
                        alert( 'Sample' );
                    }
                },
                'copy',
                {   
                    extend:'print',
                    messageTop: 'List of Pets Labtest taken',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },
                {   
                    extend:'csv',
                    messageTop: 'List of Pets Labtest taken',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },

            ],
            ajax: {
                "url": "petLabTests/getpetLabTests",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Pet Fullname",
            data: 'pet_fullname' 
            },
            { 
            title: "Lab Tests",
            data: 'lab_test' 
            },
            { 
            title: "Result",
            data: 'result' 
            },
            {
                title:"Action",
                data: 'pet_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            },
            {
                title:"Lab Test Report",
                data: 'pet_id',
                'render': function(data){
                    return  '<a href="' +data+ '" data-toggle="modal" data-target="#labTestReport"' +
                    'data-petid="'+data+'">Lab Test Report</a>';
                }
            }
            
        ], 

        });

        $("#labTestReport").on('show.bs.modal', function(e){
        var link = $(e.relatedTarget);
        var pet_id = link.data('petid');
        var modal = $(this);
        console.log(pet_id);
        initDataTableInModal(pet_id);
        })
        function initDataTableInModal(pet_id){
            var vacTable =  $("#labtest-table").DataTable({
                responsive: true,
                select: true,
                paging:false,
                searching:false,
                ajax: {
                    "url": "petLabTests/petLabTestModal/" + pet_id,
                    "dataSrc":"",
                },
                columns: [
                    { 
                        title: "Lab Test",
                        data:  "lab_test"
                    },
                    { 
                        title: "Result",
                        data:  "result"
                    },
                    { 
                        title: "Date Taken",
                        data:  "date_taken"
                    },
                    { 
                        title: "Next Lab Test",
                        data:  "next_lab_tests"
                    },
                    
                    { 
                        title: "Veterinarian",
                        data:  "veterinarian"
                    },
                ]
            });
        vacTable.destroy();
    }
    } );
  
  </script>