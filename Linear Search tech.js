<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
<style>
   body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   .result,.sample {
      font-size: 20px;
      font-weight: 500;
      color: blueviolet;
   }
   .sample{
      color:red;
   }
</style>
</head>
<body>
<h1>Implementing linear search</h1>
<div class="sample">[1,19,5,11,22,55]</div><br>
<div class="result"></div>
<br />
<button class="Btn">CLICK HERE</button>
<h3>Click on the above button to search for 22 in the above array</h3>
<script>
   let resEle = document.querySelector(".result");
   let BtnEle = document.querySelector(".Btn");
   let arr = [1,19,5,11,22,55];
   BtnEle.addEventListener("click", () => {
      for(let i=0;i<arr.length;i++){
         if(arr[i]===22){
            resEle.innerHTML = 'Element found at : '+i;
            break;
         }
      }
   });
</script>
</body>
</html>
