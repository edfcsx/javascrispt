SCRIPTS 

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}" defer></script>
    <script src="{{asset('js/jquery.validate.additional-methods.min.js')}}" defer></script>
    
    
    Exemplo de codigo
    
    <script type="text/javascript">
        $(document).ready(function (){
            $('#form').validate({
                rules:{
                    name:{
                        required: true,
                        minlength: 5
                    },
                    cpf:{
                        required: true,
                        rangelength: [14,14]
                    },
                    address:{
                        required: true,
                        minlength: 5
                    },
                    phone:{
                        required: true,
                        minlength: 9
                    },
                    password:{
                        required: true,
                        rangelength: [6,10],
                        equalTo: '#cPassword_Confirmation'
                    },
                    password_confirmation:{
                        required: true,
                        rangelength: [6,10],
                        equalTo: '#cPassword'
                    }
                },
                messages:{
                    name:{
                        required: 'O campo é obrigratio',
                        minlength: 'O campo deve ter no minimo 5 caracteres'
                    },
                    cpf:{
                        required: 'O campo é obrigratio',
                        rangelength: 'Digite um cpf válido'
                    },
                    address:{
                        required: 'O campo é obrigratio',
                        minlength: 'O campo deve ter no minimo 5 caracteres'
                    },
                    phone:{
                        required: 'O campo é obrigratio',
                        minlength: 'O campo deve ter no minimo 5 caracteres'
                    },
                    password:{
                        required: 'O campo é obrigatorio',
                        rangelength: 'O campo deve ter entre 6 e 10 caracteres',
                        equalTo: 'As senhas não são iguais'
                    },
                    password_confirmation:{
                        required: 'O campo é obrigatorio',
                        rangelength: 'O campo deve ter entre 6 e 10 caracteres',
                        equalTo: 'As senhas não são iguais'
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function ($) {
            let $cpf = $("#cpf");
            $cpf.mask('000.000.000-00', {reverse: false});
        });
    </script>

    <script>
        $(document).ready(function ($) {
            let $phone = $("#phone");
            $phone.mask('(00) 00000-0000', {reverse: false});
        });
    </script>
