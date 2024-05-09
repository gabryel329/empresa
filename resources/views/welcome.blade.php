<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="{{ asset('js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Maiores Empresas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css\blog.css') }}" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path
                d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
    </svg>

    <div class="container">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            {{-- <div class="container">
              <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>Album</strong>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div> --}}
          </div>
        </header>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                <div class="col-lg-12 px-0">
                    <h1 class="display-4 fst-italic">Maiores Empresas</h1>
                    <p class="lead my-3">Neste artigo, colocamos o foco nas empresas de destaque Mundial em 2024,
                        identificando-as com base em seu valor de mercado. Prepare-se para uma imersão em um panorama
                        detalhado das 10 principais empresas, onde exploramos o que as coloca no topo deste cenário
                        empresarial.
                    </p>
                    {{-- <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p> --}}
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-8">
                    <article class="blog-post">
                        <h3>Brasil</h3>
                        <table class="table table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th colspan="1">Empresa</th>
                                    <th>Setor</th>
                                    <th>Valor de Mercado (em USD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data1 as $index1 => $row1)
                                    @if ($index1 != 0 and $index1 != 1)
                                        <tr>
                                            <td>{{ $index1 - 1 }}</td>
                                            <td style="align-items: center; width: 100px;"> <!-- Defina a largura aqui -->
                                                <img src="images/PNG LOGO EMPRESAS/{{ strtolower(trim($row1['nome'])) }}.jpg"
                                                     style="width: 100%; display: block; max-width: 100px; height: auto;"> <!-- Ajuste as dimensões da imagem conforme necessário -->
                                            </td>
                                            <td style="align-items: flex-start">
                                                <a type="button" class="btn btn-link" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1{{ $loop->index }}">{{ trim($row1['nome']) }}</a>
                                                <div class="modal fade" id="exampleModal1{{ $loop->index }}"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel{{ $loop->index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="exampleModalLabel{{ $loop->index }}">
                                                                    Informações da Empresa</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul>
                                                                    <img src="images\PNG LOGO EMPRESAS/{{ strtolower(trim($row1['nome'])) }}.jpg" style="width: 100%; display: block; max-width: 100px; height: auto;">
                                                                    <ul>
                                                                        <li><strong>Ano de Fundação</strong>: {{ $row1['ano'] }}</li>
                                                                        <li>{{ $row1['obs'] }}</li>
                                                                        <li><a href="http://{{ $row1['site'] }}" target="_blank">Visite o Site</a></li>
                                                                    </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $row1['setor'] }}</td>
                                            <td>{{ $row1['valor'] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </article>

                    <article class="blog-post">
                        <h2 class="display-8 fst-italic">Explorando ainda mais</h2>

                        <p>Neste artigo, colocamos o foco nas empresas de destaque Mundial em 2024, identificando-as com 
                          base em seu valor de mercado. Prepare-se para uma imersão em um panorama detalhado das 
                          10 principais empresas, onde exploramos o que as coloca no topo deste cenário empresarial.</p>
                          <br></br>
                        {{-- <blockquote>
                            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of
                                it.</p>
                        </blockquote>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p> --}}
                        <h3>Global</h3>
                        <table class="table table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Empresa</th>
                                    <th>Setor</th>
                                    <th>País de Fundação</th>
                                    <th>Valor de Mercado (em USD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $row)
                                    @if ($index != 0 and $index != 1)
                                        <!-- Excluir a primeira linha -->
                                        <tr>
                                            <!-- Exibir apenas as colunas desejadas -->
                                            <td>{{ $index - 1 }}</td>
                                            <td>
                                                <img src="images\PNG LOGO EMPRESAS/{{ strtolower(trim($row['nome'])) }}.jpg"
                                                style="width: 100%; display: block; max-width: 90px; height: auto;">
                                            </td>
                                            <td style="align-items: flex-start">
                                                <a type="button" class="btn btn-link" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $loop->index }}">
                                                    @if (trim($row['nome']) == 'Alphabet Inc. (Google)')
                                                        Alphabet Inc.
                                                    @elseif(trim($row['nome']) == 'Berkshire Hathaway')
                                                        Berkshire H.
                                                    @elseif(trim($row['nome']) == 'Meta Platforms')
                                                        Meta
                                                    @else
                                                        {{ trim($row['nome']) }}
                                                    @endif
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $loop->index }}"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel{{ $loop->index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="exampleModalLabel{{ $loop->index }}">
                                                                    Informações da Empresa</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <ul>
                                                                  <img src="images\PNG LOGO EMPRESAS/{{ strtolower(trim($row['nome'])) }}.jpg" style="width: 100%; display: block; max-width: 100px; height: auto;">
                                                                <ul>
                                                                  <li><strong>Ano de Fundação</strong>: {{ $row['ano'] }}</li>
                                                                  <li>{{ $row['obs'] }}</li>
                                                                  <li><a href="http://{{ $row['site'] }}" target="_blank">Visite o Site</a></li>
                                                                </ul>
                                                              </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $row['setor'] }}</td>
                                            <td>{{ $row['pais'] }}</td>
                                            <td>{{ $row['valor'] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </article>

                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div id="data-atualizacao" class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">Data de atualização</h4>
                            <p id="data-atual" class="mb-0">07/05/2024</p>
                        </div>

                        <div>
                            <h4 class="fst-italic">Posts recentes</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Maiores Artitas</h6>
                                            <small class="text-body-secondary">07/05/2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Maiores empresa de Marketing</h6>
                                            <small class="text-body-secondary">07/05/2024</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
    </div>

    </main>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
        <p class="mb-0">
            <a href="#">Volta ao topo</a>
        </p>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function atualizarData() {
            var dataElemento = document.getElementById('data-atual');
            var dataAtual = new Date();
            var meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro',
                'Outubro', 'Novembro', 'Dezembro'
            ];
            var mesNome = meses[dataAtual.getMonth()];
            var dia = dataAtual.getDate();
            var ano = dataAtual.getFullYear();
            var dataFormatada = mesNome + ' ' + dia + ', ' + ano;

            dataElemento.textContent = dataFormatada;
        }

        // Atualiza a data inicialmente
        atualizarData();

        // Define um intervalo para chamar a função a cada 3 horas (em milissegundos)
        setInterval(atualizarData, 3 * 60 * 60 * 1000); // 3 horas * 60 minutos * 60 segundos * 1000 milissegundos
    </script>
</body>

</html>
