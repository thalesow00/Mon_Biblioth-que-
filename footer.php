<footer  class="bg-light text-center ">
    <div class="text-center">
        <?php echo date("Y")?>
        MonApp. Tous droit reserves
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/DataTables/datatables.min.js"></script>
<!-- pour activer le DATATABLE -->
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        "oLanguage": {
            "sSearch": "Rechercher",
            "sLengthMenu": "Afficher _MENU_Lignes par page",
            "sInfo": "Afficage de _START_ à _END_ sur _TOTAL_ enregistrements",
            "oPaginate": {
                "sNext": "Suivant",
                "sPrevious": "Précédent",
            }
        }
    });
} );
</script>
</body>
</html>