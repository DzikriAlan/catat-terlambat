<style>
   *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
   }

   body{
      font-family: "poppins";
      padding: 20px;
   }

   .catatan-pelanggaran{
      padding-bottom: 53px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
   }

   .pelanggar{
      display: flex;
      justify-content: space-between;
      gap: 5px;
      width: 100%;
      max-width: 600px;
      padding: 8px;
      margin-top: 10px;
      background-color: #edf0ef;
      border-radius: 10px;
   }

   .pelanggar .kelas-pelanggar{
      background-color: #f5e35f;
      font-size: 14px;
      padding: 2px 2px;
      height: 14px;
      border-radius: 7px;
   }

   .pelanggar .pelanggaran{
      padding-top: 7px;
   }

   .pelanggar .feature{
      display:flex;
      width: 60px;
      justify-content: space-between;
      align-items: center;
   }

   .pelanggar .bx-edit,
   .pelanggar .bx-trash{
      padding: 2px;
      text-align: center;
      color: #edf0ef;
      font-size: 22px;
      background-color: #eb3723;#3033e3;
      border-radius: 3px;
   }

   .pelanggar .satu{
      background-color: #3033e3;
   }

   .pelanggar .dua{
      background-color: #eb3723;
   }


   .button-to-insert,
   .button-to-insert button{
      width: 100%;
      height: 45px;
      font-size: 15px;
      color: #1a1c1b;
      background-color: #78deae;
      cursor:pointer;  
      border-radius: 10px;
      border: none;
   }

   .container-button-to-insert{
      position: fixed;
      bottom: 0;
      left: 0;
      padding: 0 20px 20px 20px;
      background-color: white;
      width: 100%;
   }

   .container-sidebar{
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      padding: 20px;
      backdrop-filter: blur(5px);
      z-index: 10;
   }

   .body-sidebar{
      display: flex;
      justify-content: space-between;
      position: relative;
      width: 100%;
      height: 170px;
      padding: 20px;
      font-family: 'poppins';
      background-color: gray;
      border-radius: 10px;
      color: #edf0ef;
      background-color: #f5e35f;
   }

   .navbar{
      display: flex;
      justify-content: center;
   }

   /* catatPelanggaran.php*/

   .hero-section{
      padding-top: 30px;
      text-align: center; 
   }

   .hero-section .judul{
      font-size: 28px;
      font-weight: bold;
      padding-bottom: 30px;
   }

   .hero-section form{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
   }

   .form{
      display: flex;
      flex-direction : column;
      align-items: center;
      justify-content: space-between;
      align-items: center;
      height: 170px;
   }

   .input{
      width: 318px;
      height: 45px;
      overflow: hidden;
      border-radius: 10px;
   }

   .input input{
      background-color: #f5e35f;
      border: none;
      padding: 10px;
      width: 100%;
      height: 100%;
      outline: none;
   }

   .feature button{
      border: none;
   }

   .container-button-bottom{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      position: fixed;
      left: 0;
      bottom: 0;
      padding: 0 20px 20px 20px;
   }

   .button-bottom{
      width: 100%;
      max-width: 600px;
      display: flex;
      justify-content: space-between;
      gap: 10px;
      background-color: white;
}
   .button-bottom .button-to-excel{
      border-radius: 10px;
      background-color: #f5e35f;
      width: 318px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
   }

   .button-bottom .button-to-excel button{
      background-color: #f5e35f;
      border: none;
   }

   .button-to-excel{
      border: none;
   }

   .submit{
      margin-top: 30px;
      width: 318px;
      height: 45px;
      border-radius: 10px;
      background-color: #78deae;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
   }

   .submit button{
      width: 100%;
      border-radius: 10px;
      height: 100%;
      background-color: #78deae;
      border: none;
   }

   /* Alert Error*/

   .container-alert{
      position: fixed;
      left: 0;
      top: 0;
      display: none;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, .15);
      backdrop-filter: blur(5px);
   }

   .alert{
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 260px;
      height: 150px;
      background-color: #78deae;
      border-radius: 10px;
      padding: 10px;
   }

   .pilihan {
      display: flex;
      justify-content: space-between;
      width: 100%;
   }

   .pilihan .cancel{
      background-color: #edf0ef;
      border-radius: 10px;
      border: none;
      width: 70px;
      height: 30px;
   }

   .pilihan .ok{
      background-color: #f5e35f;
      border-radius: 10px;
      border: none;
      width: 70px;
      height: 30px;
   }

   .pilihan .ok a{
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      color: black;
      width: 70px;
      height: 30px;
   }
</style>
