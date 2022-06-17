<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Nilai Matkul</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        {{-- ini tombol buat ganti view ke : --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- cara mbacanya: if judul_tab isinya Home, maka kasih active, kalau bukan kasih kosongan --}}
            <a class="nav-link {{ ($judul_tab === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a> 
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($judul_tab === "Edit Data") ? 'active' : '' }}" href="/editdata">Edit Nilai</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($judul_tab === "Detail Data") ? 'active' : '' }}" href="/detaildata">Detail Nilai</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
      </div>
    </div>
</nav>