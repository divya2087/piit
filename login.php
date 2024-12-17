<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Skill Development Institute</title>
     

     <style>
      *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      body{
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background-color: black;
      }
        
        .wrapper{
         position: relative;
         width: 400px;
         height: 500px;
         background: black;
         border-radius: 20px;
         box-shadow: 0 0 50px #0ef;
         padding: 40px;
        }

        .form-wrapper{
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100%;
         height: 100%;
        }

        h2{
         font-size: 30px;
         color:#fff;
         text-align: center;
        }

        .input-group{
         position: relative;
         margin: 30px 0;
         border-bottom: 2px solid #fff;
        }

        .input-group label{
         position: relative;
         top: 50%;
         left: 5px;
         color: white;
         transform: translateY(-50%);
         font-size: 16px;
         pointer-events: none;
         transition: .5s;
        }

        .input-group input{
         width: 320px;
         height: 40px;
         font-size: 16px;
         color: #fff;
         padding: 0 5px;
         background: transparent;
         border: none;
         outline: none;
        }

        .remember{
         margin: -5px 0 15px 5px;
        }

        .remember label{
         color: #fff;
         font-size: 14px;
        }
        .remember label input{
         accent-color: #0ef;
        }

        button{
         position: relative;
         width: 100%;
         height: 40px;
         background: #0ef;
         box-shadow: 0 0 10px #0ef;
         font-size: 16px;
         color: #000;
         font-weight: 500;
         cursor: pointer;
         border-radius: 30px;
         border: none;
         outline: none;
         }

         .input-group input:focus~label,
         .input-group input:valid~label{
            top: -7px;
         }

         .wrapper:hover{
            animation: animate 1s linear infinite;
         }

         @keyframes animate{
            100%{
               filter: hue-rotate(360deg);
            }
         }



     </style>
     
    </head>
    <body>

      <div class="wrapper">
         <div class="from-wrapper sign-in">
            <form action="">
            <h2>Login</h2>
            <div class="input-group">
               <input type="text" name="username" required>
               <label>Username</label>.
         </div>
         <div class="input-group">
               <input type="password" name="password" required>
               <label>Password</label>.
         </div>
         <div class="remember">
            <label><input type="checkbox" name="">Remember me</label>
         </div>
         <button type="Submit">Login</button>
      </form>
      </div>
      </div>



    </body>
    <script>
      const 
       




    </script>

    </html>
      
    
