
<x-layout page="Tarefas: Regitre-se">
  <x-slot:btn>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
  </x-slot:btn>
 
<section id="task_section">
  <h1>Registrar-se</h1>
  @if ($errors->any())
  <ul class="alert alert-error">
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif

  <form action="{{ route('user.register_action')}}" method="post">
    @csrf

    <x-form.text_input 
    name="name" 
    label="Nome" 
    required="required" 
    placeholder="Digite seu nome completo" />

    <x-form.text_input 
    type="email"  
    name="email" 
    label="E-mail" 
    required="required" 
    placeholder="Digite seu e-mail" />

    <x-form.text_input 
    type="password"  
    name="password" 
    label="Senha" 
    required="required" 
    placeholder="Digite sua senha" />

    <x-form.text_input 
    type="password"  
    name="password_confirmation" 
    label="Confirme sua senha" 
    required="required" 
    placeholder="Confirme sua senha" />

   <x-form.form-button resetTxt="Limpar" submitTxt="Registrar"></x-form.form-button>
    
  </form>
</section>

</x-layout>