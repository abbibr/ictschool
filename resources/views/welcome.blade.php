<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<style type="text/css">
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body
{
  margin: 0;
  padding: 0;
  background-color:#000 ;
  overflow: hidden;

}
section 
{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100vh;
background: url('images/rasm.jpg');
background-position-x: center ;
background-size: cover;
animation: animateBg 50s linear infinite;
}
@keyframes animateBg
{
  0%,100%
  {
    transform: scale(1);
  }
  50%
  {
    transform: scale(1.2);
  }
}
span
{
  position: absolute;
  top: 50%;
  left: 50%;
  width: 4px;
  height: 4px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(255, 255, 255,0.1), 0 0 0 8px rgba(255, 255, 255, 0.1), 0 0 20px rgba(255, 255, 255, 1) ;
  animation: animate 3s linear infinite;
}
span::before
{
  content: '';
  position: absolute;
  top: 50%;
  transform: translateY(-50% );
  width: 300px;
  height: 1px;
  background: linear-gradient(90deg, #fff, transparent);
}
@keyframes animate
{
  0%
  {
    transform: rotate(315deg) translateX(0);
    opacity: 1;

  }
  70%
  {
    opacity: 1;
  }
  100%
  {
    transform: rotate(315deg) translateX(-1000px);
    opacity: 0;
  }
}
span:nth-child(1)
{
  top: 0;
  right: 0;
  left: initial;
  animation-delay: 0;
  animation-duration: 1s;
}
span:nth-child(2)
{
  top: 0;
  right: 80px;
  left: initial;
  animation-delay: 0.2s;
  animation-duration: 3s;
}
span:nth-child(3)
{
  top: 80px;
  right: 0px;
  left: initial;
  animation-delay: 0.4s;
  animation-duration: 2s;
}
span:nth-child(4)
{
  top: 0px;
  right: 180px;
  left: initial;
  animation-delay: 0.6s;
  animation-duration: 1.5s;
}
span:nth-child(5)
{
  top: 0px;
  right: 400px;
  left: initial;
  animation-delay: 0.8s;
  animation-duration: 2.5s;
}
span:nth-child(6)
{
  top: 0px;
  right: 600px;
  left: initial;
  animation-delay: 1s;
  animation-duration: 3s;
}
span:nth-child(7)
{
  top: 300px;
  right: 0px;
  left: initial;
  animation-delay: 1.2s;
  animation-duration: 1.75s;
}
span:nth-child(8)
{
  top: 0px;
  right: 700px;
  left: initial;
  animation-delay: 1.4s;
  animation-duration: 1.25s;
}
span:nth-child(9)
{
  top: 0px;
  right: 1000px;
  left: initial;
  animation-delay: 0.75s;
  animation-duration: 2.25s;
}
span:nth-child(10)
{
  top: 300px;
  right: 450px;
  left: initial;
  animation-delay: 2.75s;
  animation-duration: 2.25s;
}
.container
{
  position: absolute;
  top:50% ;
  left: 50%;
  transform: translate(-50%, -50%);


}
.button
{
  position: relative;
  text-align: center;
  width: 200px;
  padding: 30px;
  font-size: 23px;
  color: #15f4ee;
  font-family: poppins;
  font-weight: 400;
  border: 5px solid #15f4ee;
  text-transform: uppercase;
  letter-spacing: 13px;
  cursor: pointer;
  border-radius: 100px;
  transition: 1.5s;



}
.button::hover
{
  box-shadow: 0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee,
        0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee;
  text-shadow: 0 5px 5px #15f4ee;
}
</style>


</head>
<body>
<section>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</section>

<div class="container">
  <a href="questions"><div class="button">Kirish</div></a>

</div>
</body>
</html>