<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
</head>
<style>
  body {
    background-color: #351482;
  }

  .card {
    background-color: #fff;
    width: 600px;
    margin: 100px auto 0;
    padding:0 20px;
    border-radius: 8px;
    overflow: hidden;
  }

  input.todo_create {
    width: 450px;
    height: 30px;
    border-style: solid;
    border-width: 1px;
    border-radius: 5px;
  }

  button.create {
    margin-left: 50px;
    border-style: solid;
    border-style: thin;
    padding: 8px 20px;
    background: none;
    color: #ff00ff;
    border-radius: 5px;
    border-color: #ff00ff;
  }

  button.create:hover {
	background-color: #ff00ff;
  color: #fff;
}

  table {
    width: 600px;
    margin: 30px 0;
  }

    input.todo_update {
    width: 300px;
    height: 30px;
    border-style: solid;
    border-width: 1px;
    border-radius: 5px;
  }

  button.update {
    border-style: solid;
    border-style: thin;
    padding: 8px 20px;
    background: none;
    color: #ffbf1c;
    border-radius: 5px;
    border-color: #ffbf1c;
  }

  button.update:hover {
	background-color: #ffbf1c;
  color: #fff;
}

  button.delete {
    border-style: solid;
    border-style: thin;
    padding: 8px 20px;
    background: none;
    color: #1cffbb;
    border-radius: 5px;
    border-color: #1cffbb;
  }

  button.delete:hover {
	background-color: #1cffbb;
  color: #fff;
}
</style>

<body>
  <div class="card">
    <div class="todo">
      <h2>Todo List</h2>
      <form action="/create">
        <input type="text" class="todo_create">
        <button class="create">追加</button>
      </form>
    </div>

    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <tr>
        <th></th>
        <th>
          <form action="/update">
            <input type="text" class="todo_update">
          </form>
        </th>
        <th>
          <button class="update">更新</button>
        </th>
        <th>
          <form action="/delete">
          <button class="delete">削除</button>
          </form>
        </th>
      </tr>
    </table>
  </div>
</body>

</html>