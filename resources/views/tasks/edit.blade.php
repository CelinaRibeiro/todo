<x-layout page="Tarefas: Login">
  <x-slot:btn>
   <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
</x-slot:btn>
 
<section id="task_section">
  <h1>Editar tarefa</h1>
  <form action="{{ route('tasks.update', $tasks->id)}}" method="post">
    @method('PUT')
    @csrf

    <x-form.checkbox_input 
    name="is_done" 
    label="Tarefa realizada?"
    checked="{{ $tasks->is_done }}" />

    <x-form.text_input 
    name="title" 
    label="Título da tarefa" 
    required="required" 
    placeholder="Digite o título da tarefa"
    value="{{ $tasks->title }}" />

    <x-form.text_input 
    type="datetime-local" 
    name="due_date" 
    label="Data de relaização" 
    required="required"
    value="{{ $tasks->due_date }}" />

    <x-form.select_input 
    name="category_id" 
    label="Categoria">
    @foreach ($categories as $category)
      <option value="{{$category->id}}"
        @if ($category->id == $tasks->category_id)
          selected
        @endif
        >{{ $category->title}}</option>
    @endforeach
    </x-form.select_input>

   <x-form.textarea_input 
    name="description" 
    label="Descrição"
    placeholder="Digite uma descrição para a tarefa"
    value="{{ $tasks->description }}"
   />

   <x-form.form-button resetTxt="Limpar" submitTxt="Atualizar tarefa"></x-form.form-button>
    
  </form>
</section>


</x-layout>