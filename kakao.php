<?php
 $session_start();
 $client_id = "444444444444444444444444444444444"; //★ 수정 할 것
 $redirect_uri = urlencode("http://localhost/callBackForKakao.php"); //★ 수정 할 것
 $kakaoLoginUrl = "https://kauth.kakao.com/oauth/authorize?client_id=".$client_id."&redirect_uri=".$redirect_uri."&response_type=code";
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
    <script>
        // SDK를 초기화 합니다. 사용할 앱의 JavaScript 키를 설정해 주세요.
        Kakao.init('2222222222222222222222222222222222'); //★ 수정 할 것

        // SDK 초기화 여부를 판단합니다.
        console.log(Kakao.isInitialized());
    </script>  
 </head>
 
 <body>
    <a href="<?= $kakaoLoginUrl ?>">카카오톡으로 로그인 for REST API</a>
    <a id="custom-login-btn" href="javascript:loginWithKakao()">카카오톡으로 로그인 for Kakao SDK (Redirect 방식)</a>
    <script type="text/javascript">
    function loginWithKakao() {
        Kakao.Auth.authorize({
        redirectUri: 'http://localhost/callBackForKakao.php' //★ 수정 할 것
        })
    }
    </script>

 </body>
</html>
