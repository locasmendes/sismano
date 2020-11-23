@if ($action == true)
<form action="{{ route('logar') }}" method="post">
@else
<form action="registrar" method="post">
@endif
    @csrf
    <div class="form-group">
        <label for="InputEmail1">Endereço de Email</label>
        <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar sua senha com ninguém.</small>
      </div>
      <div class="form-group">
        <label for="InputPassword1">Senha</label>
        <input type="password" class="form-control" name="password" id="InputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">
          @if ($action == true)
        Entrar
        @else
        Criar conta
        @endif
    </button>
      <a href="#" wire:click="$toggle('action')">
        @if ($action == true)
        Não tem uma conta? clique aqui para criar uma.
        @else
        Já tem uma conta? clique aqui para entrar.
        @endif
        </a>
</form>