<x-layout page="Tarefas: Login">

<section id="task_section">
  <h1>Login</h1>
  @if ($errors->any())
    <ul class="alert alert-error">
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('login_action')}}" method="post">
    @csrf

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

   <x-form.form-button resetTxt="Limpar" submitTxt="Login"></x-form.form-button>
    
  </form>
</section>

</x-layout>