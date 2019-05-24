    <script src="{{ asset('html/js/jquery.js') }}"></script>
    <script src="{{ asset('html/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('html/js/plugins/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('html/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('html/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('html/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('html/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('html/js/custom.js') }}"></script>


    @if (session('success'))
    <script type="text/javascript">
        toastr.success("{{ session('success') }}", 'Success');
    </script>
    @php
        session()->forget('success');
    @endphp
    @endif

    @if (session('error'))
    <script type="text/javascript">
        toastr.error("{{ session('error') }}", 'Error');
    </script>
    @php
        session()->forget('error');
    @endphp
    @endif
