@if (session('msg'))
    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('msg') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>
@endif
