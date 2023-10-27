<div class="task">
  <div class="title">
    <input type="checkbox" 
      @if ($data && $data['done'])
        checked
      @endif
    />
    <div class="task_title">{{$data['title'] ?? ''}}</div>
  </div>
  <div class="priority">
    <div class="sphere"></div>
    <div>{{$data['category'] ?? ''}}</div>
  </div>
  <div class="actions">
    {{-- <a href="{{$data['edit_url'] ?? ''}}"> --}}
     <a href="https::nucleosti.com.br/tasks/edit/{{$data['id'] ?? ''}}">
    <img src="/assets/images/icon-edit.png" alt="">
    </a>
    {{-- <a href="{{$data['delete_url'] ?? ''}}"> --}}
    <a href="https::nucleosti.com.br/tasks/delete/{{$data['id'] ?? ''}}">
    <img src="/assets/images/icon-delete.png" alt="">
    </a>
  </div>
</div>