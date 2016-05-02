$(document).ready(function() {
                    $('#mitabla').DataTable({
                            responsive: true,
                            "sPaginationType": "full_numbers",
                            "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0, 2] }],
                            "language": {
                                "sProcessing":    "Procesando...",
                                "sLengthMenu":    "Mostrar _MENU_ registros",
                                "sZeroRecords":   "No se encontraron resultados",
                                "sEmptyTable":    "Ningún dato disponible en esta tabla",
                                "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix":   "",
                                "sSearch":        "Buscar:",
                                "sUrl":           "",
                                "sInfoThousands":  ",",
                                "sLoadingRecords": "Cargando...",
                                "oPaginate": {
                                    "sFirst":    "Primero",
                                    "sLast":    "Último",
                                    "sNext":    "Siguiente",
                                    "sPrevious": "Anterior"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                }
                            }
                            
                    });
                    
                    // $('#prueba').each( function () {
                    //     $(this).html( '<form class="form-inline" role="form">'+
                    //                     '<div class="form-group">'+
                    //                         '<input type="text" class="form-control col-lg-6" name="titulo" id="titulo" placeholder="Título">'+
                    //                         '<input type="text" class="form-control col-lg-6" name="info" id="info" placeholder="Información">'+
                    //                     '</div>'+
                    //                   '</form>');
                    // });
                 
                    // DataTable
                    var table = $('#mitabla').DataTable();
                 
                    // Apply the search
                    table.row( ':contains(Descripción)' ).every( function () {
                        var that = this;
                 
                        $( '#info').on( 'keyup change', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                    
                    table.columns( ':contains(TÍTULO)' ).every( function () {
                        var that = this;
                 
                        $( '#titulo').on( 'keyup change', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                });