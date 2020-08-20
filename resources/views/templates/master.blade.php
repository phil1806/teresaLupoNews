{{--
    Chemin :/resources/views/templates/master.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}

<!DOCTYPE html>
<html lang="fr">

    <!-- HEAD -->
    @include('templates.partials._head')
    
	<body data-baseUrl ="{{url('/')}}">
		<!-- HEADER -->
         @include('templates.partials._header')

		<!-- Main -->
         @include('templates.partials._body')

		<!-- FOOTER -->
        @include('templates.partials._footer')
	</body>
</html>