    {{-- If Active change color to black --}}
    
    <div class="d-flex flex-column flex-lg-shrink-0 sidebar-custom" style="width: 4.5rem;">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right">
                <box-icon name='heart-circle' animation='burst-hover' color="red"></box-icon>
            </a>
            <li class="nav-item">
                <a href="/" class="nav-link py-3 border-bottom rounded-0 {{ $title === 'Home' ? 'active' : ''}}" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                    <box-icon name='home-heart' type='solid' color='{{ $title === 'Home' ? 'purple' : 'yellow'}}' animation='tada-hover'></box-icon>
                </a>
            </li>
            <li class="nav-item">
                <a href="/story" class="nav-link py-3 border-bottom rounded-0 {{ $title === 'Story' ? 'active' : ''}}" title="Story" data-bs-toggle="tooltip" data-bs-placement="right">
                    <box-icon name='book-heart' color='{{ $title === 'Story' ? 'purple' : 'yellow'}}' animation='tada-hover'></box-icon>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0 {{ $title === 'Gallery' ? 'active' : ''}}" title="Gallery" data-bs-toggle="tooltip" data-bs-placement="right">
                    <box-icon type='solid' name='photo-album' color='{{ $title === 'Gallery' ? 'purple' : 'yellow'}}' animation='tada-hover'></box-icon>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0 {{ $title === 'About' ? 'active' : ''}}" title="About" data-bs-toggle="tooltip" data-bs-placement="right">
                    <box-icon name='male-female' color='{{ $title === 'About' ? 'purple' : 'yellow'}}' animation='tada-hover'></box-icon>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0 {{ $title === 'Add Story' ? 'active' : ''}}" title="Add Story" data-bs-toggle="tooltip" data-bs-placement="right">
                    <box-icon name='book-add' color='{{ $title === 'Add Story' ? 'purple' : 'yellow'}}' animation='tada-hover'></box-icon>
                </a>
            </li>
        </ul>
        <div class="dropdown border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <div class="b-example-divider b-example-vr"></div>
