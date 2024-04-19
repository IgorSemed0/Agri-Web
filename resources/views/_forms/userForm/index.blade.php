
        <div class="form-group">
            <label for="userName">Nome de Usuario</label>
            <input type="text" class="form-control" name="userName" value="{{ isset($user) ? $user->userName : old('userName') }}" aria-describedby="emailHelp"
            placeholder="Digite o nome aqui!">
            <label for="vc_image">Imagem</label>
            <input type="file" class="form-control-file" name="vc_image" value="{{ isset($user) ? $user->vc_image : old('vc_image') }}" aria-describedby="emailHelp"><br>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ isset($user) ? $user->email : old('email') }}" aria-describedby="emailHelp"
            placeholder="Digite seu email aqui!"><br>
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" value="{{ isset($user) ? $user->password : old('password') }}" aria-describedby="emailHelp"
            placeholder="Digite sua palavra passe aqui!"><br>
        </div>
