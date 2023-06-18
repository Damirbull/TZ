<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="row post-list"></div> <!-- Контейнер для карточек постов -->
    <div class="row col-12">
      <div class="form-group col-6">
        <label for="brandInput">Бренд</label>
        <input type="text" class="form-control" id="brandInput" aria-describedby="brandHelp">
      </div>
      <div class="form-group col-6">
        <label for="modelInput">Модель</label>
        <input type="text" class="form-control" id="modelInput" aria-describedby="modelHelp">
      </div>
      <div class="form-group col-6">
        <label for="bodycolorInput">Цвет кузова</label>
        <input type="text" class="form-control" id="bodycolorInput" aria-describedby="bodycolorHelp">
      </div>
      <div class="form-group col-6">
        <label for="stateNumberInput">Государственный номер</label>
        <input type="text" class="form-control" id="stateNumberInput" aria-describedby="stateNumberHelp">
      </div>
      <div class="form-group col-6">
        <label for="statusInput">Статус</label>
        <input type="text" class="form-control" id="statusInput" aria-describedby="statusHelp">
      </div>
    </div>
    <div class="row col-12 mt-2">
      <div>
        <button class="btn btn-primary" onclick="addPost()">Добавить пост</button>
      </div>
    <div class="row col-12">
      <div class="form-group col-6">
        <label for="brandInput">Бренд</label>
        <input type="text" class="form-control" id="brand-Input" aria-describedby="brandHelp">
      </div>
      <div class="form-group col-6">
        <label for="modelInput">Модель</label>
        <input type="text" class="form-control" id="model-Input" aria-describedby="modelHelp">
      </div>
      <div class="form-group col-6">
        <label for="bodycolorInput">Цвет кузова</label>
        <input type="text" class="form-control" id="bodycolor-Input" aria-describedby="bodycolorHelp">
      </div>
      <div class="form-group col-6">
        <label for="stateNumberInput">Государственный номер</label>
        <input type="text" class="form-control" id="state-NumberInput" aria-describedby="stateNumberHelp">
      </div>
      <div class="form-group col-6">
        <label for="statusInput">Статус</label>
        <input type="text" class="form-control" id="status-Input" aria-describedby="statusHelp">
      </div>
    </div>
    <div class="row col-12 mt-2">
      <div>
        <button class="btn btn-primary" onclick="abobaPost()">Редактировать пост</button>
      </div>
    </div>
  </div>
  <script src="js/may.js"></script>
</body>
</html>
