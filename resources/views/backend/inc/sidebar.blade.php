<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                <img class="img-xs rounded-circle" 
                src="@if(auth()->user()->role == 'siswa')
                {{auth()->user()->siswa->getAvatar()}}
                @elseif(auth()->user()->role == 'admin')
                   {{ asset('images/avatar/avatar.jpeg') }} 
                @endif"
                        alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ auth()->user()->name }}</p>
                    <p class="designation">{{ auth()->user()->email }}</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (auth()->user()->role === 'admin') 
        <li class="nav-item">
            <a class="nav-link" href="{{ route('siswa.index') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('berita.index') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Berita</span>
            </a>
        </li>
        @elseif(auth()->user()->role == 'siswa')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('myprofile') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Profil Saya</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
<!-- partial -->