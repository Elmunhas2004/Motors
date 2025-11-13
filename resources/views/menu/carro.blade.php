@extends('template.index')

@section('title')
teste
@endsection

@section('content')

    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Carro</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="left-images">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach($carroUnico->fotos as $foto)
                            @if(!empty($foto->link_foto))
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <div class="inner">
                                                <div class="main-border-button">
                                                    <a href="#">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ $foto->link_foto }}" alt="Foto do carro">
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        {{-- Se não houver fotos --}}
                        @if($carroUnico->fotos->isEmpty())
                            <div class="item">
                                <div class="thumb">
                                    <img src="/imagens/sem-foto.png" alt="Sem imagem disponível">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="col-lg-4">
                <div class="right-content">
                    <h4 class="fw-bold mb-3">{{ $carroUnico->descricao }}</h4>
                    <span class="price d-block fs-4 text-success mb-2">
                        R$ {{ number_format($carroUnico->preco, 2, ',', '.') }}
                    </span>
                    <p class="text-muted mb-4">{{ $carroUnico->Sobre }}</p>

                    <div class="total text-center">
                        <div class="main-border-button m-4">
                            <a href="#" class="btn btn-success px-4 py-2 fs-5 shadow-sm">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->


@endsection
