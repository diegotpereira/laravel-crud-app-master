@extends('layout')

@section('content')

<style>
   .container {
       max-width: 450px;
   }
   .push-top {
       margin-top: 50px;
   }
</style>

<div class="card push-top">
    <div class="card-header">
        Novo Usuário
    </div>

    <div class="card-body">
        @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div><br />
        @endif

        <form method="post" action="{{ route('estudantes.store') }}">
             <div class="form-group">
                 @csrf
                 <label for="nome">Nome</label>
                 <input type="text" class="form-control" name="nome" />
             </div>

             <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" name="email" />
             </div>

             <div class="form-group">
                 <label for="telefone">Telefone</label>
                 <input type="text" class="form-control" name="telefone" />
             </div>

             <div class="form-group">
                 <label for="password">Password</label>
                 <input type="text" class="form-control" name="password" />
             </div>

             <button type="submit" class="btn btn-block btn-danger">Salvar</button>
        </form>
    </div>
</div>
@endsection
