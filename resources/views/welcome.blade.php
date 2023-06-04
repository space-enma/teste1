@extends('layouts.main')

@section('title', 'Space Enma')
    
@section('content')
<main>

    <section class="section-area-um">
        <div class="area-conteudo-um "> 
            <h1 class="titulo-conteudo-um">Bem vindo a </br> <span><color1>Space</color1>  <color> Enma </color></span>  </h1>
            <p class="paragrafo-conteudo-um">Aqui construímos o site ideal para o seu negócio
            basta agendar uma consulta com a nossa equipe.
           </p>
           <a href="/contats"> <button class="button-are-um"> Entre em contato </button> </a>
        </div>
        <div class="area-conteudo-dois ">
            <img class="imagem-area-dois" src="img/imagens/fotomenu.svg" alt="">
        </div>
    </section>
    
    <section>
         <x-servicos/>
    </section>
  
    <section>
        <x-empre-on/>
    </section>

    <section>
        <x-equipe/>
    </section>

    <section>
        <x-slaide/>
    </section>


    <section>
        <x-forms.contato/>
    </section>
    
    <script src="/js/animation.js"></script>
    
</main>

@endsection