<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Crear un producto</title>
  <style>
  .errors{
  background-color: #fcc;
  border: 1px solid #966;
  }
  form{
  margin-top: 20px;
  line-height: 1.5em;
  }
  label{
  display: inline-block;
  width: 120px;
  }
  </style>

</head>

<body>
  @if(count($errors) > 0)
    <div class="errors">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form id="form_67861" class="appnitro"  method="post" action="">
        <div class="form_description">
    <h2>Untitled Form</h2>
    <p>This is your form description. Click here to edit.</p>
  </div>
    <label class="description" for="element_1">Nombre: </label>
    <div>
      <input id="element_1" name="nombre" class="element text medium" type="text" value="{{old('nombre')}}"/>
    </div>
    <label class="description" for="element_2">Descripcion: </label>
    <div>
      <input id="element_2" name="descripcion" class="element text medium" type="text" value="{{old('descripcion')}}"/>
    </div>
    <label class="description" for="element_2">Precio: </label>
    <div>
      <input id="element_2" name="precio" class="element text medium" type="text" value="{{old('precio')}}"/>
    </div>
    <input type="submit" value="Crear">
  </form>
</body>
