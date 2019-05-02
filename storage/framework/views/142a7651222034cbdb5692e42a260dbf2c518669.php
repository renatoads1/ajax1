<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo(csrf_token());?>" id="token">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>ajax1</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
          <div class="col-lg-3">
            <div class="form-group">
                <label for="inputsm">get input</label>
                <input action="/ajaxget" class="form-control input-sm" name="inputget" id="inputget" type="text">
            </div>
        </div>
            <div class="col-lg-3">
                <form id="frmpost" action="#">
                    <input type="hidden" name="_token" id="_token" value="<?php echo(csrf_token());?>">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        
    <script type="text/javascript">
        $(document).ready(function(){
            
           $.ajaxSetup({
            headers:{   
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
        });
});
        $("#inputget").blur(function(){
            $.get('/ajaxget',function(data){
                console.log(data);
            });
        });
        
        $("#frmpost").submit(function(){
            var  email = $("#email").val();
            var  pwd = $("#pwd").val();
            var dados = {email:email,pwd:pwd};
            $.ajax({
                method: "post",
                url: "/ajaxpost",
                data:dados,
                dataType: "json",
                success:(s)=>{
                    alert('foi');
                },
                error:(e)=>{
                    alert('erro');
                }
              });
                        
        });
    </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ajax1\resources\views/welcome.blade.php ENDPATH**/ ?>