
@auth

<h1>Usuário autenticado</h1>
    <p>ID {{ Auth::user()->id }}</p>
    <p>Nome {{ Auth::user()->name }}</p>
    <p>Email {{ Auth::user()->email }}</p>

@endauth

@guest
<h1>Olá visitante, tudo bem?</h1>
@endguest
