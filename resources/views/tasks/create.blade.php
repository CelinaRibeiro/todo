<x-layout page="Tarefas: Login">
  <x-slot:btn>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
  </x-slot:btn>
 
<section id="create_task_section">
  <h1>Criar tarefa</h1>
  <form action="">
    <div class="inputArea">
      <label for="title">Título da tarefa</label>
      <input type="text" name="title" id="title" required placeholder="Digite o título da tarefa" />
    </div>
    <div class="inputArea">
      <label for="due_date">Data de relaização</label>
      <input type="date" name="due_date" id="due_date" required />
    </div>
    <div class="inputArea">
      <label for="category">Categoria</label>
      <select name="category" id="category" required>
        <option selected disabled value="">Selecione a categoria</option>
        <option value=""></option>
      </select>
    </div>
    <div class="inputArea">
      <label for="description">Descrição</label>
     <textarea name="description" id="description" placeholder="Digite uma descrição para a tarefa"></textarea>
    </div>
  </form>
</section>

</x-layout>