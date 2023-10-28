<x-layout page="Tarefas: Login">
  <x-slot:btn>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
  </x-slot:btn>
 
<section id="create_task_section">
  <h1>Criar tarefa</h1>
  <form action="">


    <x-form.text_input name="title" label="Título da tarefa" required="required" placeholder="Digite o título da tarefa" />

    <x-form.text_input type="date" name="due-data" label="Data de relaização" required="required" />

    <x-form.select_input 
      name="category" 
      label="Categoria">
      <option>Valor qualquer</option>
    </x-form.select_input>

   <x-form.textarea_input 
      name="description" 
      placeholder="Digite uma descrição para a tarefa"
   />

   <x-form.form-button resetTxt="Limpar" submitTxt="Criar tarefa"></x-form.form-button>
    
  </form>
</section>

</x-layout>