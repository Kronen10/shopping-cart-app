<style>
input {
 
    width:100%;
  font-family:unset;
  font-size: unset;
  flex: 1;
  padding: 1em;
    border: 0;
    color: gray;
    font-size: 1rem;
    float:right;
    width:300px;
    border:1px solid #dadada;
    border-radius:7px;
}
button.px11{
    
  border:none;
  background-color:#3F51B5;
  color:#fff;
  font-weight:600;
  border-radius:5px;
  width:60%;
  animation: 1.5s ease infinite alternate running shimmer;
  background: linear-gradient(90deg, #FFE27D 0%, #64E3FF 30%, #9192FF 85%);
  background-size: 200% 100%;
  border: none;
	border-radius: 6px;
  box-shadow: -2px -2px 10px rgba(255, 227, 126, 0.5), 2px 2px 10px rgba(144, 148, 255, 0.5);
  color: #170F1E;
  cursor: pointer;
	font-family: 'Inter', sans-serif;
  font-size: 16px;
	font-weight: 670;
  line-height: 24px;
  overflow: hidden;
  padding: 12px 24px;
  position: relative;
  text-decoration: none;
  transition: 0.2s;
}
form{
    border:1px solid #dadada;
    border-radius:7px;
    background-color:white;
    padding: 9px;
    width: 650px; 
}

label { 
    font-size:18px;
    font-family: 'Inter', sans-serif;
}
</style>

    <x-app-layout>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-gray-900">New Products</h3>
        <div class="h-1 bg-gray-800 w-48"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
   
    <form action="{{ route('add.store') }}" method="POST">
{{ csrf_field() }}
    <div class="form-group">
        <label for="txtName">Название товара</label>
        <input name="name" id="txtName" class="form-control">
    </div>
    <div class="form-group">
        <label for="txtPrice">Цена</label>
        <input name="price" id="txtPrice" class="form-control">
    </div>
    <div class="form-group">
        <label for="txtDescription">Описание</label>
        <input name="description" id="txtDescription" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="txtImage">Изображение</label>
        <input name="image" id="txtImage" placeholder="ссылку на изображение" class="form-control">
    </div><br><br><br><br>
    

    <button class="px11" type="submit">Добавить товар</button>
   
</x-app-layout>































