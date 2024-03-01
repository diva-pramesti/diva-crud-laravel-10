<nav class="navbar navbar-expand bg-body-tertiary mb-3 py-0">
  <div class="container-fluid bg-primary p-3 px-5 ">
    <a class="navbar-brand fw-bold text-white" href="#"><i class="bi bi-bar-chart-fill"
        style="font-weight: bolder; padding-left: 70px;  padding-right:10px;"></i>CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page"
            style="opacity: 0.8; font-weight:bolder; padding-left: 50px;" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page"
            style="opacity: 0.8;font-weight:bolder; padding-left: 20px" href="{{ route('posts.index') }}">Data Post</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
