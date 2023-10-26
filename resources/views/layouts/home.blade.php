<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TodoApp</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <img src="assets/images/logo.png" alt=""/>
    </div>
    <div class="content">
      <nav>
        <a href="#" class="btn btn-primary">Criar tarefa</a>
      </nav>
      <main>
        <section class="graph">
          <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">Data</div>
          </div>
          <div class="graph_header-subtitle">
            <b>Tarefas 3/6</b>
          </div>
          <div class="graph-placeholder"></div>

          <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
          </div>
         
        </section>
        <section class="list">
          <div class="list_header">
            <select class="list_header-select">
              <option value="1">Todas as tarefas</option>
            </select>
          </div>
          <div class="task_list">
            <div class="task">
              <div class="title">
                <input type="checkbox" />
                <div class="task_title">Título da tarefa</div>
              </div>
              <div class="priority">
                <div class="sphere"></div>
                <div>Título da tarefa</div>
              </div>
              <div class="actions">
               <a href="#">
                <img src="/assets/images/icon-edit.png" alt="">
               </a>
               <a href="#">
                <img src="/assets/images/icon-delete.png" alt="">
               </a>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</body>
</html>