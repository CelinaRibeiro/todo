<div class="task">
  <div class="title">
    <input type="checkbox" 
      @if ($data && $data['is_done'])
        checked
      @endif
    />
    <div class="task_title">{{$data['title'] ?? ''}}</div>
  </div>
  <div class="priority">
    <div class="sphere"></div>
    <div>{{$data['category']->title ?? ''}}</div>
  </div>
  <div class="actions">
     <a href="{{ route('tasks.edit', ['id' => $data['id']]) }}">
    <img src="/assets/images/icon-edit.png" alt="">
    </a>
    <a href="{{ route('tasks.delete', $data->id) }}">
    <img src="/assets/images/icon-delete.png" alt="">
    </a>
  </div>
</div>