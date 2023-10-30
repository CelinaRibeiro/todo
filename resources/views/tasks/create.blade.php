<x-layout page="Tarefas: Login">
  <x-slot:btn>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
  </x-slot:btn>
 
<section id="task_section">
  <h1>Criar tarefa</h1>
  <form action="{{ route('tasks.store')}}" method="post">
    @csrf

    <x-form.text_input 
    name="title" 
    label="Título da tarefa" 
    required="required" 
    placeholder="Digite o título da tarefa" />

    <x-form.text_input 
    type="datetime-local"  
    name="due_date" 
    label="Data de realização" 
    required="required" />

    <x-form.select_input 
    name="category_id" 
    label="Categoria">
    @foreach ($categories as $category)
      <option value="{{$category->id}}">{{ $category->title}}</option>
    @endforeach
    </x-form.select_input>

   <x-form.textarea_input 
    name="description" 
    label="Descrição"
    placeholder="Digite uma descrição para a tarefa"
   />

   <x-form.form-button resetTxt="Limpar" submitTxt="Criar tarefa"></x-form.form-button>
    
  </form>
</section>

</x-layout>