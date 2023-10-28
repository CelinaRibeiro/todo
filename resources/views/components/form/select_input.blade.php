<div class="inputArea">
  <label for="{{$name}}">
    {{$label ?? ''}}
  </label>
  <select name="{{$name}}" id="{{$name}}" {{empty($required) ? '' : 'required'}}>
    <option selected disabled value="">Selecione uma opção</option>
    {{$slot}}
  </select>
</div>