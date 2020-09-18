$(document).ready(function(){
	$("#register-form").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#register-form");
		/*var nom = $("#fullname").val();
		var email = $("#fullname").val();
		var mdp = $("#fullname").val();*/

		$.ajax({
			method: "POST",
			url: "http://localhost/student1/trait_register.php",
			dataType: "JSON",
			// on va envoyer les donné hmtl sous forme JSON au lieu de html afin de simplifier les choses,
			// 
			data: form.serialize(),
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					$("#message").removeClass("alert-danger").addClass("alert alert-success").html('\'Enregistrement réussi');
					$("#register-form").trigger('reset');
             // si le message retourné par php est egale a "ok" (voir le fichier de traitement trait_register.php) ( qui est inscrit depuis le fichier trait_register)
             // alors le message qui est inscrit dans les parentheses de html va s'executer)

				}else{
					$("#message").addClass("alert alert-danger").html(reponse.msg);
					// (reponse.msg) ici le mot "reponse" vient du parametre de la fonction "function(),
					// et "msg" c'est le numero de la ligne , genre la clé du tableau (voir le fichier de traitement php)
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })


	//attendance

      $(document).ready(function(){
	$("#attendance").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#attendance");

		$.ajax({

           method: "POST",
           url:"http://localhost/student1/trait_attendance.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
           	if (reponse.msg=='ok') {
             // ('#message').removeClass("alert alert danger").html('');
               //......on ne met plus ça vu qu'ici on veux pas afficher un message mais plutot
                // faire une redirection
             window.location='acceuil.php'
             $("#attendance").trigger('reset');
             // si le message retourné par php est egale a "ok" ( qui est inscrit depuis le fichier trait_attendance)
             // alors faire une redirection vers la page 'acceuil.php'

           	} else if(reponse.msg=='ok1') {
              window.location='rep2.php'
              // window.location='rep2.php'
					// redirection sur une autre page (la page rep2)

              $("#attendance").trigger('reset');


           	} else{

                 $('#message').addClass("alert alert-danger").html(reponse.msg);

                 // dans le cas contraire afficher les reponses des autres conditons en fonction
                  // des instructions qu'on a donné dans le fichier de traitement trait_attendance.php
           	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})