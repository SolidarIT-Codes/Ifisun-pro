    $("#form-login").submit(function(e){
        e.preventDefault();
        $.post(
            $(this).attr('action'),
            { 
               username: $("#username").val(),
               password : $("#password").val()
            },

            function(data){
                if(data == 1){
                    $("#flash-modal").empty().html("<div class='alert alert-success'>Connexion réussie !</div>");
                    setTimeout(function(){ window.location.reload(); }, 30);
                    console.log(data);
                }
                if(data == 0){
                    $("#flash-modal").empty().html("<div class='alert alert-danger'>Echec de connexion !</div>");
                   console.log(data) ;
                }
                if(data == 2){
                    $("#flash-modal").empty().html("<div class='alert alert-danger'>Cet utilisateur déjà connecté !</div>");
                    console.log(data);
                }
            },
                'text'
        );
    });