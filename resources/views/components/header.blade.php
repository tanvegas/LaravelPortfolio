{{-- <div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1>This is the Header</h1>
    <h3>{{$name}}</h3>
</div> --}}

<nav id="navbar-schead" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item-link"><a class="nav-link" href="#scrollspyHeading1">About</a></li>
                <li class="nav-item-link"><a class="nav-link" href="#scrollspyHeading2">Experience</a></li>
                <li class="nav-item-link"><a class="nav-link" href="#scrollspyHeading3">Skills & Tools</a></li>
                <li class="nav-item-link"><a class="nav-link" href="#scrollspyHeading4">Contact</a></li>
                <li class="nav-item-link"><a class="nav-link" target="_blank" href="/resume.pdf" rel="noopener noreferrer">Resume</a></li>
            </ul>
        </div>
    </div>

    <h3>Experience</h3>
    <ul>
        @foreach ($experiences as $experience)
            <li>{{$experience}}</li>
        @endforeach
    </ul>
</nav>