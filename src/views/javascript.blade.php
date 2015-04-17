
<script type="text/javascript">
    $(document).ready(function(){

        // dynamic table
        oTable = $('#{{ $id }}').dataTable({
            "sPaginationType": "full_numbers",
            "bProcessing": false,
        @foreach ($options as $k => $o)
        {!! json_encode($k) !!}: {!! json_encode($o) !!},
        @endforeach

        @foreach ($callbacks as $k => $o)
        {!! json_encode($k) !!}: {!! $o !!},
        @endforeach

    });

    oTable.addClass('table-striped ');

    });
</script>