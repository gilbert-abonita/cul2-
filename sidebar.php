<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="ae" dir="LTR" style="height: 100%"><head>
 <title>vertical_menu_v910</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
 <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
 <meta http-equiv="Last-Modified" content="Tue, 19 Mar 2024 17:06:54 GMT">
 <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
 <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">
 <meta http-equiv="Pragma" content="no-cache">
  
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&amp;display=swap"> 
      
 <link rel="stylesheet" href="/scprod/prod/third/font-awesome/6/css/all.min.css" type="text/css" media="screen">
<style>
   .scTabText {
   }
    </style>
<script type="text/javascript">
 var is_menu_vertical = false;
 function sc_session_redir(url_redir)
 {
     if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
     {
         window.parent.sc_session_redir(url_redir);
     }
     else
     {
         if (window.opener && typeof window.opener.sc_session_redir === 'function')
         {
             window.close();
             window.opener.sc_session_redir(url_redir);
         }
         else
         {
             window.location = url_redir;
         }
     }
 }
</script>
<style>@charset "UTF-8";@-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon::before{display:flex;align-items:center;font-size:2em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon::before{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 1.5em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}@-webkit-keyframes swal2-toast-show{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg)}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg)}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg)}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg)}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg)}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg)}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;background-color:transparent;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;outline:initial;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{-webkit-transform:none;transform:none;background:0 0;color:#f27474}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;word-wrap:break-word}#swal2-content{text-align:center}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-webkit-input-placeholder,.swal2-input::-webkit-input-placeholder,.swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:inherit}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:inherit;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;zoom:normal;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;zoom:normal;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon::before{display:flex;align-items:center;height:92%;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-warning::before{content:"!"}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-info::before{content:"i"}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-question::before{content:"?"}.swal2-icon.swal2-question.swal2-arabic-question-mark::before{content:"؟"}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}</style></head>
<body style="height: 100%" scroll="no" class="scMenuHPage">
<style>
.ae-menubar .logo {
	padding-left: 0.5em;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-title {
	font-size: 1rem !important;
}
	
body {
	background-color: #fafbfe !important;
}
	
.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem] {
	color: var(--theme-menubar-nav-menuitem-color) !important;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper .submenu[role=menu] [role=menuitem] {
	color: var(--theme-menubar-nav-menuitem-color) !important;
}

.ae-menubar .main-navigation [role=menuitem] {
	text-transform: none !important;
}
	
.ae-menubar[data-aetheme=dark-sunset] {
	--theme-color-accent: #F3852B !important;
}
	
</style>
 
<span style="display:none"> 
   <form name="Nm_frm_change_lang_locale" method="post">
           <input type="hidden" name="hid_scr_iframe">
           <input type="hidden" name="nmgp_idioma">
   </form>
</span> 
<script type="text/javascript">
   function Nm_change_lang_locale()
   {
           var str_location = document.getElementById('iframe_vertical_menu_v910').contentWindow.location.toString();
           if (str_location.indexOf('script_case_init') == -1)
           {
                   document.Nm_frm_change_lang_locale.hid_scr_iframe.value = str_location + (str_location.indexOf('?') > -1 ? '&' : '?');
           }
           else
           {
                   document.Nm_frm_change_lang_locale.hid_scr_iframe.value = str_location;
           }
           document.Nm_frm_change_lang_locale.nmgp_idioma.value = document.getElementById("id_nmgp_idioma").value; 
           document.Nm_frm_change_lang_locale.submit();
   }
</script>
 
<span style="display:none"> 
   <form name="Nm_frm_change_schema" method="post">
           <input type="hidden" name="hid_scr_iframe">
           <input type="hidden" name="nmgp_schema">
   </form>
</span> 
<script type="text/javascript">
   function Nm_change_schema()
   {
           var str_location = document.getElementById('iframe_vertical_menu_v910').contentWindow.location.toString();
           if (str_location.indexOf('script_case_init') == -1)
           {
                   document.Nm_frm_change_schema.hid_scr_iframe.value = str_location + (str_location.indexOf('?') > -1 ? '&' : '?') + 'script_case_init=1';
           }
           else
           {
                   document.Nm_frm_change_schema.hid_scr_iframe.value = str_location;
           }
           document.Nm_frm_change_schema.nmgp_schema.value = document.getElementById("id_nmgp_schema").value; 
           document.Nm_frm_change_schema.submit();
   }
</script>
<script type="text/javascript" src="/scprod/prod/third/jquery/js/jquery.js"></script>
<script type="text/javascript" src="/scprod/prod/third/jquery_plugin/contextmenu/jquery.contextmenu.js"></script>
 <link rel="stylesheet" type="text/css" href="/scprod/prod/third/jquery_plugin/contextmenu/contextmenu.css"> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/Sc9_SoftCloud_sm/Sc9_SoftCloud_sm_contextmenu.css"> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/Sc9_SoftCloud_sm/Sc9_SoftCloud_sm_contextmenu.css?scp=a010f3e1b7ee0cf1d806da95f32a4585"> 
 <link rel="stylesheet" type="text/css" href="/scprod/prod/third/lineicons/web-font-files/lineicons.css"> 
<script type="text/javascript" src="/scprod/prod/third/Fuse/dist/fuse.min.js"></script>
<script type="text/javascript" src="/scprod/prod/third/sweetalert/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="/scprod/prod/third/sweetalert/polyfill.min.js"></script>
<link rel="stylesheet" type="text/css" href="../_lib/css/Sc9_SoftCloud_sm/Sc9_SoftCloud_sm_sweetalert.css">
<script type="text/javascript">
  var scSweetAlertConfirmButton = "";
  var scSweetAlertCancelButton = "";
  var scSweetAlertConfirmButtonText = "OK";
  var scSweetAlertCancelButtonText = "Cancel";
  var scSweetAlertConfirmButtonFA = "";
  var scSweetAlertCancelButtonFA = "";
  var scSweetAlertConfirmButtonFAPos = "";
  var scSweetAlertCancelButtonFAPos = "";
</script>
<script type="text/javascript" src="vertical_menu_v910_message.js"></script>
<script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
<script type="text/javascript">
$(function() {
});
</script>
<script>
        $( document ).ready(function() {
            $.contextMenu({
                selector:'#contrl_abas > li',
                leftButton: true,
                callback: function(key, options)
                {
                        switch(key)
                        {
                            case 'close':
                                contextMenuCloseTab($(this).attr('id'));
                            break;

                            case 'closeall':
                                contextMenuCloseAllTabs();
                            break;

                            case 'closeothers':
                                contextMenuCloseOthersTabs($(this).attr('id'));
                            break;

                            case 'closeright':
                                contextMenuCloseRight($(this).attr('id'));
                            break;

                            case 'closeleft':
                                contextMenuCloseLeft($(this).attr('id'));
                            break;
                        }
                    },
                items: {
                        "close": {name: 'Close tab'},
                        "closeall": {name: 'Close all'},
                        "closeothers" : {name: 'Close others'},
                        "closeright" : {name: 'Close all from the right'},
                        "closeleft" : {name: 'Close all from the left'},
                    }
            });
        });

        function contextMenuCloseAllTabs()
        {
            $( "#contrl_abas li" ).each(function( index ) {
                contextMenuCloseTab($( this ).attr('id'));
            });
        }

        function contextMenuCloseTab(str_id)
        {
            if(str_id.indexOf('aba_td_') >= 0)
            {
                str_id = str_id.substr(7);
            }
            del_aba_td( str_id );
        }

        function contextMenuCloseRight(str_id)
        {
            bol_start_del = false;
            $( "#contrl_abas li" ).each(function( index ) {

                if(bol_start_del)
                {
                    contextMenuCloseTab($( this ).attr('id'));
                }

                if(str_id == $( this ).attr('id'))
                {
                    bol_start_del = true;
                }
            });
        }


        function contextMenuCloseLeft(str_id)
        {
            $( "#contrl_abas li" ).each(function( index ) {

                if(str_id == $( this ).attr('id'))
                {
                     return false;
                }
                else
                {
                    contextMenuCloseTab($( this ).attr('id'));
                }
            });
        }

        function contextMenuCloseOthersTabs(str_id)
        {
            $( "#contrl_abas li" ).each(function( index ) {
                if(str_id != $( this ).attr('id'))
                {
                    contextMenuCloseTab($( this ).attr('id'));
                }
            });
        }
Iframe_atual = "vertical_menu_v910_iframe";
Aba_atual = 'nm_frame_app';
function writeFastMenu(arr_link)
{
  return false;
}
function clearFastMenu(arr_link)
{
  return false;
}
Tab_iframes         = new Array();
Tab_labels          = new Array();
Tab_hints           = new Array();
Tab_icons           = new Array();
Tab_icons_inactive  = new Array();
Tab_abas            = new Array();
Tab_refresh         = new Array();
Tab_icon_fa         = new Array();
Tab_icon_fa_inactive= new Array();
Tab_display         = new Array();
Tab_display_position= new Array();
Tab_links          = new Array();
var scScrollInterval = divOverflow = false;
Tab_ico_def        = new Array();
Tab_ico_ina_def    = new Array();
Aba_atual    = "";
Qtd_apls = 0;
function createIframe(str_id, str_label, str_hint, str_img_on, str_img_off, str_link, tp_apl, fa_ico)
{
    if (typeof createCustomTab == 'function') {
      return createCustomTab(str_id, str_label, str_hint, str_link, tp_apl, fa_ico);
    } 
    apl_exist = false;
    Tab_icons[str_id] = str_img_on;
    Tab_icons_inactive[str_id] = str_img_off;
    Tab_refresh[str_id] = "";
    if (tp_apl == null || tp_apl == '')
    {
        tp_apl = 'others';
    }
    if (Tab_icons[str_id] == '')
    {
        Tab_icons[str_id] = Tab_ico_def[tp_apl];
    }
    if (Tab_icons_inactive[str_id] == '')
    {
        Tab_icons_inactive[str_id] = Tab_ico_ina_def[tp_apl];
    }
    for (i = 0; i < Qtd_apls; i++)
    {
        if (Tab_iframes[i] == str_id) {
            apl_exist = true;
        }
    }
    if (apl_exist)
    {
        if (Tab_abas[str_id] != 'show') {
            createAba(str_id);
        }
        var iframe = document.getElementById('iframe_' + str_id);
        iframe.src = str_link;
        mudaIframe(str_id);
        return;
    }
    var iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    iframe.id = 'iframe_' + str_id;
    iframe.name = 'vertical_menu_v910_' + str_id + '_iframe';
    iframe.src = str_link;
    $('#Iframe_control').append(iframe);
    $('#iframe_' + str_id).addClass( 'scMenuIframe');
    Tab_iframes[Qtd_apls] = str_id;
    Tab_labels[str_id] = str_label;
    Tab_hints[str_id] = str_hint;
    Tab_abas[str_id]   = 'none';
    Tab_links[str_id]   = '';
    Qtd_apls++;
    createAba(str_id);
    mudaIframe(str_id);
}
function createAba(str_id)
{
    var tmp = "";
    var html_icon = "";
        html_icon = "<div style='display:inline-block;'>";
        str_icon = Tab_icons[str_id];
        if(str_icon=='')
        {
            str_icon = 'scriptcase__NM__ico__NM__sc_menu_others_e.png';
        }
        if(str_icon != '')
        {
            html_icon += "<img id='aba_td_" + str_id + "_icon_active' src='../_lib/img/"+ str_icon +"' align='absmiddle' class='scTabIcon'>";
        }
        str_icon = Tab_icons_inactive[str_id];
        if(str_icon=='')
        {
            str_icon = 'scriptcase__NM__ico__NM__sc_menu_others_d.png';
        }
        if(str_icon != '')
        {
            html_icon += "<img id='aba_td_" + str_id + "_icon_inactive' src='../_lib/img/"+ str_icon +"' align='absmiddle' class='scTabIcon' style='display:none;'>";
        }
        html_icon += "</div>";
    if(Tab_display[ str_id ] == 'text_fontawesomeicon' || Tab_display[ str_id ] == 'only_fontawesomeicon')
    {
        html_icon = "<i id='aba_td_" + str_id + "_icon_active' class='"+ Tab_icon_fa[str_id] +"' style='vertical-align:middle;padding: 0px 4px; display:none;'></i>";
        html_icon += "<i id='aba_td_" + str_id + "_icon_inactive' class='"+ Tab_icon_fa_inactive[str_id] +"' style='vertical-align:middle;padding: 0px 4px;'></i>";
    }
    tmp  = "<li onclick=\"mudaIframe('" + str_id + "');\" id='aba_td_" + str_id + "' style='cursor:pointer' class='lslide scTabActive' title=\"" + Tab_hints[str_id] + "\">";
    if(Tab_display_position[ str_id ] != 'img_right')
    {
        tmp += html_icon;
    }
    var home_style="";
    if(str_id === 'vertical_menu_v910'){ home_style=";padding-left:4px;min-height:14px;"; }
    tmp += "<div id='aba_td_txt_" + str_id + "' style='display:inline-block;cursor:pointer"+home_style+"' class='scTabText' >";
    tmp += Tab_labels[str_id];
    if(Tab_display_position[ str_id ] == 'img_right')
    {
        tmp += html_icon;
    }
    tmp += "</div>";
    tmp += "<div id='aba_td_3_" + str_id + "' style='display:none;'>...</div>";
    tmp += "<div style='display:inline-block;'>";
    tmp += "    <img id='aba_td_img_" + str_id + "' src='../_lib/img/scriptcase__NM__ico__NM__refinedsearch_close.png' onclick=\"event.stopPropagation(); del_aba_td('" + str_id + "'); \" align='absmiddle' class='scTabCloseIcon' style='cursor:pointer; z-index:9999;'>";
    tmp += "</div>";
    tmp += "</li>";
    $('#contrl_abas').append(tmp);
    Tab_abas[str_id] = 'show';
}
function mudaIframe(str_id)
{
    $('#iframe_vertical_menu_v910').hide();
    if (str_id == "")
    {
        $('#iframe_vertical_menu_v910').show();
        $('#iframe_' + Aba_atual).prop('src', '');
        $('#links_abas').hide();
        $('#id_links_abas').hide();
    }
    else
    {
        $('#aba_td_' + Aba_atual).removeClass( 'scTabActive' );
        $('#aba_td_' + Aba_atual).addClass( 'scTabInactive' );
        $('#aba_td_' + Aba_atual+'_icon_active').hide();
        $('#aba_td_' + Aba_atual+'_icon_inactive').show();
        $('#aba_td_img_' + Aba_atual).prop( 'src', '../_lib/img/scriptcase__NM__ico__NM__refinedsearch_close.png' );
    }
    for (i = 0; i < Tab_iframes.length; i++) 
    {
        if (Tab_iframes[i] == str_id) 
        {
            if($('#iframe_' + Tab_iframes[i]).length < 1)
            {
                $('#Iframe_control').append('<iframe id="iframe_'+ Tab_iframes[i] +'" name="vertical_menu_v910_'+ Tab_iframes[i] +'_iframe" frameborder="0" class="scMenuIframe" style="display: none; width: 100%; height: ;" src=""></iframe>');
            }
            $('#iframe_' + Tab_iframes[i]).show();
            Aba_atual    = str_id;
            $('#aba_td_' + Aba_atual).removeClass( 'scTabInactive' );
            $('#aba_td_' + Aba_atual).addClass( 'scTabActive' );
            $('#aba_td_' + Aba_atual+'_icon_active').show();
            $('#aba_td_' + Aba_atual+'_icon_inactive').hide();
            $('#aba_td_img_' + Aba_atual).prop( 'src', '../_lib/img/scriptcase__NM__ico__NM__refinedsearch_close.png' );
            Iframe_atual = "vertical_menu_v910_" + Tab_iframes[i] + '_iframe';
            $('#iframe_' + Tab_iframes[i]).contents().find('body').css('width', '');
            $('#iframe_' + Tab_iframes[i])[0].contentWindow.focus();
        } else {
            $('#iframe_' + Tab_iframes[i]).hide();
        }
    }
    if (Tab_refresh[str_id] == 'S' && typeof document.getElementById('iframe_' + str_id).contentWindow.nm_move === 'function')
    {
        Tab_refresh[str_id] = '';
        document.getElementById('iframe_' + str_id).contentWindow.nm_move('igual');
    }
}
function del_aba_td(str_id)
{
    $('#aba_td_' + str_id).remove();
    Tab_abas[str_id] = 'none';
    $('#iframe_' + str_id).prop('src', '');
    if (Aba_atual == str_id)
    {
        str_id = "";
        for (i = 0; i < Tab_iframes.length; i++) 
        {
            if (Tab_abas[Tab_iframes[i]] == 'show' && Tab_refresh[Tab_iframes[i]] == 'S')
            {
                str_id = Tab_iframes[i];
            }
        }
        if (str_id == "")
        {
            for (i = 0; i < Tab_iframes.length; i++) 
            {
                if (Tab_abas[Tab_iframes[i]] == 'show')
                {
                    str_id = Tab_iframes[i];
                }
            }
        }
        mudaIframe(str_id);
    }
  scToggleOverflow();
}
$( document ).ready(function() { scToggleOverflow() });
function scToggleOverflow()
{
    $('.scTabScroll').hide();
    $('#div_contrl_abas').removeClass('div-overflow');
    $('#contrl_abas').width('');

    tabsWidth = 0;
    if($('.scMenuTTable').length)
    {
        tabsWidth = $('#contrl_abas').outerWidth();
        windowWidth = $('#contrl_abas').closest('.ui-layout-pane').outerWidth();
    }
    else
    {
        tabsWidth = $('#contrl_abas').outerWidth();
        windowWidth = $( window ).outerWidth();
    }

    if(windowWidth < tabsWidth)
    {
        $('.scTabScroll').show();
        $('#div_contrl_abas').addClass('div-overflow');
        $('#contrl_abas').width((windowWidth - $('#id_links_abas').outerWidth()));
    }
}

function scTabScroll(axis) {
  if (axis == 'stop') {
      clearInterval(scScrollInterval);
      return;
  }
  if (axis == 'left') {
      scScrollInterval = setInterval("$('#div_contrl_abas').scrollLeft($('#div_contrl_abas').scrollLeft() - 3)", 2);
  } else {
      scScrollInterval = setInterval("$('#div_contrl_abas').scrollLeft($('#div_contrl_abas').scrollLeft() + 3)", 2);
  }
}
        function checkSubMenuPosition(str_id)
        {
            submenu = $('#' + str_id + '.menu__link').next('ul');
            if(submenu.length)
            {
                if(submenu.offset().left + submenu.outerWidth() > $('#main_menu_table').width())
                {
                    submenu.css('margin-left', ( $('#main_menu_table').width() - submenu.offset().left - submenu.outerWidth() - 10 ));
                }
           }
        }function openMenuItem(str_id)
{
  str_target_sv = "";
  if (str_id != "iframe_vertical_menu_v910")
  {
      str_target_sv = str_id + "_iframe";
      str_id        = str_id.replace("vertical_menu_v910_","");
  }
    if($('#Iframe_control').length && $('#' + str_id).parent().length < 0)
    {
        $('#Iframe_control').append('<iframe id="iframe_btn_1" name="menu_btn_1_iframe" frameborder="0" class="scMenuIframe" style="display: none;" src=""></iframe>');
    }
  if($('#' + str_id).parent().length)
  {
      if(!$('#' + str_id).parent().hasClass('menu__item--active'))
      {
        $('#' + str_id).closest('ul').find('li').removeClass('menu__item--active');
      }
       $('#' + str_id).parent().toggleClass('menu__item--active');
  }
  str_link   = $('#' + str_id).attr('item-href');
  str_target = $('#' + str_id).attr('item-target');
  if (typeof str_link !== typeof undefined && str_link !== false) {
    if (str_target == "vertical_menu_v910_iframe" && str_link != '' && str_link != '#' && str_link != 'javascript:')
    {
        str_target = (str_target_sv != "") ? str_target_sv : str_target;
        mudaIframe(str_id);
        if (str_id != "vertical_menu_v910")
        {
            $('#links_abas').css('display','');
            $('#id_links_abas').css('display','');
        }
        if (str_id != "vertical_menu_v910" && Tab_abas[str_id] != 'show')
        {
            createAba(str_id);
      scToggleOverflow();
        }
    }
    //test link type
    if (str_link != '' && str_link != '#' && str_link != 'javascript:')
    {
        if (str_link.substring(0, 11) == 'javascript:')
        {
            eval(str_link.substring(11));
        }
        else if (str_link != '#' && str_target != '_parent')
        {
            window.open(str_link, str_target);
        }
        else if (str_link != '#' && str_target == '_parent')
        {
            document.location = str_link;
        }
            }
    if(str_target != '_blank' && $('#iframe_vertical_menu_v910').length)
        $('#iframe_vertical_menu_v910')[0].contentWindow.focus();
  }
}
</script>
<div id="main_menu_table" class="scMenuHMoldura">
        <div id="idMenuLine" class="scMenuArea">
                <div class="menu menu--horizontal">
            <div class="menu__toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu__container scMenuHTableCssAlt">
                <div class="menu__layer">
                        <style>
        
        @charset "UTF-8";

*[data-aetheme] {
    --theme-menubar-global-scrollbarTrack-color: var(--theme-color-text);
    --theme-menubar-global-boxShadowColor: var(--theme-box-shadow);
    --theme-menubar-global-color-text: var(--theme-color-text);
    --theme-menubar-nav-menuitem-color: var(--theme-color-text);
    --theme-menubar-nav-menuitem-color\:hover: var(--theme-color-text);
    --theme-menubar-nav-menuitem-backgroundColor: var(--theme-color-accent);
    --theme-menubar-nav-submenu-backgroundColor\:hover: var(--theme-color-secondary);
    --theme-menubar-nav-submenu-menuitem-color: var(--theme-color-muted);
    --theme-menubar-nav-submenu-menuitem-color\:hover: var(--theme-color-text);
    --theme-menubar-nav-submenu-menuitem-borderColor\:active: var(--theme-color-text);
    --theme-menubar-mobile-icon-color: var(--theme-color-text);
    --theme-menubar-mobile-icon-color\:hover: var(--theme-color-text);
    --theme-menubar-mobile-icon-backgroundColor: var(--theme-color-accent);
    --theme-menubar-mobile-menu-backgroundColor: var(--theme-color-primary);
    --theme-menubar-toolbar-item-color: var(--theme-color-muted);
    --theme-menubar-toolbar-item-color\:hover: var(--theme-color-text);
    --theme-menubar-toolbar-item-backgroundColor\:hover: var(--theme-color-accent);
    --theme-menubar-user-menu-button-color: var(--theme-color-muted);
    --theme-menubar-user-menu-button-color\:hover: var(--theme-color-text);
    --theme-menubar-user-menu-panel-backgroundColor: var(--theme-color-primary);
    --theme-menubar-panel-borderColor: var(--theme-color-secondary);
    --theme-menubar-divider-borderColor: var(--theme-color-secondary);
}

.ae-menu-mobile {
    position: fixed;
    left: 0;
    width: 100%;
    height: 100vh;
    padding: 8px 16px;
    padding-top: 2em;
    padding-right: 0;
    background: var(--theme-menubar-mobile-menu-backgroundColor);
    display: none;
}

.ae-menu-mobile .main-navigation-mobile {
    height: 100%;
    padding-right: 16px;
    padding-bottom: 16px;
    overflow: auto;
    overscroll-behavior: contain;
}

.ae-menu-mobile .main-navigation-mobile::-webkit-scrollbar {
    width: 4px;
}

.ae-menu-mobile .main-navigation-mobile::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.ae-menu-mobile .main-navigation-mobile::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.25);
}

.ae-menubar-accordion {
    position: relative;
    width: 100%;
    height: fit-content;
    transition: all 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
}

.ae-menubar-accordion > [role=menubar] {
    position: relative;
    width: 100%;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: flex-start;
    column-gap: 0;
    row-gap: 0.5em;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar-accordion > [role=menubar] .navigation-group {
    position: relative;
    width: 100%;
    margin-top: 1.25rem;
    color: var(--theme-menubar-nav-menuitem-color);
    font-size: 0.75em;
    font-weight: 700;
    text-rendering: optimizeLegibility;
    text-transform: uppercase;
    opacity: 0.5;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar-accordion > [role=menubar] .navigation-group:nth-child(1) {
    margin-top: 0;
}

.ae-menubar-accordion > [role=menubar] .wrapper {
    position: relative;
    width: 100%;
    height: fit-content;
}

.ae-menubar-accordion > [role=menubar] .wrapper > [role=menuitem] {
    min-height: 38px;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] {
    position: relative;
    padding: 0.5em;
    color: var(--theme-menubar-nav-menuitem-color);
    font-size: 0.875rem;
    font-weight: 400;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
    cursor: pointer;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem]:hover, .ae-menubar-accordion > [role=menubar] [role=menuitem][data-active=true] {
    border-radius: 4px;
    color: var(--theme-menubar-nav-menuitem-color\:hover);
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

.ae-menubar-accordion > [role=menubar] [role=menuitem][aria-haspopup=true]::after {
    content: "\f078";
    position: absolute;
    top: 50%;
    right: calc(0.5em + 0.4375rem);
    transform-origin: center center;
    transform: translateY(-50%) rotate(-90deg);
    font: normal normal 900 1em/140% "Font Awesome 6 Free";
    font-size: 0.5em;
    transition: transform 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem][aria-expanded=true]::after {
    transform: translateY(-50%) rotate(0deg);
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] .label {
    padding-right: 0.75rem;
    word-break: break-word;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] .mb_icon {
    width: 1.15em;
    aspect-ratio: 1/1;
    font-size: 100%;
    text-align: center;
    vertical-align: middle;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper {
    position: relative;
    width: 100%;
    height: 0;
    overflow: hidden;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper .submenu[role=menu] {
    margin-top: 0.5em;
    padding-left: 0.5em;
    overflow: hidden;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    column-gap: 0;
    row-gap: 0.5em;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper .submenu[role=menu] [role=menuitem] {
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
    border-radius: 4px;
    color: var(--theme-menubar-nav-submenu-menuitem-color);
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper .submenu[role=menu] [role=menuitem]:hover {
    color: var(--theme-menubar-nav-submenu-menuitem-color\:hover);
    background: var(--theme-menubar-nav-submenu-backgroundColor\:hover);
}

.ae-menubar-accordion > [role=menubar] [role=menuitem] ~ .wrapper .submenu[role=menu] [role=menuitem][data-active=true] {
    outline: none;
    border-radius: 4px;
    color: var(--theme-menubar-nav-submenu-menuitem-color\:hover);
    background: var(--theme-menubar-nav-submenu-backgroundColor\:hover);
}

.ae-menubar[aria-orientation=vertical].collapsed .ae-menubar-accordion > [role=menubar] [role=menuitem][aria-haspopup=true]::after {
    display: none;
}

@media screen and (min-width: 768px) {
    .ae-menu-mobile {
        width: 260px;
    }
}

.slide-top-bouncy {
    animation: slide-top-bouncy 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-top-bouncy {
    0% {
        transform: translateY(-120%);
        transform-origin: 50% 0%;
    }
    50% {
        transform: translateY(5%);
        transform-origin: 50% 0%;
    }
    100% {
        transform: translateY(0%);
        transform-origin: 50% 100%;
    }
}

.slide-right-bouncy {
    animation: slide-right-bouncy 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-right-bouncy {
    0% {
        transform: translateX(120%);
        transform-origin: 50% 0%;
    }
    50% {
        transform: translateX(-5%);
        transform-origin: 50% 0%;
    }
    100% {
        transform: translateX(0%);
        transform-origin: 50% 100%;
    }
}

.slide-bottom-bouncy {
    animation: slide-bottom-bouncy 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-bottom-bouncy {
    0% {
        transform: translateY(120%);
        transform-origin: 50% 0%;
    }
    50% {
        transform: translateY(-5%);
        transform-origin: 50% 0%;
    }
    100% {
        transform: translateY(0%);
        transform-origin: 50% 100%;
    }
}

.slide-left-bouncy {
    animation: slide-left-bouncy 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-left-bouncy {
    0% {
        transform: translateX(-120%);
        transform-origin: 50% 0%;
    }
    50% {
        transform: translateX(5%);
        transform-origin: 50% 0%;
    }
    100% {
        transform: translateX(0%);
        transform-origin: 50% 100%;
    }
}

.slide-top {
    animation: slide-top 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-top {
    0% {
        transform: translateY(-120%);
        transform-origin: 100% 0%;
    }
    100% {
        transform: translateY(0);
        transform-origin: 0% 50%;
    }
}

.slide-right {
    animation: slide-right 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-right {
    0% {
        transform: translateX(120%);
        transform-origin: 100% 0%;
    }
    100% {
        transform: translateX(0);
        transform-origin: 0% 50%;
    }
}

.slide-bottom {
    animation: slide-bottom 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-bottom {
    0% {
        transform: translateY(120%);
        transform-origin: 100% 0%;
    }
    100% {
        transform: translateY(0);
        transform-origin: 0% 50%;
    }
}

.slide-left {
    animation: slide-left 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes slide-left {
    0% {
        transform: translateX(-100%);
        transform-origin: 100% 0%;
    }
    100% {
        transform: translateX(0);
        transform-origin: 0% 50%;
    }
}

.reveal-opacity {
    animation: reveal-opacity 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
}

@keyframes reveal-opacity {
    0% {
        filter: opacity(0);
    }
    100% {
        filter: opacity(1);
    }
}

.reveal-blur {
    animation: reveal-blur 0.5s linear both;
}

@keyframes reveal-blur {
    0% {
        filter: blur(100px);
    }
    100% {
        filter: blur(0px);
    }
}

.ae-menubar {
    position: relative;
    outline: none !important;
    font-family: sans-serif;
    font-size: 16px;
    background: var(--theme-color-primary);
    overflow: visible;
    display: flex;
}

.ae-menubar[aria-orientation=horizontal] {
    position: relative;
    top: 0;
    padding: 8px 16px;
    width: 100%;
    height: 64px;
    justify-content: space-between;
    box-shadow: 0 2px 6px var(--theme-menubar-global-boxShadowColor);
    z-index: 900;
}

.ae-menubar[aria-orientation=horizontal] > .container-row {
    width: 100%;
    flex-flow: row nowrap;
    justify-content: space-between;
    display: flex;
}

.ae-menubar[aria-orientation=horizontal] > .divider {
    border-color: var(--theme-menubar-divider-borderColor);
}

.ae-menubar[aria-orientation=horizontal] > .container-row > .wrapper, .ae-menubar[aria-orientation=horizontal] > .wrapper {
    width: auto;
    grid-template-columns: repeat(2, auto);
    grid-auto-flow: column;
    grid-gap: 2.5rem;
    justify-content: start;
    align-items: center;
    display: grid;
}

.ae-menubar[aria-orientation=horizontal] .logo {
    min-width: max-content;
}

.ae-menubar[aria-orientation=horizontal] .main-navigation [role=menuitem] {
    white-space: nowrap;
}

.ae-menubar.menubar.split {
    height: auto;
    min-height: 128px;
    flex-flow: column nowrap;
    row-gap: 0.5rem;
}

.ae-menubar[aria-orientation=vertical] {
    position: fixed;
    top: 0;
    left: 0;
    padding: 16px;
    padding-right: 0;
    width: 260px;
    height: 100vh;
    box-shadow: 2px 0 6px var(--theme-menubar-global-boxShadowColor);
    transition: width 150ms ease-out;
    flex-flow: column nowrap;
    row-gap: 2rem;
    overflow: hidden;
    z-index: 1001;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-header {
    padding-right: 16px;
    color: var(--theme-menubar-global-color-text);
    height: 48px;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    column-gap: 0;
    row-gap: 0.5rem;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-header #switch-menu-position {
    cursor: pointer;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user {
    position: relative;
    width: 100%;
    color: var(--theme-menubar-global-color-text);
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info {
    position: relative;
    padding-right: 16px;
    font-size: 0.875em;
    cursor: pointer;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0.5rem;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info .user.action-button {
    width: 35px;
    min-width: 35px;
    height: 35px;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info .user-name {
    font-size: 1.25em;
    font-weight: 700;
    line-height: 1em;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info .user-profile {
    font-size: 0.875em;
    font-weight: 400;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded]::after {
    content: "\f078";
    position: absolute;
    top: 50%;
    right: 3em;
    transform-origin: center center;
    transform: translateY(-50%) rotate(-90deg);
    font: normal normal 900 1em/140% "Font Awesome 6 Free";
    font-size: 0.5em;
    transition: transform 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded=true]::after {
    transform: translateY(-50%) rotate(0deg);
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-menu > .wrapper {
    height: 0px;
    overflow: hidden;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-menu .section.logout .button {
    width: 100%;
    justify-content: flex-start;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-navigation {
    padding-right: 16px;
    padding-bottom: 16px;
    overflow: auto;
    overscroll-behavior: contain;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-navigation::-webkit-scrollbar {
    width: 4px;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-navigation::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.ae-menubar[aria-orientation=vertical] > .wrapper-navigation::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.25);
}

.ae-menubar.toolbar {
    width: -webkit-fill-available;
    width: -moz-available;
    width: fill-available;
    margin: 0.5rem;
    border-radius: 4px;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-end;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar.toolbar.compact > .wrapper {
    grid-template-columns: auto;
}

.ae-menubar .logo {
    position: relative;
    height: 100%;
    align-items: center;
    display: flex;
}

.ae-menubar .menu-mobile-control {
    width: 3rem;
    aspect-ratio: 1/1;
    font-size: 1.5rem;
    place-items: center;
    display: none;
}

.ae-menubar .menu-mobile-control:hover, .ae-menubar .menu-mobile-control[aria-pressed=true] {
    background: var(--theme-menubar-mobile-icon-backgroundColor);
    border-radius: 4px;
}

.ae-menubar .mb_icon-custom {
    position: relative;
    width: 1em;
    aspect-ratio: 1/1;
    overflow: hidden;
    flex-direction: column;
    display: flex;
}

.ae-menubar .mb_icon-custom.hamburger-menu > label {
    position: relative;
    width: 100%;
    height: 100%;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    display: flex;
}

.ae-menubar .mb_icon-custom.hamburger-menu input[type=checkbox] {
    display: none;
}

.ae-menubar .mb_icon-custom.hamburger-menu span {
    width: 100%;
    height: 20%;
    border-radius: 4px;
    background: var(--theme-menubar-mobile-icon-color);
    transition: all 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
}

.ae-menubar .mb_icon-custom.hamburger-menu input[type=checkbox]:checked ~ span:nth-of-type(1) {
    transform: rotate(45deg);
    transform-origin: 0% 150%;
}

.ae-menubar .mb_icon-custom.hamburger-menu input[type=checkbox]:checked ~ span:nth-of-type(2) {
    transform: rotate(-45deg);
}

.ae-menubar .mb_icon-custom.hamburger-menu input[type=checkbox]:checked ~ span:nth-of-type(3) {
    transform: translateY(1em);
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] {
    position: absolute;
    top: 100%;
    left: -0.5em;
    width: max-content;
    padding: 0.5em;
    background: var(--theme-color-primary);
    border-radius: 4px;
    box-shadow: 0 2px 6px var(--theme-menubar-global-boxShadowColor);
    display: none;
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] .wrapper {
    margin-bottom: 0.5em;
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] .wrapper:last-child {
    margin-bottom: 0;
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem] {
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
    color: var(--theme-menubar-nav-submenu-menuitem-color);
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem]:hover, .ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem]:focus-visible, .ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem][data-active=true] {
    outline: none;
    border-radius: 4px;
    color: var(--theme-menubar-nav-submenu-menuitem-color\:hover);
    background: var(--theme-menubar-nav-submenu-backgroundColor\:hover);
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem][aria-haspopup=true]::after {
    position: absolute;
    top: 50%;
    right: 0.5em;
    transform: translateY(-50%) rotate(-90deg);
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem][aria-haspopup=true] > .label {
    margin-right: calc(0.5em + 4px);
}

.ae-menubar .main-navigation {
    position: relative;
    width: fit-content;
    height: fit-content;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .main-navigation [role=menubar] {
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 1em;
    row-gap: 1em;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .main-navigation [role=menubar] .wrapper {
    position: relative;
    width: 100%;
    height: fit-content;
}

.ae-menubar .main-navigation [role=menuitem] {
    position: relative;
    padding: 0.5em;
    color: var(--theme-menubar-nav-menuitem-color);
    font-size: 0.875rem;
    font-weight: 400;
    cursor: pointer;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .main-navigation [role=menuitem]:hover, .ae-menubar .main-navigation [role=menuitem][data-active=true], .ae-menubar .main-navigation [role=menuitem]:focus-visible {
    outline: none;
    border-radius: 4px;
    color: var(--theme-menubar-nav-menuitem-color\:hover);
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

.ae-menubar .main-navigation [role=menuitem][aria-haspopup=true]::after {
    content: "\f078";
    position: relative;
    font: normal normal 900 1em/140% "Font Awesome 6 Free";
    font-size: 0.5em;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .main-navigation [role=menuitem] .mb_icon {
    width: 1.15em;
    aspect-ratio: 1/1;
    font-size: 100%;
    text-align: center;
    vertical-align: middle;
}

.ae-menubar .main-navigation [role=menuitem]:hover > .submenu {
    display: block;
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] .submenu[role=menu] {
    top: -0.5em;
    left: 100%;
}

.ae-menubar .toolbar {
    position: relative;
    width: fit-content;
    height: fit-content;
    font-size: 1.5em;
    color: var(--theme-menubar-toolbar-item-color);
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-end;
    align-items: center;
    column-gap: 0;
    row-gap: 0;
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .toolbar .group {
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 8px;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar .ae-menu-mobile .toolbar {
    width: 100%;
    margin-bottom: 1em;
}

.ae-menubar .ae-menu-mobile .toolbar .group {
    width: 100%;
    flex-wrap: wrap;
    justify-content: space-between;
}

.ae-menubar .user {
    position: relative;
    width: 40px;
    min-width: 40px;
    height: 40px;
    border: 2px solid var(--theme-menubar-user-menu-button-color);
    border-radius: 50%;
    color: var(--theme-menubar-user-menu-button-color);
    background: transparent;
    overflow: hidden;
}

.ae-menubar .user > .image {
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
}

.ae-menubar .user > .mb_icon {
    position: relative;
    top: 0;
    font-size: 2.15em;
    text-align: center;
    transition: top 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
}

.ae-menubar .user > .mb_icon::before {
    vertical-align: sub;
    display: inline-block;
}

.ae-menubar .user:hover:not(#user-avatar), .ae-menubar .user:focus-visible, .ae-menubar .user[aria-expanded=true] {
    outline: none;
    color: var(--theme-menubar-user-menu-button-color\:hover);
}

.ae-menubar .user:hover:not(#user-avatar) > .mb_icon, .ae-menubar .user:focus-visible > .mb_icon, .ae-menubar .user[aria-expanded=true] > .mb_icon {
    top: -4px;
}

.ae-menubar .mb_icon {
    display: block;
}

.ae-menubar .panel {
    position: absolute;
    width: fit-content;
    height: fit-content;
    border: 1px solid var(--theme-menubar-panel-borderColor);
    border-radius: 4px;
    color: var(--theme-menubar-nav-menuitem-color);
    background: var(--theme-menubar-user-menu-panel-backgroundColor);
    box-shadow: 0 2px 6px var(--theme-menubar-global-boxShadowColor);
    visibility: hidden;
}

.ae-menubar .panel::-webkit-scrollbar {
    width: 4px;
}

.ae-menubar .panel::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.ae-menubar .panel::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.25);
}

.ae-menubar .panel.slide-right-top {
    animation: slide-right-top 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) both;
    transform-origin: 100% 0;
}

.ae-menubar .panel > .section {
    padding: 0.5rem 0.75rem;
}

.ae-menubar .panel > .section .button {
    width: 100%;
    padding: 0.5em;
    border-radius: 4px;
    color: var(--theme-menubar-nav-menuitem-color);
    font-size: 0.875em;
    font-weight: 400;
    text-align: center;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
    cursor: pointer;
}

.ae-menubar .panel > .section .button:hover {
    color: var(--theme-menubar-nav-menuitem-color\:hover);
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

@keyframes slide-right-top {
    0% {
        transform: scale(0.5);
        filter: opacity(0);
    }
    100% {
        transform: scale(1);
        filter: opacity(1);
    }
}

.ae-menubar #user-panel {
    min-width: 200px;
}

.ae-menubar #user-panel .user-info {
    margin-left: 0;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar #user-panel .user-info .user-name {
    font-size: 1.25em;
    font-weight: 700;
}

.ae-menubar #user-panel .user-info .user-profile {
    font-size: 0.875em;
    font-weight: 400;
}

.ae-menubar #user-panel [role=menubar] {
    row-gap: 0;
    flex-direction: column;
}

.ae-menubar #themes-panel,
.ae-menubar #shortcuts-panel {
    max-height: 360px;
    overflow: auto;
}

.ae-menubar #themes-panel #themes-list > .theme-name a,
.ae-menubar #shortcuts-panel #themes-list > .theme-name a {
    padding: 0.875em;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
}
.ae-menubar #themes-panel #themes-list > .theme-name.button,
.ae-menubar #shortcuts-panel #themes-list > .theme-name.button {
    padding: 0;
}

.ae-menubar #themes-panel #themes-list > .theme-name a .group,
.ae-menubar #shortcuts-panel #themes-list > .theme-name a .group {
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 1px;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
}

.ae-menubar #themes-panel #themes-list > .theme-name a .group span,
.ae-menubar #shortcuts-panel #themes-list > .theme-name a .group span {
    width: 1.25rem;
    height: 1.25rem;
    margin: 1px;
    border: 2px solid var(--theme-menubar-panel-borderColor);
    border-radius: 50%;
    background: white;
}

.ae-menubar #themes-panel #themes-list > .theme-name a .group span:nth-child(1),
.ae-menubar #shortcuts-panel #themes-list > .theme-name a .group span:nth-child(1) {
    z-index: 4;
}

.ae-menubar #themes-panel #themes-list > .theme-name a .group span:nth-child(2),
.ae-menubar #shortcuts-panel #themes-list > .theme-name a .group span:nth-child(2) {
    z-index: 3;
}

.ae-menubar #themes-panel #themes-list > .theme-name a .group span:nth-child(3),
.ae-menubar #shortcuts-panel #themes-list > .theme-name a .group span:nth-child(3) {
    z-index: 2;
}

.ae-menubar #shortcuts-panel #shortcuts-list {
    min-width: 250px;
    max-width: 390px;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item {
    width: 100%;
    margin-bottom: 0.5rem;
    border-radius: 0.25rem;
    color: var(--theme-menubar-nav-submenu-menuitem-color\:hover);
    background: var(--theme-menubar-nav-submenu-backgroundColor\:hover);
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item:last-child {
    margin-bottom: 0;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item:hover {
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item > a {
    padding: 0.75rem;
    color: inherit;
    display: block;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-title {
    font-size: 1rem;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-description {
    font-size: 0.75rem;
}

.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-title,
.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-description {
    word-break: break-all;
}

.ae-menubar #shortcuts-panel #shortcuts-list.column {
    flex-flow: row wrap;
    column-gap: 0.5rem;
    row-gap: 0.5rem;
    display: flex;
}

.ae-menubar #shortcuts-panel #shortcuts-list.column > .list-item {
    width: 48%;
    margin: 0;
    flex-grow: 1;
}

.ae-menubar #search-panel {
    width: 600px;
    height: fit-content;
    max-height: 550px;
    overflow: auto;
}

.ae-menubar #search-panel > #search {
    position: sticky;
    top: 0;
    left: 0;
    font-size: 1.15rem;
    background: var(--theme-menubar-user-menu-panel-backgroundColor);
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    display: flex;
    z-index: 1;
}

.ae-menubar #search-panel > #search input[type=text] {
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--theme-menubar-divider-borderColor);
    color: var(--theme-menubar-global-color-text);
    background: transparent;
}

.ae-menubar #search-panel > #search input[type=text]:focus-visible {
    outline-style: none;
}

.ae-menubar #search-panel > #search > a[data-close] {
    position: relative;
    top: -14px;
    color: inherit;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    column-gap: 0.5rem;
    display: flex;
}

.ae-menubar #search-panel > #search > a[data-close] > .text {
    font-size: 0.75rem;
    opacity: 0.5;
}

.ae-menubar #search-panel > #search-result {
    padding-left: 2rem;
}

.ae-menubar #search-panel > #search-result .result-title {
    font-size: 0.75rem;
    text-transform: uppercase;
}

.ae-menubar #search-panel > #search-result .result-links {
    color: var(--theme-menubar-global-color-text);
}

.ae-menubar #search-panel > #search-result .result-links > .result-item {
    width: 100%;
    border-radius: 0.25rem;
    transition: padding 250ms ease-out;
}

.ae-menubar #search-panel > #search-result .result-links > .result-item:hover {
    padding-left: 0.5rem;
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

.ae-menubar #search-panel > #search-result .result-links > .result-item:hover i:last-child {
    visibility: visible;
}

.ae-menubar #search-panel > #search-result .result-links > .result-item a {
    width: 100%;
    padding: 0.5rem 0.5rem 0.5rem 0;
    color: inherit;
    word-break: break-all;
    flex-flow: row nowrap;
    justify-content: flex-start;
    align-items: center;
    column-gap: 0.5rem;
    display: flex;
}

@media only screen and (max-width: 1188px) {
    .ae-menubar .panel:not(#themes-panel, #user-panel) {
        width: 100% !important;
        max-width: 100% !important;
        left: 0 !important;
        border-radius: 0 !important;
    }
    .ae-menubar #shortcuts-list {
        max-width: 100% !important;
    }
}

.ae-menubar .button {
    padding: 0.5em;
    border-radius: 4px;
    color: var(--theme-menubar-nav-menuitem-color);
    font-size: 0.875em;
    font-weight: 400;
    text-align: center;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    column-gap: 0.5em;
    row-gap: 0;
    flex-grow: 0;
    flex-shrink: 0;
    display: flex;
    cursor: pointer;
}

.ae-menubar .button a {
    color: inherit;
}

.ae-menubar .button.text-left {
    justify-content: flex-start;
}

.ae-menubar .button:hover, .ae-menubar .button[aria-expanded=true], .ae-menubar .button:focus-visible, .ae-menubar .button.active {
    outline: none;
    color: var(--theme-menubar-nav-menuitem-color\:hover);
    background: var(--theme-menubar-nav-menuitem-backgroundColor);
}

.ae-menubar .divider-theme-color {
    border-color: var(--theme-menubar-divider-borderColor);
}

html[dir=RTL] .ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] .submenu[role=menu] {
    top: -0.5em;
    left: auto;
    right: 100%;
}

html[dir=RTL] .ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem][aria-haspopup=true]::after {
    position: relative;
    top: auto;
    transform: translateY(3%) rotate(90deg);
}

html[dir=RTL] .ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] [role=menuitem][aria-haspopup=true] > .label {
    margin-right: 0;
}

html[dir=RTL] .ae-menubar .ae-menubar-accordion > [role=menubar] [role=menuitem][aria-haspopup=true]::after {
    position: relative;
    top: auto;
    transform: translateY(0%) rotate(90deg);
}

html[dir=RTL] .ae-menubar .ae-menubar-accordion > [role=menubar] [role=menuitem][aria-expanded=true]::after {
    transform: translateY(0%) rotate(0deg);
}

html[dir=RTL] .ae-menubar[aria-orientation=vertical],
html[dir=RTL] .ae-menubar .ae-menu-mobile {
    right: 0;
    left: auto;
}

html[dir=RTL] .ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded=false]::after,
html[dir=RTL] .ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded=true]::after {
    position: relative;
}

html[dir=RTL] .ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded=false]::after {
    transform: translateY(-50%) rotate(90deg);
}

html[dir=RTL] .ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded=true]::after {
    transform: translateY(-50%) rotate(0deg);
}

/**
 * * Expande o CSS Remedy (reset CSS) da Jen Simmons.
 * * Versão: 1.0.0
 * * Atualizado em: 23/03/2023
 * * Autor: Black thiago@netmake.com.br
 * * URL: https://github.com/jensimmons/cssremedy
 * * Ferramentas de apoio:
 * *     - Contrast checker: https://contrastchecker.com/
 * *     - Shade generator: https://maketintsandshades.com/
 * */
/* @docs
label: Core Remedies
version: 0.1.0-beta.2

note: |
  These remedies are recommended
  as a starter for any project.

category: file
*/
/* @docs
label: Box Sizing

note: |
  Use border-box by default, globally.

category: global
*/
*, ::before, ::after { box-sizing: border-box; }
/* @docs
label: Line Sizing

note: |
  Consistent line-spacing,
  even when inline elements have different line-heights.

links:
  - https://drafts.csswg.org/css-inline-3/#line-sizing-property

category: global
*/
html { line-sizing: normal; }
/* @docs
label: Body Margins

note: |
  Remove the tiny space around the edge of the page.

category: global
*/
body { margin: 0; }
/* @docs
label: Heading Sizes

note: |
  Switch to rem units for headings

category: typography
*/
h1 { font-size: 2rem; }
h2 { font-size: 1.5rem; }
h3 { font-size: 1.17rem; }
h4 { font-size: 1.00rem; }
h5 { font-size: 0.83rem; }
h6 { font-size: 0.67rem; }
/* @docs
label: H1 Margins

note: |
  Keep h1 margins consistent, even when nested.

category: typography
*/
h1 { margin: 0.67em 0; }
/* @docs
label: Pre Wrapping

note: |
  Overflow by default is bad...

category: typography
*/
pre { white-space: pre-wrap; }
/* @docs
label: Horizontal Rule

note: |
  1. Solid, thin horizontal rules
  2. Remove Firefox `color: gray`
  3. Remove default `1px` height, and common `overflow: hidden`

category: typography
*/
hr {
    border-style: solid;
    border-width: 1px 0 0;
    color: inherit;
    height: 0;
    overflow: visible;
}
/* @docs
label: Responsive Embeds

note: |
  1. Block display is usually what we want
  2. Remove strange space-below when inline
  3. Responsive by default

category: embedded elements
*/
img, svg, video, canvas, audio, iframe, embed, object {
    display: block;
    vertical-align: middle;
    max-width: 100%;
}
/* @docs
label: Aspect Ratios

note: |
  Maintain intrinsic aspect ratios when `max-width` is applied.
  `iframe`, `embed`, and `object` are also embedded,
  but have no intrinsic ratio,
  so their `height` needs to be set explicitly.

category: embedded elements
*/
img, svg, video, canvas {
    height: auto;
}
/* @docs
label: Audio Width

note: |
  There is no good reason elements default to 300px,
  and audio files are unlikely to come with a width attribute.

category: embedded elements
*/
audio { width: 100%; }
/* @docs
label: Image Borders

note: |
  Remove the border on images inside links in IE 10 and earlier.

category: legacy browsers
*/
img { border-style: none; }
/* @docs
label: SVG Overflow

note: |
  Hide the overflow in IE 10 and earlier.

category: legacy browsers
*/
svg { overflow: hidden; }
/* @docs
label: HTML5 Elements

note: |
  Default block display on HTML5 elements

category: legacy browsers
*/
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
/* @docs
label: Checkbox & Radio Inputs

note: |
  1. Add the correct box sizing in IE 10
  2. Remove the padding in IE 10

category: legacy browsers
*/
[type='checkbox'],
[type='radio'] {
    box-sizing: border-box;
    padding: 0;
}
/* @docs
label: Reminders
version: 0.1.0-beta.2

note: |
  All the remedies in this file are commented out by default,
  because they could cause harm as general defaults.
  These should be used as reminders
  to handle common styling issues
  in a way that will work for your project and users.
  Read, explore, uncomment, and edit as needed.

category: file
*/
/* @docs
label: List Style

note: |
  List styling is not usually desired in navigation,
  but this also removes list-semantics for screen-readers

links:
  - https://github.com/mozdevs/cssremedy/issues/15

category: navigation
*/
nav ul {
    list-style: none;
}
/* @docs
label: List Voiceover

note: |
  1. Add zero-width-space to prevent VoiceOver disable
  2. Absolute position ensures no extra space

links:
  - https://unfetteredthoughts.net/2017/09/26/voiceover-and-list-style-type-none/

category: navigation
*/
nav li:before {
    content: "\200B";
    position: absolute;
}
/* @docs
label: Reduced Motion

note: |
  1. Immediately jump any animation to the end point
  2. Remove transitions & fixed background attachment

links:
  - https://github.com/mozdevs/cssremedy/issues/11

category: accessibility
*/
@media (prefers-reduced-motion: reduce) {
    *, ::before, ::after {
        animation-delay: -1s !important;
        animation-duration: 1s !important;
        animation-iteration-count: 1 !important;
        background-attachment: initial !important;
        scroll-behavior: auto !important;
        transition-duration: 0s !important;
    }
}
/* @docs
label: Line Heights

note: |
  The default `normal` line-height is tightly spaced,
  but takes font-metrics into account,
  which is important for many fonts.
  Looser spacing may improve readability in latin type,
  but may cause problems in some scripts --
  from cusrive/fantasy fonts to
  [Javanese](https://jsbin.com/bezasax/1/edit?html,css,output),
  [Persian](https://jsbin.com/qurecom/edit?html,css,output),
  and CJK languages.

links:
  - https://github.com/mozdevs/cssremedy/issues/7
  - https://jsbin.com/bezasax/1/edit?html,css,output
  - https://jsbin.com/qurecom/edit?html,css,output

todo: |
  - Use `:lang(language-code)` selectors?
  - Add typography remedies for other scripts & languages...

category: typography
*/
html { line-height: 1.5; }
h1, h2, h3, h4, h5, h6 { line-height: 1.25; }
caption, figcaption, label, legend { line-height: 1.375; }
/* @docs
label: Quotes
version: 0.1.0-beta.2

note: |
  This is what user agents are supposed to be doing for quotes,
  according to https://html.spec.whatwg.org/multipage/rendering.html#quotes

links:
  - https://html.spec.whatwg.org/multipage/rendering.html#quotes

todo: |
  I believe

  ```css
  :root:lang(af),       :not(:lang(af)) > :lang(af)             { quotes: '\201c' '\201d' '\2018' '\2019' }
  :root:lang(ak),       :not(:lang(ak)) > :lang(ak)             { quotes: '\201c' '\201d' '\2018' '\2019' }
  :root:lang(asa),      :not(:lang(asa)) > :lang(asa)           { quotes: '\201c' '\201d' '\2018' '\2019' }
  ```

  can be replaced by

  ```css
  :root:lang(af, ak, asa), [lang]:lang(af, ak, asa)       			{ quotes: '\201c' '\201d' '\2018' '\2019' }
  ```

category: file
*/
:root                                                         { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(af),       :not(:lang(af)) > :lang(af)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ak),       :not(:lang(ak)) > :lang(ak)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(asa),      :not(:lang(asa)) > :lang(asa)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(az),       :not(:lang(az)) > :lang(az)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(bem),      :not(:lang(bem)) > :lang(bem)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(bez),      :not(:lang(bez)) > :lang(bez)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(bn),       :not(:lang(bn)) > :lang(bn)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(brx),      :not(:lang(brx)) > :lang(brx)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(cgg),      :not(:lang(cgg)) > :lang(cgg)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(chr),      :not(:lang(chr)) > :lang(chr)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(cy),       :not(:lang(cy)) > :lang(cy)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(da),       :not(:lang(da)) > :lang(da)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(dav),      :not(:lang(dav)) > :lang(dav)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(dje),      :not(:lang(dje)) > :lang(dje)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(dz),       :not(:lang(dz)) > :lang(dz)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ebu),      :not(:lang(ebu)) > :lang(ebu)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ee),       :not(:lang(ee)) > :lang(ee)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(en),       :not(:lang(en)) > :lang(en)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(fil),      :not(:lang(fil)) > :lang(fil)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(fo),       :not(:lang(fo)) > :lang(fo)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ga),       :not(:lang(ga)) > :lang(ga)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(gd),       :not(:lang(gd)) > :lang(gd)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(gl),       :not(:lang(gl)) > :lang(gl)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(gu),       :not(:lang(gu)) > :lang(gu)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(guz),      :not(:lang(guz)) > :lang(guz)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ha),       :not(:lang(ha)) > :lang(ha)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(hi),       :not(:lang(hi)) > :lang(hi)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(id),       :not(:lang(id)) > :lang(id)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ig),       :not(:lang(ig)) > :lang(ig)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(jmc),      :not(:lang(jmc)) > :lang(jmc)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(kam),      :not(:lang(kam)) > :lang(kam)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(kde),      :not(:lang(kde)) > :lang(kde)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(kea),      :not(:lang(kea)) > :lang(kea)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(khq),      :not(:lang(khq)) > :lang(khq)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ki),       :not(:lang(ki)) > :lang(ki)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(kln),      :not(:lang(kln)) > :lang(kln)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(km),       :not(:lang(km)) > :lang(km)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(kn),       :not(:lang(kn)) > :lang(kn)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ko),       :not(:lang(ko)) > :lang(ko)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ksb),      :not(:lang(ksb)) > :lang(ksb)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(lg),       :not(:lang(lg)) > :lang(lg)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ln),       :not(:lang(ln)) > :lang(ln)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(lo),       :not(:lang(lo)) > :lang(lo)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(lrc),      :not(:lang(lrc)) > :lang(lrc)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(lu),       :not(:lang(lu)) > :lang(lu)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(luo),      :not(:lang(luo)) > :lang(luo)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(lv),       :not(:lang(lv)) > :lang(lv)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mas),      :not(:lang(mas)) > :lang(mas)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mer),      :not(:lang(mer)) > :lang(mer)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mfe),      :not(:lang(mfe)) > :lang(mfe)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mgo),      :not(:lang(mgo)) > :lang(mgo)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ml),       :not(:lang(ml)) > :lang(ml)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mn),       :not(:lang(mn)) > :lang(mn)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mr),       :not(:lang(mr)) > :lang(mr)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ms),       :not(:lang(ms)) > :lang(ms)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(mt),       :not(:lang(mt)) > :lang(mt)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(my),       :not(:lang(my)) > :lang(my)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(naq),      :not(:lang(naq)) > :lang(naq)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(nd),       :not(:lang(nd)) > :lang(nd)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ne),       :not(:lang(ne)) > :lang(ne)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(nus),      :not(:lang(nus)) > :lang(nus)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(nyn),      :not(:lang(nyn)) > :lang(nyn)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(pa),       :not(:lang(pa)) > :lang(pa)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(pt),       :not(:lang(pt)) > :lang(pt)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(rof),      :not(:lang(rof)) > :lang(rof)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(rwk),      :not(:lang(rwk)) > :lang(rwk)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(saq),      :not(:lang(saq)) > :lang(saq)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(sbp),      :not(:lang(sbp)) > :lang(sbp)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(seh),      :not(:lang(seh)) > :lang(seh)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ses),      :not(:lang(ses)) > :lang(ses)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(si),       :not(:lang(si)) > :lang(si)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(so),       :not(:lang(so)) > :lang(so)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(sw),       :not(:lang(sw)) > :lang(sw)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(ta),       :not(:lang(ta)) > :lang(ta)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(te),       :not(:lang(te)) > :lang(te)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(teo),      :not(:lang(teo)) > :lang(teo)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(th),       :not(:lang(th)) > :lang(th)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(to),       :not(:lang(to)) > :lang(to)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(tr),       :not(:lang(tr)) > :lang(tr)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(twq),      :not(:lang(twq)) > :lang(twq)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(tzm),      :not(:lang(tzm)) > :lang(tzm)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(uz-Cyrl),  :not(:lang(uz-Cyrl)) > :lang(uz-Cyrl)   { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(vai),      :not(:lang(vai)) > :lang(vai)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(vai-Latn), :not(:lang(vai-Latn)) > :lang(vai-Latn) { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(vi),       :not(:lang(vi)) > :lang(vi)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(vun),      :not(:lang(vun)) > :lang(vun)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(xog),      :not(:lang(xog)) > :lang(xog)           { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(yo),       :not(:lang(yo)) > :lang(yo)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(yue-Hans), :not(:lang(yue-Hans)) > :lang(yue-Hans) { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(zh),       :not(:lang(zh)) > :lang(zh)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(zu),       :not(:lang(zu)) > :lang(zu)             { quotes: '\201c' '\201d' '\2018' '\2019' }
/* “ ” ‘ ’ */
:root:lang(uz),       :not(:lang(uz)) > :lang(uz)             { quotes: '\201c' '\201d' '\2019' '\2018' }
/* “ ” ’ ‘ */
:root:lang(eu),       :not(:lang(eu)) > :lang(eu)             { quotes: '\201c' '\201d' '\201c' '\201d' }
/* “ ” “ ” */
:root:lang(tk),       :not(:lang(tk)) > :lang(tk)             { quotes: '\201c' '\201d' '\201c' '\201d' }
/* “ ” “ ” */
:root:lang(ar),       :not(:lang(ar)) > :lang(ar)             { quotes: '\201d' '\201c' '\2019' '\2018' }
/* ” “ ’ ‘ */
:root:lang(ur),       :not(:lang(ur)) > :lang(ur)             { quotes: '\201d' '\201c' '\2019' '\2018' }
/* ” “ ’ ‘ */
:root:lang(fi),       :not(:lang(fi)) > :lang(fi)             { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(he),       :not(:lang(he)) > :lang(he)             { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(lag),      :not(:lang(lag)) > :lang(lag)           { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(rn),       :not(:lang(rn)) > :lang(rn)             { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(sn),       :not(:lang(sn)) > :lang(sn)             { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(sv),       :not(:lang(sv)) > :lang(sv)             { quotes: '\201d' '\201d' '\2019' '\2019' }
/* ” ” ’ ’ */
:root:lang(sr),       :not(:lang(sr)) > :lang(sr)             { quotes: '\201e' '\201c' '\2018' '\2018' }
/* „ “ ‘ ‘ */
:root:lang(sr-Latn),  :not(:lang(sr-Latn)) > :lang(sr-Latn)   { quotes: '\201e' '\201c' '\2018' '\2018' }
/* „ “ ‘ ‘ */
:root:lang(bg),       :not(:lang(bg)) > :lang(bg)             { quotes: '\201e' '\201c' '\201e' '\201c' }
/* „ “ „ “ */
:root:lang(lt),       :not(:lang(lt)) > :lang(lt)             { quotes: '\201e' '\201c' '\201e' '\201c' }
/* „ “ „ “ */
:root:lang(bs-Cyrl),  :not(:lang(bs-Cyrl)) > :lang(bs-Cyrl)   { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(cs),       :not(:lang(cs)) > :lang(cs)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(cs),       :not(:lang(cs)) > :lang(cs)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(de),       :not(:lang(de)) > :lang(de)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(dsb),      :not(:lang(dsb)) > :lang(dsb)           { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(et),       :not(:lang(et)) > :lang(et)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(hr),       :not(:lang(hr)) > :lang(hr)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(hsb),      :not(:lang(hsb)) > :lang(hsb)           { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(is),       :not(:lang(is)) > :lang(is)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(lb),       :not(:lang(lb)) > :lang(lb)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(luy),      :not(:lang(luy)) > :lang(luy)           { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(mk),       :not(:lang(mk)) > :lang(mk)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(sk),       :not(:lang(sk)) > :lang(sk)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(sl),       :not(:lang(sl)) > :lang(sl)             { quotes: '\201e' '\201c' '\201a' '\2018' }
/* „ “ ‚ ‘ */
:root:lang(ka),       :not(:lang(ka)) > :lang(ka)             { quotes: '\201e' '\201c' '\00ab' '\00bb' }
/* „ “ « » */
:root:lang(bs),       :not(:lang(bs)) > :lang(bs)             { quotes: '\201e' '\201d' '\2018' '\2019' }
/* „ ” ‘ ’ */
:root:lang(agq),      :not(:lang(agq)) > :lang(agq)           { quotes: '\201e' '\201d' '\201a' '\2019' }
/* „ ” ‚ ’ */
:root:lang(ff),       :not(:lang(ff)) > :lang(ff)             { quotes: '\201e' '\201d' '\201a' '\2019' }
/* „ ” ‚ ’ */
:root:lang(nmg),      :not(:lang(nmg)) > :lang(nmg)           { quotes: '\201e' '\201d' '\00ab' '\00bb' }
/* „ ” « » */
:root:lang(ro),       :not(:lang(ro)) > :lang(ro)             { quotes: '\201e' '\201d' '\00ab' '\00bb' }
/* „ ” « » */
:root:lang(pl),       :not(:lang(pl)) > :lang(pl)             { quotes: '\201e' '\201d' '\00ab' '\00bb' }
/* „ ” « » */
:root:lang(hu),       :not(:lang(hu)) > :lang(hu)             { quotes: '\201e' '\201d' '\00bb' '\00ab' }
/* „ ” » « */
:root:lang(nl),       :not(:lang(nl)) > :lang(nl)             { quotes: '\2018' '\2019' '\201c' '\201d' }
/* ‘ ’ “ ” */
:root:lang(ti-ER),    :not(:lang(ti-ER)) > :lang(ti-ER)       { quotes: '\2018' '\2019' '\201c' '\201d' }
/* ‘ ’ “ ” */
:root:lang(dua),      :not(:lang(dua)) > :lang(dua)           { quotes: '\00ab' '\00bb' '\2018' '\2019' }
/* « » ‘ ’ */
:root:lang(ksf),      :not(:lang(ksf)) > :lang(ksf)           { quotes: '\00ab' '\00bb' '\2018' '\2019' }
/* « » ‘ ’ */
:root:lang(rw),       :not(:lang(rw)) > :lang(rw)             { quotes: '\00ab' '\00bb' '\2018' '\2019' }
/* « » ‘ ’ */
:root:lang(nn),       :not(:lang(nn)) > :lang(nn)             { quotes: '\00ab' '\00bb' '\2018' '\2019' }
/* « » ‘ ’ */
:root:lang(nb),       :not(:lang(nb)) > :lang(nb)             { quotes: '\00ab' '\00bb' '\2018' '\2019' }
/* « » ‘ ’ */
:root:lang(ast),      :not(:lang(ast)) > :lang(ast)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(bm),       :not(:lang(bm)) > :lang(bm)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(br),       :not(:lang(br)) > :lang(br)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(ca),       :not(:lang(ca)) > :lang(ca)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(dyo),      :not(:lang(dyo)) > :lang(dyo)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(el),       :not(:lang(el)) > :lang(el)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(es),       :not(:lang(es)) > :lang(es)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(ewo),      :not(:lang(ewo)) > :lang(ewo)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(mg),       :not(:lang(mg)) > :lang(mg)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(mua),      :not(:lang(mua)) > :lang(mua)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(sg),       :not(:lang(sg)) > :lang(sg)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(it),       :not(:lang(it)) > :lang(it)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(kab),      :not(:lang(kab)) > :lang(kab)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(kk),       :not(:lang(kk)) > :lang(kk)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(pt-PT),    :not(:lang(pt-PT)) > :lang(pt-PT)       { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(nnh),      :not(:lang(nnh)) > :lang(nnh)           { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(sq),       :not(:lang(sq)) > :lang(sq)             { quotes: '\00ab' '\00bb' '\201c' '\201d' }
/* « » “ ” */
:root:lang(bas),      :not(:lang(bas)) > :lang(bas)           { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(be),       :not(:lang(be)) > :lang(be)             { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(ky),       :not(:lang(ky)) > :lang(ky)             { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(sah),      :not(:lang(sah)) > :lang(sah)           { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(ru),       :not(:lang(ru)) > :lang(ru)             { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(uk),       :not(:lang(uk)) > :lang(uk)             { quotes: '\00ab' '\00bb' '\201e' '\201c' }
/* « » „ “ */
:root:lang(zgh),      :not(:lang(zgh)) > :lang(zgh)           { quotes: '\00ab' '\00bb' '\201e' '\201d' }
/* « » „ ” */
:root:lang(shi),      :not(:lang(shi)) > :lang(shi)           { quotes: '\00ab' '\00bb' '\201e' '\201d' }
/* « » „ ” */
:root:lang(shi-Latn), :not(:lang(shi-Latn)) > :lang(shi-Latn) { quotes: '\00ab' '\00bb' '\201e' '\201d' }
/* « » „ ” */
:root:lang(am),       :not(:lang(am)) > :lang(am)             { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(az-Cyrl),  :not(:lang(az-Cyrl)) > :lang(az-Cyrl)   { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(fa),       :not(:lang(fa)) > :lang(fa)             { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(fr-CH),    :not(:lang(fr-CH)) > :lang(fr-CH)       { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(gsw),      :not(:lang(gsw)) > :lang(gsw)           { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(jgo),      :not(:lang(jgo)) > :lang(jgo)           { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(kkj),      :not(:lang(kkj)) > :lang(kkj)           { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(mzn),      :not(:lang(mzn)) > :lang(mzn)           { quotes: '\00ab' '\00bb' '\2039' '\203a' }
/* « » ‹ › */
:root:lang(fr),       :not(:lang(fr)) > :lang(fr)             { quotes: '\00ab' '\00bb' '\00ab' '\00bb' }
/* « » « » */
:root:lang(hy),       :not(:lang(hy)) > :lang(hy)             { quotes: '\00ab' '\00bb' '\00ab' '\00bb' }
/* « » « » */
:root:lang(yav),      :not(:lang(yav)) > :lang(yav)           { quotes: '\00ab' '\00bb' '\00ab' '\00bb' }
/* « » « » */
:root:lang(ja),       :not(:lang(ja)) > :lang(ja)             { quotes: '\300c' '\300d' '\300e' '\300f' }
/* 「 」 『 』 */
:root:lang(yue),      :not(:lang(yue)) > :lang(yue)           { quotes: '\300c' '\300d' '\300e' '\300f' }
/* 「 」 『 』 */
:root:lang(zh-Hant),  :not(:lang(zh-Hant)) > :lang(zh-Hant)   { quotes: '\300c' '\300d' '\300e' '\300f' }
/* 「 」 『 』 */
/**
 * * Visual
 * * - Corrige o text-decoration padrão no Chrome, Edge e Safari
 * */
abbr:where([title]) {
    text-decoration: underline dotted;
}
/**
 * * Visual
 * * - Limpa estilização de links para otimizara customização
 * */
a {
    text-decoration: none;
}
/**
 * * Visual
 * * - Corrige o font-weight no Edge e Safari
 * */
b,
strong {
    font-weight: bolder;
}
/**
 * * Visual
 * * - Aplica fonte monoespaçada do tema e corrige o font-size
 * */
code,
kbd,
samp,
pre {
    font-family: "Red Hat Mono", monospace;
    font-size: 1em;
}
/**
 * * Visual
 * * - Corrige font-size em todos os navegadores
 * */
small {
    font-size: 80%;
}
/**
 * * Visual
 * * - Previne que elementos com as propriedades 'sup' e 'sub' afetem o line-height
 * */
sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sub {
    bottom: -0.25em;
}
sup {
    top: -0.5em;
}
/**
 * * Visual
 * * - Corrige problema de identação de conteúdo de texto em tabelas no Chrome e Safari
 * * - Corrige herança de cor da borda
 * * - Padroniza bordas colapsadas
 * */
table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
}
/**
 * * Usabilidade / Visual
 * * - Padroniza estilos tipográficos
 * * - Remove a margem no Firefox e Safari
 * * - Remove o preenchimento
 * */
button,
input,
optgroup,
select,
textarea {
    margin: 0;
    padding: 0;
    color: inherit;
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
}
/**
 * * Usabilidade
 * * - Garante que elementos desabilitados não possuam indicação de interatividade
 * */
:disabled {
    cursor: default;
}
/**
 * * Visual
 * * - Corrige a herança da propriedade text-transform no Firefox e Edge
 * */
button,
select {
    text-transform: none;
}
/**
 * * Usabilidade / Visual
 * * - Remove estilos padrões de botões
 * * - Corrige a impossibilidade de estilizar elementos clicáveis no IOS e Safari
 * * - Padroniza cursor pointer
 * */
button,
[type=button],
[type=reset],
[type=submit],
[role=button] {
    border: none;
    -webkit-appearance: button;
    background: transparent;
    background-image: none;
    cursor: pointer;
}
/**
 * * Acessibilidade
 * * WCAG 2.2: critérios 2.4.11, 2.4.7 atendidos
 * * - Padroniza o estilo de elementos no estado "focus"
 * */
:focus-visible {
    outline: 1px solid;
    border-radius: 4px;
}
/**
 * * Visual
 * * - Remove estilo padrão para elementos inválidos (:invalid) no Firefox (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
 * */
:-moz-ui-invalid {
    box-shadow: none;
}
/**
 * * Visual
 * * - Corrige alinhamento vertical no Chrome e Firefox
 * */
progress {
    vertical-align: baseline;
}
/**
 * * Usabilidade / Visual
 * * - Corrige o cursor dos botões de incremento e decremento no Safari
 * */
::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto;
}
/**
 * * Usabilidade / Visual
 * * - Corrige aparência estranha no Chrome e Safari
 * * - Corrige a outline no Safari
 * */
[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
}
/**
 * * Visual
 * * - Remove preenchimento interno no Chrome, Safari e macOS
 * */
::-webkit-search-decoration {
    -webkit-appearance: none;
}
/**
 * * Usabilidade / Visual *
 * * - Corrige a impossibilidade de estilizar elementos clicáveis no IOS e Safari
 * * - Padroniza fonte herdada para o Safari
 * */
::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
}
/**
 * * Visual
 * * Corrige o display no Chrome e no Safari
 * */
summary {
    display: list-item;
}
/**
 * * Visual
 * * Remove o espaçamento padrão dos elementos
 * */
blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
    margin: 0;
}
fieldset {
    margin: 0;
    padding: 0;
}
legend {
    padding: 0;
}
ol,
ul,
menu {
    margin: 0;
    padding: 0;
    list-style: none;
}
/**
 * * Usabilidade / Visual
 * * - Impede redimensionar o elemento textarea horizontalmente
 * */
textarea {
    resize: vertical;
}
/**
 * * Acessibilidade / Visual
 * * WCAG 2.0: Critério 1.4.3 [AA] atendido parcialmente (contraste mínimo para fontes entre 18pt e 14pt)
 * * - Reconfigura a opacidade padrão do placeholder no Firefox
 * * - Configura a cor padrão de acordo com o tema
 * */
::placeholder {
    opacity: 1;
    color: #6b7280;
}
/**
 * * Visual
 * * - Altera o padrão do tipo de display dos elementos HTML do tipo "substituído" para "block"
 * * - Ajusta o alinhamento vertical
 * */
img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
    vertical-align: middle;
    display: block;
}
/**
 * * Visual
 * * - Restringe imagens e videos para a largura total do seu elemento pai, e preserva seu aspect-ratio
 * */
img,
video {
    width: 100%;
    height: auto;
}
/**
 * * Usabilidade / Visual
 * * - Garante que elementos com o atributo "hidden" não sejam renderizados
 * */
[hidden] {
    display: none;
}
.ae .m-0 {
    margin: 0px;
}
.ae .mx-0 {
    margin-inline: 0px;
}
.ae .my-0 {
    margin-block: 0px;
}
.ae .m-top-0 {
    margin-top: 0px;
}
.ae .m-right-0 {
    margin-right: 0px;
}
.ae .m-bottom-0 {
    margin-bottom: 0px;
}
.ae .m-left-0 {
    margin-left: 0px;
}
.ae .m-px {
    margin: 1px;
}
.ae .mx-px {
    margin-inline: 1px;
}
.ae .my-px {
    margin-block: 1px;
}
.ae .m-top-px {
    margin-top: 1px;
}
.ae .m-right-px {
    margin-right: 1px;
}
.ae .m-bottom-px {
    margin-bottom: 1px;
}
.ae .m-left-px {
    margin-left: 1px;
}
.ae .m-0\.5 {
    margin: 0.125rem;
}
.ae .mx-0\.5 {
    margin-inline: 0.125rem;
}
.ae .my-0\.5 {
    margin-block: 0.125rem;
}
.ae .m-top-0\.5 {
    margin-top: 0.125rem;
}
.ae .m-right-0\.5 {
    margin-right: 0.125rem;
}
.ae .m-bottom-0\.5 {
    margin-bottom: 0.125rem;
}
.ae .m-left-0\.5 {
    margin-left: 0.125rem;
}
.ae .m-1 {
    margin: 0.25rem;
}
.ae .mx-1 {
    margin-inline: 0.25rem;
}
.ae .my-1 {
    margin-block: 0.25rem;
}
.ae .m-top-1 {
    margin-top: 0.25rem;
}
.ae .m-right-1 {
    margin-right: 0.25rem;
}
.ae .m-bottom-1 {
    margin-bottom: 0.25rem;
}
.ae .m-left-1 {
    margin-left: 0.25rem;
}
.ae .m-1\.5 {
    margin: 0.375rem;
}
.ae .mx-1\.5 {
    margin-inline: 0.375rem;
}
.ae .my-1\.5 {
    margin-block: 0.375rem;
}
.ae .m-top-1\.5 {
    margin-top: 0.375rem;
}
.ae .m-right-1\.5 {
    margin-right: 0.375rem;
}
.ae .m-bottom-1\.5 {
    margin-bottom: 0.375rem;
}
.ae .m-left-1\.5 {
    margin-left: 0.375rem;
}
.ae .m-2 {
    margin: 0.5rem;
}
.ae .mx-2 {
    margin-inline: 0.5rem;
}
.ae .my-2 {
    margin-block: 0.5rem;
}
.ae .m-top-2 {
    margin-top: 0.5rem;
}
.ae .m-right-2 {
    margin-right: 0.5rem;
}
.ae .m-bottom-2 {
    margin-bottom: 0.5rem;
}
.ae .m-left-2 {
    margin-left: 0.5rem;
}
.ae .m-2\.5 {
    margin: 0.625rem;
}
.ae .mx-2\.5 {
    margin-inline: 0.625rem;
}
.ae .my-2\.5 {
    margin-block: 0.625rem;
}
.ae .m-top-2\.5 {
    margin-top: 0.625rem;
}
.ae .m-right-2\.5 {
    margin-right: 0.625rem;
}
.ae .m-bottom-2\.5 {
    margin-bottom: 0.625rem;
}
.ae .m-left-2\.5 {
    margin-left: 0.625rem;
}
.ae .m-3 {
    margin: 0.75rem;
}
.ae .mx-3 {
    margin-inline: 0.75rem;
}
.ae .my-3 {
    margin-block: 0.75rem;
}
.ae .m-top-3 {
    margin-top: 0.75rem;
}
.ae .m-right-3 {
    margin-right: 0.75rem;
}
.ae .m-bottom-3 {
    margin-bottom: 0.75rem;
}
.ae .m-left-3 {
    margin-left: 0.75rem;
}
.ae .m-3\.5 {
    margin: 0.875rem;
}
.ae .mx-3\.5 {
    margin-inline: 0.875rem;
}
.ae .my-3\.5 {
    margin-block: 0.875rem;
}
.ae .m-top-3\.5 {
    margin-top: 0.875rem;
}
.ae .m-right-3\.5 {
    margin-right: 0.875rem;
}
.ae .m-bottom-3\.5 {
    margin-bottom: 0.875rem;
}
.ae .m-left-3\.5 {
    margin-left: 0.875rem;
}
.ae .m-4 {
    margin: 1rem;
}
.ae .mx-4 {
    margin-inline: 1rem;
}
.ae .my-4 {
    margin-block: 1rem;
}
.ae .m-top-4 {
    margin-top: 1rem;
}
.ae .m-right-4 {
    margin-right: 1rem;
}
.ae .m-bottom-4 {
    margin-bottom: 1rem;
}
.ae .m-left-4 {
    margin-left: 1rem;
}
.ae .m-5 {
    margin: 1.25rem;
}
.ae .mx-5 {
    margin-inline: 1.25rem;
}
.ae .my-5 {
    margin-block: 1.25rem;
}
.ae .m-top-5 {
    margin-top: 1.25rem;
}
.ae .m-right-5 {
    margin-right: 1.25rem;
}
.ae .m-bottom-5 {
    margin-bottom: 1.25rem;
}
.ae .m-left-5 {
    margin-left: 1.25rem;
}
.ae .m-6 {
    margin: 1.5rem;
}
.ae .mx-6 {
    margin-inline: 1.5rem;
}
.ae .my-6 {
    margin-block: 1.5rem;
}
.ae .m-top-6 {
    margin-top: 1.5rem;
}
.ae .m-right-6 {
    margin-right: 1.5rem;
}
.ae .m-bottom-6 {
    margin-bottom: 1.5rem;
}
.ae .m-left-6 {
    margin-left: 1.5rem;
}
.ae .m-7 {
    margin: 1.75rem;
}
.ae .mx-7 {
    margin-inline: 1.75rem;
}
.ae .my-7 {
    margin-block: 1.75rem;
}
.ae .m-top-7 {
    margin-top: 1.75rem;
}
.ae .m-right-7 {
    margin-right: 1.75rem;
}
.ae .m-bottom-7 {
    margin-bottom: 1.75rem;
}
.ae .m-left-7 {
    margin-left: 1.75rem;
}
.ae .m-8 {
    margin: 2rem;
}
.ae .mx-8 {
    margin-inline: 2rem;
}
.ae .my-8 {
    margin-block: 2rem;
}
.ae .m-top-8 {
    margin-top: 2rem;
}
.ae .m-right-8 {
    margin-right: 2rem;
}
.ae .m-bottom-8 {
    margin-bottom: 2rem;
}
.ae .m-left-8 {
    margin-left: 2rem;
}
.ae .m-9 {
    margin: 2.25rem;
}
.ae .mx-9 {
    margin-inline: 2.25rem;
}
.ae .my-9 {
    margin-block: 2.25rem;
}
.ae .m-top-9 {
    margin-top: 2.25rem;
}
.ae .m-right-9 {
    margin-right: 2.25rem;
}
.ae .m-bottom-9 {
    margin-bottom: 2.25rem;
}
.ae .m-left-9 {
    margin-left: 2.25rem;
}
.ae .m-10 {
    margin: 2.5rem;
}
.ae .mx-10 {
    margin-inline: 2.5rem;
}
.ae .my-10 {
    margin-block: 2.5rem;
}
.ae .m-top-10 {
    margin-top: 2.5rem;
}
.ae .m-right-10 {
    margin-right: 2.5rem;
}
.ae .m-bottom-10 {
    margin-bottom: 2.5rem;
}
.ae .m-left-10 {
    margin-left: 2.5rem;
}
.ae .m-11 {
    margin: 2.75rem;
}
.ae .mx-11 {
    margin-inline: 2.75rem;
}
.ae .my-11 {
    margin-block: 2.75rem;
}
.ae .m-top-11 {
    margin-top: 2.75rem;
}
.ae .m-right-11 {
    margin-right: 2.75rem;
}
.ae .m-bottom-11 {
    margin-bottom: 2.75rem;
}
.ae .m-left-11 {
    margin-left: 2.75rem;
}
.ae .m-12 {
    margin: 3rem;
}
.ae .mx-12 {
    margin-inline: 3rem;
}
.ae .my-12 {
    margin-block: 3rem;
}
.ae .m-top-12 {
    margin-top: 3rem;
}
.ae .m-right-12 {
    margin-right: 3rem;
}
.ae .m-bottom-12 {
    margin-bottom: 3rem;
}
.ae .m-left-12 {
    margin-left: 3rem;
}
.ae .m-14 {
    margin: 3.5rem;
}
.ae .mx-14 {
    margin-inline: 3.5rem;
}
.ae .my-14 {
    margin-block: 3.5rem;
}
.ae .m-top-14 {
    margin-top: 3.5rem;
}
.ae .m-right-14 {
    margin-right: 3.5rem;
}
.ae .m-bottom-14 {
    margin-bottom: 3.5rem;
}
.ae .m-left-14 {
    margin-left: 3.5rem;
}
.ae .m-16 {
    margin: 4rem;
}
.ae .mx-16 {
    margin-inline: 4rem;
}
.ae .my-16 {
    margin-block: 4rem;
}
.ae .m-top-16 {
    margin-top: 4rem;
}
.ae .m-right-16 {
    margin-right: 4rem;
}
.ae .m-bottom-16 {
    margin-bottom: 4rem;
}
.ae .m-left-16 {
    margin-left: 4rem;
}
.ae .m-20 {
    margin: 5rem;
}
.ae .mx-20 {
    margin-inline: 5rem;
}
.ae .my-20 {
    margin-block: 5rem;
}
.ae .m-top-20 {
    margin-top: 5rem;
}
.ae .m-right-20 {
    margin-right: 5rem;
}
.ae .m-bottom-20 {
    margin-bottom: 5rem;
}
.ae .m-left-20 {
    margin-left: 5rem;
}
.ae .m-24 {
    margin: 6rem;
}
.ae .mx-24 {
    margin-inline: 6rem;
}
.ae .my-24 {
    margin-block: 6rem;
}
.ae .m-top-24 {
    margin-top: 6rem;
}
.ae .m-right-24 {
    margin-right: 6rem;
}
.ae .m-bottom-24 {
    margin-bottom: 6rem;
}
.ae .m-left-24 {
    margin-left: 6rem;
}
.ae .m-28 {
    margin: 7rem;
}
.ae .mx-28 {
    margin-inline: 7rem;
}
.ae .my-28 {
    margin-block: 7rem;
}
.ae .m-top-28 {
    margin-top: 7rem;
}
.ae .m-right-28 {
    margin-right: 7rem;
}
.ae .m-bottom-28 {
    margin-bottom: 7rem;
}
.ae .m-left-28 {
    margin-left: 7rem;
}
.ae .m-32 {
    margin: 8rem;
}
.ae .mx-32 {
    margin-inline: 8rem;
}
.ae .my-32 {
    margin-block: 8rem;
}
.ae .m-top-32 {
    margin-top: 8rem;
}
.ae .m-right-32 {
    margin-right: 8rem;
}
.ae .m-bottom-32 {
    margin-bottom: 8rem;
}
.ae .m-left-32 {
    margin-left: 8rem;
}
.ae .m-36 {
    margin: 9rem;
}
.ae .mx-36 {
    margin-inline: 9rem;
}
.ae .my-36 {
    margin-block: 9rem;
}
.ae .m-top-36 {
    margin-top: 9rem;
}
.ae .m-right-36 {
    margin-right: 9rem;
}
.ae .m-bottom-36 {
    margin-bottom: 9rem;
}
.ae .m-left-36 {
    margin-left: 9rem;
}
.ae .m-40 {
    margin: 10rem;
}
.ae .mx-40 {
    margin-inline: 10rem;
}
.ae .my-40 {
    margin-block: 10rem;
}
.ae .m-top-40 {
    margin-top: 10rem;
}
.ae .m-right-40 {
    margin-right: 10rem;
}
.ae .m-bottom-40 {
    margin-bottom: 10rem;
}
.ae .m-left-40 {
    margin-left: 10rem;
}
.ae .m-44 {
    margin: 11rem;
}
.ae .mx-44 {
    margin-inline: 11rem;
}
.ae .my-44 {
    margin-block: 11rem;
}
.ae .m-top-44 {
    margin-top: 11rem;
}
.ae .m-right-44 {
    margin-right: 11rem;
}
.ae .m-bottom-44 {
    margin-bottom: 11rem;
}
.ae .m-left-44 {
    margin-left: 11rem;
}
.ae .m-48 {
    margin: 12rem;
}
.ae .mx-48 {
    margin-inline: 12rem;
}
.ae .my-48 {
    margin-block: 12rem;
}
.ae .m-top-48 {
    margin-top: 12rem;
}
.ae .m-right-48 {
    margin-right: 12rem;
}
.ae .m-bottom-48 {
    margin-bottom: 12rem;
}
.ae .m-left-48 {
    margin-left: 12rem;
}
.ae .m-56 {
    margin: 14rem;
}
.ae .mx-56 {
    margin-inline: 14rem;
}
.ae .my-56 {
    margin-block: 14rem;
}
.ae .m-top-56 {
    margin-top: 14rem;
}
.ae .m-right-56 {
    margin-right: 14rem;
}
.ae .m-bottom-56 {
    margin-bottom: 14rem;
}
.ae .m-left-56 {
    margin-left: 14rem;
}
.ae .m-64 {
    margin: 16rem;
}
.ae .mx-64 {
    margin-inline: 16rem;
}
.ae .my-64 {
    margin-block: 16rem;
}
.ae .m-top-64 {
    margin-top: 16rem;
}
.ae .m-right-64 {
    margin-right: 16rem;
}
.ae .m-bottom-64 {
    margin-bottom: 16rem;
}
.ae .m-left-64 {
    margin-left: 16rem;
}
.ae .m-72 {
    margin: 18rem;
}
.ae .mx-72 {
    margin-inline: 18rem;
}
.ae .my-72 {
    margin-block: 18rem;
}
.ae .m-top-72 {
    margin-top: 18rem;
}
.ae .m-right-72 {
    margin-right: 18rem;
}
.ae .m-bottom-72 {
    margin-bottom: 18rem;
}
.ae .m-left-72 {
    margin-left: 18rem;
}
.ae .m-80 {
    margin: 20rem;
}
.ae .mx-80 {
    margin-inline: 20rem;
}
.ae .my-80 {
    margin-block: 20rem;
}
.ae .m-top-80 {
    margin-top: 20rem;
}
.ae .m-right-80 {
    margin-right: 20rem;
}
.ae .m-bottom-80 {
    margin-bottom: 20rem;
}
.ae .m-left-80 {
    margin-left: 20rem;
}
.ae .m-96 {
    margin: 24rem;
}
.ae .mx-96 {
    margin-inline: 24rem;
}
.ae .my-96 {
    margin-block: 24rem;
}
.ae .m-top-96 {
    margin-top: 24rem;
}
.ae .m-right-96 {
    margin-right: 24rem;
}
.ae .m-bottom-96 {
    margin-bottom: 24rem;
}
.ae .m-left-96 {
    margin-left: 24rem;
}
.ae .p-0 {
    padding: 0px;
}
.ae .px-0 {
    padding-inline: 0px;
}
.ae .py-0 {
    padding-block: 0px;
}
.ae .p-top-0 {
    padding-top: 0px;
}
.ae .p-right-0 {
    padding-right: 0px;
}
.ae .p-bottom-0 {
    padding-bottom: 0px;
}
.ae .p-left-0 {
    padding-left: 0px;
}
.ae .p-px {
    padding: 1px;
}
.ae .px-px {
    padding-inline: 1px;
}
.ae .py-px {
    padding-block: 1px;
}
.ae .p-top-px {
    padding-top: 1px;
}
.ae .p-right-px {
    padding-right: 1px;
}
.ae .p-bottom-px {
    padding-bottom: 1px;
}
.ae .p-left-px {
    padding-left: 1px;
}
.ae .p-0\.5 {
    padding: 0.125rem;
}
.ae .px-0\.5 {
    padding-inline: 0.125rem;
}
.ae .py-0\.5 {
    padding-block: 0.125rem;
}
.ae .p-top-0\.5 {
    padding-top: 0.125rem;
}
.ae .p-right-0\.5 {
    padding-right: 0.125rem;
}
.ae .p-bottom-0\.5 {
    padding-bottom: 0.125rem;
}
.ae .p-left-0\.5 {
    padding-left: 0.125rem;
}
.ae .p-1 {
    padding: 0.25rem;
}
.ae .px-1 {
    padding-inline: 0.25rem;
}
.ae .py-1 {
    padding-block: 0.25rem;
}
.ae .p-top-1 {
    padding-top: 0.25rem;
}
.ae .p-right-1 {
    padding-right: 0.25rem;
}
.ae .p-bottom-1 {
    padding-bottom: 0.25rem;
}
.ae .p-left-1 {
    padding-left: 0.25rem;
}
.ae .p-1\.5 {
    padding: 0.375rem;
}
.ae .px-1\.5 {
    padding-inline: 0.375rem;
}
.ae .py-1\.5 {
    padding-block: 0.375rem;
}
.ae .p-top-1\.5 {
    padding-top: 0.375rem;
}
.ae .p-right-1\.5 {
    padding-right: 0.375rem;
}
.ae .p-bottom-1\.5 {
    padding-bottom: 0.375rem;
}
.ae .p-left-1\.5 {
    padding-left: 0.375rem;
}
.ae .p-2 {
    padding: 0.5rem;
}
.ae .px-2 {
    padding-inline: 0.5rem;
}
.ae .py-2 {
    padding-block: 0.5rem;
}
.ae .p-top-2 {
    padding-top: 0.5rem;
}
.ae .p-right-2 {
    padding-right: 0.5rem;
}
.ae .p-bottom-2 {
    padding-bottom: 0.5rem;
}
.ae .p-left-2 {
    padding-left: 0.5rem;
}
.ae .p-2\.5 {
    padding: 0.625rem;
}
.ae .px-2\.5 {
    padding-inline: 0.625rem;
}
.ae .py-2\.5 {
    padding-block: 0.625rem;
}
.ae .p-top-2\.5 {
    padding-top: 0.625rem;
}
.ae .p-right-2\.5 {
    padding-right: 0.625rem;
}
.ae .p-bottom-2\.5 {
    padding-bottom: 0.625rem;
}
.ae .p-left-2\.5 {
    padding-left: 0.625rem;
}
.ae .p-3 {
    padding: 0.75rem;
}
.ae .px-3 {
    padding-inline: 0.75rem;
}
.ae .py-3 {
    padding-block: 0.75rem;
}
.ae .p-top-3 {
    padding-top: 0.75rem;
}
.ae .p-right-3 {
    padding-right: 0.75rem;
}
.ae .p-bottom-3 {
    padding-bottom: 0.75rem;
}
.ae .p-left-3 {
    padding-left: 0.75rem;
}
.ae .p-3\.5 {
    padding: 0.875rem;
}
.ae .px-3\.5 {
    padding-inline: 0.875rem;
}
.ae .py-3\.5 {
    padding-block: 0.875rem;
}
.ae .p-top-3\.5 {
    padding-top: 0.875rem;
}
.ae .p-right-3\.5 {
    padding-right: 0.875rem;
}
.ae .p-bottom-3\.5 {
    padding-bottom: 0.875rem;
}
.ae .p-left-3\.5 {
    padding-left: 0.875rem;
}
.ae .p-4 {
    padding: 1rem;
}
.ae .px-4 {
    padding-inline: 1rem;
}
.ae .py-4 {
    padding-block: 1rem;
}
.ae .p-top-4 {
    padding-top: 1rem;
}
.ae .p-right-4 {
    padding-right: 1rem;
}
.ae .p-bottom-4 {
    padding-bottom: 1rem;
}
.ae .p-left-4 {
    padding-left: 1rem;
}
.ae .p-5 {
    padding: 1.25rem;
}
.ae .px-5 {
    padding-inline: 1.25rem;
}
.ae .py-5 {
    padding-block: 1.25rem;
}
.ae .p-top-5 {
    padding-top: 1.25rem;
}
.ae .p-right-5 {
    padding-right: 1.25rem;
}
.ae .p-bottom-5 {
    padding-bottom: 1.25rem;
}
.ae .p-left-5 {
    padding-left: 1.25rem;
}
.ae .p-6 {
    padding: 1.5rem;
}
.ae .px-6 {
    padding-inline: 1.5rem;
}
.ae .py-6 {
    padding-block: 1.5rem;
}
.ae .p-top-6 {
    padding-top: 1.5rem;
}
.ae .p-right-6 {
    padding-right: 1.5rem;
}
.ae .p-bottom-6 {
    padding-bottom: 1.5rem;
}
.ae .p-left-6 {
    padding-left: 1.5rem;
}
.ae .p-7 {
    padding: 1.75rem;
}
.ae .px-7 {
    padding-inline: 1.75rem;
}
.ae .py-7 {
    padding-block: 1.75rem;
}
.ae .p-top-7 {
    padding-top: 1.75rem;
}
.ae .p-right-7 {
    padding-right: 1.75rem;
}
.ae .p-bottom-7 {
    padding-bottom: 1.75rem;
}
.ae .p-left-7 {
    padding-left: 1.75rem;
}
.ae .p-8 {
    padding: 2rem;
}
.ae .px-8 {
    padding-inline: 2rem;
}
.ae .py-8 {
    padding-block: 2rem;
}
.ae .p-top-8 {
    padding-top: 2rem;
}
.ae .p-right-8 {
    padding-right: 2rem;
}
.ae .p-bottom-8 {
    padding-bottom: 2rem;
}
.ae .p-left-8 {
    padding-left: 2rem;
}
.ae .p-9 {
    padding: 2.25rem;
}
.ae .px-9 {
    padding-inline: 2.25rem;
}
.ae .py-9 {
    padding-block: 2.25rem;
}
.ae .p-top-9 {
    padding-top: 2.25rem;
}
.ae .p-right-9 {
    padding-right: 2.25rem;
}
.ae .p-bottom-9 {
    padding-bottom: 2.25rem;
}
.ae .p-left-9 {
    padding-left: 2.25rem;
}
.ae .p-10 {
    padding: 2.5rem;
}
.ae .px-10 {
    padding-inline: 2.5rem;
}
.ae .py-10 {
    padding-block: 2.5rem;
}
.ae .p-top-10 {
    padding-top: 2.5rem;
}
.ae .p-right-10 {
    padding-right: 2.5rem;
}
.ae .p-bottom-10 {
    padding-bottom: 2.5rem;
}
.ae .p-left-10 {
    padding-left: 2.5rem;
}
.ae .p-11 {
    padding: 2.75rem;
}
.ae .px-11 {
    padding-inline: 2.75rem;
}
.ae .py-11 {
    padding-block: 2.75rem;
}
.ae .p-top-11 {
    padding-top: 2.75rem;
}
.ae .p-right-11 {
    padding-right: 2.75rem;
}
.ae .p-bottom-11 {
    padding-bottom: 2.75rem;
}
.ae .p-left-11 {
    padding-left: 2.75rem;
}
.ae .p-12 {
    padding: 3rem;
}
.ae .px-12 {
    padding-inline: 3rem;
}
.ae .py-12 {
    padding-block: 3rem;
}
.ae .p-top-12 {
    padding-top: 3rem;
}
.ae .p-right-12 {
    padding-right: 3rem;
}
.ae .p-bottom-12 {
    padding-bottom: 3rem;
}
.ae .p-left-12 {
    padding-left: 3rem;
}
.ae .p-14 {
    padding: 3.5rem;
}
.ae .px-14 {
    padding-inline: 3.5rem;
}
.ae .py-14 {
    padding-block: 3.5rem;
}
.ae .p-top-14 {
    padding-top: 3.5rem;
}
.ae .p-right-14 {
    padding-right: 3.5rem;
}
.ae .p-bottom-14 {
    padding-bottom: 3.5rem;
}
.ae .p-left-14 {
    padding-left: 3.5rem;
}
.ae .p-16 {
    padding: 4rem;
}
.ae .px-16 {
    padding-inline: 4rem;
}
.ae .py-16 {
    padding-block: 4rem;
}
.ae .p-top-16 {
    padding-top: 4rem;
}
.ae .p-right-16 {
    padding-right: 4rem;
}
.ae .p-bottom-16 {
    padding-bottom: 4rem;
}
.ae .p-left-16 {
    padding-left: 4rem;
}
.ae .p-20 {
    padding: 5rem;
}
.ae .px-20 {
    padding-inline: 5rem;
}
.ae .py-20 {
    padding-block: 5rem;
}
.ae .p-top-20 {
    padding-top: 5rem;
}
.ae .p-right-20 {
    padding-right: 5rem;
}
.ae .p-bottom-20 {
    padding-bottom: 5rem;
}
.ae .p-left-20 {
    padding-left: 5rem;
}
.ae .p-24 {
    padding: 6rem;
}
.ae .px-24 {
    padding-inline: 6rem;
}
.ae .py-24 {
    padding-block: 6rem;
}
.ae .p-top-24 {
    padding-top: 6rem;
}
.ae .p-right-24 {
    padding-right: 6rem;
}
.ae .p-bottom-24 {
    padding-bottom: 6rem;
}
.ae .p-left-24 {
    padding-left: 6rem;
}
.ae .p-28 {
    padding: 7rem;
}
.ae .px-28 {
    padding-inline: 7rem;
}
.ae .py-28 {
    padding-block: 7rem;
}
.ae .p-top-28 {
    padding-top: 7rem;
}
.ae .p-right-28 {
    padding-right: 7rem;
}
.ae .p-bottom-28 {
    padding-bottom: 7rem;
}
.ae .p-left-28 {
    padding-left: 7rem;
}
.ae .p-32 {
    padding: 8rem;
}
.ae .px-32 {
    padding-inline: 8rem;
}
.ae .py-32 {
    padding-block: 8rem;
}
.ae .p-top-32 {
    padding-top: 8rem;
}
.ae .p-right-32 {
    padding-right: 8rem;
}
.ae .p-bottom-32 {
    padding-bottom: 8rem;
}
.ae .p-left-32 {
    padding-left: 8rem;
}
.ae .p-36 {
    padding: 9rem;
}
.ae .px-36 {
    padding-inline: 9rem;
}
.ae .py-36 {
    padding-block: 9rem;
}
.ae .p-top-36 {
    padding-top: 9rem;
}
.ae .p-right-36 {
    padding-right: 9rem;
}
.ae .p-bottom-36 {
    padding-bottom: 9rem;
}
.ae .p-left-36 {
    padding-left: 9rem;
}
.ae .p-40 {
    padding: 10rem;
}
.ae .px-40 {
    padding-inline: 10rem;
}
.ae .py-40 {
    padding-block: 10rem;
}
.ae .p-top-40 {
    padding-top: 10rem;
}
.ae .p-right-40 {
    padding-right: 10rem;
}
.ae .p-bottom-40 {
    padding-bottom: 10rem;
}
.ae .p-left-40 {
    padding-left: 10rem;
}
.ae .p-44 {
    padding: 11rem;
}
.ae .px-44 {
    padding-inline: 11rem;
}
.ae .py-44 {
    padding-block: 11rem;
}
.ae .p-top-44 {
    padding-top: 11rem;
}
.ae .p-right-44 {
    padding-right: 11rem;
}
.ae .p-bottom-44 {
    padding-bottom: 11rem;
}
.ae .p-left-44 {
    padding-left: 11rem;
}
.ae .p-48 {
    padding: 12rem;
}
.ae .px-48 {
    padding-inline: 12rem;
}
.ae .py-48 {
    padding-block: 12rem;
}
.ae .p-top-48 {
    padding-top: 12rem;
}
.ae .p-right-48 {
    padding-right: 12rem;
}
.ae .p-bottom-48 {
    padding-bottom: 12rem;
}
.ae .p-left-48 {
    padding-left: 12rem;
}
.ae .p-56 {
    padding: 14rem;
}
.ae .px-56 {
    padding-inline: 14rem;
}
.ae .py-56 {
    padding-block: 14rem;
}
.ae .p-top-56 {
    padding-top: 14rem;
}
.ae .p-right-56 {
    padding-right: 14rem;
}
.ae .p-bottom-56 {
    padding-bottom: 14rem;
}
.ae .p-left-56 {
    padding-left: 14rem;
}
.ae .p-64 {
    padding: 16rem;
}
.ae .px-64 {
    padding-inline: 16rem;
}
.ae .py-64 {
    padding-block: 16rem;
}
.ae .p-top-64 {
    padding-top: 16rem;
}
.ae .p-right-64 {
    padding-right: 16rem;
}
.ae .p-bottom-64 {
    padding-bottom: 16rem;
}
.ae .p-left-64 {
    padding-left: 16rem;
}
.ae .p-72 {
    padding: 18rem;
}
.ae .px-72 {
    padding-inline: 18rem;
}
.ae .py-72 {
    padding-block: 18rem;
}
.ae .p-top-72 {
    padding-top: 18rem;
}
.ae .p-right-72 {
    padding-right: 18rem;
}
.ae .p-bottom-72 {
    padding-bottom: 18rem;
}
.ae .p-left-72 {
    padding-left: 18rem;
}
.ae .p-80 {
    padding: 20rem;
}
.ae .px-80 {
    padding-inline: 20rem;
}
.ae .py-80 {
    padding-block: 20rem;
}
.ae .p-top-80 {
    padding-top: 20rem;
}
.ae .p-right-80 {
    padding-right: 20rem;
}
.ae .p-bottom-80 {
    padding-bottom: 20rem;
}
.ae .p-left-80 {
    padding-left: 20rem;
}
.ae .p-96 {
    padding: 24rem;
}
.ae .px-96 {
    padding-inline: 24rem;
}
.ae .py-96 {
    padding-block: 24rem;
}
.ae .p-top-96 {
    padding-top: 24rem;
}
.ae .p-right-96 {
    padding-right: 24rem;
}
.ae .p-bottom-96 {
    padding-bottom: 24rem;
}
.ae .p-left-96 {
    padding-left: 24rem;
}
.ae .d-none {
    display: none;
}
.ae .d-inline {
    display: inline;
}
.ae .d-inline-block {
    display: inline-block;
}
.ae .d-inline-flex {
    display: inline-flex;
}
.ae .d-inline-grid {
    display: inline-grid;
}
.ae .d-inline-table {
    display: inline-table;
}
.ae .d-block {
    display: block;
}
.ae .d-contents {
    display: contents;
}
.ae .d-grid {
    display: grid;
}
.ae .d-flex {
    display: flex;
}
.ae .d-flow-root {
    display: flow-root;
}
.ae .d-list-item {
    display: list-item;
}
.ae .d-table {
    display: table;
}
.ae .d-table-caption {
    display: table-caption;
}
.ae .d-table-column-group {
    display: table-column-group;
}
.ae .d-table-header-group {
    display: table-header-group;
}
.ae .d-table-footer-group {
    display: table-footer-group;
}
.ae .d-table-row-group {
    display: table-row-group;
}
.ae .d-table-cell {
    display: table-cell;
}
.ae .d-table-column {
    display: table-column;
}
.ae .d-table-row {
    display: table-row;
}
.ae .layer-auto {
    z-index: auto;
}
.ae .layer-0 {
    z-index: 0;
}
.ae .layer-10 {
    z-index: 10;
}
.ae .layer-20 {
    z-index: 20;
}
.ae .layer-30 {
    z-index: 30;
}
.ae .layer-40 {
    z-index: 40;
}
.ae .layer-50 {
    z-index: 50;
}
.ae .layer-60 {
    z-index: 60;
}
.ae .layer-70 {
    z-index: 70;
}
.ae .layer-80 {
    z-index: 80;
}
.ae .layer90 {
    z-index: 90;
}
.ae .layer-100 {
    z-index: 100;
}
.ae .layer-200 {
    z-index: 200;
}
.ae .layer-300 {
    z-index: 300;
}
.ae .layer-400 {
    z-index: 400;
}
.ae .layer-500 {
    z-index: 500;
}
.ae .layer-600 {
    z-index: 600;
}
.ae .layer-700 {
    z-index: 700;
}
.ae .layer-800 {
    z-index: 800;
}
.ae .layer-900 {
    z-index: 900;
}
.ae .\-layer-10 {
    z-index: -10;
}
.ae .\-layer-20 {
    z-index: -20;
}
.ae .\-layer-30 {
    z-index: -30;
}
.ae .\-layer-40 {
    z-index: -40;
}
.ae .\-layer-50 {
    z-index: -50;
}
.ae .\-layer-60 {
    z-index: -60;
}
.ae .\-layer-70 {
    z-index: -70;
}
.ae .\-layer-80 {
    z-index: -80;
}
.ae .\-layer-90 {
    z-index: -90;
}
.ae .\-layer-100 {
    z-index: -100;
}
.ae .\-layer-200 {
    z-index: -200;
}
.ae .\-layer-300 {
    z-index: -300;
}
.ae .\-layer-400 {
    z-index: -400;
}
.ae .\-layer-500 {
    z-index: -500;
}
.ae .\-layer-600 {
    z-index: -600;
}
.ae .\-layer-700 {
    z-index: -700;
}
.ae .\-layer-800 {
    z-index: -800;
}
.ae .\-layer-900 {
    z-index: -900;
}
.ae .only-sr {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    clip: rect(1px 1px 1px 1px);
    clip-path: inset(50%);
    overflow: hidden;
}
.ae [class~=divider-x] {
    border-top-width: 0px;
    border-bottom-width: 0px;
}
.ae .divider-x {
    border-right-width: 0px;
    border-left-width: 1px;
}
.ae .divider-x-2 {
    border-right-width: 0px;
    border-left-width: 2px;
}
.ae .divider-x-4 {
    border-right-width: 0px;
    border-left-width: 4px;
}
.ae .divider-x-8 {
    border-right-width: 0px;
    border-left-width: 8px;
}
.ae [class~=divider-y] {
    border-left-width: 0px;
    border-right-width: 0px;
}
.ae .divider-y {
    border-bottom-width: 0px;
    border-top-width: 1px;
}
.ae .divider-y-2 {
    border-bottom-width: 0px;
    border-top-width: 2px;
}
.ae .divider-y-4 {
    border-bottom-width: 0px;
    border-top-width: 4px;
}
.ae .divider-y-8 {
    border-bottom-width: 0px;
    border-top-width: 8px;
}
.ae .divider-solid {
    border-style: solid;
}
.ae .divider-dotted {
    border-style: dotted;
}
.ae .divider-dashed {
    border-style: dashed;
}
.ae .divider-double {
    border-style: double;
}
.ae .divider-groove {
    border-style: groove;
}
.ae .divider-ridge {
    border-style: ridge;
}
.ae .divider-inset {
    border-style: inset;
}
.ae .divider-outset {
    border-style: outset;
}
.ae .divider-white {
    border-color: #ffffff;
}
.ae .divider-neutral-50 {
    border-color: #fafafa;
}
.ae .divider-neutral-100 {
    border-color: #f5f5f5;
}
.ae .divider-neutral-200 {
    border-color: #e5e5e5;
}
.ae .divider-neutral-300 {
    border-color: #d4d4d4;
}
.ae .divider-neutral-400 {
    border-color: #a3a3a3;
}
.ae .divider-neutral-500 {
    border-color: #737373;
}
.ae .divider-neutral-600 {
    border-color: #525252;
}
.ae .divider-neutral-700 {
    border-color: #404040;
}
.ae .divider-neutral-800 {
    border-color: #262626;
}
.ae .divider-neutral-900 {
    border-color: #171717;
}
.ae .divider-neutral-950 {
    border-color: #0a0a0a;
}
.ae .divider-black {
    border-color: #000000;
}
.ae .divider-gray-50 {
    border-color: #f9fafb;
}
.ae .divider-gray-100 {
    border-color: #f3f4f6;
}
.ae .divider-gray-200 {
    border-color: #e5e7eb;
}
.ae .divider-gray-300 {
    border-color: #d1d5db;
}
.ae .divider-gray-400 {
    border-color: #9ca3af;
}
.ae .divider-gray-500 {
    border-color: #6b7280;
}
.ae .divider-gray-600 {
    border-color: #4b5563;
}
.ae .divider-gray-700 {
    border-color: #374151;
}
.ae .divider-gray-800 {
    border-color: #1f2937;
}
.ae .divider-gray-900 {
    border-color: #111827;
}
.ae .divider-gray-950 {
    border-color: #030712;
}
.ae .divider-slate-50 {
    border-color: #f8fafc;
}
.ae .divider-slate-100 {
    border-color: #f1f5f9;
}
.ae .divider-slate-200 {
    border-color: #e2e8f0;
}
.ae .divider-slate-300 {
    border-color: #cbd5e1;
}
.ae .divider-slate-400 {
    border-color: #94a3b8;
}
.ae .divider-slate-500 {
    border-color: #64748b;
}
.ae .divider-slate-600 {
    border-color: #475569;
}
.ae .divider-slate-700 {
    border-color: #334155;
}
.ae .divider-slate-800 {
    border-color: #1e293b;
}
.ae .divider-slate-900 {
    border-color: #0f172a;
}
.ae .divider-slate-950 {
    border-color: #020617;
}
.ae .divider-zinc-50 {
    border-color: #fafafa;
}
.ae .divider-zinc-100 {
    border-color: #f4f4f5;
}
.ae .divider-zinc-200 {
    border-color: #e4e4e7;
}
.ae .divider-zinc-300 {
    border-color: #d4d4d8;
}
.ae .divider-zinc-400 {
    border-color: #a1a1aa;
}
.ae .divider-zinc-500 {
    border-color: #71717a;
}
.ae .divider-zinc-600 {
    border-color: #52525b;
}
.ae .divider-zinc-700 {
    border-color: #3f3f46;
}
.ae .divider-zinc-800 {
    border-color: #27272a;
}
.ae .divider-zinc-900 {
    border-color: #18181b;
}
.ae .divider-zinc-950 {
    border-color: #09090b;
}
.ae .divider-stone-50 {
    border-color: #fafaf9;
}
.ae .divider-stone-100 {
    border-color: #f5f5f4;
}
.ae .divider-stone-200 {
    border-color: #e7e5e4;
}
.ae .divider-stone-300 {
    border-color: #d6d3d1;
}
.ae .divider-stone-400 {
    border-color: #a8a29e;
}
.ae .divider-stone-500 {
    border-color: #78716c;
}
.ae .divider-stone-600 {
    border-color: #57534e;
}
.ae .divider-stone-700 {
    border-color: #44403c;
}
.ae .divider-stone-800 {
    border-color: #292524;
}
.ae .divider-stone-900 {
    border-color: #1c1917;
}
.ae .divider-stone-950 {
    border-color: #0c0a09;
}
.ae .divider-red-50 {
    border-color: #fef2f2;
}
.ae .divider-red-100 {
    border-color: #fee2e2;
}
.ae .divider-red-200 {
    border-color: #fecaca;
}
.ae .divider-red-300 {
    border-color: #fca5a5;
}
.ae .divider-red-400 {
    border-color: #f87171;
}
.ae .divider-red-500 {
    border-color: #ef4444;
}
.ae .divider-red-600 {
    border-color: #dc2626;
}
.ae .divider-red-700 {
    border-color: #b91c1c;
}
.ae .divider-red-800 {
    border-color: #991b1b;
}
.ae .divider-red-900 {
    border-color: #7f1d1d;
}
.ae .divider-red-950 {
    border-color: #450a0a;
}
.ae .divider-orange-50 {
    border-color: #fff7ed;
}
.ae .divider-orange-100 {
    border-color: #ffedd5;
}
.ae .divider-orange-200 {
    border-color: #fed7aa;
}
.ae .divider-orange-300 {
    border-color: #fdba74;
}
.ae .divider-orange-400 {
    border-color: #fb923c;
}
.ae .divider-orange-500 {
    border-color: #f97316;
}
.ae .divider-orange-600 {
    border-color: #ea580c;
}
.ae .divider-orange-700 {
    border-color: #c2410c;
}
.ae .divider-orange-800 {
    border-color: #9a3412;
}
.ae .divider-orange-900 {
    border-color: #7c2d12;
}
.ae .divider-orange-950 {
    border-color: #431407;
}
.ae .divider-amber-50 {
    border-color: #fffbeb;
}
.ae .divider-amber-100 {
    border-color: #fef3c7;
}
.ae .divider-amber-200 {
    border-color: #fde68a;
}
.ae .divider-amber-300 {
    border-color: #fcd34d;
}
.ae .divider-amber-400 {
    border-color: #fbbf24;
}
.ae .divider-amber-500 {
    border-color: #f59e0b;
}
.ae .divider-amber-600 {
    border-color: #d97706;
}
.ae .divider-amber-700 {
    border-color: #b45309;
}
.ae .divider-amber-800 {
    border-color: #92400e;
}
.ae .divider-amber-900 {
    border-color: #78350f;
}
.ae .divider-amber-950 {
    border-color: #451a03;
}
.ae .divider-yellow-50 {
    border-color: #fefce8;
}
.ae .divider-yellow-100 {
    border-color: #fef9c3;
}
.ae .divider-yellow-200 {
    border-color: #fef08a;
}
.ae .divider-yellow-300 {
    border-color: #fde047;
}
.ae .divider-yellow-400 {
    border-color: #facc15;
}
.ae .divider-yellow-500 {
    border-color: #eab308;
}
.ae .divider-yellow-600 {
    border-color: #ca8a04;
}
.ae .divider-yellow-700 {
    border-color: #a16207;
}
.ae .divider-yellow-800 {
    border-color: #854d0e;
}
.ae .divider-yellow-900 {
    border-color: #713f12;
}
.ae .divider-yellow-950 {
    border-color: #422006;
}
.ae .divider-lime-50 {
    border-color: #f7fee7;
}
.ae .divider-lime-100 {
    border-color: #ecfccb;
}
.ae .divider-lime-200 {
    border-color: #d9f99d;
}
.ae .divider-lime-300 {
    border-color: #bef264;
}
.ae .divider-lime-400 {
    border-color: #a3e635;
}
.ae .divider-lime-500 {
    border-color: #84cc16;
}
.ae .divider-lime-600 {
    border-color: #65a30d;
}
.ae .divider-lime-700 {
    border-color: #4d7c0f;
}
.ae .divider-lime-800 {
    border-color: #3f6212;
}
.ae .divider-lime-900 {
    border-color: #365314;
}
.ae .divider-lime-950 {
    border-color: #1a2e05;
}
.ae .divider-green-50 {
    border-color: #f0fdf4;
}
.ae .divider-green-100 {
    border-color: #dcfce7;
}
.ae .divider-green-200 {
    border-color: #bbf7d0;
}
.ae .divider-green-300 {
    border-color: #86efac;
}
.ae .divider-green-400 {
    border-color: #4ade80;
}
.ae .divider-green-500 {
    border-color: #22c55e;
}
.ae .divider-green-600 {
    border-color: #16a34a;
}
.ae .divider-green-700 {
    border-color: #15803d;
}
.ae .divider-green-800 {
    border-color: #166534;
}
.ae .divider-green-900 {
    border-color: #14532d;
}
.ae .divider-green-950 {
    border-color: #052e16;
}
.ae .divider-emerald-50 {
    border-color: #ecfdf5;
}
.ae .divider-emerald-100 {
    border-color: #d1fae5;
}
.ae .divider-emerald-200 {
    border-color: #a7f3d0;
}
.ae .divider-emerald-300 {
    border-color: #6ee7b7;
}
.ae .divider-emerald-400 {
    border-color: #34d399;
}
.ae .divider-emerald-500 {
    border-color: #10b981;
}
.ae .divider-emerald-600 {
    border-color: #059669;
}
.ae .divider-emerald-700 {
    border-color: #047857;
}
.ae .divider-emerald-800 {
    border-color: #065f46;
}
.ae .divider-emerald-900 {
    border-color: #064e3b;
}
.ae .divider-emerald-950 {
    border-color: #022c22;
}
.ae .divider-teal-50 {
    border-color: #f0fdfa;
}
.ae .divider-teal-100 {
    border-color: #ccfbf1;
}
.ae .divider-teal-200 {
    border-color: #99f6e4;
}
.ae .divider-teal-300 {
    border-color: #5eead4;
}
.ae .divider-teal-400 {
    border-color: #2dd4bf;
}
.ae .divider-teal-500 {
    border-color: #14b8a6;
}
.ae .divider-teal-600 {
    border-color: #0d9488;
}
.ae .divider-teal-700 {
    border-color: #0f766e;
}
.ae .divider-teal-800 {
    border-color: #115e59;
}
.ae .divider-teal-900 {
    border-color: #134e4a;
}
.ae .divider-teal-950 {
    border-color: #042f2e;
}
.ae .divider-cyan-50 {
    border-color: #ecfeff;
}
.ae .divider-cyan-100 {
    border-color: #cffafe;
}
.ae .divider-cyan-200 {
    border-color: #a5f3fc;
}
.ae .divider-cyan-300 {
    border-color: #67e8f9;
}
.ae .divider-cyan-400 {
    border-color: #22d3ee;
}
.ae .divider-cyan-500 {
    border-color: #06b6d4;
}
.ae .divider-cyan-600 {
    border-color: #0891b2;
}
.ae .divider-cyan-700 {
    border-color: #0e7490;
}
.ae .divider-cyan-800 {
    border-color: #155e75;
}
.ae .divider-cyan-900 {
    border-color: #164e63;
}
.ae .divider-cyan-950 {
    border-color: #083344;
}
.ae .divider-sky-50 {
    border-color: #f0f9ff;
}
.ae .divider-sky-100 {
    border-color: #e0f2fe;
}
.ae .divider-sky-200 {
    border-color: #bae6fd;
}
.ae .divider-sky-300 {
    border-color: #7dd3fc;
}
.ae .divider-sky-400 {
    border-color: #38bdf8;
}
.ae .divider-sky-500 {
    border-color: #0ea5e9;
}
.ae .divider-sky-600 {
    border-color: #0284c7;
}
.ae .divider-sky-700 {
    border-color: #0369a1;
}
.ae .divider-sky-800 {
    border-color: #075985;
}
.ae .divider-sky-900 {
    border-color: #0c4a6e;
}
.ae .divider-sky-950 {
    border-color: #082f49;
}
.ae .divider-blue-50 {
    border-color: #eff6ff;
}
.ae .divider-blue-100 {
    border-color: #dbeafe;
}
.ae .divider-blue-200 {
    border-color: #bfdbfe;
}
.ae .divider-blue-300 {
    border-color: #93c5fd;
}
.ae .divider-blue-400 {
    border-color: #60a5fa;
}
.ae .divider-blue-500 {
    border-color: #3b82f6;
}
.ae .divider-blue-600 {
    border-color: #2563eb;
}
.ae .divider-blue-700 {
    border-color: #1d4ed8;
}
.ae .divider-blue-800 {
    border-color: #1e40af;
}
.ae .divider-blue-900 {
    border-color: #1e3a8a;
}
.ae .divider-blue-950 {
    border-color: #172554;
}
.ae .divider-indigo-50 {
    border-color: #eef2ff;
}
.ae .divider-indigo-100 {
    border-color: #e0e7ff;
}
.ae .divider-indigo-200 {
    border-color: #c7d2fe;
}
.ae .divider-indigo-300 {
    border-color: #a5b4fc;
}
.ae .divider-indigo-400 {
    border-color: #818cf8;
}
.ae .divider-indigo-500 {
    border-color: #6366f1;
}
.ae .divider-indigo-600 {
    border-color: #4f46e5;
}
.ae .divider-indigo-700 {
    border-color: #4338ca;
}
.ae .divider-indigo-800 {
    border-color: #3730a3;
}
.ae .divider-indigo-900 {
    border-color: #312e81;
}
.ae .divider-indigo-950 {
    border-color: #1e1b4b;
}
.ae .divider-violet-50 {
    border-color: #f5f3ff;
}
.ae .divider-violet-100 {
    border-color: #ede9fe;
}
.ae .divider-violet-200 {
    border-color: #ddd6fe;
}
.ae .divider-violet-300 {
    border-color: #c4b5fd;
}
.ae .divider-violet-400 {
    border-color: #a78bfa;
}
.ae .divider-violet-500 {
    border-color: #8b5cf6;
}
.ae .divider-violet-600 {
    border-color: #7c3aed;
}
.ae .divider-violet-700 {
    border-color: #6d28d9;
}
.ae .divider-violet-800 {
    border-color: #5b21b6;
}
.ae .divider-violet-900 {
    border-color: #4c1d95;
}
.ae .divider-violet-950 {
    border-color: #2e1065;
}
.ae .divider-purple-50 {
    border-color: #faf5ff;
}
.ae .divider-purple-100 {
    border-color: #f3e8ff;
}
.ae .divider-purple-200 {
    border-color: #e9d5ff;
}
.ae .divider-purple-300 {
    border-color: #d8b4fe;
}
.ae .divider-purple-400 {
    border-color: #c084fc;
}
.ae .divider-purple-500 {
    border-color: #a855f7;
}
.ae .divider-purple-600 {
    border-color: #9333ea;
}
.ae .divider-purple-700 {
    border-color: #7e22ce;
}
.ae .divider-purple-800 {
    border-color: #6b21a8;
}
.ae .divider-purple-900 {
    border-color: #581c87;
}
.ae .divider-purple-950 {
    border-color: #3b0764;
}
.ae .divider-fuchsia-50 {
    border-color: #fdf4ff;
}
.ae .divider-fuchsia-100 {
    border-color: #fae8ff;
}
.ae .divider-fuchsia-200 {
    border-color: #f5d0fe;
}
.ae .divider-fuchsia-300 {
    border-color: #f0abfc;
}
.ae .divider-fuchsia-400 {
    border-color: #e879f9;
}
.ae .divider-fuchsia-500 {
    border-color: #d946ef;
}
.ae .divider-fuchsia-600 {
    border-color: #c026d3;
}
.ae .divider-fuchsia-700 {
    border-color: #a21caf;
}
.ae .divider-fuchsia-800 {
    border-color: #86198f;
}
.ae .divider-fuchsia-900 {
    border-color: #701a75;
}
.ae .divider-fuchsia-950 {
    border-color: #4a044e;
}
.ae .divider-pink-50 {
    border-color: #fdf2f8;
}
.ae .divider-pink-100 {
    border-color: #fce7f3;
}
.ae .divider-pink-200 {
    border-color: #fbcfe8;
}
.ae .divider-pink-300 {
    border-color: #f9a8d4;
}
.ae .divider-pink-400 {
    border-color: #f472b6;
}
.ae .divider-pink-500 {
    border-color: #ec4899;
}
.ae .divider-pink-600 {
    border-color: #db2777;
}
.ae .divider-pink-700 {
    border-color: #be185d;
}
.ae .divider-pink-800 {
    border-color: #9d174d;
}
.ae .divider-pink-900 {
    border-color: #831843;
}
.ae .divider-pink-950 {
    border-color: #500724;
}
.ae .divider-rose-50 {
    border-color: #fff1f2;
}
.ae .divider-rose-100 {
    border-color: #ffe4e6;
}
.ae .divider-rose-200 {
    border-color: #fecdd3;
}
.ae .divider-rose-300 {
    border-color: #fda4af;
}
.ae .divider-rose-400 {
    border-color: #fb7185;
}
.ae .divider-rose-500 {
    border-color: #f43f5e;
}
.ae .divider-rose-600 {
    border-color: #e11d48;
}
.ae .divider-rose-700 {
    border-color: #be123c;
}
.ae .divider-rose-800 {
    border-color: #9f1239;
}
.ae .divider-rose-900 {
    border-color: #881337;
}
.ae .divider-rose-950 {
    border-color: #4c0519;
}
@media screen and (min-width: 360px) {
    .ae .xs\:d-none {
        display: none;
    }
    .ae .xs\:d-inline {
        display: inline;
    }
    .ae .xs\:d-inline-block {
        display: inline-block;
    }
    .ae .xs\:d-inline-flex {
        display: inline-flex;
    }
    .ae .xs\:d-inline-grid {
        display: inline-grid;
    }
    .ae .xs\:d-inline-table {
        display: inline-table;
    }
    .ae .xs\:d-block {
        display: block;
    }
    .ae .xs\:d-contents {
        display: contents;
    }
    .ae .xs\:d-grid {
        display: grid;
    }
    .ae .xs\:d-flex {
        display: flex;
    }
    .ae .xs\:d-flow-root {
        display: flow-root;
    }
    .ae .xs\:d-list-item {
        display: list-item;
    }
    .ae .xs\:d-table {
        display: table;
    }
    .ae .xs\:d-table-caption {
        display: table-caption;
    }
    .ae .xs\:d-table-column-group {
        display: table-column-group;
    }
    .ae .xs\:d-table-header-group {
        display: table-header-group;
    }
    .ae .xs\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .xs\:d-table-row-group {
        display: table-row-group;
    }
    .ae .xs\:d-table-cell {
        display: table-cell;
    }
    .ae .xs\:d-table-column {
        display: table-column;
    }
    .ae .xs\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 640px) {
    .ae .sm\:d-none {
        display: none;
    }
    .ae .sm\:d-inline {
        display: inline;
    }
    .ae .sm\:d-inline-block {
        display: inline-block;
    }
    .ae .sm\:d-inline-flex {
        display: inline-flex;
    }
    .ae .sm\:d-inline-grid {
        display: inline-grid;
    }
    .ae .sm\:d-inline-table {
        display: inline-table;
    }
    .ae .sm\:d-block {
        display: block;
    }
    .ae .sm\:d-contents {
        display: contents;
    }
    .ae .sm\:d-grid {
        display: grid;
    }
    .ae .sm\:d-flex {
        display: flex;
    }
    .ae .sm\:d-flow-root {
        display: flow-root;
    }
    .ae .sm\:d-list-item {
        display: list-item;
    }
    .ae .sm\:d-table {
        display: table;
    }
    .ae .sm\:d-table-caption {
        display: table-caption;
    }
    .ae .sm\:d-table-column-group {
        display: table-column-group;
    }
    .ae .sm\:d-table-header-group {
        display: table-header-group;
    }
    .ae .sm\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .sm\:d-table-row-group {
        display: table-row-group;
    }
    .ae .sm\:d-table-cell {
        display: table-cell;
    }
    .ae .sm\:d-table-column {
        display: table-column;
    }
    .ae .sm\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 768px) {
    .ae .md\:d-none {
        display: none;
    }
    .ae .md\:d-inline {
        display: inline;
    }
    .ae .md\:d-inline-block {
        display: inline-block;
    }
    .ae .md\:d-inline-flex {
        display: inline-flex;
    }
    .ae .md\:d-inline-grid {
        display: inline-grid;
    }
    .ae .md\:d-inline-table {
        display: inline-table;
    }
    .ae .md\:d-block {
        display: block;
    }
    .ae .md\:d-contents {
        display: contents;
    }
    .ae .md\:d-grid {
        display: grid;
    }
    .ae .md\:d-flex {
        display: flex;
    }
    .ae .md\:d-flow-root {
        display: flow-root;
    }
    .ae .md\:d-list-item {
        display: list-item;
    }
    .ae .md\:d-table {
        display: table;
    }
    .ae .md\:d-table-caption {
        display: table-caption;
    }
    .ae .md\:d-table-column-group {
        display: table-column-group;
    }
    .ae .md\:d-table-header-group {
        display: table-header-group;
    }
    .ae .md\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .md\:d-table-row-group {
        display: table-row-group;
    }
    .ae .md\:d-table-cell {
        display: table-cell;
    }
    .ae .md\:d-table-column {
        display: table-column;
    }
    .ae .md\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 1024px) {
    .ae .lg\:d-none {
        display: none;
    }
    .ae .lg\:d-inline {
        display: inline;
    }
    .ae .lg\:d-inline-block {
        display: inline-block;
    }
    .ae .lg\:d-inline-flex {
        display: inline-flex;
    }
    .ae .lg\:d-inline-grid {
        display: inline-grid;
    }
    .ae .lg\:d-inline-table {
        display: inline-table;
    }
    .ae .lg\:d-block {
        display: block;
    }
    .ae .lg\:d-contents {
        display: contents;
    }
    .ae .lg\:d-grid {
        display: grid;
    }
    .ae .lg\:d-flex {
        display: flex;
    }
    .ae .lg\:d-flow-root {
        display: flow-root;
    }
    .ae .lg\:d-list-item {
        display: list-item;
    }
    .ae .lg\:d-table {
        display: table;
    }
    .ae .lg\:d-table-caption {
        display: table-caption;
    }
    .ae .lg\:d-table-column-group {
        display: table-column-group;
    }
    .ae .lg\:d-table-header-group {
        display: table-header-group;
    }
    .ae .lg\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .lg\:d-table-row-group {
        display: table-row-group;
    }
    .ae .lg\:d-table-cell {
        display: table-cell;
    }
    .ae .lg\:d-table-column {
        display: table-column;
    }
    .ae .lg\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 1280px) {
    .ae .xl\:d-none {
        display: none;
    }
    .ae .xl\:d-inline {
        display: inline;
    }
    .ae .xl\:d-inline-block {
        display: inline-block;
    }
    .ae .xl\:d-inline-flex {
        display: inline-flex;
    }
    .ae .xl\:d-inline-grid {
        display: inline-grid;
    }
    .ae .xl\:d-inline-table {
        display: inline-table;
    }
    .ae .xl\:d-block {
        display: block;
    }
    .ae .xl\:d-contents {
        display: contents;
    }
    .ae .xl\:d-grid {
        display: grid;
    }
    .ae .xl\:d-flex {
        display: flex;
    }
    .ae .xl\:d-flow-root {
        display: flow-root;
    }
    .ae .xl\:d-list-item {
        display: list-item;
    }
    .ae .xl\:d-table {
        display: table;
    }
    .ae .xl\:d-table-caption {
        display: table-caption;
    }
    .ae .xl\:d-table-column-group {
        display: table-column-group;
    }
    .ae .xl\:d-table-header-group {
        display: table-header-group;
    }
    .ae .xl\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .xl\:d-table-row-group {
        display: table-row-group;
    }
    .ae .xl\:d-table-cell {
        display: table-cell;
    }
    .ae .xl\:d-table-column {
        display: table-column;
    }
    .ae .xl\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 1536px) {
    .ae .\32 xl\:d-none {
        display: none;
    }
    .ae .\32 xl\:d-inline {
        display: inline;
    }
    .ae .\32 xl\:d-inline-block {
        display: inline-block;
    }
    .ae .\32 xl\:d-inline-flex {
        display: inline-flex;
    }
    .ae .\32 xl\:d-inline-grid {
        display: inline-grid;
    }
    .ae .\32 xl\:d-inline-table {
        display: inline-table;
    }
    .ae .\32 xl\:d-block {
        display: block;
    }
    .ae .\32 xl\:d-contents {
        display: contents;
    }
    .ae .\32 xl\:d-grid {
        display: grid;
    }
    .ae .\32 xl\:d-flex {
        display: flex;
    }
    .ae .\32 xl\:d-flow-root {
        display: flow-root;
    }
    .ae .\32 xl\:d-list-item {
        display: list-item;
    }
    .ae .\32 xl\:d-table {
        display: table;
    }
    .ae .\32 xl\:d-table-caption {
        display: table-caption;
    }
    .ae .\32 xl\:d-table-column-group {
        display: table-column-group;
    }
    .ae .\32 xl\:d-table-header-group {
        display: table-header-group;
    }
    .ae .\32 xl\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .\32 xl\:d-table-row-group {
        display: table-row-group;
    }
    .ae .\32 xl\:d-table-cell {
        display: table-cell;
    }
    .ae .\32 xl\:d-table-column {
        display: table-column;
    }
    .ae .\32 xl\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 2048px) {
    .ae .\32 k\:d-none {
        display: none;
    }
    .ae .\32 k\:d-inline {
        display: inline;
    }
    .ae .\32 k\:d-inline-block {
        display: inline-block;
    }
    .ae .\32 k\:d-inline-flex {
        display: inline-flex;
    }
    .ae .\32 k\:d-inline-grid {
        display: inline-grid;
    }
    .ae .\32 k\:d-inline-table {
        display: inline-table;
    }
    .ae .\32 k\:d-block {
        display: block;
    }
    .ae .\32 k\:d-contents {
        display: contents;
    }
    .ae .\32 k\:d-grid {
        display: grid;
    }
    .ae .\32 k\:d-flex {
        display: flex;
    }
    .ae .\32 k\:d-flow-root {
        display: flow-root;
    }
    .ae .\32 k\:d-list-item {
        display: list-item;
    }
    .ae .\32 k\:d-table {
        display: table;
    }
    .ae .\32 k\:d-table-caption {
        display: table-caption;
    }
    .ae .\32 k\:d-table-column-group {
        display: table-column-group;
    }
    .ae .\32 k\:d-table-header-group {
        display: table-header-group;
    }
    .ae .\32 k\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .\32 k\:d-table-row-group {
        display: table-row-group;
    }
    .ae .\32 k\:d-table-cell {
        display: table-cell;
    }
    .ae .\32 k\:d-table-column {
        display: table-column;
    }
    .ae .\32 k\:d-table-row {
        display: table-row;
    }
}
@media screen and (min-width: 3840px) {
    .ae .\34 k\:d-none {
        display: none;
    }
    .ae .\34 k\:d-inline {
        display: inline;
    }
    .ae .\34 k\:d-inline-block {
        display: inline-block;
    }
    .ae .\34 k\:d-inline-flex {
        display: inline-flex;
    }
    .ae .\34 k\:d-inline-grid {
        display: inline-grid;
    }
    .ae .\34 k\:d-inline-table {
        display: inline-table;
    }
    .ae .\34 k\:d-block {
        display: block;
    }
    .ae .\34 k\:d-contents {
        display: contents;
    }
    .ae .\34 k\:d-grid {
        display: grid;
    }
    .ae .\34 k\:d-flex {
        display: flex;
    }
    .ae .\34 k\:d-flow-root {
        display: flow-root;
    }
    .ae .\34 k\:d-list-item {
        display: list-item;
    }
    .ae .\34 k\:d-table {
        display: table;
    }
    .ae .\34 k\:d-table-caption {
        display: table-caption;
    }
    .ae .\34 k\:d-table-column-group {
        display: table-column-group;
    }
    .ae .\34 k\:d-table-header-group {
        display: table-header-group;
    }
    .ae .\34 k\:d-table-footer-group {
        display: table-footer-group;
    }
    .ae .\34 k\:d-table-row-group {
        display: table-row-group;
    }
    .ae .\34 k\:d-table-cell {
        display: table-cell;
    }
    .ae .\34 k\:d-table-column {
        display: table-column;
    }
    .ae .\34 k\:d-table-row {
        display: table-row;
    }
}

*[data-aetheme=dark-cobalt] {
    --theme-color-primary: #0A083A;
    --theme-color-secondary: #3E3B87;
    --theme-color-accent: #3E3B87;
    --theme-color-muted: #B3B2D4;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-coffee] {
    --theme-color-primary: #6C3B06;
    --theme-color-secondary: #311a01;
    --theme-color-accent: #311a01;
    --theme-color-muted: #FFEDD9;
    --theme-color-text: #FDDAC0;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-sunset] {
    --theme-color-primary: #451952;
    --theme-color-secondary: #662549;
    --theme-color-accent: #662549;
    --theme-color-muted: #dab0a7;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-rhino] {
    --theme-color-primary: #27374D;
    --theme-color-secondary: #526D82;
    --theme-color-accent: #526D82;
    --theme-color-muted: #DDE6ED;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-pink] {
    --theme-color-primary: #4C0033;
    --theme-color-secondary: #790252;
    --theme-color-accent: #b81470;
    --theme-color-muted: #DF9AC7;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-hyper-space] {
    --theme-color-primary: #313866;
    --theme-color-secondary: #504099;
    --theme-color-accent: #b82d9e;
    --theme-color-muted: #E7C2FD;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=dark-midnight] {
    --theme-color-primary: #37404a;
    --theme-color-secondary: #727cf5;
    --theme-color-accent: #727cf5;
    --theme-color-muted: #cbdcec;
    --theme-color-text: #DDDEE9;
    --theme-box-shadow: rgba(0, 0, 0, 0.5);
}

*[data-aetheme=light-gray] {
    --theme-color-primary: #ffffff;
    --theme-color-secondary: #f0f0f0;
    --theme-color-accent: #dadada;
    --theme-color-muted: rgba(47, 43, 61, 0.6784313725);
    --theme-color-text: rgba(47, 43, 61, 0.6784313725);
    --theme-box-shadow: rgba(0, 0, 0, 0.15);
}
body {
    height: 100vh !important;
    width: 100vw !important;
    overflow-x: hidden;
}

.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded].inactive::after {
    display: none;
}
.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded].inactive,
.ae-menubar[aria-orientation=vertical] > .wrapper-user .user-info[aria-expanded].inactive * {
    cursor: auto;
}

#sc-main-content {
    display: flex;
    flex-direction: column;
    height: 100vh;
}
#app-frames {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
#contrl_abas .tab > a > span {
    word-break: keep-all;
    white-space: nowrap;
    max-width: 120px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.wrapper .label {
    /*max-width: 120px;*/
    /*overflow: hidden;*/
    /*text-overflow: ellipsis;*/
    /*word-break: keep-all;*/
    /*white-space: nowrap;*/
}

.ae-menubar.menubar[aria-orientation="vertical"] {
    /*min-width: 260px*/
}

.logo img {
    visibility: hidden;
}

.ae-menubar.tabsbar {
    display: none;
}
#id_links_abas, #idMenuDown {
    display: none;
}

.show-mobile, .show-mobile-flex {
    display: none;
}

.ae-menubar .user:hover > .mb_icon, .ae-menubar .user:focus-visible > .mb_icon, .ae-menubar .user[aria-expanded=true] > .mb_icon {
    top: 3px;
}
.ae-menubar .user > .mb_icon {
    position: relative;
    top: 7px;
    font-size: 2.15em;
    text-align: center;
    transition: top 250ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
.vertical-orientation .ae-menubar[role=toolbar] > div.wrapper {
    display: flex;
    width: 100%;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.5rem;
}
.button.expand-button {
}
.button.mob-button {
    width: 42px;
    height: 42px;
    justify-content: center;
    align-items: center;
    font-size: 28px !important;
}

.logo img {
    max-height: 48px !important;
}
.ae-menubar[aria-orientation=vertical] > .wrapper-header {
    column-gap: 20px;
}

li.wrapper[disabled="disabled"],
li.result-item[disabled="disabled"] {
    opacity: 0.3;
    pointer-events: none;
}

ul.context-menu-list.context-menu-root {
    background: var(--theme-color-primary);
    color: var(--theme-color-text);
    padding: 0.5rem;
    border: solid 1px rgba(0,0,0,.0);
    border-radius: .25em;
}

ul.context-menu-list.context-menu-root li {
    background: transparent;
    color: var(--theme-color-text);
    border: none;
    border-radius: 4px;
    font-family: arial;
}

ul.context-menu-list.context-menu-root li:hover {
    background: var(--theme-color-accent);
}

.shortcuts-title {
    padding: 20px;
    font-size: 20px;
    border-bottom: solid 1px;
    border-color: var(--theme-color-secondary);
}

ul#shortcuts-list {
    max-height: 400px;
    overflow: auto;
}

.ae-menubar #shortcuts-panel {
    max-height: none;
    overflow: auto;
}

p.shortcut-description {
    height: 58px;
    white-space: nowrap;
    /* width: 30px; */
    overflow: hidden;
    text-overflow: ellipsis;
}

p.shortcut-title i {
    display: flex;
    flex-direction: column;
    height: 40px;
    width: 40px;
    background: rgba(0,0,0,.2);
    align-items: center;
    justify-content: center;
    border-radius: 100%;
}

p.shortcut-title {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    align-items: center;
}

p.shortcut-description {
    height: auto;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;
    white-space: normal;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    /* height: 36px; */
}

ul#shortcuts-list {
    column-gap: 1px !important;
    row-gap: 1px !important;
    display: flex;
    background: var(--theme-color-secondary);
}
.ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-title, .ae-menubar #shortcuts-panel #shortcuts-list > .list-item .shortcut-description {
    word-break: break-word;
    text-align: center;
}
.ae-menubar #shortcuts-panel ul#shortcuts-list > .list-item {
    background-color: var(--theme-color-primary);
    border-radius: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
}

.ae-menubar #shortcuts-panel ul#shortcuts-list > .list-item.dead-item {
    background: var(--theme-color-primary) !important;
}

#shortcuts {
    padding: 1px !important;
}

#user-avatar {
    width: 60px;
    min-width: 60px;
    height: 60px;
}

#context-menu-layer,
.context-menu-list.context-menu-root {
    z-index: 1001 !important;
}
.panel-backdrop-overlay {
    position: fixed;
    background: transparent;
    height: 100vh;
    width: 100vw;
    top: 0;
    left: 0;
    z-index: 1001;
}
.ae-menubar .panel {
    position: fixed;
    z-index: 1002;
}

.ae-menubar .panel *::-webkit-scrollbar {
    width: 4px;
}
.ae-menubar .panel *::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.25);
}
.ae-menubar .panel *::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.ae-menubar .main-navigation [role=menuitem] .submenu[role=menu] .submenu[role=menu] {
    top: 0.25em;
    left: calc(100% + 2px);
}
@media only screen and (max-width: 1188px) {
    #esc-button-show {
        display: none;
    }
    .hide-mobile {
        display: none !important;
    }
    .show-mobile {
        display: block !important;
    }
    .show-mobile-flex {
        display: flex !important;
    }
}



iframe.loading {
    height: 0px !important;
}
.loader-placeholder {
    display: none;
    height: 100%;
    width: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
iframe.loading + .loader-placeholder {
    display: flex;
}



.lds-dual-ring {
    display: inline-block;
    width: 80px;
    height: 80px;
}
.lds-dual-ring:after {
    content: " ";
    display: block;
    width: 64px;
    height: 64px;
    margin: 8px;
    border-radius: 50%;
    border: 6px solid #fff;
    border-color: #fff transparent #fff transparent;
    border-bottom-color: var(--theme-color-accent);
    border-top-color: var(--theme-color-accent);
    animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

    </style>
    
  <style type="text/css">
    html,
    body {
      width: 100%;
      height: 100%;
    }

    body{
      background-color: #dee3eb;
      overflow: hidden;
    }
    
    .sample-image {
      width: auto;
    }

    .sample-image-third {
      width: calc(33.33% - .5rem);
    }



    .frame-container {
      padding: 0.562rem 0.5rem 0.5rem 0.5rem;
      flex-flow: column nowrap;
      row-gap: .5rem;
      display: flex;
      height: 100vh;
      justify-content: stretch;
      align-items: stretch;
    }

    .frame-container > div ,
    .frame-container > iframe {
      flex-grow: 1;
    }

    .frame-container > div > iframe{
      height: 100%;
      width: 100%;
    }

    .sample-row{      
      flex-flow: row nowrap;
      justify-content: center;
      align-items: center;
      column-gap: .65rem;
      display: flex;
    }
    .ae-menubar.toolbar.compact {
      padding: 0 !important;
      height: auto;
    }

  </style>
  <main style="height: 100%;">
    <div id="sc-main-content" class="vertical-orientation" style="padding-left: 80px;">
      <section class="ae-menubar menubar expanded" role="toolbar" aria-orientation="vertical" tabindex="0" data-aetheme="dark-pink" data-collapsible="true" data-width="260" style="width: 260px; min-width: 80px;">
        <div class="wrapper-header" style="">
          <div class="logo"><a id="sc-menu-link-home" href="./"><span class="only-sr">Scriptcase menubar home </span><img class="d-block" src="../_lib/img/scriptcase__NM__menu_img__NM__1-scriptcase-logo.png" aria-hidden="true" style="visibility: visible;"><img class="d-none" src="../_lib/img/scriptcase__NM__menu_img__NM__logo.png" aria-hidden="true" style="visibility: visible;"></a></div>
          <div class="mb_icon fa-solid hide-mobile fa-expand" id="switch-menu-position" aria-label="menu fixo" role="checkbox" aria-checked="false"></div>
        </div>
          <style>
    .header-string-m-text {
        color: var(--theme-color-text);
        font-size: 1rem;
        display: block;
        width: 100%;
        font-weight: bold;
        word-wrap: break-word;
    }
</style>
<span class="header-string-m-text"></span>
                  <div class="wrapper-user" style="display: block;">
          <div class="user-info" aria-controls="user-menu" aria-expanded="false">
            <div class="user action-button" role="button" id="user-button" aria-label="ações do usuário" aria-expanded="false" aria-controls="user-panel" aria-owns="user-panel">
              <img src="https://th.bing.com/th/id/OIG.oGKzEczIQRGBAYN8rHL1?pid=ImgGn" class="user_image">
            </div>
            <div class="group">
              <p class="user-name">John Doe</p>
              <p class="user-profile">john@scriptcase.net</p>
            </div>
          </div>
          <div class="user-menu p-right-4">
            <div class="wrapper" id="user-menu">
              <div class="user-menu-content">
                <div class="section actions ae-menubar-accordion">
                  <ul role="menubar" aria-label="ações do menu do usuário" id="user_menu_list"><li class="wrapper" role="none">
<a href="#" tab-name="item_user_1" title="" tab-title="Profile" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-user-circle" aria-hidden="true"> </i>
       <span class="label">Profile</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_user_2" title="" tab-title="Settings" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-cog" aria-hidden="true"> </i>
       <span class="label">Settings</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_user_3" title="" tab-title="FAQ" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-question-circle" aria-hidden="true"> </i>
       <span class="label">FAQ</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_user_4" title="" tab-title="Logout" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-sign-out-alt" aria-hidden="true"> </i>
       <span class="label">Logout</span>
</a>
</li>
</ul>
                </div>
                <hr class="divider-y divider-solid divider-theme-color my-2">
              </div>
            </div>
          </div>
        </div>
                  <div class="wrapper-navigation ae-menubar-accordion" aria-label="navegação principal">
          <ul role="menubar" aria-label="navegação principal" id="nav_list"><li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_1&amp;sc_apl_menu=blank_menus_910&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_1" title="" tab-title="Home" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon fas fa-home" aria-hidden="true"> </i>
       <span class="label">Home</span>
</a>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_2" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon fas fa-shopping-cart" aria-hidden="true"> </i>
       <span class="label">Ecommerce</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_2" role="menu" aria-label="Ecommerce" aria-hidden="true">
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_10" data-active="false">
   <i class="mb_icon fas fa-boxes" aria-hidden="true"> </i>
       <span class="label">Products</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_10" role="menu" aria-label="Products" aria-hidden="true">
<li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_13&amp;sc_apl_menu=grid_action_bar_btn_v99&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_13" title="" tab-title="Products List" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-list-alt" aria-hidden="true"> </i>
       <span class="label">Products List</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_14&amp;sc_apl_menu=grid_action_bar_btn_v99&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_14" title="" tab-title="Add Products" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-plus-square" aria-hidden="true"> </i>
       <span class="label">Add Products</span>
</a>
</li>
   </ul>
</div>
</li>
<li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_11&amp;sc_apl_menu=grid_fixed_toolbar_v99&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_11" title="" tab-title="Orders" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-cart-plus" aria-hidden="true"> </i>
       <span class="label">Orders</span>
</a>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_12" data-active="false">
   <i class="mb_icon fas fa-users" aria-hidden="true"> </i>
       <span class="label">Customers</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_12" role="menu" aria-label="Customers" aria-hidden="true">
<li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_15&amp;sc_apl_menu=grid39&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_15" title="" tab-title="Customers List" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-list-alt" aria-hidden="true"> </i>
       <span class="label">Customers List</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="vertical_menu_v910_form_php.php?sc_item_menu=item_16&amp;sc_apl_menu=sample_block_expand_and_collapse&amp;sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&amp;sc_usa_grupo=" tab-name="item_16" title="" tab-title="Add Customers" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-plus-square" aria-hidden="true"> </i>
       <span class="label">Add Customers</span>
</a>
</li>
   </ul>
</div>
</li>
   </ul>
</div>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_3" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon fas fa-graduation-cap" aria-hidden="true"> </i>
       <span class="label">Academy</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_3" role="menu" aria-label="Academy" aria-hidden="true">
<li class="wrapper" role="none">
<a href="#" tab-name="item_21" title="" tab-title="Dashboard" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-chart-line" aria-hidden="true"> </i>
       <span class="label">Dashboard</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_22" title="" tab-title="My Courses" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-chalkboard-teacher" aria-hidden="true"> </i>
       <span class="label">My Courses</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_23" title="" tab-title="Course Details" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-asterisk" aria-hidden="true"> </i>
       <span class="label">Course Details</span>
</a>
</li>
   </ul>
</div>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_5" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon far fa-envelope" aria-hidden="true"> </i>
       <span class="label">Email</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_5" role="menu" aria-label="Email" aria-hidden="true">
<li class="wrapper" role="none">
<a href="#" tab-name="item_24" title="" tab-title="Inbox" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-inbox" aria-hidden="true"> </i>
       <span class="label">Inbox</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_25" title="" tab-title="Send Campaign" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-paper-plane" aria-hidden="true"> </i>
       <span class="label">Send Campaign</span>
</a>
</li>
   </ul>
</div>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_6" title="" tab-title="Chat" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon far fa-comment-alt" aria-hidden="true"> </i>
       <span class="label">Chat</span>
</a>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_7" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon far fa-file-alt" aria-hidden="true"> </i>
       <span class="label">Invoice</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_7" role="menu" aria-label="Invoice" aria-hidden="true">
<li class="wrapper" role="none">
<a href="#" tab-name="item_17" title="" tab-title="List" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-list-alt" aria-hidden="true"> </i>
       <span class="label">List</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_18" title="" tab-title="Preview" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-file-pdf" aria-hidden="true"> </i>
       <span class="label">Preview</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_19" title="" tab-title="Edit" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-edit" aria-hidden="true"> </i>
       <span class="label">Edit</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_20" title="" tab-title="Add" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon far fa-plus-square" aria-hidden="true"> </i>
       <span class="label">Add</span>
</a>
</li>
   </ul>
</div>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_8" title="" tab-title="Users" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon far fa-user" aria-hidden="true"> </i>
       <span class="label">Users</span>
</a>
</li>
<li class="wrapper" role="none">
   <span role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="submenu-item_9" data-active="false" style="justify-content: flex-start;">
   <i class="mb_icon fas fa-cog" aria-hidden="true"> </i>
       <span class="label">Roles &amp; Permissions</span>
   </span>
<div class="wrapper">
   <ul class="submenu" id="submenu-item_9" role="menu" aria-label="Roles &amp; Permissions" aria-hidden="true">
<li class="wrapper" role="none">
<a href="#" tab-name="item_26" title="" tab-title="Roles" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-briefcase" aria-hidden="true"> </i>
       <span class="label">Roles</span>
</a>
</li>
<li class="wrapper" role="none">
<a href="#" tab-name="item_27" title="" tab-title="Permissions" target="nm_frame_app" role="menuitem" aria-haspopup="false" aria-expanded="false" data-active="false">
   <i class="mb_icon fas fa-cog" aria-hidden="true"> </i>
       <span class="label">Permissions</span>
</a>
</li>
   </ul>
</div>
</li>
</ul>
        </div>
      </section>
      <section class="ae-menubar tabsbar compact" role="toolbar" aria-orientation="horizontal" tabindex="0" data-aetheme="dark-pink">
         <style>

    .nav-content {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    section.ae-menubar.toolbar {
        flex-direction: column;
        height: auto;
        justify-content: center;
        align-items: flex-end;
    }

    .ae-menubar.tabsbar {
        width: -webkit-fill-available;
        width: -moz-available;
        width: fill-available;
        margin: 0 0.5rem 0.5rem 0.5rem;
        border-radius: 0 0 .25rem .25rem;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-end;
        align-items: center;
        column-gap: 0;
        row-gap: 0;
        flex-grow: 0;
        flex-shrink: 0;
        display: flex;
        padding: 0 .5rem;
        height: auto;
        overflow: hidden;
        position: relative;
        z-index: 1;
        background: var(--theme-color-muted);
        box-shadow: none;
    }

    .stump-tab {
        display: none !important;
    }
    #app-frames .nm_frame_app {
        display: none !important;
    }
    .frame-container {
    }
    .scroll_button:hover {
        opacity: 1;
    }
    .scroll_button {
        width: 20px;
        /*height: 35px;*/
        cursor: pointer;
        line-height: 0;
        color: var(--theme-color-accent);
        /*background: var(--theme-color-primary);*/
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        user-select: none;
        opacity: .6;
        position: absolute;
        top: 1rem;
    }
    .scrolling .scroll_button {
        display: flex;
    }
    .scroll_button.left_scroll {
        left: .5rem;
    }
    .scroll_button.right_scroll {
        right: .5rem;
    }
    .nav-content .tabs {
        -ms-overflow-style: none;
        scrollbar-width: none;
        display: flex;
        flex-direction: row;
        color: var(--theme-color-text);
        overflow-x: auto;
        flex-grow: 1;
        margin: 0 1.75rem;
    }
    .nav-content .tabs::-webkit-scrollbar {
        display: none;
    }
    .nav-content .tabs > li {
        height: 35px;
        margin-top: .5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
    }

    .nav-content .tabs > li.indicator {
        display: none;
    }

    .nav-content .tabs > li > a {
        color: var(--theme-color-accent);
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 0 .5rem;
        transition: all ease .3s;
        border-radius: .25rem .25rem 0 0;
        font-size: .875rem;
        cursor: default;
    }

    .nav-content .tabs > li > a:hover {
        background: var(--theme-color-accent);
        color: var(--theme-color-text);
        opacity: 0.5;
    }

    .nav-content .tabs > li > a .close_icon {
        cursor: pointer;
        padding: 3px 4px;
        font-size: .7rem;
    }

    .nav-content .tabs > li > a .close_icon:hover {
        background: var(--theme-color-text);
        color: var(--theme-color-accent);
        border-radius: 100%;
        opacity: 0.9;
    }

    .nav-content .tabs > li > a.active {
        background: var(--theme-color-accent);
        color: var(--theme-color-text);
        opacity: 1;
    }

    .ae-menubar.toolbar.connected {
        border-radius: .25rem .25rem 0 0;
        margin-bottom: 0;
    }
    .frame-container {
        height: auto;
        flex-grow: 1;
    }
</style>
<div class="nav-content">
    <div class="scroll_button left_scroll" onclick="scrollTabs('left')">
        <i class="fa-solid fa-arrow-left"></i>
    </div>
    <ul id="contrl_abas" class="tabs tabs-transparent darken-4" style="height: auto !important;">
        <li class="tab stump-tab"><a href="#_" class="active">_</a></li>
    <li class="indicator" style="left: 0px; right: 196px;"></li></ul>
    <div class="scroll_button right_scroll" onclick="scrollTabs('right')">
        <i class="fa-solid fa-arrow-right"></i>
    </div>
</div> <script> var _get=function t(e,i,n){null===e&&(e=Function.prototype);var s=Object.getOwnPropertyDescriptor(e,i);if(void 0===s){var o=Object.getPrototypeOf(e);return null===o?void 0:t(o,i,n)}if("value"in s)return s.value;var a=s.get;return void 0!==a?a.call(n):void 0},_createClass=function(){function n(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}return function(t,e,i){return e&&n(t.prototype,e),i&&n(t,i),t}}();function _possibleConstructorReturn(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function _inherits(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}window.cash=function(){var i,o=document,a=window,t=Array.prototype,r=t.slice,n=t.filter,s=t.push,e=function(){},h=function(t){return typeof t==typeof e&&t.call},d=function(t){return"string"==typeof t},l=/^#[\w-]*$/,u=/^\.[\w-]*$/,c=/<.+>/,p=/^\w+$/;function v(t,e){e=e||o;var i=u.test(t)?e.getElementsByClassName(t.slice(1)):p.test(t)?e.getElementsByTagName(t):e.querySelectorAll(t);return i}function f(t){if(!i){var e=(i=o.implementation.createHTMLDocument(null)).createElement("base");e.href=o.location.href,i.head.appendChild(e)}return i.body.innerHTML=t,i.body.childNodes}function m(t){"loading"!==o.readyState?t():o.addEventListener("DOMContentLoaded",t)}function g(t,e){if(!t)return this;if(t.cash&&t!==a)return t;var i,n=t,s=0;if(d(t))n=l.test(t)?o.getElementById(t.slice(1)):c.test(t)?f(t):v(t,e);else if(h(t))return m(t),this;if(!n)return this;if(n.nodeType||n===a)this[0]=n,this.length=1;else for(i=this.length=n.length;s<i;s++)this[s]=n[s];return this}function _(t,e){return new g(t,e)}var y=_.fn=_.prototype=g.prototype={cash:!0,length:0,push:s,splice:t.splice,map:t.map,init:g};function k(t,e){for(var i=t.length,n=0;n<i&&!1!==e.call(t[n],t[n],n,t);n++);}function b(t,e){var i=t&&(t.matches||t.webkitMatchesSelector||t.mozMatchesSelector||t.msMatchesSelector||t.oMatchesSelector);return!!i&&i.call(t,e)}function w(e){return d(e)?b:e.cash?function(t){return e.is(t)}:function(t,e){return t===e}}function C(t){return _(r.call(t).filter(function(t,e,i){return i.indexOf(t)===e}))}Object.defineProperty(y,"constructor",{value:_}),_.parseHTML=f,_.noop=e,_.isFunction=h,_.isString=d,_.extend=y.extend=function(t){t=t||{};var e=r.call(arguments),i=e.length,n=1;for(1===e.length&&(t=this,n=0);n<i;n++)if(e[n])for(var s in e[n])e[n].hasOwnProperty(s)&&(t[s]=e[n][s]);return t},_.extend({merge:function(t,e){for(var i=+e.length,n=t.length,s=0;s<i;n++,s++)t[n]=e[s];return t.length=n,t},each:k,matches:b,unique:C,isArray:Array.isArray,isNumeric:function(t){return!isNaN(parseFloat(t))&&isFinite(t)}});var E=_.uid="_cash"+Date.now();function M(t){return t[E]=t[E]||{}}function O(t,e,i){return M(t)[e]=i}function x(t,e){var i=M(t);return void 0===i[e]&&(i[e]=t.dataset?t.dataset[e]:_(t).attr("data-"+e)),i[e]}y.extend({data:function(e,i){if(d(e))return void 0===i?x(this[0],e):this.each(function(t){return O(t,e,i)});for(var t in e)this.data(t,e[t]);return this},removeData:function(s){return this.each(function(t){return i=s,void((n=M(e=t))?delete n[i]:e.dataset?delete e.dataset[i]:_(e).removeAttr("data-"+name));var e,i,n})}});var L=/\S+/g;function T(t){return d(t)&&t.match(L)}function $(t,e){return t.classList?t.classList.contains(e):new RegExp("(^| )"+e+"( |$)","gi").test(t.className)}function B(t,e,i){t.classList?t.classList.add(e):i.indexOf(" "+e+" ")&&(t.className+=" "+e)}function D(t,e){t.classList?t.classList.remove(e):t.className=t.className.replace(e,"")}y.extend({addClass:function(t){var n=T(t);return n?this.each(function(e){var i=" "+e.className+" ";k(n,function(t){B(e,t,i)})}):this},attr:function(e,i){if(e){if(d(e))return void 0===i?this[0]?this[0].getAttribute?this[0].getAttribute(e):this[0][e]:void 0:this.each(function(t){t.setAttribute?t.setAttribute(e,i):t[e]=i});for(var t in e)this.attr(t,e[t]);return this}},hasClass:function(t){var e=!1,i=T(t);return i&&i.length&&this.each(function(t){return!(e=$(t,i[0]))}),e},prop:function(e,i){if(d(e))return void 0===i?this[0][e]:this.each(function(t){t[e]=i});for(var t in e)this.prop(t,e[t]);return this},removeAttr:function(e){return this.each(function(t){t.removeAttribute?t.removeAttribute(e):delete t[e]})},removeClass:function(t){if(!arguments.length)return this.attr("class","");var i=T(t);return i?this.each(function(e){k(i,function(t){D(e,t)})}):this},removeProp:function(e){return this.each(function(t){delete t[e]})},toggleClass:function(t,e){if(void 0!==e)return this[e?"addClass":"removeClass"](t);var n=T(t);return n?this.each(function(e){var i=" "+e.className+" ";k(n,function(t){$(e,t)?D(e,t):B(e,t,i)})}):this}}),y.extend({add:function(t,e){return C(_.merge(this,_(t,e)))},each:function(t){return k(this,t),this},eq:function(t){return _(this.get(t))},filter:function(e){if(!e)return this;var i=h(e)?e:w(e);return _(n.call(this,function(t){return i(t,e)}))},first:function(){return this.eq(0)},get:function(t){return void 0===t?r.call(this):t<0?this[t+this.length]:this[t]},index:function(t){var e=t?_(t)[0]:this[0],i=t?this:_(e).parent().children();return r.call(i).indexOf(e)},last:function(){return this.eq(-1)}});var S,I,A,R,H,P,W=(H=/(?:^\w|[A-Z]|\b\w)/g,P=/[\s-_]+/g,function(t){return t.replace(H,function(t,e){return t[0===e?"toLowerCase":"toUpperCase"]()}).replace(P,"")}),j=(S={},I=document,A=I.createElement("div"),R=A.style,function(e){if(e=W(e),S[e])return S[e];var t=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+["webkit","moz","ms","o"].join(t+" ")+t).split(" ");return k(i,function(t){if(t in R)return S[t]=e=S[e]=t,!1}),S[e]});function F(t,e){return parseInt(a.getComputedStyle(t[0],null)[e],10)||0}function q(e,i,t){var n,s=x(e,"_cashEvents"),o=s&&s[i];o&&(t?(e.removeEventListener(i,t),0<=(n=o.indexOf(t))&&o.splice(n,1)):(k(o,function(t){e.removeEventListener(i,t)}),o=[]))}function N(t,e){return"&"+encodeURIComponent(t)+"="+encodeURIComponent(e).replace(/%20/g,"+")}function z(t){var e,i,n,s=t.type;if(!s)return null;switch(s.toLowerCase()){case"select-one":return 0<=(n=(i=t).selectedIndex)?i.options[n].value:null;case"select-multiple":return e=[],k(t.options,function(t){t.selected&&e.push(t.value)}),e.length?e:null;case"radio":case"checkbox":return t.checked?t.value:null;default:return t.value?t.value:null}}function V(e,i,n){var t=d(i);t||!i.length?k(e,t?function(t){return t.insertAdjacentHTML(n?"afterbegin":"beforeend",i)}:function(t,e){return function(t,e,i){if(i){var n=t.childNodes[0];t.insertBefore(e,n)}else t.appendChild(e)}(t,0===e?i:i.cloneNode(!0),n)}):k(i,function(t){return V(e,t,n)})}_.prefixedProp=j,_.camelCase=W,y.extend({css:function(e,i){if(d(e))return e=j(e),1<arguments.length?this.each(function(t){return t.style[e]=i}):a.getComputedStyle(this[0])[e];for(var t in e)this.css(t,e[t]);return this}}),k(["Width","Height"],function(e){var t=e.toLowerCase();y[t]=function(){return this[0].getBoundingClientRect()[t]},y["inner"+e]=function(){return this[0]["client"+e]},y["outer"+e]=function(t){return this[0]["offset"+e]+(t?F(this,"margin"+("Width"===e?"Left":"Top"))+F(this,"margin"+("Width"===e?"Right":"Bottom")):0)}}),y.extend({off:function(e,i){return this.each(function(t){return q(t,e,i)})},on:function(a,i,r,l){var n;if(!d(a)){for(var t in a)this.on(t,i,a[t]);return this}return h(i)&&(r=i,i=null),"ready"===a?(m(r),this):(i&&(n=r,r=function(t){for(var e=t.target;!b(e,i);){if(e===this||null===e)return e=!1;e=e.parentNode}e&&n.call(e,t)}),this.each(function(t){var e,i,n,s,o=r;l&&(o=function(){r.apply(this,arguments),q(t,a,o)}),i=a,n=o,(s=x(e=t,"_cashEvents")||O(e,"_cashEvents",{}))[i]=s[i]||[],s[i].push(n),e.addEventListener(i,n)}))},one:function(t,e,i){return this.on(t,e,i,!0)},ready:m,trigger:function(t,e){if(document.createEvent){var i=document.createEvent("HTMLEvents");return i.initEvent(t,!0,!1),i=this.extend(i,e),this.each(function(t){return t.dispatchEvent(i)})}}}),y.extend({serialize:function(){var s="";return k(this[0].elements||this,function(t){if(!t.disabled&&"FIELDSET"!==t.tagName){var e=t.name;switch(t.type.toLowerCase()){case"file":case"reset":case"submit":case"button":break;case"select-multiple":var i=z(t);null!==i&&k(i,function(t){s+=N(e,t)});break;default:var n=z(t);null!==n&&(s+=N(e,n))}}}),s.substr(1)},val:function(e){return void 0===e?z(this[0]):this.each(function(t){return t.value=e})}}),y.extend({after:function(t){return _(t).insertAfter(this),this},append:function(t){return V(this,t),this},appendTo:function(t){return V(_(t),this),this},before:function(t){return _(t).insertBefore(this),this},clone:function(){return _(this.map(function(t){return t.cloneNode(!0)}))},empty:function(){return this.html(""),this},html:function(t){if(void 0===t)return this[0].innerHTML;var e=t.nodeType?t[0].outerHTML:t;return this.each(function(t){return t.innerHTML=e})},insertAfter:function(t){var s=this;return _(t).each(function(t,e){var i=t.parentNode,n=t.nextSibling;s.each(function(t){i.insertBefore(0===e?t:t.cloneNode(!0),n)})}),this},insertBefore:function(t){var s=this;return _(t).each(function(e,i){var n=e.parentNode;s.each(function(t){n.insertBefore(0===i?t:t.cloneNode(!0),e)})}),this},prepend:function(t){return V(this,t,!0),this},prependTo:function(t){return V(_(t),this,!0),this},remove:function(){return this.each(function(t){if(t.parentNode)return t.parentNode.removeChild(t)})},text:function(e){return void 0===e?this[0].textContent:this.each(function(t){return t.textContent=e})}});var X=o.documentElement;return y.extend({position:function(){var t=this[0];return{left:t.offsetLeft,top:t.offsetTop}},offset:function(){var t=this[0].getBoundingClientRect();return{top:t.top+a.pageYOffset-X.clientTop,left:t.left+a.pageXOffset-X.clientLeft}},offsetParent:function(){return _(this[0].offsetParent)}}),y.extend({children:function(e){var i=[];return this.each(function(t){s.apply(i,t.children)}),i=C(i),e?i.filter(function(t){return b(t,e)}):i},closest:function(t){return!t||this.length<1?_():this.is(t)?this.filter(t):this.parent().closest(t)},is:function(e){if(!e)return!1;var i=!1,n=w(e);return this.each(function(t){return!(i=n(t,e))}),i},find:function(e){if(!e||e.nodeType)return _(e&&this.has(e).length?e:null);var i=[];return this.each(function(t){s.apply(i,v(e,t))}),C(i)},has:function(e){var t=d(e)?function(t){return 0!==v(e,t).length}:function(t){return t.contains(e)};return this.filter(t)},next:function(){return _(this[0].nextElementSibling)},not:function(e){if(!e)return this;var i=w(e);return this.filter(function(t){return!i(t,e)})},parent:function(){var e=[];return this.each(function(t){t&&t.parentNode&&e.push(t.parentNode)}),C(e)},parents:function(e){var i,n=[];return this.each(function(t){for(i=t;i&&i.parentNode&&i!==o.body.parentNode;)i=i.parentNode,(!e||e&&b(i,e))&&n.push(i)}),C(n)},prev:function(){return _(this[0].previousElementSibling)},siblings:function(t){var e=this.parent().children(t),i=this[0];return e.filter(function(t){return t!==i})}}),_}();var Component=function(){function s(t,e,i){_classCallCheck(this,s),e instanceof Element||console.error(Error(e+" is not an HTML Element"));var n=t.getInstance(e);n&&n.destroy(),this.el=e,this.$el=cash(e)}return _createClass(s,null,[{key:"init",value:function(t,e,i){var n=null;if(e instanceof Element)n=new t(e,i);else if(e&&(e.jquery||e.cash||e instanceof NodeList)){for(var s=[],o=0;o<e.length;o++)s.push(new t(e[o],i));n=s}return n}}]),s}();!function(t){t.Package?M={}:t.M={},M.jQueryLoaded=!!t.jQuery}(window),"function"==typeof define&&define.amd?define("M",[],function(){return M}):"undefined"==typeof exports||exports.nodeType||("undefined"!=typeof module&&!module.nodeType&&module.exports&&(exports=module.exports=M),exports.default=M),M.version="1.0.0",M.keys={TAB:9,ENTER:13,ESC:27,ARROW_UP:38,ARROW_DOWN:40},M.tabPressed=!1,M.keyDown=!1;var docHandleKeydown=function(t){M.keyDown=!0,t.which!==M.keys.TAB&&t.which!==M.keys.ARROW_DOWN&&t.which!==M.keys.ARROW_UP||(M.tabPressed=!0)},docHandleKeyup=function(t){M.keyDown=!1,t.which!==M.keys.TAB&&t.which!==M.keys.ARROW_DOWN&&t.which!==M.keys.ARROW_UP||(M.tabPressed=!1)},docHandleFocus=function(t){M.keyDown&&document.body.classList.add("keyboard-focused")},docHandleBlur=function(t){document.body.classList.remove("keyboard-focused")};document.addEventListener("keydown",docHandleKeydown,!0),document.addEventListener("keyup",docHandleKeyup,!0),document.addEventListener("focus",docHandleFocus,!0),document.addEventListener("blur",docHandleBlur,!0),M.initializeJqueryWrapper=function(n,s,o){jQuery.fn[s]=function(e){if(n.prototype[e]){var i=Array.prototype.slice.call(arguments,1);if("get"===e.slice(0,3)){var t=this.first()[0][o];return t[e].apply(t,i)}return this.each(function(){var t=this[o];t[e].apply(t,i)})}if("object"==typeof e||!e)return n.init(this,e),this;jQuery.error("Method "+e+" does not exist on jQuery."+s)}},M.AutoInit=function(t){var e=t||document.body,i={Autocomplete:e.querySelectorAll(".autocomplete:not(.no-autoinit)"),Carousel:e.querySelectorAll(".carousel:not(.no-autoinit)"),Chips:e.querySelectorAll(".chips:not(.no-autoinit)"),Collapsible:e.querySelectorAll(".collapsible:not(.no-autoinit)"),Datepicker:e.querySelectorAll(".datepicker:not(.no-autoinit)"),Dropdown:e.querySelectorAll(".dropdown-trigger:not(.no-autoinit)"),Materialbox:e.querySelectorAll(".materialboxed:not(.no-autoinit)"),Modal:e.querySelectorAll(".modal:not(.no-autoinit)"),Parallax:e.querySelectorAll(".parallax:not(.no-autoinit)"),Pushpin:e.querySelectorAll(".pushpin:not(.no-autoinit)"),ScrollSpy:e.querySelectorAll(".scrollspy:not(.no-autoinit)"),FormSelect:e.querySelectorAll("select:not(.no-autoinit)"),Sidenav:e.querySelectorAll(".sidenav:not(.no-autoinit)"),Tabs:e.querySelectorAll(".tabs:not(.no-autoinit)"),TapTarget:e.querySelectorAll(".tap-target:not(.no-autoinit)"),Timepicker:e.querySelectorAll(".timepicker:not(.no-autoinit)"),Tooltip:e.querySelectorAll(".tooltipped:not(.no-autoinit)"),FloatingActionButton:e.querySelectorAll(".fixed-action-btn:not(.no-autoinit)")};for(var n in i){M[n].init(i[n])}},M.objectSelectorString=function(t){return((t.prop("tagName")||"")+(t.attr("id")||"")+(t.attr("class")||"")).replace(/\s/g,"")},M.guid=function(){function t(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}return function(){return t()+t()+"-"+t()+"-"+t()+"-"+t()+"-"+t()+t()+t()}}(),M.escapeHash=function(t){return t.replace(/(:|\.|\[|\]|,|=|\/)/g,"\\$1")},M.elementOrParentIsFixed=function(t){var e=$(t),i=e.add(e.parents()),n=!1;return i.each(function(){if("fixed"===$(this).css("position"))return!(n=!0)}),n},M.checkWithinContainer=function(t,e,i){var n={top:!1,right:!1,bottom:!1,left:!1},s=t.getBoundingClientRect(),o=t===document.body?Math.max(s.bottom,window.innerHeight):s.bottom,a=t.scrollLeft,r=t.scrollTop,l=e.left-a,h=e.top-r;return(l<s.left+i||l<i)&&(n.left=!0),(l+e.width>s.right-i||l+e.width>window.innerWidth-i)&&(n.right=!0),(h<s.top+i||h<i)&&(n.top=!0),(h+e.height>o-i||h+e.height>window.innerHeight-i)&&(n.bottom=!0),n},M.checkPossibleAlignments=function(t,e,i,n){var s={top:!0,right:!0,bottom:!0,left:!0,spaceOnTop:null,spaceOnRight:null,spaceOnBottom:null,spaceOnLeft:null},o="visible"===getComputedStyle(e).overflow,a=e.getBoundingClientRect(),r=Math.min(a.height,window.innerHeight),l=Math.min(a.width,window.innerWidth),h=t.getBoundingClientRect(),d=e.scrollLeft,u=e.scrollTop,c=i.left-d,p=i.top-u,v=i.top+h.height-u;return s.spaceOnRight=o?window.innerWidth-(h.left+i.width):l-(c+i.width),s.spaceOnRight<0&&(s.left=!1),s.spaceOnLeft=o?h.right-i.width:c-i.width+h.width,s.spaceOnLeft<0&&(s.right=!1),s.spaceOnBottom=o?window.innerHeight-(h.top+i.height+n):r-(p+i.height+n),s.spaceOnBottom<0&&(s.top=!1),s.spaceOnTop=o?h.bottom-(i.height+n):v-(i.height-n),s.spaceOnTop<0&&(s.bottom=!1),s},M.getOverflowParent=function(t){return null==t?null:t===document.body||"visible"!==getComputedStyle(t).overflow?t:M.getOverflowParent(t.parentElement)},M.getIdFromTrigger=function(t){var e=t.getAttribute("data-target");return e||(e=(e=t.getAttribute("href"))?e.slice(1):""),e},M.getDocumentScrollTop=function(){return window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop||0},M.getDocumentScrollLeft=function(){return window.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft||0};var getTime=Date.now||function(){return(new Date).getTime()};M.throttle=function(i,n,s){var o=void 0,a=void 0,r=void 0,l=null,h=0;s||(s={});var d=function(){h=!1===s.leading?0:getTime(),l=null,r=i.apply(o,a),o=a=null};return function(){var t=getTime();h||!1!==s.leading||(h=t);var e=n-(t-h);return o=this,a=arguments,e<=0?(clearTimeout(l),l=null,h=t,r=i.apply(o,a),o=a=null):l||!1===s.trailing||(l=setTimeout(d,e)),r}};var $jscomp={scope:{}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(t,e,i){if(i.get||i.set)throw new TypeError("ES3 does not support getters and setters.");t!=Array.prototype&&t!=Object.prototype&&(t[e]=i.value)},$jscomp.getGlobal=function(t){return"undefined"!=typeof window&&window===t?t:"undefined"!=typeof global&&null!=global?global:t},$jscomp.global=$jscomp.getGlobal(this),$jscomp.SYMBOL_PREFIX="jscomp_symbol_",$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){},$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)},$jscomp.symbolCounter_=0,$jscomp.Symbol=function(t){return $jscomp.SYMBOL_PREFIX+(t||"")+$jscomp.symbolCounter_++},$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var t=$jscomp.global.Symbol.iterator;t||(t=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator")),"function"!=typeof Array.prototype[t]&&$jscomp.defineProperty(Array.prototype,t,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}}),$jscomp.initSymbolIterator=function(){}},$jscomp.arrayIterator=function(t){var e=0;return $jscomp.iteratorPrototype(function(){return e<t.length?{done:!1,value:t[e++]}:{done:!0}})},$jscomp.iteratorPrototype=function(t){return $jscomp.initSymbolIterator(),(t={next:t})[$jscomp.global.Symbol.iterator]=function(){return this},t},$jscomp.array=$jscomp.array||{},$jscomp.iteratorFromArray=function(e,i){$jscomp.initSymbolIterator(),e instanceof String&&(e+="");var n=0,s={next:function(){if(n<e.length){var t=n++;return{value:i(t,e[t]),done:!1}}return s.next=function(){return{done:!0,value:void 0}},s.next()}};return s[Symbol.iterator]=function(){return s},s},$jscomp.polyfill=function(t,e,i,n){if(e){for(i=$jscomp.global,t=t.split("."),n=0;n<t.length-1;n++){var s=t[n];s in i||(i[s]={}),i=i[s]}(e=e(n=i[t=t[t.length-1]]))!=n&&null!=e&&$jscomp.defineProperty(i,t,{configurable:!0,writable:!0,value:e})}},$jscomp.polyfill("Array.prototype.keys",function(t){return t||function(){return $jscomp.iteratorFromArray(this,function(t){return t})}},"es6-impl","es3");var $jscomp$this=this;M.anime=function(){function s(t){if(!B.col(t))try{return document.querySelectorAll(t)}catch(t){}}function b(t,e){for(var i=t.length,n=2<=arguments.length?e:void 0,s=[],o=0;o<i;o++)if(o in t){var a=t[o];e.call(n,a,o,t)&&s.push(a)}return s}function d(t){return t.reduce(function(t,e){return t.concat(B.arr(e)?d(e):e)},[])}function o(t){return B.arr(t)?t:(B.str(t)&&(t=s(t)||t),t instanceof NodeList||t instanceof HTMLCollection?[].slice.call(t):[t])}function a(t,e){return t.some(function(t){return t===e})}function r(t){var e,i={};for(e in t)i[e]=t[e];return i}function u(t,e){var i,n=r(t);for(i in t)n[i]=e.hasOwnProperty(i)?e[i]:t[i];return n}function c(t,e){var i,n=r(t);for(i in e)n[i]=B.und(t[i])?e[i]:t[i];return n}function l(t){if(t=/([\+\-]?[0-9#\.]+)(%|px|pt|em|rem|in|cm|mm|ex|ch|pc|vw|vh|vmin|vmax|deg|rad|turn)?$/.exec(t))return t[2]}function h(t,e){return B.fnc(t)?t(e.target,e.id,e.total):t}function w(t,e){if(e in t.style)return getComputedStyle(t).getPropertyValue(e.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase())||"0"}function p(t,e){return B.dom(t)&&a($,e)?"transform":B.dom(t)&&(t.getAttribute(e)||B.svg(t)&&t[e])?"attribute":B.dom(t)&&"transform"!==e&&w(t,e)?"css":null!=t[e]?"object":void 0}function v(t,e){switch(p(t,e)){case"transform":return function(t,i){var e,n=-1<(e=i).indexOf("translate")||"perspective"===e?"px":-1<e.indexOf("rotate")||-1<e.indexOf("skew")?"deg":void 0,n=-1<i.indexOf("scale")?1:0+n;if(!(t=t.style.transform))return n;for(var s=[],o=[],a=[],r=/(\w+)\((.+?)\)/g;s=r.exec(t);)o.push(s[1]),a.push(s[2]);return(t=b(a,function(t,e){return o[e]===i})).length?t[0]:n}(t,e);case"css":return w(t,e);case"attribute":return t.getAttribute(e)}return t[e]||0}function f(t,e){var i=/^(\*=|\+=|-=)/.exec(t);if(!i)return t;var n=l(t)||0;switch(e=parseFloat(e),t=parseFloat(t.replace(i[0],"")),i[0][0]){case"+":return e+t+n;case"-":return e-t+n;case"*":return e*t+n}}function m(t,e){return Math.sqrt(Math.pow(e.x-t.x,2)+Math.pow(e.y-t.y,2))}function i(t){t=t.points;for(var e,i=0,n=0;n<t.numberOfItems;n++){var s=t.getItem(n);0<n&&(i+=m(e,s)),e=s}return i}function g(t){if(t.getTotalLength)return t.getTotalLength();switch(t.tagName.toLowerCase()){case"circle":return 2*Math.PI*t.getAttribute("r");case"rect":return 2*t.getAttribute("width")+2*t.getAttribute("height");case"line":return m({x:t.getAttribute("x1"),y:t.getAttribute("y1")},{x:t.getAttribute("x2"),y:t.getAttribute("y2")});case"polyline":return i(t);case"polygon":var e=t.points;return i(t)+m(e.getItem(e.numberOfItems-1),e.getItem(0))}}function C(e,i){function t(t){return t=void 0===t?0:t,e.el.getPointAtLength(1<=i+t?i+t:0)}var n=t(),s=t(-1),o=t(1);switch(e.property){case"x":return n.x;case"y":return n.y;case"angle":return 180*Math.atan2(o.y-s.y,o.x-s.x)/Math.PI}}function _(t,e){var i,n=/-?\d*\.?\d+/g;if(i=B.pth(t)?t.totalLength:t,B.col(i))if(B.rgb(i)){var s=/rgb\((\d+,\s*[\d]+,\s*[\d]+)\)/g.exec(i);i=s?"rgba("+s[1]+",1)":i}else i=B.hex(i)?function(t){t=t.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(t,e,i,n){return e+e+i+i+n+n});var e=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);t=parseInt(e[1],16);var i=parseInt(e[2],16),e=parseInt(e[3],16);return"rgba("+t+","+i+","+e+",1)"}(i):B.hsl(i)?function(t){function e(t,e,i){return i<0&&(i+=1),1<i&&--i,i<1/6?t+6*(e-t)*i:i<.5?e:i<2/3?t+(e-t)*(2/3-i)*6:t}var i=/hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(t)||/hsla\((\d+),\s*([\d.]+)%,\s*([\d.]+)%,\s*([\d.]+)\)/g.exec(t);t=parseInt(i[1])/360;var n=parseInt(i[2])/100,s=parseInt(i[3])/100,i=i[4]||1;if(0==n)s=n=t=s;else{var o=s<.5?s*(1+n):s+n-s*n,a=2*s-o,s=e(a,o,t+1/3),n=e(a,o,t);t=e(a,o,t-1/3)}return"rgba("+255*s+","+255*n+","+255*t+","+i+")"}(i):void 0;else s=(s=l(i))?i.substr(0,i.length-s.length):i,i=e&&!/\s/g.test(i)?s+e:s;return{original:i+="",numbers:i.match(n)?i.match(n).map(Number):[0],strings:B.str(t)||e?i.split(n):[]}}function y(t){return b(t=t?d(B.arr(t)?t.map(o):o(t)):[],function(t,e,i){return i.indexOf(t)===e})}function k(t,i){var e=r(i);if(B.arr(t)){var n=t.length;2!==n||B.obj(t[0])?B.fnc(i.duration)||(e.duration=i.duration/n):t={value:t}}return o(t).map(function(t,e){return e=e?0:i.delay,t=B.obj(t)&&!B.pth(t)?t:{value:t},B.und(t.delay)&&(t.delay=e),t}).map(function(t){return c(t,e)})}function E(o,a){var r;return o.tweens.map(function(t){var e=(t=function(t,e){var i,n={};for(i in t){var s=h(t[i],e);B.arr(s)&&1===(s=s.map(function(t){return h(t,e)})).length&&(s=s[0]),n[i]=s}return n.duration=parseFloat(n.duration),n.delay=parseFloat(n.delay),n}(t,a)).value,i=v(a.target,o.name),n=r?r.to.original:i,n=B.arr(e)?e[0]:n,s=f(B.arr(e)?e[1]:e,n),i=l(s)||l(n)||l(i);return t.from=_(n,i),t.to=_(s,i),t.start=r?r.end:o.offset,t.end=t.start+t.delay+t.duration,t.easing=function(t){return B.arr(t)?D.apply(this,t):S[t]}(t.easing),t.elasticity=(1e3-Math.min(Math.max(t.elasticity,1),999))/1e3,t.isPath=B.pth(e),t.isColor=B.col(t.from.original),t.isColor&&(t.round=1),r=t})}function M(e,t,i,n){var s="delay"===e;return t.length?(s?Math.min:Math.max).apply(Math,t.map(function(t){return t[e]})):s?n.delay:i.offset+n.delay+n.duration}function n(t){var e,i,n,s,o=u(L,t),a=u(T,t),r=(i=t.targets,(n=y(i)).map(function(t,e){return{target:t,id:e,total:n.length}})),l=[],h=c(o,a);for(e in t)h.hasOwnProperty(e)||"targets"===e||l.push({name:e,offset:h.offset,tweens:k(t[e],a)});return s=l,t=b(d(r.map(function(n){return s.map(function(t){var e=p(n.target,t.name);if(e){var i=E(t,n);t={type:e,property:t.name,animatable:n,tweens:i,duration:i[i.length-1].end,delay:i[0].delay}}else t=void 0;return t})})),function(t){return!B.und(t)}),c(o,{children:[],animatables:r,animations:t,duration:M("duration",t,o,a),delay:M("delay",t,o,a)})}function O(t){function d(){return window.Promise&&new Promise(function(t){return _=t})}function u(t){return k.reversed?k.duration-t:t}function c(e){for(var t=0,i={},n=k.animations,s=n.length;t<s;){var o=n[t],a=o.animatable,r=o.tweens,l=r.length-1,h=r[l];l&&(h=b(r,function(t){return e<t.end})[0]||h);for(var r=Math.min(Math.max(e-h.start-h.delay,0),h.duration)/h.duration,d=isNaN(r)?1:h.easing(r,h.elasticity),r=h.to.strings,u=h.round,l=[],c=void 0,c=h.to.numbers.length,p=0;p<c;p++){var v=void 0,v=h.to.numbers[p],f=h.from.numbers[p],v=h.isPath?C(h.value,d*v):f+d*(v-f);u&&(h.isColor&&2<p||(v=Math.round(v*u)/u)),l.push(v)}if(h=r.length)for(c=r[0],d=0;d<h;d++)u=r[d+1],p=l[d],isNaN(p)||(c=u?c+(p+u):c+(p+" "));else c=l[0];I[o.type](a.target,o.property,c,i,a.id),o.currentValue=c,t++}if(t=Object.keys(i).length)for(n=0;n<t;n++)x||(x=w(document.body,"transform")?"transform":"-webkit-transform"),k.animatables[n].target.style[x]=i[n].join(" ");k.currentTime=e,k.progress=e/k.duration*100}function p(t){k[t]&&k[t](k)}function v(){k.remaining&&!0!==k.remaining&&k.remaining--}function e(t){var e=k.duration,i=k.offset,n=i+k.delay,s=k.currentTime,o=k.reversed,a=u(t);if(k.children.length){var r=k.children,l=r.length;if(a>=k.currentTime)for(var h=0;h<l;h++)r[h].seek(a);else for(;l--;)r[l].seek(a)}(n<=a||!e)&&(k.began||(k.began=!0,p("begin")),p("run")),i<a&&a<e?c(a):(a<=i&&0!==s&&(c(0),o&&v()),(e<=a&&s!==e||!e)&&(c(e),o||v())),p("update"),e<=t&&(k.remaining?(m=f,"alternate"===k.direction&&(k.reversed=!k.reversed)):(k.pause(),k.completed||(k.completed=!0,p("complete"),"Promise"in window&&(_(),y=d()))),g=0)}t=void 0===t?{}:t;var f,m,g=0,_=null,y=d(),k=n(t);return k.reset=function(){var t=k.direction,e=k.loop;for(k.currentTime=0,k.progress=0,k.paused=!0,k.began=!1,k.completed=!1,k.reversed="reverse"===t,k.remaining="alternate"===t&&1===e?2:e,c(0),t=k.children.length;t--;)k.children[t].reset()},k.tick=function(t){f=t,m||(m=f),e((g+f-m)*O.speed)},k.seek=function(t){e(u(t))},k.pause=function(){var t=A.indexOf(k);-1<t&&A.splice(t,1),k.paused=!0},k.play=function(){k.paused&&(k.paused=!1,m=0,g=u(k.currentTime),A.push(k),R||H())},k.reverse=function(){k.reversed=!k.reversed,m=0,g=u(k.currentTime)},k.restart=function(){k.pause(),k.reset(),k.play()},k.finished=y,k.reset(),k.autoplay&&k.play(),k}var x,L={update:void 0,begin:void 0,run:void 0,complete:void 0,loop:1,direction:"normal",autoplay:!0,offset:0},T={duration:1e3,delay:0,easing:"easeOutElastic",elasticity:500,round:0},$="translateX translateY translateZ rotate rotateX rotateY rotateZ scale scaleX scaleY scaleZ skewX skewY perspective".split(" "),B={arr:function(t){return Array.isArray(t)},obj:function(t){return-1<Object.prototype.toString.call(t).indexOf("Object")},pth:function(t){return B.obj(t)&&t.hasOwnProperty("totalLength")},svg:function(t){return t instanceof SVGElement},dom:function(t){return t.nodeType||B.svg(t)},str:function(t){return"string"==typeof t},fnc:function(t){return"function"==typeof t},und:function(t){return void 0===t},hex:function(t){return/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(t)},rgb:function(t){return/^rgb/.test(t)},hsl:function(t){return/^hsl/.test(t)},col:function(t){return B.hex(t)||B.rgb(t)||B.hsl(t)}},D=function(){function u(t,e,i){return(((1-3*i+3*e)*t+(3*i-6*e))*t+3*e)*t}return function(a,r,l,h){if(0<=a&&a<=1&&0<=l&&l<=1){var d=new Float32Array(11);if(a!==r||l!==h)for(var t=0;t<11;++t)d[t]=u(.1*t,a,l);return function(t){if(a===r&&l===h)return t;if(0===t)return 0;if(1===t)return 1;for(var e=0,i=1;10!==i&&d[i]<=t;++i)e+=.1;var i=e+(t-d[--i])/(d[i+1]-d[i])*.1,n=3*(1-3*l+3*a)*i*i+2*(3*l-6*a)*i+3*a;if(.001<=n){for(e=0;e<4&&0!=(n=3*(1-3*l+3*a)*i*i+2*(3*l-6*a)*i+3*a);++e)var s=u(i,a,l)-t,i=i-s/n;t=i}else if(0===n)t=i;else{for(var i=e,e=e+.1,o=0;0<(n=u(s=i+(e-i)/2,a,l)-t)?e=s:i=s,1e-7<Math.abs(n)&&++o<10;);t=s}return u(t,r,h)}}}}(),S=function(){function i(t,e){return 0===t||1===t?t:-Math.pow(2,10*(t-1))*Math.sin(2*(t-1-e/(2*Math.PI)*Math.asin(1))*Math.PI/e)}var t,n="Quad Cubic Quart Quint Sine Expo Circ Back Elastic".split(" "),e={In:[[.55,.085,.68,.53],[.55,.055,.675,.19],[.895,.03,.685,.22],[.755,.05,.855,.06],[.47,0,.745,.715],[.95,.05,.795,.035],[.6,.04,.98,.335],[.6,-.28,.735,.045],i],Out:[[.25,.46,.45,.94],[.215,.61,.355,1],[.165,.84,.44,1],[.23,1,.32,1],[.39,.575,.565,1],[.19,1,.22,1],[.075,.82,.165,1],[.175,.885,.32,1.275],function(t,e){return 1-i(1-t,e)}],InOut:[[.455,.03,.515,.955],[.645,.045,.355,1],[.77,0,.175,1],[.86,0,.07,1],[.445,.05,.55,.95],[1,0,0,1],[.785,.135,.15,.86],[.68,-.55,.265,1.55],function(t,e){return t<.5?i(2*t,e)/2:1-i(-2*t+2,e)/2}]},s={linear:D(.25,.25,.75,.75)},o={};for(t in e)o.type=t,e[o.type].forEach(function(i){return function(t,e){s["ease"+i.type+n[e]]=B.fnc(t)?t:D.apply($jscomp$this,t)}}(o)),o={type:o.type};return s}(),I={css:function(t,e,i){return t.style[e]=i},attribute:function(t,e,i){return t.setAttribute(e,i)},object:function(t,e,i){return t[e]=i},transform:function(t,e,i,n,s){n[s]||(n[s]=[]),n[s].push(e+"("+i+")")}},A=[],R=0,H=function(){function n(){R=requestAnimationFrame(t)}function t(t){var e=A.length;if(e){for(var i=0;i<e;)A[i]&&A[i].tick(t),i++;n()}else cancelAnimationFrame(R),R=0}return n}();return O.version="2.2.0",O.speed=1,O.running=A,O.remove=function(t){t=y(t);for(var e=A.length;e--;)for(var i=A[e],n=i.animations,s=n.length;s--;)a(t,n[s].animatable.target)&&(n.splice(s,1),n.length||i.pause())},O.getValue=v,O.path=function(t,e){var i=B.str(t)?s(t)[0]:t,n=e||100;return function(t){return{el:i,property:t,totalLength:g(i)*(n/100)}}},O.setDashoffset=function(t){var e=g(t);return t.setAttribute("stroke-dasharray",e),e},O.bezier=D,O.easings=S,O.timeline=function(n){var s=O(n);return s.pause(),s.duration=0,s.add=function(t){return s.children.forEach(function(t){t.began=!0,t.completed=!0}),o(t).forEach(function(t){var e=c(t,u(T,n||{}));e.targets=e.targets||n.targets,t=s.duration;var i=e.offset;e.autoplay=!1,e.direction=s.direction,e.offset=B.und(i)?t:f(i,t),s.began=!0,s.completed=!0,s.seek(e.offset),(e=O(e)).began=!0,e.completed=!0,e.duration>t&&(s.duration=e.duration),s.children.push(e)}),s.seek(0),s.reset(),s.autoplay&&s.restart(),s},s},O.random=function(t,e){return Math.floor(Math.random()*(e-t+1))+t},O}(),function(r,l){"use strict";var e={accordion:!0,onOpenStart:void 0,onOpenEnd:void 0,onCloseStart:void 0,onCloseEnd:void 0,inDuration:300,outDuration:300},t=function(t){function s(t,e){_classCallCheck(this,s);var i=_possibleConstructorReturn(this,(s.__proto__||Object.getPrototypeOf(s)).call(this,s,t,e));(i.el.M_Collapsible=i).options=r.extend({},s.defaults,e),i.$headers=i.$el.children("li").children(".collapsible-header"),i.$headers.attr("tabindex",0),i._setupEventHandlers();var n=i.$el.children("li.active").children(".collapsible-body");return i.options.accordion?n.first().css("display","block"):n.css("display","block"),i}return _inherits(s,Component),_createClass(s,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.M_Collapsible=void 0}},{key:"_setupEventHandlers",value:function(){var e=this;this._handleCollapsibleClickBound=this._handleCollapsibleClick.bind(this),this._handleCollapsibleKeydownBound=this._handleCollapsibleKeydown.bind(this),this.el.addEventListener("click",this._handleCollapsibleClickBound),this.$headers.each(function(t){t.addEventListener("keydown",e._handleCollapsibleKeydownBound)})}},{key:"_removeEventHandlers",value:function(){var e=this;this.el.removeEventListener("click",this._handleCollapsibleClickBound),this.$headers.each(function(t){t.removeEventListener("keydown",e._handleCollapsibleKeydownBound)})}},{key:"_handleCollapsibleClick",value:function(t){var e=r(t.target).closest(".collapsible-header");if(t.target&&e.length){var i=e.closest(".collapsible");if(i[0]===this.el){var n=e.closest("li"),s=i.children("li"),o=n[0].classList.contains("active"),a=s.index(n);o?this.close(a):this.open(a)}}}},{key:"_handleCollapsibleKeydown",value:function(t){13===t.keyCode&&this._handleCollapsibleClickBound(t)}},{key:"_animateIn",value:function(t){var e=this,i=this.$el.children("li").eq(t);if(i.length){var n=i.children(".collapsible-body");l.remove(n[0]),n.css({display:"block",overflow:"hidden",height:0,paddingTop:"",paddingBottom:""});var s=n.css("padding-top"),o=n.css("padding-bottom"),a=n[0].scrollHeight;n.css({paddingTop:0,paddingBottom:0}),l({targets:n[0],height:a,paddingTop:s,paddingBottom:o,duration:this.options.inDuration,easing:"easeInOutCubic",complete:function(t){n.css({overflow:"",paddingTop:"",paddingBottom:"",height:""}),"function"==typeof e.options.onOpenEnd&&e.options.onOpenEnd.call(e,i[0])}})}}},{key:"_animateOut",value:function(t){var e=this,i=this.$el.children("li").eq(t);if(i.length){var n=i.children(".collapsible-body");l.remove(n[0]),n.css("overflow","hidden"),l({targets:n[0],height:0,paddingTop:0,paddingBottom:0,duration:this.options.outDuration,easing:"easeInOutCubic",complete:function(){n.css({height:"",overflow:"",padding:"",display:""}),"function"==typeof e.options.onCloseEnd&&e.options.onCloseEnd.call(e,i[0])}})}}},{key:"open",value:function(t){var i=this,e=this.$el.children("li").eq(t);if(e.length&&!e[0].classList.contains("active")){if("function"==typeof this.options.onOpenStart&&this.options.onOpenStart.call(this,e[0]),this.options.accordion){var n=this.$el.children("li");this.$el.children("li.active").each(function(t){var e=n.index(r(t));i.close(e)})}e[0].classList.add("active"),this._animateIn(t)}}},{key:"close",value:function(t){var e=this.$el.children("li").eq(t);e.length&&e[0].classList.contains("active")&&("function"==typeof this.options.onCloseStart&&this.options.onCloseStart.call(this,e[0]),e[0].classList.remove("active"),this._animateOut(t))}}],[{key:"init",value:function(t,e){return _get(s.__proto__||Object.getPrototypeOf(s),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Collapsible}},{key:"defaults",get:function(){return e}}]),s}();M.Collapsible=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"collapsible","M_Collapsible")}(cash,M.anime),function(h,i){"use strict";var e={alignment:"left",autoFocus:!0,constrainWidth:!0,container:null,coverTrigger:!0,closeOnClick:!0,hover:!1,inDuration:150,outDuration:250,onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null,onItemClick:null},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return i.el.M_Dropdown=i,n._dropdowns.push(i),i.id=M.getIdFromTrigger(t),i.dropdownEl=document.getElementById(i.id),i.$dropdownEl=h(i.dropdownEl),i.options=h.extend({},n.defaults,e),i.isOpen=!1,i.isScrollable=!1,i.isTouchMoving=!1,i.focusedIndex=-1,i.filterQuery=[],i.options.container?h(i.options.container).append(i.dropdownEl):i.$el.after(i.dropdownEl),i._makeDropdownFocusable(),i._resetFilterQueryBound=i._resetFilterQuery.bind(i),i._handleDocumentClickBound=i._handleDocumentClick.bind(i),i._handleDocumentTouchmoveBound=i._handleDocumentTouchmove.bind(i),i._handleDropdownClickBound=i._handleDropdownClick.bind(i),i._handleDropdownKeydownBound=i._handleDropdownKeydown.bind(i),i._handleTriggerKeydownBound=i._handleTriggerKeydown.bind(i),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._resetDropdownStyles(),this._removeEventHandlers(),n._dropdowns.splice(n._dropdowns.indexOf(this),1),this.el.M_Dropdown=void 0}},{key:"_setupEventHandlers",value:function(){this.el.addEventListener("keydown",this._handleTriggerKeydownBound),this.dropdownEl.addEventListener("click",this._handleDropdownClickBound),this.options.hover?(this._handleMouseEnterBound=this._handleMouseEnter.bind(this),this.el.addEventListener("mouseenter",this._handleMouseEnterBound),this._handleMouseLeaveBound=this._handleMouseLeave.bind(this),this.el.addEventListener("mouseleave",this._handleMouseLeaveBound),this.dropdownEl.addEventListener("mouseleave",this._handleMouseLeaveBound)):(this._handleClickBound=this._handleClick.bind(this),this.el.addEventListener("click",this._handleClickBound))}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("keydown",this._handleTriggerKeydownBound),this.dropdownEl.removeEventListener("click",this._handleDropdownClickBound),this.options.hover?(this.el.removeEventListener("mouseenter",this._handleMouseEnterBound),this.el.removeEventListener("mouseleave",this._handleMouseLeaveBound),this.dropdownEl.removeEventListener("mouseleave",this._handleMouseLeaveBound)):this.el.removeEventListener("click",this._handleClickBound)}},{key:"_setupTemporaryEventHandlers",value:function(){document.body.addEventListener("click",this._handleDocumentClickBound,!0),document.body.addEventListener("touchend",this._handleDocumentClickBound),document.body.addEventListener("touchmove",this._handleDocumentTouchmoveBound),this.dropdownEl.addEventListener("keydown",this._handleDropdownKeydownBound)}},{key:"_removeTemporaryEventHandlers",value:function(){document.body.removeEventListener("click",this._handleDocumentClickBound,!0),document.body.removeEventListener("touchend",this._handleDocumentClickBound),document.body.removeEventListener("touchmove",this._handleDocumentTouchmoveBound),this.dropdownEl.removeEventListener("keydown",this._handleDropdownKeydownBound)}},{key:"_handleClick",value:function(t){t.preventDefault(),this.open()}},{key:"_handleMouseEnter",value:function(){this.open()}},{key:"_handleMouseLeave",value:function(t){var e=t.toElement||t.relatedTarget,i=!!h(e).closest(".dropdown-content").length,n=!1,s=h(e).closest(".dropdown-trigger");s.length&&s[0].M_Dropdown&&s[0].M_Dropdown.isOpen&&(n=!0),n||i||this.close()}},{key:"_handleDocumentClick",value:function(t){var e=this,i=h(t.target);this.options.closeOnClick&&i.closest(".dropdown-content").length&&!this.isTouchMoving?setTimeout(function(){e.close()},0):!i.closest(".dropdown-trigger").length&&i.closest(".dropdown-content").length||setTimeout(function(){e.close()},0),this.isTouchMoving=!1}},{key:"_handleTriggerKeydown",value:function(t){t.which!==M.keys.ARROW_DOWN&&t.which!==M.keys.ENTER||this.isOpen||(t.preventDefault(),this.open())}},{key:"_handleDocumentTouchmove",value:function(t){h(t.target).closest(".dropdown-content").length&&(this.isTouchMoving=!0)}},{key:"_handleDropdownClick",value:function(t){if("function"==typeof this.options.onItemClick){var e=h(t.target).closest("li")[0];this.options.onItemClick.call(this,e)}}},{key:"_handleDropdownKeydown",value:function(t){if(t.which===M.keys.TAB)t.preventDefault(),this.close();else if(t.which!==M.keys.ARROW_DOWN&&t.which!==M.keys.ARROW_UP||!this.isOpen)if(t.which===M.keys.ENTER&&this.isOpen){var e=this.dropdownEl.children[this.focusedIndex],i=h(e).find("a, button").first();i.length?i[0].click():e&&e.click()}else t.which===M.keys.ESC&&this.isOpen&&(t.preventDefault(),this.close());else{t.preventDefault();var n=t.which===M.keys.ARROW_DOWN?1:-1,s=this.focusedIndex,o=!1;do{if(s+=n,this.dropdownEl.children[s]&&-1!==this.dropdownEl.children[s].tabIndex){o=!0;break}}while(s<this.dropdownEl.children.length&&0<=s);o&&(this.focusedIndex=s,this._focusFocusedItem())}var a=String.fromCharCode(t.which).toLowerCase();if(a&&-1===[9,13,27,38,40].indexOf(t.which)){this.filterQuery.push(a);var r=this.filterQuery.join(""),l=h(this.dropdownEl).find("li").filter(function(t){return 0===h(t).text().toLowerCase().indexOf(r)})[0];l&&(this.focusedIndex=h(l).index(),this._focusFocusedItem())}this.filterTimeout=setTimeout(this._resetFilterQueryBound,1e3)}},{key:"_resetFilterQuery",value:function(){this.filterQuery=[]}},{key:"_resetDropdownStyles",value:function(){this.$dropdownEl.css({display:"",width:"",height:"",left:"",top:"","transform-origin":"",transform:"",opacity:""})}},{key:"_makeDropdownFocusable",value:function(){this.dropdownEl.tabIndex=0,h(this.dropdownEl).children().each(function(t){t.getAttribute("tabindex")||t.setAttribute("tabindex",0)})}},{key:"_focusFocusedItem",value:function(){0<=this.focusedIndex&&this.focusedIndex<this.dropdownEl.children.length&&this.options.autoFocus&&this.dropdownEl.children[this.focusedIndex].focus()}},{key:"_getDropdownPosition",value:function(){this.el.offsetParent.getBoundingClientRect();var t=this.el.getBoundingClientRect(),e=this.dropdownEl.getBoundingClientRect(),i=e.height,n=e.width,s=t.left-e.left,o=t.top-e.top,a={left:s,top:o,height:i,width:n},r=this.dropdownEl.offsetParent?this.dropdownEl.offsetParent:this.dropdownEl.parentNode,l=M.checkPossibleAlignments(this.el,r,a,this.options.coverTrigger?0:t.height),h="top",d=this.options.alignment;if(o+=this.options.coverTrigger?0:t.height,this.isScrollable=!1,l.top||(l.bottom?h="bottom":(this.isScrollable=!0,l.spaceOnTop>l.spaceOnBottom?(h="bottom",i+=l.spaceOnTop,o-=l.spaceOnTop):i+=l.spaceOnBottom)),!l[d]){var u="left"===d?"right":"left";l[u]?d=u:l.spaceOnLeft>l.spaceOnRight?(d="right",n+=l.spaceOnLeft,s-=l.spaceOnLeft):(d="left",n+=l.spaceOnRight)}return"bottom"===h&&(o=o-e.height+(this.options.coverTrigger?t.height:0)),"right"===d&&(s=s-e.width+t.width),{x:s,y:o,verticalAlignment:h,horizontalAlignment:d,height:i,width:n}}},{key:"_animateIn",value:function(){var e=this;i.remove(this.dropdownEl),i({targets:this.dropdownEl,opacity:{value:[0,1],easing:"easeOutQuad"},scaleX:[.3,1],scaleY:[.3,1],duration:this.options.inDuration,easing:"easeOutQuint",complete:function(t){e.options.autoFocus&&e.dropdownEl.focus(),"function"==typeof e.options.onOpenEnd&&e.options.onOpenEnd.call(e,e.el)}})}},{key:"_animateOut",value:function(){var e=this;i.remove(this.dropdownEl),i({targets:this.dropdownEl,opacity:{value:0,easing:"easeOutQuint"},scaleX:.3,scaleY:.3,duration:this.options.outDuration,easing:"easeOutQuint",complete:function(t){e._resetDropdownStyles(),"function"==typeof e.options.onCloseEnd&&e.options.onCloseEnd.call(e,e.el)}})}},{key:"_placeDropdown",value:function(){var t=this.options.constrainWidth?this.el.getBoundingClientRect().width:this.dropdownEl.getBoundingClientRect().width;this.dropdownEl.style.width=t+"px";var e=this._getDropdownPosition();this.dropdownEl.style.left=e.x+"px",this.dropdownEl.style.top=e.y+"px",this.dropdownEl.style.height=e.height+"px",this.dropdownEl.style.width=e.width+"px",this.dropdownEl.style.transformOrigin=("left"===e.horizontalAlignment?"0":"100%")+" "+("top"===e.verticalAlignment?"0":"100%")}},{key:"open",value:function(){this.isOpen||(this.isOpen=!0,"function"==typeof this.options.onOpenStart&&this.options.onOpenStart.call(this,this.el),this._resetDropdownStyles(),this.dropdownEl.style.display="block",this._placeDropdown(),this._animateIn(),this._setupTemporaryEventHandlers())}},{key:"close",value:function(){this.isOpen&&(this.isOpen=!1,this.focusedIndex=-1,"function"==typeof this.options.onCloseStart&&this.options.onCloseStart.call(this,this.el),this._animateOut(),this._removeTemporaryEventHandlers(),this.options.autoFocus&&this.el.focus())}},{key:"recalculateDimensions",value:function(){this.isOpen&&(this.$dropdownEl.css({width:"",height:"",left:"",top:"","transform-origin":""}),this._placeDropdown())}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Dropdown}},{key:"defaults",get:function(){return e}}]),n}();t._dropdowns=[],M.Dropdown=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"dropdown","M_Dropdown")}(cash,M.anime),function(s,i){"use strict";var e={opacity:.5,inDuration:250,outDuration:250,onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null,preventScrolling:!0,dismissible:!0,startingTop:"4%",endingTop:"10%"},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Modal=i).options=s.extend({},n.defaults,e),i.isOpen=!1,i.id=i.$el.attr("id"),i._openingTrigger=void 0,i.$overlay=s('<div class="modal-overlay"></div>'),i.el.tabIndex=0,i._nthModalOpened=0,n._count++,i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){n._count--,this._removeEventHandlers(),this.el.removeAttribute("style"),this.$overlay.remove(),this.el.M_Modal=void 0}},{key:"_setupEventHandlers",value:function(){this._handleOverlayClickBound=this._handleOverlayClick.bind(this),this._handleModalCloseClickBound=this._handleModalCloseClick.bind(this),1===n._count&&document.body.addEventListener("click",this._handleTriggerClick),this.$overlay[0].addEventListener("click",this._handleOverlayClickBound),this.el.addEventListener("click",this._handleModalCloseClickBound)}},{key:"_removeEventHandlers",value:function(){0===n._count&&document.body.removeEventListener("click",this._handleTriggerClick),this.$overlay[0].removeEventListener("click",this._handleOverlayClickBound),this.el.removeEventListener("click",this._handleModalCloseClickBound)}},{key:"_handleTriggerClick",value:function(t){var e=s(t.target).closest(".modal-trigger");if(e.length){var i=M.getIdFromTrigger(e[0]),n=document.getElementById(i).M_Modal;n&&n.open(e),t.preventDefault()}}},{key:"_handleOverlayClick",value:function(){this.options.dismissible&&this.close()}},{key:"_handleModalCloseClick",value:function(t){s(t.target).closest(".modal-close").length&&this.close()}},{key:"_handleKeydown",value:function(t){27===t.keyCode&&this.options.dismissible&&this.close()}},{key:"_handleFocus",value:function(t){this.el.contains(t.target)||this._nthModalOpened!==n._modalsOpen||this.el.focus()}},{key:"_animateIn",value:function(){var t=this;s.extend(this.el.style,{display:"block",opacity:0}),s.extend(this.$overlay[0].style,{display:"block",opacity:0}),i({targets:this.$overlay[0],opacity:this.options.opacity,duration:this.options.inDuration,easing:"easeOutQuad"});var e={targets:this.el,duration:this.options.inDuration,easing:"easeOutCubic",complete:function(){"function"==typeof t.options.onOpenEnd&&t.options.onOpenEnd.call(t,t.el,t._openingTrigger)}};this.el.classList.contains("bottom-sheet")?s.extend(e,{bottom:0,opacity:1}):s.extend(e,{top:[this.options.startingTop,this.options.endingTop],opacity:1,scaleX:[.8,1],scaleY:[.8,1]}),i(e)}},{key:"_animateOut",value:function(){var t=this;i({targets:this.$overlay[0],opacity:0,duration:this.options.outDuration,easing:"easeOutQuart"});var e={targets:this.el,duration:this.options.outDuration,easing:"easeOutCubic",complete:function(){t.el.style.display="none",t.$overlay.remove(),"function"==typeof t.options.onCloseEnd&&t.options.onCloseEnd.call(t,t.el)}};this.el.classList.contains("bottom-sheet")?s.extend(e,{bottom:"-100%",opacity:0}):s.extend(e,{top:[this.options.endingTop,this.options.startingTop],opacity:0,scaleX:.8,scaleY:.8}),i(e)}},{key:"open",value:function(t){if(!this.isOpen)return this.isOpen=!0,n._modalsOpen++,this._nthModalOpened=n._modalsOpen,this.$overlay[0].style.zIndex=1e3+2*n._modalsOpen,this.el.style.zIndex=1e3+2*n._modalsOpen+1,this._openingTrigger=t?t[0]:void 0,"function"==typeof this.options.onOpenStart&&this.options.onOpenStart.call(this,this.el,this._openingTrigger),this.options.preventScrolling&&(document.body.style.overflow="hidden"),this.el.classList.add("open"),this.el.insertAdjacentElement("afterend",this.$overlay[0]),this.options.dismissible&&(this._handleKeydownBound=this._handleKeydown.bind(this),this._handleFocusBound=this._handleFocus.bind(this),document.addEventListener("keydown",this._handleKeydownBound),document.addEventListener("focus",this._handleFocusBound,!0)),i.remove(this.el),i.remove(this.$overlay[0]),this._animateIn(),this.el.focus(),this}},{key:"close",value:function(){if(this.isOpen)return this.isOpen=!1,n._modalsOpen--,this._nthModalOpened=0,"function"==typeof this.options.onCloseStart&&this.options.onCloseStart.call(this,this.el),this.el.classList.remove("open"),0===n._modalsOpen&&(document.body.style.overflow=""),this.options.dismissible&&(document.removeEventListener("keydown",this._handleKeydownBound),document.removeEventListener("focus",this._handleFocusBound,!0)),i.remove(this.el),i.remove(this.$overlay[0]),this._animateOut(),this}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Modal}},{key:"defaults",get:function(){return e}}]),n}();t._modalsOpen=0,t._count=0,M.Modal=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"modal","M_Modal")}(cash,M.anime),function(o,a){"use strict";var e={inDuration:275,outDuration:200,onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Materialbox=i).options=o.extend({},n.defaults,e),i.overlayActive=!1,i.doneAnimating=!0,i.placeholder=o("<div></div>").addClass("material-placeholder"),i.originalWidth=0,i.originalHeight=0,i.originInlineStyles=i.$el.attr("style"),i.caption=i.el.getAttribute("data-caption")||"",i.$el.before(i.placeholder),i.placeholder.append(i.$el),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.M_Materialbox=void 0,o(this.placeholder).after(this.el).remove(),this.$el.removeAttr("style")}},{key:"_setupEventHandlers",value:function(){this._handleMaterialboxClickBound=this._handleMaterialboxClick.bind(this),this.el.addEventListener("click",this._handleMaterialboxClickBound)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("click",this._handleMaterialboxClickBound)}},{key:"_handleMaterialboxClick",value:function(t){!1===this.doneAnimating||this.overlayActive&&this.doneAnimating?this.close():this.open()}},{key:"_handleWindowScroll",value:function(){this.overlayActive&&this.close()}},{key:"_handleWindowResize",value:function(){this.overlayActive&&this.close()}},{key:"_handleWindowEscape",value:function(t){27===t.keyCode&&this.doneAnimating&&this.overlayActive&&this.close()}},{key:"_makeAncestorsOverflowVisible",value:function(){this.ancestorsChanged=o();for(var t=this.placeholder[0].parentNode;null!==t&&!o(t).is(document);){var e=o(t);"visible"!==e.css("overflow")&&(e.css("overflow","visible"),void 0===this.ancestorsChanged?this.ancestorsChanged=e:this.ancestorsChanged=this.ancestorsChanged.add(e)),t=t.parentNode}}},{key:"_animateImageIn",value:function(){var t=this,e={targets:this.el,height:[this.originalHeight,this.newHeight],width:[this.originalWidth,this.newWidth],left:M.getDocumentScrollLeft()+this.windowWidth/2-this.placeholder.offset().left-this.newWidth/2,top:M.getDocumentScrollTop()+this.windowHeight/2-this.placeholder.offset().top-this.newHeight/2,duration:this.options.inDuration,easing:"easeOutQuad",complete:function(){t.doneAnimating=!0,"function"==typeof t.options.onOpenEnd&&t.options.onOpenEnd.call(t,t.el)}};this.maxWidth=this.$el.css("max-width"),this.maxHeight=this.$el.css("max-height"),"none"!==this.maxWidth&&(e.maxWidth=this.newWidth),"none"!==this.maxHeight&&(e.maxHeight=this.newHeight),a(e)}},{key:"_animateImageOut",value:function(){var t=this,e={targets:this.el,width:this.originalWidth,height:this.originalHeight,left:0,top:0,duration:this.options.outDuration,easing:"easeOutQuad",complete:function(){t.placeholder.css({height:"",width:"",position:"",top:"",left:""}),t.attrWidth&&t.$el.attr("width",t.attrWidth),t.attrHeight&&t.$el.attr("height",t.attrHeight),t.$el.removeAttr("style"),t.originInlineStyles&&t.$el.attr("style",t.originInlineStyles),t.$el.removeClass("active"),t.doneAnimating=!0,t.ancestorsChanged.length&&t.ancestorsChanged.css("overflow",""),"function"==typeof t.options.onCloseEnd&&t.options.onCloseEnd.call(t,t.el)}};a(e)}},{key:"_updateVars",value:function(){this.windowWidth=window.innerWidth,this.windowHeight=window.innerHeight,this.caption=this.el.getAttribute("data-caption")||""}},{key:"open",value:function(){var t=this;this._updateVars(),this.originalWidth=this.el.getBoundingClientRect().width,this.originalHeight=this.el.getBoundingClientRect().height,this.doneAnimating=!1,this.$el.addClass("active"),this.overlayActive=!0,"function"==typeof this.options.onOpenStart&&this.options.onOpenStart.call(this,this.el),this.placeholder.css({width:this.placeholder[0].getBoundingClientRect().width+"px",height:this.placeholder[0].getBoundingClientRect().height+"px",position:"relative",top:0,left:0}),this._makeAncestorsOverflowVisible(),this.$el.css({position:"absolute","z-index":1e3,"will-change":"left, top, width, height"}),this.attrWidth=this.$el.attr("width"),this.attrHeight=this.$el.attr("height"),this.attrWidth&&(this.$el.css("width",this.attrWidth+"px"),this.$el.removeAttr("width")),this.attrHeight&&(this.$el.css("width",this.attrHeight+"px"),this.$el.removeAttr("height")),this.$overlay=o('<div id="materialbox-overlay"></div>').css({opacity:0}).one("click",function(){t.doneAnimating&&t.close()}),this.$el.before(this.$overlay);var e=this.$overlay[0].getBoundingClientRect();this.$overlay.css({width:this.windowWidth+"px",height:this.windowHeight+"px",left:-1*e.left+"px",top:-1*e.top+"px"}),a.remove(this.el),a.remove(this.$overlay[0]),a({targets:this.$overlay[0],opacity:1,duration:this.options.inDuration,easing:"easeOutQuad"}),""!==this.caption&&(this.$photocaption&&a.remove(this.$photoCaption[0]),this.$photoCaption=o('<div class="materialbox-caption"></div>'),this.$photoCaption.text(this.caption),o("body").append(this.$photoCaption),this.$photoCaption.css({display:"inline"}),a({targets:this.$photoCaption[0],opacity:1,duration:this.options.inDuration,easing:"easeOutQuad"}));var i=0,n=this.originalWidth/this.windowWidth,s=this.originalHeight/this.windowHeight;this.newWidth=0,this.newHeight=0,s<n?(i=this.originalHeight/this.originalWidth,this.newWidth=.9*this.windowWidth,this.newHeight=.9*this.windowWidth*i):(i=this.originalWidth/this.originalHeight,this.newWidth=.9*this.windowHeight*i,this.newHeight=.9*this.windowHeight),this._animateImageIn(),this._handleWindowScrollBound=this._handleWindowScroll.bind(this),this._handleWindowResizeBound=this._handleWindowResize.bind(this),this._handleWindowEscapeBound=this._handleWindowEscape.bind(this),window.addEventListener("scroll",this._handleWindowScrollBound),window.addEventListener("resize",this._handleWindowResizeBound),window.addEventListener("keyup",this._handleWindowEscapeBound)}},{key:"close",value:function(){var t=this;this._updateVars(),this.doneAnimating=!1,"function"==typeof this.options.onCloseStart&&this.options.onCloseStart.call(this,this.el),a.remove(this.el),a.remove(this.$overlay[0]),""!==this.caption&&a.remove(this.$photoCaption[0]),window.removeEventListener("scroll",this._handleWindowScrollBound),window.removeEventListener("resize",this._handleWindowResizeBound),window.removeEventListener("keyup",this._handleWindowEscapeBound),a({targets:this.$overlay[0],opacity:0,duration:this.options.outDuration,easing:"easeOutQuad",complete:function(){t.overlayActive=!1,t.$overlay.remove()}}),this._animateImageOut(),""!==this.caption&&a({targets:this.$photoCaption[0],opacity:0,duration:this.options.outDuration,easing:"easeOutQuad",complete:function(){t.$photoCaption.remove()}})}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Materialbox}},{key:"defaults",get:function(){return e}}]),n}();M.Materialbox=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"materialbox","M_Materialbox")}(cash,M.anime),function(s){"use strict";var e={responsiveThreshold:0},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Parallax=i).options=s.extend({},n.defaults,e),i._enabled=window.innerWidth>i.options.responsiveThreshold,i.$img=i.$el.find("img").first(),i.$img.each(function(){this.complete&&s(this).trigger("load")}),i._updateParallax(),i._setupEventHandlers(),i._setupStyles(),n._parallaxes.push(i),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){n._parallaxes.splice(n._parallaxes.indexOf(this),1),this.$img[0].style.transform="",this._removeEventHandlers(),this.$el[0].M_Parallax=void 0}},{key:"_setupEventHandlers",value:function(){this._handleImageLoadBound=this._handleImageLoad.bind(this),this.$img[0].addEventListener("load",this._handleImageLoadBound),0===n._parallaxes.length&&(n._handleScrollThrottled=M.throttle(n._handleScroll,5),window.addEventListener("scroll",n._handleScrollThrottled),n._handleWindowResizeThrottled=M.throttle(n._handleWindowResize,5),window.addEventListener("resize",n._handleWindowResizeThrottled))}},{key:"_removeEventHandlers",value:function(){this.$img[0].removeEventListener("load",this._handleImageLoadBound),0===n._parallaxes.length&&(window.removeEventListener("scroll",n._handleScrollThrottled),window.removeEventListener("resize",n._handleWindowResizeThrottled))}},{key:"_setupStyles",value:function(){this.$img[0].style.opacity=1}},{key:"_handleImageLoad",value:function(){this._updateParallax()}},{key:"_updateParallax",value:function(){var t=0<this.$el.height()?this.el.parentNode.offsetHeight:500,e=this.$img[0].offsetHeight-t,i=this.$el.offset().top+t,n=this.$el.offset().top,s=M.getDocumentScrollTop(),o=window.innerHeight,a=e*((s+o-n)/(t+o));this._enabled?s<i&&n<s+o&&(this.$img[0].style.transform="translate3D(-50%, "+a+"px, 0)"):this.$img[0].style.transform=""}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Parallax}},{key:"_handleScroll",value:function(){for(var t=0;t<n._parallaxes.length;t++){var e=n._parallaxes[t];e._updateParallax.call(e)}}},{key:"_handleWindowResize",value:function(){for(var t=0;t<n._parallaxes.length;t++){var e=n._parallaxes[t];e._enabled=window.innerWidth>e.options.responsiveThreshold}}},{key:"defaults",get:function(){return e}}]),n}();t._parallaxes=[],M.Parallax=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"parallax","M_Parallax")}(cash),function(a,s){"use strict";var e={duration:300,onShow:null,swipeable:!1,responsiveThreshold:1/0},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Tabs=i).options=a.extend({},n.defaults,e),i.$tabLinks=i.$el.children("li.tab").children("a"),i.index=0,i._setupActiveTabLink(),i.options.swipeable?i._setupSwipeableTabs():i._setupNormalTabs(),i._setTabsAndTabWidth(),i._createIndicator(),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this._indicator.parentNode.removeChild(this._indicator),this.options.swipeable?this._teardownSwipeableTabs():this._teardownNormalTabs(),this.$el[0].M_Tabs=void 0}},{key:"_setupEventHandlers",value:function(){this._handleWindowResizeBound=this._handleWindowResize.bind(this),window.addEventListener("resize",this._handleWindowResizeBound),this._handleTabClickBound=this._handleTabClick.bind(this),this.el.addEventListener("click",this._handleTabClickBound)}},{key:"_removeEventHandlers",value:function(){window.removeEventListener("resize",this._handleWindowResizeBound),this.el.removeEventListener("click",this._handleTabClickBound)}},{key:"_handleWindowResize",value:function(){this._setTabsAndTabWidth(),0!==this.tabWidth&&0!==this.tabsWidth&&(this._indicator.style.left=this._calcLeftPos(this.$activeTabLink)+"px",this._indicator.style.right=this._calcRightPos(this.$activeTabLink)+"px")}},{key:"_handleTabClick",value:function(t){var e=this,i=a(t.target).closest("li.tab"),n=a(t.target).closest("a");if(n.length&&n.parent().hasClass("tab"))if(i.hasClass("disabled"))t.preventDefault();else if(!n.attr("target")){this.$activeTabLink.removeClass("active");var s=this.$content;this.$activeTabLink=n,this.$content=a(M.escapeHash(n[0].hash)),this.$tabLinks=this.$el.children("li.tab").children("a"),this.$activeTabLink.addClass("active");var o=this.index;this.index=Math.max(this.$tabLinks.index(n),0),this.options.swipeable?this._tabsCarousel&&this._tabsCarousel.set(this.index,function(){"function"==typeof e.options.onShow&&e.options.onShow.call(e,e.$content[0])}):this.$content.length&&(this.$content[0].style.display="block",this.$content.addClass("active"),"function"==typeof this.options.onShow&&this.options.onShow.call(this,this.$content[0]),s.length&&!s.is(this.$content)&&(s[0].style.display="none",s.removeClass("active"))),this._setTabsAndTabWidth(),this._animateIndicator(o),t.preventDefault()}}},{key:"_createIndicator",value:function(){var t=this,e=document.createElement("li");e.classList.add("indicator"),this.el.appendChild(e),this._indicator=e,setTimeout(function(){t._indicator.style.left=t._calcLeftPos(t.$activeTabLink)+"px",t._indicator.style.right=t._calcRightPos(t.$activeTabLink)+"px"},0)}},{key:"_setupActiveTabLink",value:function(){this.$activeTabLink=a(this.$tabLinks.filter('[href="'+location.hash+'"]')),0===this.$activeTabLink.length&&(this.$activeTabLink=this.$el.children("li.tab").children("a.active").first()),0===this.$activeTabLink.length&&(this.$activeTabLink=this.$el.children("li.tab").children("a").first()),this.$tabLinks.removeClass("active"),this.$activeTabLink[0].classList.add("active"),this.index=Math.max(this.$tabLinks.index(this.$activeTabLink),0),this.$activeTabLink.length&&(this.$content=a(M.escapeHash(this.$activeTabLink[0].hash)),this.$content.addClass("active"))}},{key:"_setupSwipeableTabs",value:function(){var i=this;window.innerWidth>this.options.responsiveThreshold&&(this.options.swipeable=!1);var n=a();this.$tabLinks.each(function(t){var e=a(M.escapeHash(t.hash));e.addClass("carousel-item"),n=n.add(e)});var t=a('<div class="tabs-content carousel carousel-slider"></div>');n.first().before(t),t.append(n),n[0].style.display="";var e=this.$activeTabLink.closest(".tab").index();this._tabsCarousel=M.Carousel.init(t[0],{fullWidth:!0,noWrap:!0,onCycleTo:function(t){var e=i.index;i.index=a(t).index(),i.$activeTabLink.removeClass("active"),i.$activeTabLink=i.$tabLinks.eq(i.index),i.$activeTabLink.addClass("active"),i._animateIndicator(e),"function"==typeof i.options.onShow&&i.options.onShow.call(i,i.$content[0])}}),this._tabsCarousel.set(e)}},{key:"_teardownSwipeableTabs",value:function(){var t=this._tabsCarousel.$el;this._tabsCarousel.destroy(),t.after(t.children()),t.remove()}},{key:"_setupNormalTabs",value:function(){this.$tabLinks.not(this.$activeTabLink).each(function(t){if(t.hash){var e=a(M.escapeHash(t.hash));e.length&&(e[0].style.display="none")}})}},{key:"_teardownNormalTabs",value:function(){this.$tabLinks.each(function(t){if(t.hash){var e=a(M.escapeHash(t.hash));e.length&&(e[0].style.display="")}})}},{key:"_setTabsAndTabWidth",value:function(){this.tabsWidth=this.$el.width(),this.tabWidth=Math.max(this.tabsWidth,this.el.scrollWidth)/this.$tabLinks.length}},{key:"_calcRightPos",value:function(t){return Math.ceil(this.tabsWidth-t.position().left-t[0].getBoundingClientRect().width)}},{key:"_calcLeftPos",value:function(t){return Math.floor(t.position().left)}},{key:"updateTabIndicator",value:function(){this._setTabsAndTabWidth(),this._animateIndicator(this.index)}},{key:"_animateIndicator",value:function(t){var e=0,i=0;0<=this.index-t?e=90:i=90;var n={targets:this._indicator,left:{value:this._calcLeftPos(this.$activeTabLink),delay:e},right:{value:this._calcRightPos(this.$activeTabLink),delay:i},duration:this.options.duration,easing:"easeOutQuad"};s.remove(this._indicator),s(n)}},{key:"select",value:function(t){var e=this.$tabLinks.filter('[href="#'+t+'"]');e.length&&e.trigger("click")}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Tabs}},{key:"defaults",get:function(){return e}}]),n}();M.Tabs=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"tabs","M_Tabs")}(cash,M.anime),function(d,e){"use strict";var i={exitDelay:200,enterDelay:0,html:null,margin:5,inDuration:250,outDuration:200,position:"bottom",transitionMovement:10},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Tooltip=i).options=d.extend({},n.defaults,e),i.isOpen=!1,i.isHovered=!1,i.isFocused=!1,i._appendTooltipEl(),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){d(this.tooltipEl).remove(),this._removeEventHandlers(),this.el.M_Tooltip=void 0}},{key:"_appendTooltipEl",value:function(){var t=document.createElement("div");t.classList.add("material-tooltip"),this.tooltipEl=t;var e=document.createElement("div");e.classList.add("tooltip-content"),e.innerHTML=this.options.html,t.appendChild(e),document.body.appendChild(t)}},{key:"_updateTooltipContent",value:function(){this.tooltipEl.querySelector(".tooltip-content").innerHTML=this.options.html}},{key:"_setupEventHandlers",value:function(){this._handleMouseEnterBound=this._handleMouseEnter.bind(this),this._handleMouseLeaveBound=this._handleMouseLeave.bind(this),this._handleFocusBound=this._handleFocus.bind(this),this._handleBlurBound=this._handleBlur.bind(this),this.el.addEventListener("mouseenter",this._handleMouseEnterBound),this.el.addEventListener("mouseleave",this._handleMouseLeaveBound),this.el.addEventListener("focus",this._handleFocusBound,!0),this.el.addEventListener("blur",this._handleBlurBound,!0)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("mouseenter",this._handleMouseEnterBound),this.el.removeEventListener("mouseleave",this._handleMouseLeaveBound),this.el.removeEventListener("focus",this._handleFocusBound,!0),this.el.removeEventListener("blur",this._handleBlurBound,!0)}},{key:"open",value:function(t){this.isOpen||(t=void 0===t||void 0,this.isOpen=!0,this.options=d.extend({},this.options,this._getAttributeOptions()),this._updateTooltipContent(),this._setEnterDelayTimeout(t))}},{key:"close",value:function(){this.isOpen&&(this.isHovered=!1,this.isFocused=!1,this.isOpen=!1,this._setExitDelayTimeout())}},{key:"_setExitDelayTimeout",value:function(){var t=this;clearTimeout(this._exitDelayTimeout),this._exitDelayTimeout=setTimeout(function(){t.isHovered||t.isFocused||t._animateOut()},this.options.exitDelay)}},{key:"_setEnterDelayTimeout",value:function(t){var e=this;clearTimeout(this._enterDelayTimeout),this._enterDelayTimeout=setTimeout(function(){(e.isHovered||e.isFocused||t)&&e._animateIn()},this.options.enterDelay)}},{key:"_positionTooltip",value:function(){var t,e=this.el,i=this.tooltipEl,n=e.offsetHeight,s=e.offsetWidth,o=i.offsetHeight,a=i.offsetWidth,r=this.options.margin,l=void 0,h=void 0;this.xMovement=0,this.yMovement=0,l=e.getBoundingClientRect().top+M.getDocumentScrollTop(),h=e.getBoundingClientRect().left+M.getDocumentScrollLeft(),"top"===this.options.position?(l+=-o-r,h+=s/2-a/2,this.yMovement=-this.options.transitionMovement):"right"===this.options.position?(l+=n/2-o/2,h+=s+r,this.xMovement=this.options.transitionMovement):"left"===this.options.position?(l+=n/2-o/2,h+=-a-r,this.xMovement=-this.options.transitionMovement):(l+=n+r,h+=s/2-a/2,this.yMovement=this.options.transitionMovement),t=this._repositionWithinScreen(h,l,a,o),d(i).css({top:t.y+"px",left:t.x+"px"})}},{key:"_repositionWithinScreen",value:function(t,e,i,n){var s=M.getDocumentScrollLeft(),o=M.getDocumentScrollTop(),a=t-s,r=e-o,l={left:a,top:r,width:i,height:n},h=this.options.margin+this.options.transitionMovement,d=M.checkWithinContainer(document.body,l,h);return d.left?a=h:d.right&&(a-=a+i-window.innerWidth),d.top?r=h:d.bottom&&(r-=r+n-window.innerHeight),{x:a+s,y:r+o}}},{key:"_animateIn",value:function(){this._positionTooltip(),this.tooltipEl.style.visibility="visible",e.remove(this.tooltipEl),e({targets:this.tooltipEl,opacity:1,translateX:this.xMovement,translateY:this.yMovement,duration:this.options.inDuration,easing:"easeOutCubic"})}},{key:"_animateOut",value:function(){e.remove(this.tooltipEl),e({targets:this.tooltipEl,opacity:0,translateX:0,translateY:0,duration:this.options.outDuration,easing:"easeOutCubic"})}},{key:"_handleMouseEnter",value:function(){this.isHovered=!0,this.isFocused=!1,this.open(!1)}},{key:"_handleMouseLeave",value:function(){this.isHovered=!1,this.isFocused=!1,this.close()}},{key:"_handleFocus",value:function(){M.tabPressed&&(this.isFocused=!0,this.open(!1))}},{key:"_handleBlur",value:function(){this.isFocused=!1,this.close()}},{key:"_getAttributeOptions",value:function(){var t={},e=this.el.getAttribute("data-tooltip"),i=this.el.getAttribute("data-position");return e&&(t.html=e),i&&(t.position=i),t}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Tooltip}},{key:"defaults",get:function(){return i}}]),n}();M.Tooltip=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"tooltip","M_Tooltip")}(cash,M.anime),function(i){"use strict";var t=t||{},e=document.querySelectorAll.bind(document);function m(t){var e="";for(var i in t)t.hasOwnProperty(i)&&(e+=i+":"+t[i]+";");return e}var g={duration:750,show:function(t,e){if(2===t.button)return!1;var i=e||this,n=document.createElement("div");n.className="waves-ripple",i.appendChild(n);var s,o,a,r,l,h,d,u=(h={top:0,left:0},d=(s=i)&&s.ownerDocument,o=d.documentElement,void 0!==s.getBoundingClientRect&&(h=s.getBoundingClientRect()),a=null!==(l=r=d)&&l===l.window?r:9===r.nodeType&&r.defaultView,{top:h.top+a.pageYOffset-o.clientTop,left:h.left+a.pageXOffset-o.clientLeft}),c=t.pageY-u.top,p=t.pageX-u.left,v="scale("+i.clientWidth/100*10+")";"touches"in t&&(c=t.touches[0].pageY-u.top,p=t.touches[0].pageX-u.left),n.setAttribute("data-hold",Date.now()),n.setAttribute("data-scale",v),n.setAttribute("data-x",p),n.setAttribute("data-y",c);var f={top:c+"px",left:p+"px"};n.className=n.className+" waves-notransition",n.setAttribute("style",m(f)),n.className=n.className.replace("waves-notransition",""),f["-webkit-transform"]=v,f["-moz-transform"]=v,f["-ms-transform"]=v,f["-o-transform"]=v,f.transform=v,f.opacity="1",f["-webkit-transition-duration"]=g.duration+"ms",f["-moz-transition-duration"]=g.duration+"ms",f["-o-transition-duration"]=g.duration+"ms",f["transition-duration"]=g.duration+"ms",f["-webkit-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",f["-moz-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",f["-o-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",f["transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",n.setAttribute("style",m(f))},hide:function(t){l.touchup(t);var e=this,i=(e.clientWidth,null),n=e.getElementsByClassName("waves-ripple");if(!(0<n.length))return!1;var s=(i=n[n.length-1]).getAttribute("data-x"),o=i.getAttribute("data-y"),a=i.getAttribute("data-scale"),r=350-(Date.now()-Number(i.getAttribute("data-hold")));r<0&&(r=0),setTimeout(function(){var t={top:o+"px",left:s+"px",opacity:"0","-webkit-transition-duration":g.duration+"ms","-moz-transition-duration":g.duration+"ms","-o-transition-duration":g.duration+"ms","transition-duration":g.duration+"ms","-webkit-transform":a,"-moz-transform":a,"-ms-transform":a,"-o-transform":a,transform:a};i.setAttribute("style",m(t)),setTimeout(function(){try{e.removeChild(i)}catch(t){return!1}},g.duration)},r)},wrapInput:function(t){for(var e=0;e<t.length;e++){var i=t[e];if("input"===i.tagName.toLowerCase()){var n=i.parentNode;if("i"===n.tagName.toLowerCase()&&-1!==n.className.indexOf("waves-effect"))continue;var s=document.createElement("i");s.className=i.className+" waves-input-wrapper";var o=i.getAttribute("style");o||(o=""),s.setAttribute("style",o),i.className="waves-button-input",i.removeAttribute("style"),n.replaceChild(s,i),s.appendChild(i)}}}},l={touches:0,allowEvent:function(t){var e=!0;return"touchstart"===t.type?l.touches+=1:"touchend"===t.type||"touchcancel"===t.type?setTimeout(function(){0<l.touches&&(l.touches-=1)},500):"mousedown"===t.type&&0<l.touches&&(e=!1),e},touchup:function(t){l.allowEvent(t)}};function n(t){var e=function(t){if(!1===l.allowEvent(t))return null;for(var e=null,i=t.target||t.srcElement;null!==i.parentNode;){if(!(i instanceof SVGElement)&&-1!==i.className.indexOf("waves-effect")){e=i;break}i=i.parentNode}return e}(t);null!==e&&(g.show(t,e),"ontouchstart"in i&&(e.addEventListener("touchend",g.hide,!1),e.addEventListener("touchcancel",g.hide,!1)),e.addEventListener("mouseup",g.hide,!1),e.addEventListener("mouseleave",g.hide,!1),e.addEventListener("dragend",g.hide,!1))}t.displayEffect=function(t){"duration"in(t=t||{})&&(g.duration=t.duration),g.wrapInput(e(".waves-effect")),"ontouchstart"in i&&document.body.addEventListener("touchstart",n,!1),document.body.addEventListener("mousedown",n,!1)},t.attach=function(t){"input"===t.tagName.toLowerCase()&&(g.wrapInput([t]),t=t.parentNode),"ontouchstart"in i&&t.addEventListener("touchstart",n,!1),t.addEventListener("mousedown",n,!1)},i.Waves=t,document.addEventListener("DOMContentLoaded",function(){t.displayEffect()},!1)}(window),function(i,n){"use strict";var t={html:"",displayLength:4e3,inDuration:300,outDuration:375,classes:"",completeCallback:null,activationPercent:.8},e=function(){function s(t){_classCallCheck(this,s),this.options=i.extend({},s.defaults,t),this.message=this.options.html,this.panning=!1,this.timeRemaining=this.options.displayLength,0===s._toasts.length&&s._createContainer(),s._toasts.push(this);var e=this._createToast();(e.M_Toast=this).el=e,this.$el=i(e),this._animateIn(),this._setTimer()}return _createClass(s,[{key:"_createToast",value:function(){var t=document.createElement("div");return t.classList.add("toast"),this.options.classes.length&&i(t).addClass(this.options.classes),("object"==typeof HTMLElement?this.message instanceof HTMLElement:this.message&&"object"==typeof this.message&&null!==this.message&&1===this.message.nodeType&&"string"==typeof this.message.nodeName)?t.appendChild(this.message):this.message.jquery?i(t).append(this.message[0]):t.innerHTML=this.message,s._container.appendChild(t),t}},{key:"_animateIn",value:function(){n({targets:this.el,top:0,opacity:1,duration:this.options.inDuration,easing:"easeOutCubic"})}},{key:"_setTimer",value:function(){var t=this;this.timeRemaining!==1/0&&(this.counterInterval=setInterval(function(){t.panning||(t.timeRemaining-=20),t.timeRemaining<=0&&t.dismiss()},20))}},{key:"dismiss",value:function(){var t=this;window.clearInterval(this.counterInterval);var e=this.el.offsetWidth*this.options.activationPercent;this.wasSwiped&&(this.el.style.transition="transform .05s, opacity .05s",this.el.style.transform="translateX("+e+"px)",this.el.style.opacity=0),n({targets:this.el,opacity:0,marginTop:-40,duration:this.options.outDuration,easing:"easeOutExpo",complete:function(){"function"==typeof t.options.completeCallback&&t.options.completeCallback(),t.$el.remove(),s._toasts.splice(s._toasts.indexOf(t),1),0===s._toasts.length&&s._removeContainer()}})}}],[{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Toast}},{key:"_createContainer",value:function(){var t=document.createElement("div");t.setAttribute("id","toast-container"),t.addEventListener("touchstart",s._onDragStart),t.addEventListener("touchmove",s._onDragMove),t.addEventListener("touchend",s._onDragEnd),t.addEventListener("mousedown",s._onDragStart),document.addEventListener("mousemove",s._onDragMove),document.addEventListener("mouseup",s._onDragEnd),document.body.appendChild(t),s._container=t}},{key:"_removeContainer",value:function(){document.removeEventListener("mousemove",s._onDragMove),document.removeEventListener("mouseup",s._onDragEnd),i(s._container).remove(),s._container=null}},{key:"_onDragStart",value:function(t){if(t.target&&i(t.target).closest(".toast").length){var e=i(t.target).closest(".toast")[0].M_Toast;e.panning=!0,(s._draggedToast=e).el.classList.add("panning"),e.el.style.transition="",e.startingXPos=s._xPos(t),e.time=Date.now(),e.xPos=s._xPos(t)}}},{key:"_onDragMove",value:function(t){if(s._draggedToast){t.preventDefault();var e=s._draggedToast;e.deltaX=Math.abs(e.xPos-s._xPos(t)),e.xPos=s._xPos(t),e.velocityX=e.deltaX/(Date.now()-e.time),e.time=Date.now();var i=e.xPos-e.startingXPos,n=e.el.offsetWidth*e.options.activationPercent;e.el.style.transform="translateX("+i+"px)",e.el.style.opacity=1-Math.abs(i/n)}}},{key:"_onDragEnd",value:function(){if(s._draggedToast){var t=s._draggedToast;t.panning=!1,t.el.classList.remove("panning");var e=t.xPos-t.startingXPos,i=t.el.offsetWidth*t.options.activationPercent;Math.abs(e)>i||1<t.velocityX?(t.wasSwiped=!0,t.dismiss()):(t.el.style.transition="transform .2s, opacity .2s",t.el.style.transform="",t.el.style.opacity=""),s._draggedToast=null}}},{key:"_xPos",value:function(t){return t.targetTouches&&1<=t.targetTouches.length?t.targetTouches[0].clientX:t.clientX}},{key:"dismissAll",value:function(){for(var t in s._toasts)s._toasts[t].dismiss()}},{key:"defaults",get:function(){return t}}]),s}();e._toasts=[],e._container=null,e._draggedToast=null,M.Toast=e,M.toast=function(t){return new e(t)}}(cash,M.anime),function(s,o){"use strict";var e={edge:"left",draggable:!0,inDuration:250,outDuration:200,onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null,preventScrolling:!0},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Sidenav=i).id=i.$el.attr("id"),i.options=s.extend({},n.defaults,e),i.isOpen=!1,i.isFixed=i.el.classList.contains("sidenav-fixed"),i.isDragged=!1,i.lastWindowWidth=window.innerWidth,i.lastWindowHeight=window.innerHeight,i._createOverlay(),i._createDragTarget(),i._setupEventHandlers(),i._setupClasses(),i._setupFixed(),n._sidenavs.push(i),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this._enableBodyScrolling(),this._overlay.parentNode.removeChild(this._overlay),this.dragTarget.parentNode.removeChild(this.dragTarget),this.el.M_Sidenav=void 0,this.el.style.transform="";var t=n._sidenavs.indexOf(this);0<=t&&n._sidenavs.splice(t,1)}},{key:"_createOverlay",value:function(){var t=document.createElement("div");this._closeBound=this.close.bind(this),t.classList.add("sidenav-overlay"),t.addEventListener("click",this._closeBound),document.body.appendChild(t),this._overlay=t}},{key:"_setupEventHandlers",value:function(){0===n._sidenavs.length&&document.body.addEventListener("click",this._handleTriggerClick),this._handleDragTargetDragBound=this._handleDragTargetDrag.bind(this),this._handleDragTargetReleaseBound=this._handleDragTargetRelease.bind(this),this._handleCloseDragBound=this._handleCloseDrag.bind(this),this._handleCloseReleaseBound=this._handleCloseRelease.bind(this),this._handleCloseTriggerClickBound=this._handleCloseTriggerClick.bind(this),this.dragTarget.addEventListener("touchmove",this._handleDragTargetDragBound),this.dragTarget.addEventListener("touchend",this._handleDragTargetReleaseBound),this._overlay.addEventListener("touchmove",this._handleCloseDragBound),this._overlay.addEventListener("touchend",this._handleCloseReleaseBound),this.el.addEventListener("touchmove",this._handleCloseDragBound),this.el.addEventListener("touchend",this._handleCloseReleaseBound),this.el.addEventListener("click",this._handleCloseTriggerClickBound),this.isFixed&&(this._handleWindowResizeBound=this._handleWindowResize.bind(this),window.addEventListener("resize",this._handleWindowResizeBound))}},{key:"_removeEventHandlers",value:function(){1===n._sidenavs.length&&document.body.removeEventListener("click",this._handleTriggerClick),this.dragTarget.removeEventListener("touchmove",this._handleDragTargetDragBound),this.dragTarget.removeEventListener("touchend",this._handleDragTargetReleaseBound),this._overlay.removeEventListener("touchmove",this._handleCloseDragBound),this._overlay.removeEventListener("touchend",this._handleCloseReleaseBound),this.el.removeEventListener("touchmove",this._handleCloseDragBound),this.el.removeEventListener("touchend",this._handleCloseReleaseBound),this.el.removeEventListener("click",this._handleCloseTriggerClickBound),this.isFixed&&window.removeEventListener("resize",this._handleWindowResizeBound)}},{key:"_handleTriggerClick",value:function(t){var e=s(t.target).closest(".sidenav-trigger");if(t.target&&e.length){var i=M.getIdFromTrigger(e[0]),n=document.getElementById(i).M_Sidenav;n&&n.open(e),t.preventDefault()}}},{key:"_startDrag",value:function(t){var e=t.targetTouches[0].clientX;this.isDragged=!0,this._startingXpos=e,this._xPos=this._startingXpos,this._time=Date.now(),this._width=this.el.getBoundingClientRect().width,this._overlay.style.display="block",this._initialScrollTop=this.isOpen?this.el.scrollTop:M.getDocumentScrollTop(),this._verticallyScrolling=!1,o.remove(this.el),o.remove(this._overlay)}},{key:"_dragMoveUpdate",value:function(t){var e=t.targetTouches[0].clientX,i=this.isOpen?this.el.scrollTop:M.getDocumentScrollTop();this.deltaX=Math.abs(this._xPos-e),this._xPos=e,this.velocityX=this.deltaX/(Date.now()-this._time),this._time=Date.now(),this._initialScrollTop!==i&&(this._verticallyScrolling=!0)}},{key:"_handleDragTargetDrag",value:function(t){if(this.options.draggable&&!this._isCurrentlyFixed()&&!this._verticallyScrolling){this.isDragged||this._startDrag(t),this._dragMoveUpdate(t);var e=this._xPos-this._startingXpos,i=0<e?"right":"left";e=Math.min(this._width,Math.abs(e)),this.options.edge===i&&(e=0);var n=e,s="translateX(-100%)";"right"===this.options.edge&&(s="translateX(100%)",n=-n),this.percentOpen=Math.min(1,e/this._width),this.el.style.transform=s+" translateX("+n+"px)",this._overlay.style.opacity=this.percentOpen}}},{key:"_handleDragTargetRelease",value:function(){this.isDragged&&(.2<this.percentOpen?this.open():this._animateOut(),this.isDragged=!1,this._verticallyScrolling=!1)}},{key:"_handleCloseDrag",value:function(t){if(this.isOpen){if(!this.options.draggable||this._isCurrentlyFixed()||this._verticallyScrolling)return;this.isDragged||this._startDrag(t),this._dragMoveUpdate(t);var e=this._xPos-this._startingXpos,i=0<e?"right":"left";e=Math.min(this._width,Math.abs(e)),this.options.edge!==i&&(e=0);var n=-e;"right"===this.options.edge&&(n=-n),this.percentOpen=Math.min(1,1-e/this._width),this.el.style.transform="translateX("+n+"px)",this._overlay.style.opacity=this.percentOpen}}},{key:"_handleCloseRelease",value:function(){this.isOpen&&this.isDragged&&(.8<this.percentOpen?this._animateIn():this.close(),this.isDragged=!1,this._verticallyScrolling=!1)}},{key:"_handleCloseTriggerClick",value:function(t){s(t.target).closest(".sidenav-close").length&&!this._isCurrentlyFixed()&&this.close()}},{key:"_handleWindowResize",value:function(){this.lastWindowWidth!==window.innerWidth&&(992<window.innerWidth?this.open():this.close()),this.lastWindowWidth=window.innerWidth,this.lastWindowHeight=window.innerHeight}},{key:"_setupClasses",value:function(){"right"===this.options.edge&&(this.el.classList.add("right-aligned"),this.dragTarget.classList.add("right-aligned"))}},{key:"_removeClasses",value:function(){this.el.classList.remove("right-aligned"),this.dragTarget.classList.remove("right-aligned")}},{key:"_setupFixed",value:function(){this._isCurrentlyFixed()&&this.open()}},{key:"_isCurrentlyFixed",value:function(){return this.isFixed&&992<window.innerWidth}},{key:"_createDragTarget",value:function(){var t=document.createElement("div");t.classList.add("drag-target"),document.body.appendChild(t),this.dragTarget=t}},{key:"_preventBodyScrolling",value:function(){document.body.style.overflow="hidden"}},{key:"_enableBodyScrolling",value:function(){document.body.style.overflow=""}},{key:"open",value:function(){!0!==this.isOpen&&(this.isOpen=!0,"function"==typeof this.options.onOpenStart&&this.options.onOpenStart.call(this,this.el),this._isCurrentlyFixed()?(o.remove(this.el),o({targets:this.el,translateX:0,duration:0,easing:"easeOutQuad"}),this._enableBodyScrolling(),this._overlay.style.display="none"):(this.options.preventScrolling&&this._preventBodyScrolling(),this.isDragged&&1==this.percentOpen||this._animateIn()))}},{key:"close",value:function(){if(!1!==this.isOpen)if(this.isOpen=!1,"function"==typeof this.options.onCloseStart&&this.options.onCloseStart.call(this,this.el),this._isCurrentlyFixed()){var t="left"===this.options.edge?"-105%":"105%";this.el.style.transform="translateX("+t+")"}else this._enableBodyScrolling(),this.isDragged&&0==this.percentOpen?this._overlay.style.display="none":this._animateOut()}},{key:"_animateIn",value:function(){this._animateSidenavIn(),this._animateOverlayIn()}},{key:"_animateSidenavIn",value:function(){var t=this,e="left"===this.options.edge?-1:1;this.isDragged&&(e="left"===this.options.edge?e+this.percentOpen:e-this.percentOpen),o.remove(this.el),o({targets:this.el,translateX:[100*e+"%",0],duration:this.options.inDuration,easing:"easeOutQuad",complete:function(){"function"==typeof t.options.onOpenEnd&&t.options.onOpenEnd.call(t,t.el)}})}},{key:"_animateOverlayIn",value:function(){var t=0;this.isDragged?t=this.percentOpen:s(this._overlay).css({display:"block"}),o.remove(this._overlay),o({targets:this._overlay,opacity:[t,1],duration:this.options.inDuration,easing:"easeOutQuad"})}},{key:"_animateOut",value:function(){this._animateSidenavOut(),this._animateOverlayOut()}},{key:"_animateSidenavOut",value:function(){var t=this,e="left"===this.options.edge?-1:1,i=0;this.isDragged&&(i="left"===this.options.edge?e+this.percentOpen:e-this.percentOpen),o.remove(this.el),o({targets:this.el,translateX:[100*i+"%",105*e+"%"],duration:this.options.outDuration,easing:"easeOutQuad",complete:function(){"function"==typeof t.options.onCloseEnd&&t.options.onCloseEnd.call(t,t.el)}})}},{key:"_animateOverlayOut",value:function(){var t=this;o.remove(this._overlay),o({targets:this._overlay,opacity:0,duration:this.options.outDuration,easing:"easeOutQuad",complete:function(){s(t._overlay).css("display","none")}})}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Sidenav}},{key:"defaults",get:function(){return e}}]),n}();t._sidenavs=[],M.Sidenav=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"sidenav","M_Sidenav")}(cash,M.anime),function(o,a){"use strict";var e={throttle:100,scrollOffset:200,activeClass:"active",getActiveElement:function(t){return'a[href="#'+t+'"]'}},t=function(t){function c(t,e){_classCallCheck(this,c);var i=_possibleConstructorReturn(this,(c.__proto__||Object.getPrototypeOf(c)).call(this,c,t,e));return(i.el.M_ScrollSpy=i).options=o.extend({},c.defaults,e),c._elements.push(i),c._count++,c._increment++,i.tickId=-1,i.id=c._increment,i._setupEventHandlers(),i._handleWindowScroll(),i}return _inherits(c,Component),_createClass(c,[{key:"destroy",value:function(){c._elements.splice(c._elements.indexOf(this),1),c._elementsInView.splice(c._elementsInView.indexOf(this),1),c._visibleElements.splice(c._visibleElements.indexOf(this.$el),1),c._count--,this._removeEventHandlers(),o(this.options.getActiveElement(this.$el.attr("id"))).removeClass(this.options.activeClass),this.el.M_ScrollSpy=void 0}},{key:"_setupEventHandlers",value:function(){var t=M.throttle(this._handleWindowScroll,200);this._handleThrottledResizeBound=t.bind(this),this._handleWindowScrollBound=this._handleWindowScroll.bind(this),1===c._count&&(window.addEventListener("scroll",this._handleWindowScrollBound),window.addEventListener("resize",this._handleThrottledResizeBound),document.body.addEventListener("click",this._handleTriggerClick))}},{key:"_removeEventHandlers",value:function(){0===c._count&&(window.removeEventListener("scroll",this._handleWindowScrollBound),window.removeEventListener("resize",this._handleThrottledResizeBound),document.body.removeEventListener("click",this._handleTriggerClick))}},{key:"_handleTriggerClick",value:function(t){for(var e=o(t.target),i=c._elements.length-1;0<=i;i--){var n=c._elements[i];if(e.is('a[href="#'+n.$el.attr("id")+'"]')){t.preventDefault();var s=n.$el.offset().top+1;a({targets:[document.documentElement,document.body],scrollTop:s-n.options.scrollOffset,duration:400,easing:"easeOutCubic"});break}}}},{key:"_handleWindowScroll",value:function(){c._ticks++;for(var t=M.getDocumentScrollTop(),e=M.getDocumentScrollLeft(),i=e+window.innerWidth,n=t+window.innerHeight,s=c._findElements(t,i,n,e),o=0;o<s.length;o++){var a=s[o];a.tickId<0&&a._enter(),a.tickId=c._ticks}for(var r=0;r<c._elementsInView.length;r++){var l=c._elementsInView[r],h=l.tickId;0<=h&&h!==c._ticks&&(l._exit(),l.tickId=-1)}c._elementsInView=s}},{key:"_enter",value:function(){(c._visibleElements=c._visibleElements.filter(function(t){return 0!=t.height()}))[0]?(o(this.options.getActiveElement(c._visibleElements[0].attr("id"))).removeClass(this.options.activeClass),c._visibleElements[0][0].M_ScrollSpy&&this.id<c._visibleElements[0][0].M_ScrollSpy.id?c._visibleElements.unshift(this.$el):c._visibleElements.push(this.$el)):c._visibleElements.push(this.$el),o(this.options.getActiveElement(c._visibleElements[0].attr("id"))).addClass(this.options.activeClass)}},{key:"_exit",value:function(){var e=this;(c._visibleElements=c._visibleElements.filter(function(t){return 0!=t.height()}))[0]&&(o(this.options.getActiveElement(c._visibleElements[0].attr("id"))).removeClass(this.options.activeClass),(c._visibleElements=c._visibleElements.filter(function(t){return t.attr("id")!=e.$el.attr("id")}))[0]&&o(this.options.getActiveElement(c._visibleElements[0].attr("id"))).addClass(this.options.activeClass))}}],[{key:"init",value:function(t,e){return _get(c.__proto__||Object.getPrototypeOf(c),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_ScrollSpy}},{key:"_findElements",value:function(t,e,i,n){for(var s=[],o=0;o<c._elements.length;o++){var a=c._elements[o],r=t+a.options.scrollOffset||200;if(0<a.$el.height()){var l=a.$el.offset().top,h=a.$el.offset().left,d=h+a.$el.width(),u=l+a.$el.height();!(e<h||d<n||i<l||u<r)&&s.push(a)}}return s}},{key:"defaults",get:function(){return e}}]),c}();t._elements=[],t._elementsInView=[],t._visibleElements=[],t._count=0,t._increment=0,t._ticks=0,M.ScrollSpy=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"scrollSpy","M_ScrollSpy")}(cash,M.anime),function(h){"use strict";var e={data:{},limit:1/0,onAutocomplete:null,minLength:1,sortFunction:function(t,e,i){return t.indexOf(i)-e.indexOf(i)}},t=function(t){function s(t,e){_classCallCheck(this,s);var i=_possibleConstructorReturn(this,(s.__proto__||Object.getPrototypeOf(s)).call(this,s,t,e));return(i.el.M_Autocomplete=i).options=h.extend({},s.defaults,e),i.isOpen=!1,i.count=0,i.activeIndex=-1,i.oldVal,i.$inputField=i.$el.closest(".input-field"),i.$active=h(),i._mousedown=!1,i._setupDropdown(),i._setupEventHandlers(),i}return _inherits(s,Component),_createClass(s,[{key:"destroy",value:function(){this._removeEventHandlers(),this._removeDropdown(),this.el.M_Autocomplete=void 0}},{key:"_setupEventHandlers",value:function(){this._handleInputBlurBound=this._handleInputBlur.bind(this),this._handleInputKeyupAndFocusBound=this._handleInputKeyupAndFocus.bind(this),this._handleInputKeydownBound=this._handleInputKeydown.bind(this),this._handleInputClickBound=this._handleInputClick.bind(this),this._handleContainerMousedownAndTouchstartBound=this._handleContainerMousedownAndTouchstart.bind(this),this._handleContainerMouseupAndTouchendBound=this._handleContainerMouseupAndTouchend.bind(this),this.el.addEventListener("blur",this._handleInputBlurBound),this.el.addEventListener("keyup",this._handleInputKeyupAndFocusBound),this.el.addEventListener("focus",this._handleInputKeyupAndFocusBound),this.el.addEventListener("keydown",this._handleInputKeydownBound),this.el.addEventListener("click",this._handleInputClickBound),this.container.addEventListener("mousedown",this._handleContainerMousedownAndTouchstartBound),this.container.addEventListener("mouseup",this._handleContainerMouseupAndTouchendBound),void 0!==window.ontouchstart&&(this.container.addEventListener("touchstart",this._handleContainerMousedownAndTouchstartBound),this.container.addEventListener("touchend",this._handleContainerMouseupAndTouchendBound))}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("blur",this._handleInputBlurBound),this.el.removeEventListener("keyup",this._handleInputKeyupAndFocusBound),this.el.removeEventListener("focus",this._handleInputKeyupAndFocusBound),this.el.removeEventListener("keydown",this._handleInputKeydownBound),this.el.removeEventListener("click",this._handleInputClickBound),this.container.removeEventListener("mousedown",this._handleContainerMousedownAndTouchstartBound),this.container.removeEventListener("mouseup",this._handleContainerMouseupAndTouchendBound),void 0!==window.ontouchstart&&(this.container.removeEventListener("touchstart",this._handleContainerMousedownAndTouchstartBound),this.container.removeEventListener("touchend",this._handleContainerMouseupAndTouchendBound))}},{key:"_setupDropdown",value:function(){var e=this;this.container=document.createElement("ul"),this.container.id="autocomplete-options-"+M.guid(),h(this.container).addClass("autocomplete-content dropdown-content"),this.$inputField.append(this.container),this.el.setAttribute("data-target",this.container.id),this.dropdown=M.Dropdown.init(this.el,{autoFocus:!1,closeOnClick:!1,coverTrigger:!1,onItemClick:function(t){e.selectOption(h(t))}}),this.el.removeEventListener("click",this.dropdown._handleClickBound)}},{key:"_removeDropdown",value:function(){this.container.parentNode.removeChild(this.container)}},{key:"_handleInputBlur",value:function(){this._mousedown||(this.close(),this._resetAutocomplete())}},{key:"_handleInputKeyupAndFocus",value:function(t){"keyup"===t.type&&(s._keydown=!1),this.count=0;var e=this.el.value.toLowerCase();13!==t.keyCode&&38!==t.keyCode&&40!==t.keyCode&&(this.oldVal===e||!M.tabPressed&&"focus"===t.type||this.open(),this.oldVal=e)}},{key:"_handleInputKeydown",value:function(t){s._keydown=!0;var e=t.keyCode,i=void 0,n=h(this.container).children("li").length;e===M.keys.ENTER&&0<=this.activeIndex?(i=h(this.container).children("li").eq(this.activeIndex)).length&&(this.selectOption(i),t.preventDefault()):e!==M.keys.ARROW_UP&&e!==M.keys.ARROW_DOWN||(t.preventDefault(),e===M.keys.ARROW_UP&&0<this.activeIndex&&this.activeIndex--,e===M.keys.ARROW_DOWN&&this.activeIndex<n-1&&this.activeIndex++,this.$active.removeClass("active"),0<=this.activeIndex&&(this.$active=h(this.container).children("li").eq(this.activeIndex),this.$active.addClass("active")))}},{key:"_handleInputClick",value:function(t){this.open()}},{key:"_handleContainerMousedownAndTouchstart",value:function(t){this._mousedown=!0}},{key:"_handleContainerMouseupAndTouchend",value:function(t){this._mousedown=!1}},{key:"_highlight",value:function(t,e){var i=e.find("img"),n=e.text().toLowerCase().indexOf(""+t.toLowerCase()),s=n+t.length-1,o=e.text().slice(0,n),a=e.text().slice(n,s+1),r=e.text().slice(s+1);e.html("<span>"+o+"<span class='highlight'>"+a+"</span>"+r+"</span>"),i.length&&e.prepend(i)}},{key:"_resetCurrentElement",value:function(){this.activeIndex=-1,this.$active.removeClass("active")}},{key:"_resetAutocomplete",value:function(){h(this.container).empty(),this._resetCurrentElement(),this.oldVal=null,this.isOpen=!1,this._mousedown=!1}},{key:"selectOption",value:function(t){var e=t.text().trim();this.el.value=e,this.$el.trigger("change"),this._resetAutocomplete(),this.close(),"function"==typeof this.options.onAutocomplete&&this.options.onAutocomplete.call(this,e)}},{key:"_renderDropdown",value:function(t,i){var n=this;this._resetAutocomplete();var e=[];for(var s in t)if(t.hasOwnProperty(s)&&-1!==s.toLowerCase().indexOf(i)){if(this.count>=this.options.limit)break;var o={data:t[s],key:s};e.push(o),this.count++}if(this.options.sortFunction){e.sort(function(t,e){return n.options.sortFunction(t.key.toLowerCase(),e.key.toLowerCase(),i.toLowerCase())})}for(var a=0;a<e.length;a++){var r=e[a],l=h("<li></li>");r.data?l.append('<img src="'+r.data+'" class="right circle"><span>'+r.key+"</span>"):l.append("<span>"+r.key+"</span>"),h(this.container).append(l),this._highlight(i,l)}}},{key:"open",value:function(){var t=this.el.value.toLowerCase();this._resetAutocomplete(),t.length>=this.options.minLength&&(this.isOpen=!0,this._renderDropdown(this.options.data,t)),this.dropdown.isOpen?this.dropdown.recalculateDimensions():this.dropdown.open()}},{key:"close",value:function(){this.dropdown.close()}},{key:"updateData",value:function(t){var e=this.el.value.toLowerCase();this.options.data=t,this.isOpen&&this._renderDropdown(t,e)}}],[{key:"init",value:function(t,e){return _get(s.__proto__||Object.getPrototypeOf(s),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Autocomplete}},{key:"defaults",get:function(){return e}}]),s}();t._keydown=!1,M.Autocomplete=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"autocomplete","M_Autocomplete")}(cash),function(d){M.updateTextFields=function(){d("input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea").each(function(t,e){var i=d(this);0<t.value.length||d(t).is(":focus")||t.autofocus||null!==i.attr("placeholder")?i.siblings("label").addClass("active"):t.validity?i.siblings("label").toggleClass("active",!0===t.validity.badInput):i.siblings("label").removeClass("active")})},M.validate_field=function(t){var e=null!==t.attr("data-length"),i=parseInt(t.attr("data-length")),n=t[0].value.length;0!==n||!1!==t[0].validity.badInput||t.is(":required")?t.hasClass("validate")&&(t.is(":valid")&&e&&n<=i||t.is(":valid")&&!e?(t.removeClass("invalid"),t.addClass("valid")):(t.removeClass("valid"),t.addClass("invalid"))):t.hasClass("validate")&&(t.removeClass("valid"),t.removeClass("invalid"))},M.textareaAutoResize=function(t){if(t instanceof Element&&(t=d(t)),t.length){var e=d(".hiddendiv").first();e.length||(e=d('<div class="hiddendiv common"></div>'),d("body").append(e));var i=t.css("font-family"),n=t.css("font-size"),s=t.css("line-height"),o=t.css("padding-top"),a=t.css("padding-right"),r=t.css("padding-bottom"),l=t.css("padding-left");n&&e.css("font-size",n),i&&e.css("font-family",i),s&&e.css("line-height",s),o&&e.css("padding-top",o),a&&e.css("padding-right",a),r&&e.css("padding-bottom",r),l&&e.css("padding-left",l),t.data("original-height")||t.data("original-height",t.height()),"off"===t.attr("wrap")&&e.css("overflow-wrap","normal").css("white-space","pre"),e.text(t[0].value+"\n");var h=e.html().replace(/\n/g,"<br>");e.html(h),0<t[0].offsetWidth&&0<t[0].offsetHeight?e.css("width",t.width()+"px"):e.css("width",window.innerWidth/2+"px"),t.data("original-height")<=e.innerHeight()?t.css("height",e.innerHeight()+"px"):t[0].value.length<t.data("previous-length")&&t.css("height",t.data("original-height")+"px"),t.data("previous-length",t[0].value.length)}else console.error("No textarea element found")},d(document).ready(function(){var n="input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea";d(document).on("change",n,function(){0===this.value.length&&null===d(this).attr("placeholder")||d(this).siblings("label").addClass("active"),M.validate_field(d(this))}),d(document).ready(function(){M.updateTextFields()}),d(document).on("reset",function(t){var e=d(t.target);e.is("form")&&(e.find(n).removeClass("valid").removeClass("invalid"),e.find(n).each(function(t){this.value.length&&d(this).siblings("label").removeClass("active")}),setTimeout(function(){e.find("select").each(function(){this.M_FormSelect&&d(this).trigger("change")})},0))}),document.addEventListener("focus",function(t){d(t.target).is(n)&&d(t.target).siblings("label, .prefix").addClass("active")},!0),document.addEventListener("blur",function(t){var e=d(t.target);if(e.is(n)){var i=".prefix";0===e[0].value.length&&!0!==e[0].validity.badInput&&null===e.attr("placeholder")&&(i+=", label"),e.siblings(i).removeClass("active"),M.validate_field(e)}},!0);d(document).on("keyup","input[type=radio], input[type=checkbox]",function(t){if(t.which===M.keys.TAB)return d(this).addClass("tabbed"),void d(this).one("blur",function(t){d(this).removeClass("tabbed")})});var t=".materialize-textarea";d(t).each(function(){var t=d(this);t.data("original-height",t.height()),t.data("previous-length",this.value.length),M.textareaAutoResize(t)}),d(document).on("keyup",t,function(){M.textareaAutoResize(d(this))}),d(document).on("keydown",t,function(){M.textareaAutoResize(d(this))}),d(document).on("change",'.file-field input[type="file"]',function(){for(var t=d(this).closest(".file-field").find("input.file-path"),e=d(this)[0].files,i=[],n=0;n<e.length;n++)i.push(e[n].name);t[0].value=i.join(", "),t.trigger("change")})})}(cash),function(s,o){"use strict";var e={indicators:!0,height:400,duration:500,interval:6e3},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Slider=i).options=s.extend({},n.defaults,e),i.$slider=i.$el.find(".slides"),i.$slides=i.$slider.children("li"),i.activeIndex=i.$slides.filter(function(t){return s(t).hasClass("active")}).first().index(),-1!=i.activeIndex&&(i.$active=i.$slides.eq(i.activeIndex)),i._setSliderHeight(),i.$slides.find(".caption").each(function(t){i._animateCaptionIn(t,0)}),i.$slides.find("img").each(function(t){var e="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==";s(t).attr("src")!==e&&(s(t).css("background-image",'url("'+s(t).attr("src")+'")'),s(t).attr("src",e))}),i._setupIndicators(),i.$active?i.$active.css("display","block"):(i.$slides.first().addClass("active"),o({targets:i.$slides.first()[0],opacity:1,duration:i.options.duration,easing:"easeOutQuad"}),i.activeIndex=0,i.$active=i.$slides.eq(i.activeIndex),i.options.indicators&&i.$indicators.eq(i.activeIndex).addClass("active")),i.$active.find("img").each(function(t){o({targets:i.$active.find(".caption")[0],opacity:1,translateX:0,translateY:0,duration:i.options.duration,easing:"easeOutQuad"})}),i._setupEventHandlers(),i.start(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this.pause(),this._removeIndicators(),this._removeEventHandlers(),this.el.M_Slider=void 0}},{key:"_setupEventHandlers",value:function(){var e=this;this._handleIntervalBound=this._handleInterval.bind(this),this._handleIndicatorClickBound=this._handleIndicatorClick.bind(this),this.options.indicators&&this.$indicators.each(function(t){t.addEventListener("click",e._handleIndicatorClickBound)})}},{key:"_removeEventHandlers",value:function(){var e=this;this.options.indicators&&this.$indicators.each(function(t){t.removeEventListener("click",e._handleIndicatorClickBound)})}},{key:"_handleIndicatorClick",value:function(t){var e=s(t.target).index();this.set(e)}},{key:"_handleInterval",value:function(){var t=this.$slider.find(".active").index();this.$slides.length===t+1?t=0:t+=1,this.set(t)}},{key:"_animateCaptionIn",value:function(t,e){var i={targets:t,opacity:0,duration:e,easing:"easeOutQuad"};s(t).hasClass("center-align")?i.translateY=-100:s(t).hasClass("right-align")?i.translateX=100:s(t).hasClass("left-align")&&(i.translateX=-100),o(i)}},{key:"_setSliderHeight",value:function(){this.$el.hasClass("fullscreen")||(this.options.indicators?this.$el.css("height",this.options.height+40+"px"):this.$el.css("height",this.options.height+"px"),this.$slider.css("height",this.options.height+"px"))}},{key:"_setupIndicators",value:function(){var n=this;this.options.indicators&&(this.$indicators=s('<ul class="indicators"></ul>'),this.$slides.each(function(t,e){var i=s('<li class="indicator-item"></li>');n.$indicators.append(i[0])}),this.$el.append(this.$indicators[0]),this.$indicators=this.$indicators.children("li.indicator-item"))}},{key:"_removeIndicators",value:function(){this.$el.find("ul.indicators").remove()}},{key:"set",value:function(t){var e=this;if(t>=this.$slides.length?t=0:t<0&&(t=this.$slides.length-1),this.activeIndex!=t){this.$active=this.$slides.eq(this.activeIndex);var i=this.$active.find(".caption");this.$active.removeClass("active"),o({targets:this.$active[0],opacity:0,duration:this.options.duration,easing:"easeOutQuad",complete:function(){e.$slides.not(".active").each(function(t){o({targets:t,opacity:0,translateX:0,translateY:0,duration:0,easing:"easeOutQuad"})})}}),this._animateCaptionIn(i[0],this.options.duration),this.options.indicators&&(this.$indicators.eq(this.activeIndex).removeClass("active"),this.$indicators.eq(t).addClass("active")),o({targets:this.$slides.eq(t)[0],opacity:1,duration:this.options.duration,easing:"easeOutQuad"}),o({targets:this.$slides.eq(t).find(".caption")[0],opacity:1,translateX:0,translateY:0,duration:this.options.duration,delay:this.options.duration,easing:"easeOutQuad"}),this.$slides.eq(t).addClass("active"),this.activeIndex=t,this.start()}}},{key:"pause",value:function(){clearInterval(this.interval)}},{key:"start",value:function(){clearInterval(this.interval),this.interval=setInterval(this._handleIntervalBound,this.options.duration+this.options.interval)}},{key:"next",value:function(){var t=this.activeIndex+1;t>=this.$slides.length?t=0:t<0&&(t=this.$slides.length-1),this.set(t)}},{key:"prev",value:function(){var t=this.activeIndex-1;t>=this.$slides.length?t=0:t<0&&(t=this.$slides.length-1),this.set(t)}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Slider}},{key:"defaults",get:function(){return e}}]),n}();M.Slider=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"slider","M_Slider")}(cash,M.anime),function(n,s){n(document).on("click",".card",function(t){if(n(this).children(".card-reveal").length){var i=n(t.target).closest(".card");void 0===i.data("initialOverflow")&&i.data("initialOverflow",void 0===i.css("overflow")?"":i.css("overflow"));var e=n(this).find(".card-reveal");n(t.target).is(n(".card-reveal .card-title"))||n(t.target).is(n(".card-reveal .card-title i"))?s({targets:e[0],translateY:0,duration:225,easing:"easeInOutQuad",complete:function(t){var e=t.animatables[0].target;n(e).css({display:"none"}),i.css("overflow",i.data("initialOverflow"))}}):(n(t.target).is(n(".card .activator"))||n(t.target).is(n(".card .activator i")))&&(i.css("overflow","hidden"),e.css({display:"block"}),s({targets:e[0],translateY:"-100%",duration:300,easing:"easeInOutQuad"}))}})}(cash,M.anime),function(h){"use strict";var e={data:[],placeholder:"",secondaryPlaceholder:"",autocompleteOptions:{},limit:1/0,onChipAdd:null,onChipSelect:null,onChipDelete:null},t=function(t){function l(t,e){_classCallCheck(this,l);var i=_possibleConstructorReturn(this,(l.__proto__||Object.getPrototypeOf(l)).call(this,l,t,e));return(i.el.M_Chips=i).options=h.extend({},l.defaults,e),i.$el.addClass("chips input-field"),i.chipsData=[],i.$chips=h(),i._setupInput(),i.hasAutocomplete=0<Object.keys(i.options.autocompleteOptions).length,i.$input.attr("id")||i.$input.attr("id",M.guid()),i.options.data.length&&(i.chipsData=i.options.data,i._renderChips(i.chipsData)),i.hasAutocomplete&&i._setupAutocomplete(),i._setPlaceholder(),i._setupLabel(),i._setupEventHandlers(),i}return _inherits(l,Component),_createClass(l,[{key:"getData",value:function(){return this.chipsData}},{key:"destroy",value:function(){this._removeEventHandlers(),this.$chips.remove(),this.el.M_Chips=void 0}},{key:"_setupEventHandlers",value:function(){this._handleChipClickBound=this._handleChipClick.bind(this),this._handleInputKeydownBound=this._handleInputKeydown.bind(this),this._handleInputFocusBound=this._handleInputFocus.bind(this),this._handleInputBlurBound=this._handleInputBlur.bind(this),this.el.addEventListener("click",this._handleChipClickBound),document.addEventListener("keydown",l._handleChipsKeydown),document.addEventListener("keyup",l._handleChipsKeyup),this.el.addEventListener("blur",l._handleChipsBlur,!0),this.$input[0].addEventListener("focus",this._handleInputFocusBound),this.$input[0].addEventListener("blur",this._handleInputBlurBound),this.$input[0].addEventListener("keydown",this._handleInputKeydownBound)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("click",this._handleChipClickBound),document.removeEventListener("keydown",l._handleChipsKeydown),document.removeEventListener("keyup",l._handleChipsKeyup),this.el.removeEventListener("blur",l._handleChipsBlur,!0),this.$input[0].removeEventListener("focus",this._handleInputFocusBound),this.$input[0].removeEventListener("blur",this._handleInputBlurBound),this.$input[0].removeEventListener("keydown",this._handleInputKeydownBound)}},{key:"_handleChipClick",value:function(t){var e=h(t.target).closest(".chip"),i=h(t.target).is(".close");if(e.length){var n=e.index();i?(this.deleteChip(n),this.$input[0].focus()):this.selectChip(n)}else this.$input[0].focus()}},{key:"_handleInputFocus",value:function(){this.$el.addClass("focus")}},{key:"_handleInputBlur",value:function(){this.$el.removeClass("focus")}},{key:"_handleInputKeydown",value:function(t){if(l._keydown=!0,13===t.keyCode){if(this.hasAutocomplete&&this.autocomplete&&this.autocomplete.isOpen)return;t.preventDefault(),this.addChip({tag:this.$input[0].value}),this.$input[0].value=""}else 8!==t.keyCode&&37!==t.keyCode||""!==this.$input[0].value||!this.chipsData.length||(t.preventDefault(),this.selectChip(this.chipsData.length-1))}},{key:"_renderChip",value:function(t){if(t.tag){var e=document.createElement("div"),i=document.createElement("i");if(e.classList.add("chip"),e.textContent=t.tag,e.setAttribute("tabindex",0),h(i).addClass("material-icons close"),i.textContent="close",t.image){var n=document.createElement("img");n.setAttribute("src",t.image),e.insertBefore(n,e.firstChild)}return e.appendChild(i),e}}},{key:"_renderChips",value:function(){this.$chips.remove();for(var t=0;t<this.chipsData.length;t++){var e=this._renderChip(this.chipsData[t]);this.$el.append(e),this.$chips.add(e)}this.$el.append(this.$input[0])}},{key:"_setupAutocomplete",value:function(){var e=this;this.options.autocompleteOptions.onAutocomplete=function(t){e.addChip({tag:t}),e.$input[0].value="",e.$input[0].focus()},this.autocomplete=M.Autocomplete.init(this.$input[0],this.options.autocompleteOptions)}},{key:"_setupInput",value:function(){this.$input=this.$el.find("input"),this.$input.length||(this.$input=h("<input></input>"),this.$el.append(this.$input)),this.$input.addClass("input")}},{key:"_setupLabel",value:function(){this.$label=this.$el.find("label"),this.$label.length&&this.$label.setAttribute("for",this.$input.attr("id"))}},{key:"_setPlaceholder",value:function(){void 0!==this.chipsData&&!this.chipsData.length&&this.options.placeholder?h(this.$input).prop("placeholder",this.options.placeholder):(void 0===this.chipsData||this.chipsData.length)&&this.options.secondaryPlaceholder&&h(this.$input).prop("placeholder",this.options.secondaryPlaceholder)}},{key:"_isValid",value:function(t){if(t.hasOwnProperty("tag")&&""!==t.tag){for(var e=!1,i=0;i<this.chipsData.length;i++)if(this.chipsData[i].tag===t.tag){e=!0;break}return!e}return!1}},{key:"addChip",value:function(t){if(this._isValid(t)&&!(this.chipsData.length>=this.options.limit)){var e=this._renderChip(t);this.$chips.add(e),this.chipsData.push(t),h(this.$input).before(e),this._setPlaceholder(),"function"==typeof this.options.onChipAdd&&this.options.onChipAdd.call(this,this.$el,e)}}},{key:"deleteChip",value:function(t){var e=this.$chips.eq(t);this.$chips.eq(t).remove(),this.$chips=this.$chips.filter(function(t){return 0<=h(t).index()}),this.chipsData.splice(t,1),this._setPlaceholder(),"function"==typeof this.options.onChipDelete&&this.options.onChipDelete.call(this,this.$el,e[0])}},{key:"selectChip",value:function(t){var e=this.$chips.eq(t);(this._selectedChip=e)[0].focus(),"function"==typeof this.options.onChipSelect&&this.options.onChipSelect.call(this,this.$el,e[0])}}],[{key:"init",value:function(t,e){return _get(l.__proto__||Object.getPrototypeOf(l),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Chips}},{key:"_handleChipsKeydown",value:function(t){l._keydown=!0;var e=h(t.target).closest(".chips"),i=t.target&&e.length;if(!h(t.target).is("input, textarea")&&i){var n=e[0].M_Chips;if(8===t.keyCode||46===t.keyCode){t.preventDefault();var s=n.chipsData.length;if(n._selectedChip){var o=n._selectedChip.index();n.deleteChip(o),n._selectedChip=null,s=Math.max(o-1,0)}n.chipsData.length&&n.selectChip(s)}else if(37===t.keyCode){if(n._selectedChip){var a=n._selectedChip.index()-1;if(a<0)return;n.selectChip(a)}}else if(39===t.keyCode&&n._selectedChip){var r=n._selectedChip.index()+1;r>=n.chipsData.length?n.$input[0].focus():n.selectChip(r)}}}},{key:"_handleChipsKeyup",value:function(t){l._keydown=!1}},{key:"_handleChipsBlur",value:function(t){l._keydown||(h(t.target).closest(".chips")[0].M_Chips._selectedChip=null)}},{key:"defaults",get:function(){return e}}]),l}();t._keydown=!1,M.Chips=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"chips","M_Chips"),h(document).ready(function(){h(document.body).on("click",".chip .close",function(){var t=h(this).closest(".chips");t.length&&t[0].M_Chips||h(this).closest(".chip").remove()})})}(cash),function(s){"use strict";var e={top:0,bottom:1/0,offset:0,onPositionChange:null},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Pushpin=i).options=s.extend({},n.defaults,e),i.originalOffset=i.el.offsetTop,n._pushpins.push(i),i._setupEventHandlers(),i._updatePosition(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this.el.style.top=null,this._removePinClasses(),this._removeEventHandlers();var t=n._pushpins.indexOf(this);n._pushpins.splice(t,1)}},{key:"_setupEventHandlers",value:function(){document.addEventListener("scroll",n._updateElements)}},{key:"_removeEventHandlers",value:function(){document.removeEventListener("scroll",n._updateElements)}},{key:"_updatePosition",value:function(){var t=M.getDocumentScrollTop()+this.options.offset;this.options.top<=t&&this.options.bottom>=t&&!this.el.classList.contains("pinned")&&(this._removePinClasses(),this.el.style.top=this.options.offset+"px",this.el.classList.add("pinned"),"function"==typeof this.options.onPositionChange&&this.options.onPositionChange.call(this,"pinned")),t<this.options.top&&!this.el.classList.contains("pin-top")&&(this._removePinClasses(),this.el.style.top=0,this.el.classList.add("pin-top"),"function"==typeof this.options.onPositionChange&&this.options.onPositionChange.call(this,"pin-top")),t>this.options.bottom&&!this.el.classList.contains("pin-bottom")&&(this._removePinClasses(),this.el.classList.add("pin-bottom"),this.el.style.top=this.options.bottom-this.originalOffset+"px","function"==typeof this.options.onPositionChange&&this.options.onPositionChange.call(this,"pin-bottom"))}},{key:"_removePinClasses",value:function(){this.el.classList.remove("pin-top"),this.el.classList.remove("pinned"),this.el.classList.remove("pin-bottom")}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Pushpin}},{key:"_updateElements",value:function(){for(var t in n._pushpins){n._pushpins[t]._updatePosition()}}},{key:"defaults",get:function(){return e}}]),n}();t._pushpins=[],M.Pushpin=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"pushpin","M_Pushpin")}(cash),function(r,s){"use strict";var e={direction:"top",hoverEnabled:!0,toolbarEnabled:!1};r.fn.reverse=[].reverse;var t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_FloatingActionButton=i).options=r.extend({},n.defaults,e),i.isOpen=!1,i.$anchor=i.$el.children("a").first(),i.$menu=i.$el.children("ul").first(),i.$floatingBtns=i.$el.find("ul .btn-floating"),i.$floatingBtnsReverse=i.$el.find("ul .btn-floating").reverse(),i.offsetY=0,i.offsetX=0,i.$el.addClass("direction-"+i.options.direction),"top"===i.options.direction?i.offsetY=40:"right"===i.options.direction?i.offsetX=-40:"bottom"===i.options.direction?i.offsetY=-40:i.offsetX=40,i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.M_FloatingActionButton=void 0}},{key:"_setupEventHandlers",value:function(){this._handleFABClickBound=this._handleFABClick.bind(this),this._handleOpenBound=this.open.bind(this),this._handleCloseBound=this.close.bind(this),this.options.hoverEnabled&&!this.options.toolbarEnabled?(this.el.addEventListener("mouseenter",this._handleOpenBound),this.el.addEventListener("mouseleave",this._handleCloseBound)):this.el.addEventListener("click",this._handleFABClickBound)}},{key:"_removeEventHandlers",value:function(){this.options.hoverEnabled&&!this.options.toolbarEnabled?(this.el.removeEventListener("mouseenter",this._handleOpenBound),this.el.removeEventListener("mouseleave",this._handleCloseBound)):this.el.removeEventListener("click",this._handleFABClickBound)}},{key:"_handleFABClick",value:function(){this.isOpen?this.close():this.open()}},{key:"_handleDocumentClick",value:function(t){r(t.target).closest(this.$menu).length||this.close()}},{key:"open",value:function(){this.isOpen||(this.options.toolbarEnabled?this._animateInToolbar():this._animateInFAB(),this.isOpen=!0)}},{key:"close",value:function(){this.isOpen&&(this.options.toolbarEnabled?(window.removeEventListener("scroll",this._handleCloseBound,!0),document.body.removeEventListener("click",this._handleDocumentClickBound,!0),this._animateOutToolbar()):this._animateOutFAB(),this.isOpen=!1)}},{key:"_animateInFAB",value:function(){var e=this;this.$el.addClass("active");var i=0;this.$floatingBtnsReverse.each(function(t){s({targets:t,opacity:1,scale:[.4,1],translateY:[e.offsetY,0],translateX:[e.offsetX,0],duration:275,delay:i,easing:"easeInOutQuad"}),i+=40})}},{key:"_animateOutFAB",value:function(){var e=this;this.$floatingBtnsReverse.each(function(t){s.remove(t),s({targets:t,opacity:0,scale:.4,translateY:e.offsetY,translateX:e.offsetX,duration:175,easing:"easeOutQuad",complete:function(){e.$el.removeClass("active")}})})}},{key:"_animateInToolbar",value:function(){var t,e=this,i=window.innerWidth,n=window.innerHeight,s=this.el.getBoundingClientRect(),o=r('<div class="fab-backdrop"></div>'),a=this.$anchor.css("background-color");this.$anchor.append(o),this.offsetX=s.left-i/2+s.width/2,this.offsetY=n-s.bottom,t=i/o[0].clientWidth,this.btnBottom=s.bottom,this.btnLeft=s.left,this.btnWidth=s.width,this.$el.addClass("active"),this.$el.css({"text-align":"center",width:"100%",bottom:0,left:0,transform:"translateX("+this.offsetX+"px)",transition:"none"}),this.$anchor.css({transform:"translateY("+-this.offsetY+"px)",transition:"none"}),o.css({"background-color":a}),setTimeout(function(){e.$el.css({transform:"",transition:"transform .2s cubic-bezier(0.550, 0.085, 0.680, 0.530), background-color 0s linear .2s"}),e.$anchor.css({overflow:"visible",transform:"",transition:"transform .2s"}),setTimeout(function(){e.$el.css({overflow:"hidden","background-color":a}),o.css({transform:"scale("+t+")",transition:"transform .2s cubic-bezier(0.550, 0.055, 0.675, 0.190)"}),e.$menu.children("li").children("a").css({opacity:1}),e._handleDocumentClickBound=e._handleDocumentClick.bind(e),window.addEventListener("scroll",e._handleCloseBound,!0),document.body.addEventListener("click",e._handleDocumentClickBound,!0)},100)},0)}},{key:"_animateOutToolbar",value:function(){var t=this,e=window.innerWidth,i=window.innerHeight,n=this.$el.find(".fab-backdrop"),s=this.$anchor.css("background-color");this.offsetX=this.btnLeft-e/2+this.btnWidth/2,this.offsetY=i-this.btnBottom,this.$el.removeClass("active"),this.$el.css({"background-color":"transparent",transition:"none"}),this.$anchor.css({transition:"none"}),n.css({transform:"scale(0)","background-color":s}),this.$menu.children("li").children("a").css({opacity:""}),setTimeout(function(){n.remove(),t.$el.css({"text-align":"",width:"",bottom:"",left:"",overflow:"","background-color":"",transform:"translate3d("+-t.offsetX+"px,0,0)"}),t.$anchor.css({overflow:"",transform:"translate3d(0,"+t.offsetY+"px,0)"}),setTimeout(function(){t.$el.css({transform:"translate3d(0,0,0)",transition:"transform .2s"}),t.$anchor.css({transform:"translate3d(0,0,0)",transition:"transform .2s cubic-bezier(0.550, 0.055, 0.675, 0.190)"})},20)},200)}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_FloatingActionButton}},{key:"defaults",get:function(){return e}}]),n}();M.FloatingActionButton=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"floatingActionButton","M_FloatingActionButton")}(cash,M.anime),function(g){"use strict";var e={autoClose:!1,format:"mmm dd, yyyy",parse:null,defaultDate:null,setDefaultDate:!1,disableWeekends:!1,disableDayFn:null,firstDay:0,minDate:null,maxDate:null,yearRange:10,minYear:0,maxYear:9999,minMonth:void 0,maxMonth:void 0,startRange:null,endRange:null,isRTL:!1,showMonthAfterYear:!1,showDaysInNextAndPreviousMonths:!1,container:null,showClearBtn:!1,i18n:{cancel:"Cancel",clear:"Clear",done:"Ok",previousMonth:"‹",nextMonth:"›",months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],weekdays:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],weekdaysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],weekdaysAbbrev:["S","M","T","W","T","F","S"]},events:[],onSelect:null,onOpen:null,onClose:null,onDraw:null},t=function(t){function B(t,e){_classCallCheck(this,B);var i=_possibleConstructorReturn(this,(B.__proto__||Object.getPrototypeOf(B)).call(this,B,t,e));(i.el.M_Datepicker=i).options=g.extend({},B.defaults,e),e&&e.hasOwnProperty("i18n")&&"object"==typeof e.i18n&&(i.options.i18n=g.extend({},B.defaults.i18n,e.i18n)),i.options.minDate&&i.options.minDate.setHours(0,0,0,0),i.options.maxDate&&i.options.maxDate.setHours(0,0,0,0),i.id=M.guid(),i._setupVariables(),i._insertHTMLIntoDOM(),i._setupModal(),i._setupEventHandlers(),i.options.defaultDate||(i.options.defaultDate=new Date(Date.parse(i.el.value)));var n=i.options.defaultDate;return B._isDate(n)?i.options.setDefaultDate?(i.setDate(n,!0),i.setInputValue()):i.gotoDate(n):i.gotoDate(new Date),i.isOpen=!1,i}return _inherits(B,Component),_createClass(B,[{key:"destroy",value:function(){this._removeEventHandlers(),this.modal.destroy(),g(this.modalEl).remove(),this.destroySelects(),this.el.M_Datepicker=void 0}},{key:"destroySelects",value:function(){var t=this.calendarEl.querySelector(".orig-select-year");t&&M.FormSelect.getInstance(t).destroy();var e=this.calendarEl.querySelector(".orig-select-month");e&&M.FormSelect.getInstance(e).destroy()}},{key:"_insertHTMLIntoDOM",value:function(){this.options.showClearBtn&&(g(this.clearBtn).css({visibility:""}),this.clearBtn.innerHTML=this.options.i18n.clear),this.doneBtn.innerHTML=this.options.i18n.done,this.cancelBtn.innerHTML=this.options.i18n.cancel,this.options.container?this.$modalEl.appendTo(this.options.container):this.$modalEl.insertBefore(this.el)}},{key:"_setupModal",value:function(){var t=this;this.modalEl.id="modal-"+this.id,this.modal=M.Modal.init(this.modalEl,{onCloseEnd:function(){t.isOpen=!1}})}},{key:"toString",value:function(t){var e=this;return t=t||this.options.format,B._isDate(this.date)?t.split(/(d{1,4}|m{1,4}|y{4}|yy|!.)/g).map(function(t){return e.formats[t]?e.formats[t]():t}).join(""):""}},{key:"setDate",value:function(t,e){if(!t)return this.date=null,this._renderDateDisplay(),this.draw();if("string"==typeof t&&(t=new Date(Date.parse(t))),B._isDate(t)){var i=this.options.minDate,n=this.options.maxDate;B._isDate(i)&&t<i?t=i:B._isDate(n)&&n<t&&(t=n),this.date=new Date(t.getTime()),this._renderDateDisplay(),B._setToStartOfDay(this.date),this.gotoDate(this.date),e||"function"!=typeof this.options.onSelect||this.options.onSelect.call(this,this.date)}}},{key:"setInputValue",value:function(){this.el.value=this.toString(),this.$el.trigger("change",{firedBy:this})}},{key:"_renderDateDisplay",value:function(){var t=B._isDate(this.date)?this.date:new Date,e=this.options.i18n,i=e.weekdaysShort[t.getDay()],n=e.monthsShort[t.getMonth()],s=t.getDate();this.yearTextEl.innerHTML=t.getFullYear(),this.dateTextEl.innerHTML=i+", "+n+" "+s}},{key:"gotoDate",value:function(t){var e=!0;if(B._isDate(t)){if(this.calendars){var i=new Date(this.calendars[0].year,this.calendars[0].month,1),n=new Date(this.calendars[this.calendars.length-1].year,this.calendars[this.calendars.length-1].month,1),s=t.getTime();n.setMonth(n.getMonth()+1),n.setDate(n.getDate()-1),e=s<i.getTime()||n.getTime()<s}e&&(this.calendars=[{month:t.getMonth(),year:t.getFullYear()}]),this.adjustCalendars()}}},{key:"adjustCalendars",value:function(){this.calendars[0]=this.adjustCalendar(this.calendars[0]),this.draw()}},{key:"adjustCalendar",value:function(t){return t.month<0&&(t.year-=Math.ceil(Math.abs(t.month)/12),t.month+=12),11<t.month&&(t.year+=Math.floor(Math.abs(t.month)/12),t.month-=12),t}},{key:"nextMonth",value:function(){this.calendars[0].month++,this.adjustCalendars()}},{key:"prevMonth",value:function(){this.calendars[0].month--,this.adjustCalendars()}},{key:"render",value:function(t,e,i){var n=this.options,s=new Date,o=B._getDaysInMonth(t,e),a=new Date(t,e,1).getDay(),r=[],l=[];B._setToStartOfDay(s),0<n.firstDay&&(a-=n.firstDay)<0&&(a+=7);for(var h=0===e?11:e-1,d=11===e?0:e+1,u=0===e?t-1:t,c=11===e?t+1:t,p=B._getDaysInMonth(u,h),v=o+a,f=v;7<f;)f-=7;v+=7-f;for(var m=!1,g=0,_=0;g<v;g++){var y=new Date(t,e,g-a+1),k=!!B._isDate(this.date)&&B._compareDates(y,this.date),b=B._compareDates(y,s),w=-1!==n.events.indexOf(y.toDateString()),C=g<a||o+a<=g,E=g-a+1,M=e,O=t,x=n.startRange&&B._compareDates(n.startRange,y),L=n.endRange&&B._compareDates(n.endRange,y),T=n.startRange&&n.endRange&&n.startRange<y&&y<n.endRange;C&&(g<a?(E=p+E,M=h,O=u):(E-=o,M=d,O=c));var $={day:E,month:M,year:O,hasEvent:w,isSelected:k,isToday:b,isDisabled:n.minDate&&y<n.minDate||n.maxDate&&y>n.maxDate||n.disableWeekends&&B._isWeekend(y)||n.disableDayFn&&n.disableDayFn(y),isEmpty:C,isStartRange:x,isEndRange:L,isInRange:T,showDaysInNextAndPreviousMonths:n.showDaysInNextAndPreviousMonths};l.push(this.renderDay($)),7==++_&&(r.push(this.renderRow(l,n.isRTL,m)),_=0,m=!(l=[]))}return this.renderTable(n,r,i)}},{key:"renderDay",value:function(t){var e=[],i="false";if(t.isEmpty){if(!t.showDaysInNextAndPreviousMonths)return'<td class="is-empty"></td>';e.push("is-outside-current-month"),e.push("is-selection-disabled")}return t.isDisabled&&e.push("is-disabled"),t.isToday&&e.push("is-today"),t.isSelected&&(e.push("is-selected"),i="true"),t.hasEvent&&e.push("has-event"),t.isInRange&&e.push("is-inrange"),t.isStartRange&&e.push("is-startrange"),t.isEndRange&&e.push("is-endrange"),'<td data-day="'+t.day+'" class="'+e.join(" ")+'" aria-selected="'+i+'"><button class="datepicker-day-button" type="button" data-year="'+t.year+'" data-month="'+t.month+'" data-day="'+t.day+'">'+t.day+"</button></td>"}},{key:"renderRow",value:function(t,e,i){return'<tr class="datepicker-row'+(i?" is-selected":"")+'">'+(e?t.reverse():t).join("")+"</tr>"}},{key:"renderTable",value:function(t,e,i){return'<div class="datepicker-table-wrapper"><table cellpadding="0" cellspacing="0" class="datepicker-table" role="grid" aria-labelledby="'+i+'">'+this.renderHead(t)+this.renderBody(e)+"</table></div>"}},{key:"renderHead",value:function(t){var e=void 0,i=[];for(e=0;e<7;e++)i.push('<th scope="col"><abbr title="'+this.renderDayName(t,e)+'">'+this.renderDayName(t,e,!0)+"</abbr></th>");return"<thead><tr>"+(t.isRTL?i.reverse():i).join("")+"</tr></thead>"}},{key:"renderBody",value:function(t){return"<tbody>"+t.join("")+"</tbody>"}},{key:"renderTitle",value:function(t,e,i,n,s,o){var a,r,l=void 0,h=void 0,d=void 0,u=this.options,c=i===u.minYear,p=i===u.maxYear,v='<div id="'+o+'" class="datepicker-controls" role="heading" aria-live="assertive">',f=!0,m=!0;for(d=[],l=0;l<12;l++)d.push('<option value="'+(i===s?l-e:12+l-e)+'"'+(l===n?' selected="selected"':"")+(c&&l<u.minMonth||p&&l>u.maxMonth?'disabled="disabled"':"")+">"+u.i18n.months[l]+"</option>");for(a='<select class="datepicker-select orig-select-month" tabindex="-1">'+d.join("")+"</select>",g.isArray(u.yearRange)?(l=u.yearRange[0],h=u.yearRange[1]+1):(l=i-u.yearRange,h=1+i+u.yearRange),d=[];l<h&&l<=u.maxYear;l++)l>=u.minYear&&d.push('<option value="'+l+'" '+(l===i?'selected="selected"':"")+">"+l+"</option>");r='<select class="datepicker-select orig-select-year" tabindex="-1">'+d.join("")+"</select>";v+='<button class="month-prev'+(f?"":" is-disabled")+'" type="button"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/><path d="M0-.5h24v24H0z" fill="none"/></svg></button>',v+='<div class="selects-container">',u.showMonthAfterYear?v+=r+a:v+=a+r,v+="</div>",c&&(0===n||u.minMonth>=n)&&(f=!1),p&&(11===n||u.maxMonth<=n)&&(m=!1);return(v+='<button class="month-next'+(m?"":" is-disabled")+'" type="button"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg></button>')+"</div>"}},{key:"draw",value:function(t){if(this.isOpen||t){var e,i=this.options,n=i.minYear,s=i.maxYear,o=i.minMonth,a=i.maxMonth,r="";this._y<=n&&(this._y=n,!isNaN(o)&&this._m<o&&(this._m=o)),this._y>=s&&(this._y=s,!isNaN(a)&&this._m>a&&(this._m=a)),e="datepicker-title-"+Math.random().toString(36).replace(/[^a-z]+/g,"").substr(0,2);for(var l=0;l<1;l++)this._renderDateDisplay(),r+=this.renderTitle(this,l,this.calendars[l].year,this.calendars[l].month,this.calendars[0].year,e)+this.render(this.calendars[l].year,this.calendars[l].month,e);this.destroySelects(),this.calendarEl.innerHTML=r;var h=this.calendarEl.querySelector(".orig-select-year"),d=this.calendarEl.querySelector(".orig-select-month");M.FormSelect.init(h,{classes:"select-year",dropdownOptions:{container:document.body,constrainWidth:!1}}),M.FormSelect.init(d,{classes:"select-month",dropdownOptions:{container:document.body,constrainWidth:!1}}),h.addEventListener("change",this._handleYearChange.bind(this)),d.addEventListener("change",this._handleMonthChange.bind(this)),"function"==typeof this.options.onDraw&&this.options.onDraw(this)}}},{key:"_setupEventHandlers",value:function(){this._handleInputKeydownBound=this._handleInputKeydown.bind(this),this._handleInputClickBound=this._handleInputClick.bind(this),this._handleInputChangeBound=this._handleInputChange.bind(this),this._handleCalendarClickBound=this._handleCalendarClick.bind(this),this._finishSelectionBound=this._finishSelection.bind(this),this._handleMonthChange=this._handleMonthChange.bind(this),this._closeBound=this.close.bind(this),this.el.addEventListener("click",this._handleInputClickBound),this.el.addEventListener("keydown",this._handleInputKeydownBound),this.el.addEventListener("change",this._handleInputChangeBound),this.calendarEl.addEventListener("click",this._handleCalendarClickBound),this.doneBtn.addEventListener("click",this._finishSelectionBound),this.cancelBtn.addEventListener("click",this._closeBound),this.options.showClearBtn&&(this._handleClearClickBound=this._handleClearClick.bind(this),this.clearBtn.addEventListener("click",this._handleClearClickBound))}},{key:"_setupVariables",value:function(){var e=this;this.$modalEl=g(B._template),this.modalEl=this.$modalEl[0],this.calendarEl=this.modalEl.querySelector(".datepicker-calendar"),this.yearTextEl=this.modalEl.querySelector(".year-text"),this.dateTextEl=this.modalEl.querySelector(".date-text"),this.options.showClearBtn&&(this.clearBtn=this.modalEl.querySelector(".datepicker-clear")),this.doneBtn=this.modalEl.querySelector(".datepicker-done"),this.cancelBtn=this.modalEl.querySelector(".datepicker-cancel"),this.formats={d:function(){return e.date.getDate()},dd:function(){var t=e.date.getDate();return(t<10?"0":"")+t},ddd:function(){return e.options.i18n.weekdaysShort[e.date.getDay()]},dddd:function(){return e.options.i18n.weekdays[e.date.getDay()]},m:function(){return e.date.getMonth()+1},mm:function(){var t=e.date.getMonth()+1;return(t<10?"0":"")+t},mmm:function(){return e.options.i18n.monthsShort[e.date.getMonth()]},mmmm:function(){return e.options.i18n.months[e.date.getMonth()]},yy:function(){return(""+e.date.getFullYear()).slice(2)},yyyy:function(){return e.date.getFullYear()}}}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("click",this._handleInputClickBound),this.el.removeEventListener("keydown",this._handleInputKeydownBound),this.el.removeEventListener("change",this._handleInputChangeBound),this.calendarEl.removeEventListener("click",this._handleCalendarClickBound)}},{key:"_handleInputClick",value:function(){this.open()}},{key:"_handleInputKeydown",value:function(t){t.which===M.keys.ENTER&&(t.preventDefault(),this.open())}},{key:"_handleCalendarClick",value:function(t){if(this.isOpen){var e=g(t.target);e.hasClass("is-disabled")||(!e.hasClass("datepicker-day-button")||e.hasClass("is-empty")||e.parent().hasClass("is-disabled")?e.closest(".month-prev").length?this.prevMonth():e.closest(".month-next").length&&this.nextMonth():(this.setDate(new Date(t.target.getAttribute("data-year"),t.target.getAttribute("data-month"),t.target.getAttribute("data-day"))),this.options.autoClose&&this._finishSelection()))}}},{key:"_handleClearClick",value:function(){this.date=null,this.setInputValue(),this.close()}},{key:"_handleMonthChange",value:function(t){this.gotoMonth(t.target.value)}},{key:"_handleYearChange",value:function(t){this.gotoYear(t.target.value)}},{key:"gotoMonth",value:function(t){isNaN(t)||(this.calendars[0].month=parseInt(t,10),this.adjustCalendars())}},{key:"gotoYear",value:function(t){isNaN(t)||(this.calendars[0].year=parseInt(t,10),this.adjustCalendars())}},{key:"_handleInputChange",value:function(t){var e=void 0;t.firedBy!==this&&(e=this.options.parse?this.options.parse(this.el.value,this.options.format):new Date(Date.parse(this.el.value)),B._isDate(e)&&this.setDate(e))}},{key:"renderDayName",value:function(t,e,i){for(e+=t.firstDay;7<=e;)e-=7;return i?t.i18n.weekdaysAbbrev[e]:t.i18n.weekdays[e]}},{key:"_finishSelection",value:function(){this.setInputValue(),this.close()}},{key:"open",value:function(){if(!this.isOpen)return this.isOpen=!0,"function"==typeof this.options.onOpen&&this.options.onOpen.call(this),this.draw(),this.modal.open(),this}},{key:"close",value:function(){if(this.isOpen)return this.isOpen=!1,"function"==typeof this.options.onClose&&this.options.onClose.call(this),this.modal.close(),this}}],[{key:"init",value:function(t,e){return _get(B.__proto__||Object.getPrototypeOf(B),"init",this).call(this,this,t,e)}},{key:"_isDate",value:function(t){return/Date/.test(Object.prototype.toString.call(t))&&!isNaN(t.getTime())}},{key:"_isWeekend",value:function(t){var e=t.getDay();return 0===e||6===e}},{key:"_setToStartOfDay",value:function(t){B._isDate(t)&&t.setHours(0,0,0,0)}},{key:"_getDaysInMonth",value:function(t,e){return[31,B._isLeapYear(t)?29:28,31,30,31,30,31,31,30,31,30,31][e]}},{key:"_isLeapYear",value:function(t){return t%4==0&&t%100!=0||t%400==0}},{key:"_compareDates",value:function(t,e){return t.getTime()===e.getTime()}},{key:"_setToStartOfDay",value:function(t){B._isDate(t)&&t.setHours(0,0,0,0)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Datepicker}},{key:"defaults",get:function(){return e}}]),B}();t._template=['<div class= "modal datepicker-modal">','<div class="modal-content datepicker-container">','<div class="datepicker-date-display">','<span class="year-text"></span>','<span class="date-text"></span>',"</div>",'<div class="datepicker-calendar-container">','<div class="datepicker-calendar"></div>','<div class="datepicker-footer">','<button class="btn-flat datepicker-clear waves-effect" style="visibility: hidden;" type="button"></button>','<div class="confirmation-btns">','<button class="btn-flat datepicker-cancel waves-effect" type="button"></button>','<button class="btn-flat datepicker-done waves-effect" type="button"></button>',"</div>","</div>","</div>","</div>","</div>"].join(""),M.Datepicker=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"datepicker","M_Datepicker")}(cash),function(h){"use strict";var e={dialRadius:135,outerRadius:105,innerRadius:70,tickRadius:20,duration:350,container:null,defaultTime:"now",fromNow:0,showClearBtn:!1,i18n:{cancel:"Cancel",clear:"Clear",done:"Ok"},autoClose:!1,twelveHour:!0,vibrate:!0,onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null,onSelect:null},t=function(t){function f(t,e){_classCallCheck(this,f);var i=_possibleConstructorReturn(this,(f.__proto__||Object.getPrototypeOf(f)).call(this,f,t,e));return(i.el.M_Timepicker=i).options=h.extend({},f.defaults,e),i.id=M.guid(),i._insertHTMLIntoDOM(),i._setupModal(),i._setupVariables(),i._setupEventHandlers(),i._clockSetup(),i._pickerSetup(),i}return _inherits(f,Component),_createClass(f,[{key:"destroy",value:function(){this._removeEventHandlers(),this.modal.destroy(),h(this.modalEl).remove(),this.el.M_Timepicker=void 0}},{key:"_setupEventHandlers",value:function(){this._handleInputKeydownBound=this._handleInputKeydown.bind(this),this._handleInputClickBound=this._handleInputClick.bind(this),this._handleClockClickStartBound=this._handleClockClickStart.bind(this),this._handleDocumentClickMoveBound=this._handleDocumentClickMove.bind(this),this._handleDocumentClickEndBound=this._handleDocumentClickEnd.bind(this),this.el.addEventListener("click",this._handleInputClickBound),this.el.addEventListener("keydown",this._handleInputKeydownBound),this.plate.addEventListener("mousedown",this._handleClockClickStartBound),this.plate.addEventListener("touchstart",this._handleClockClickStartBound),h(this.spanHours).on("click",this.showView.bind(this,"hours")),h(this.spanMinutes).on("click",this.showView.bind(this,"minutes"))}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("click",this._handleInputClickBound),this.el.removeEventListener("keydown",this._handleInputKeydownBound)}},{key:"_handleInputClick",value:function(){this.open()}},{key:"_handleInputKeydown",value:function(t){t.which===M.keys.ENTER&&(t.preventDefault(),this.open())}},{key:"_handleClockClickStart",value:function(t){t.preventDefault();var e=this.plate.getBoundingClientRect(),i=e.left,n=e.top;this.x0=i+this.options.dialRadius,this.y0=n+this.options.dialRadius,this.moved=!1;var s=f._Pos(t);this.dx=s.x-this.x0,this.dy=s.y-this.y0,this.setHand(this.dx,this.dy,!1),document.addEventListener("mousemove",this._handleDocumentClickMoveBound),document.addEventListener("touchmove",this._handleDocumentClickMoveBound),document.addEventListener("mouseup",this._handleDocumentClickEndBound),document.addEventListener("touchend",this._handleDocumentClickEndBound)}},{key:"_handleDocumentClickMove",value:function(t){t.preventDefault();var e=f._Pos(t),i=e.x-this.x0,n=e.y-this.y0;this.moved=!0,this.setHand(i,n,!1,!0)}},{key:"_handleDocumentClickEnd",value:function(t){var e=this;t.preventDefault(),document.removeEventListener("mouseup",this._handleDocumentClickEndBound),document.removeEventListener("touchend",this._handleDocumentClickEndBound);var i=f._Pos(t),n=i.x-this.x0,s=i.y-this.y0;this.moved&&n===this.dx&&s===this.dy&&this.setHand(n,s),"hours"===this.currentView?this.showView("minutes",this.options.duration/2):this.options.autoClose&&(h(this.minutesView).addClass("timepicker-dial-out"),setTimeout(function(){e.done()},this.options.duration/2)),"function"==typeof this.options.onSelect&&this.options.onSelect.call(this,this.hours,this.minutes),document.removeEventListener("mousemove",this._handleDocumentClickMoveBound),document.removeEventListener("touchmove",this._handleDocumentClickMoveBound)}},{key:"_insertHTMLIntoDOM",value:function(){this.$modalEl=h(f._template),this.modalEl=this.$modalEl[0],this.modalEl.id="modal-"+this.id;var t=document.querySelector(this.options.container);this.options.container&&t?this.$modalEl.appendTo(t):this.$modalEl.insertBefore(this.el)}},{key:"_setupModal",value:function(){var t=this;this.modal=M.Modal.init(this.modalEl,{onOpenStart:this.options.onOpenStart,onOpenEnd:this.options.onOpenEnd,onCloseStart:this.options.onCloseStart,onCloseEnd:function(){"function"==typeof t.options.onCloseEnd&&t.options.onCloseEnd.call(t),t.isOpen=!1}})}},{key:"_setupVariables",value:function(){this.currentView="hours",this.vibrate=navigator.vibrate?"vibrate":navigator.webkitVibrate?"webkitVibrate":null,this._canvas=this.modalEl.querySelector(".timepicker-canvas"),this.plate=this.modalEl.querySelector(".timepicker-plate"),this.hoursView=this.modalEl.querySelector(".timepicker-hours"),this.minutesView=this.modalEl.querySelector(".timepicker-minutes"),this.spanHours=this.modalEl.querySelector(".timepicker-span-hours"),this.spanMinutes=this.modalEl.querySelector(".timepicker-span-minutes"),this.spanAmPm=this.modalEl.querySelector(".timepicker-span-am-pm"),this.footer=this.modalEl.querySelector(".timepicker-footer"),this.amOrPm="PM"}},{key:"_pickerSetup",value:function(){var t=h('<button class="btn-flat timepicker-clear waves-effect" style="visibility: hidden;" type="button" tabindex="'+(this.options.twelveHour?"3":"1")+'">'+this.options.i18n.clear+"</button>").appendTo(this.footer).on("click",this.clear.bind(this));this.options.showClearBtn&&t.css({visibility:""});var e=h('<div class="confirmation-btns"></div>');h('<button class="btn-flat timepicker-close waves-effect" type="button" tabindex="'+(this.options.twelveHour?"3":"1")+'">'+this.options.i18n.cancel+"</button>").appendTo(e).on("click",this.close.bind(this)),h('<button class="btn-flat timepicker-close waves-effect" type="button" tabindex="'+(this.options.twelveHour?"3":"1")+'">'+this.options.i18n.done+"</button>").appendTo(e).on("click",this.done.bind(this)),e.appendTo(this.footer)}},{key:"_clockSetup",value:function(){this.options.twelveHour&&(this.$amBtn=h('<div class="am-btn">AM</div>'),this.$pmBtn=h('<div class="pm-btn">PM</div>'),this.$amBtn.on("click",this._handleAmPmClick.bind(this)).appendTo(this.spanAmPm),this.$pmBtn.on("click",this._handleAmPmClick.bind(this)).appendTo(this.spanAmPm)),this._buildHoursView(),this._buildMinutesView(),this._buildSVGClock()}},{key:"_buildSVGClock",value:function(){var t=this.options.dialRadius,e=this.options.tickRadius,i=2*t,n=f._createSVGEl("svg");n.setAttribute("class","timepicker-svg"),n.setAttribute("width",i),n.setAttribute("height",i);var s=f._createSVGEl("g");s.setAttribute("transform","translate("+t+","+t+")");var o=f._createSVGEl("circle");o.setAttribute("class","timepicker-canvas-bearing"),o.setAttribute("cx",0),o.setAttribute("cy",0),o.setAttribute("r",4);var a=f._createSVGEl("line");a.setAttribute("x1",0),a.setAttribute("y1",0);var r=f._createSVGEl("circle");r.setAttribute("class","timepicker-canvas-bg"),r.setAttribute("r",e),s.appendChild(a),s.appendChild(r),s.appendChild(o),n.appendChild(s),this._canvas.appendChild(n),this.hand=a,this.bg=r,this.bearing=o,this.g=s}},{key:"_buildHoursView",value:function(){var t=h('<div class="timepicker-tick"></div>');if(this.options.twelveHour)for(var e=1;e<13;e+=1){var i=t.clone(),n=e/6*Math.PI,s=this.options.outerRadius;i.css({left:this.options.dialRadius+Math.sin(n)*s-this.options.tickRadius+"px",top:this.options.dialRadius-Math.cos(n)*s-this.options.tickRadius+"px"}),i.html(0===e?"00":e),this.hoursView.appendChild(i[0])}else for(var o=0;o<24;o+=1){var a=t.clone(),r=o/6*Math.PI,l=0<o&&o<13?this.options.innerRadius:this.options.outerRadius;a.css({left:this.options.dialRadius+Math.sin(r)*l-this.options.tickRadius+"px",top:this.options.dialRadius-Math.cos(r)*l-this.options.tickRadius+"px"}),a.html(0===o?"00":o),this.hoursView.appendChild(a[0])}}},{key:"_buildMinutesView",value:function(){for(var t=h('<div class="timepicker-tick"></div>'),e=0;e<60;e+=5){var i=t.clone(),n=e/30*Math.PI;i.css({left:this.options.dialRadius+Math.sin(n)*this.options.outerRadius-this.options.tickRadius+"px",top:this.options.dialRadius-Math.cos(n)*this.options.outerRadius-this.options.tickRadius+"px"}),i.html(f._addLeadingZero(e)),this.minutesView.appendChild(i[0])}}},{key:"_handleAmPmClick",value:function(t){var e=h(t.target);this.amOrPm=e.hasClass("am-btn")?"AM":"PM",this._updateAmPmView()}},{key:"_updateAmPmView",value:function(){this.options.twelveHour&&(this.$amBtn.toggleClass("text-primary","AM"===this.amOrPm),this.$pmBtn.toggleClass("text-primary","PM"===this.amOrPm))}},{key:"_updateTimeFromInput",value:function(){var t=((this.el.value||this.options.defaultTime||"")+"").split(":");if(this.options.twelveHour&&void 0!==t[1]&&(0<t[1].toUpperCase().indexOf("AM")?this.amOrPm="AM":this.amOrPm="PM",t[1]=t[1].replace("AM","").replace("PM","")),"now"===t[0]){var e=new Date(+new Date+this.options.fromNow);t=[e.getHours(),e.getMinutes()],this.options.twelveHour&&(this.amOrPm=12<=t[0]&&t[0]<24?"PM":"AM")}this.hours=+t[0]||0,this.minutes=+t[1]||0,this.spanHours.innerHTML=this.hours,this.spanMinutes.innerHTML=f._addLeadingZero(this.minutes),this._updateAmPmView()}},{key:"showView",value:function(t,e){"minutes"===t&&h(this.hoursView).css("visibility");var i="hours"===t,n=i?this.hoursView:this.minutesView,s=i?this.minutesView:this.hoursView;this.currentView=t,h(this.spanHours).toggleClass("text-primary",i),h(this.spanMinutes).toggleClass("text-primary",!i),s.classList.add("timepicker-dial-out"),h(n).css("visibility","visible").removeClass("timepicker-dial-out"),this.resetClock(e),clearTimeout(this.toggleViewTimer),this.toggleViewTimer=setTimeout(function(){h(s).css("visibility","hidden")},this.options.duration)}},{key:"resetClock",value:function(t){var e=this.currentView,i=this[e],n="hours"===e,s=i*(Math.PI/(n?6:30)),o=n&&0<i&&i<13?this.options.innerRadius:this.options.outerRadius,a=Math.sin(s)*o,r=-Math.cos(s)*o,l=this;t?(h(this.canvas).addClass("timepicker-canvas-out"),setTimeout(function(){h(l.canvas).removeClass("timepicker-canvas-out"),l.setHand(a,r)},t)):this.setHand(a,r)}},{key:"setHand",value:function(t,e,i){var n=this,s=Math.atan2(t,-e),o="hours"===this.currentView,a=Math.PI/(o||i?6:30),r=Math.sqrt(t*t+e*e),l=o&&r<(this.options.outerRadius+this.options.innerRadius)/2,h=l?this.options.innerRadius:this.options.outerRadius;this.options.twelveHour&&(h=this.options.outerRadius),s<0&&(s=2*Math.PI+s);var d=Math.round(s/a);s=d*a,this.options.twelveHour?o?0===d&&(d=12):(i&&(d*=5),60===d&&(d=0)):o?(12===d&&(d=0),d=l?0===d?12:d:0===d?0:d+12):(i&&(d*=5),60===d&&(d=0)),this[this.currentView]!==d&&this.vibrate&&this.options.vibrate&&(this.vibrateTimer||(navigator[this.vibrate](10),this.vibrateTimer=setTimeout(function(){n.vibrateTimer=null},100))),this[this.currentView]=d,o?this.spanHours.innerHTML=d:this.spanMinutes.innerHTML=f._addLeadingZero(d);var u=Math.sin(s)*(h-this.options.tickRadius),c=-Math.cos(s)*(h-this.options.tickRadius),p=Math.sin(s)*h,v=-Math.cos(s)*h;this.hand.setAttribute("x2",u),this.hand.setAttribute("y2",c),this.bg.setAttribute("cx",p),this.bg.setAttribute("cy",v)}},{key:"open",value:function(){this.isOpen||(this.isOpen=!0,this._updateTimeFromInput(),this.showView("hours"),this.modal.open())}},{key:"close",value:function(){this.isOpen&&(this.isOpen=!1,this.modal.close())}},{key:"done",value:function(t,e){var i=this.el.value,n=e?"":f._addLeadingZero(this.hours)+":"+f._addLeadingZero(this.minutes);this.time=n,!e&&this.options.twelveHour&&(n=n+" "+this.amOrPm),(this.el.value=n)!==i&&this.$el.trigger("change"),this.close(),this.el.focus()}},{key:"clear",value:function(){this.done(null,!0)}}],[{key:"init",value:function(t,e){return _get(f.__proto__||Object.getPrototypeOf(f),"init",this).call(this,this,t,e)}},{key:"_addLeadingZero",value:function(t){return(t<10?"0":"")+t}},{key:"_createSVGEl",value:function(t){return document.createElementNS("http://www.w3.org/2000/svg",t)}},{key:"_Pos",value:function(t){return t.targetTouches&&1<=t.targetTouches.length?{x:t.targetTouches[0].clientX,y:t.targetTouches[0].clientY}:{x:t.clientX,y:t.clientY}}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Timepicker}},{key:"defaults",get:function(){return e}}]),f}();t._template=['<div class= "modal timepicker-modal">','<div class="modal-content timepicker-container">','<div class="timepicker-digital-display">','<div class="timepicker-text-container">','<div class="timepicker-display-column">','<span class="timepicker-span-hours text-primary"></span>',":",'<span class="timepicker-span-minutes"></span>',"</div>",'<div class="timepicker-display-column timepicker-display-am-pm">','<div class="timepicker-span-am-pm"></div>',"</div>","</div>","</div>",'<div class="timepicker-analog-display">','<div class="timepicker-plate">','<div class="timepicker-canvas"></div>','<div class="timepicker-dial timepicker-hours"></div>','<div class="timepicker-dial timepicker-minutes timepicker-dial-out"></div>',"</div>",'<div class="timepicker-footer"></div>',"</div>","</div>","</div>"].join(""),M.Timepicker=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"timepicker","M_Timepicker")}(cash),function(s){"use strict";var e={},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_CharacterCounter=i).options=s.extend({},n.defaults,e),i.isInvalid=!1,i.isValidLength=!1,i._setupCounter(),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.CharacterCounter=void 0,this._removeCounter()}},{key:"_setupEventHandlers",value:function(){this._handleUpdateCounterBound=this.updateCounter.bind(this),this.el.addEventListener("focus",this._handleUpdateCounterBound,!0),this.el.addEventListener("input",this._handleUpdateCounterBound,!0)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("focus",this._handleUpdateCounterBound,!0),this.el.removeEventListener("input",this._handleUpdateCounterBound,!0)}},{key:"_setupCounter",value:function(){this.counterEl=document.createElement("span"),s(this.counterEl).addClass("character-counter").css({float:"right","font-size":"12px",height:1}),this.$el.parent().append(this.counterEl)}},{key:"_removeCounter",value:function(){s(this.counterEl).remove()}},{key:"updateCounter",value:function(){var t=+this.$el.attr("data-length"),e=this.el.value.length;this.isValidLength=e<=t;var i=e;t&&(i+="/"+t,this._validateInput()),s(this.counterEl).html(i)}},{key:"_validateInput",value:function(){this.isValidLength&&this.isInvalid?(this.isInvalid=!1,this.$el.removeClass("invalid")):this.isValidLength||this.isInvalid||(this.isInvalid=!0,this.$el.removeClass("valid"),this.$el.addClass("invalid"))}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_CharacterCounter}},{key:"defaults",get:function(){return e}}]),n}();M.CharacterCounter=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"characterCounter","M_CharacterCounter")}(cash),function(b){"use strict";var e={duration:200,dist:-100,shift:0,padding:0,numVisible:5,fullWidth:!1,indicators:!1,noWrap:!1,onCycleTo:null},t=function(t){function i(t,e){_classCallCheck(this,i);var n=_possibleConstructorReturn(this,(i.__proto__||Object.getPrototypeOf(i)).call(this,i,t,e));return(n.el.M_Carousel=n).options=b.extend({},i.defaults,e),n.hasMultipleSlides=1<n.$el.find(".carousel-item").length,n.showIndicators=n.options.indicators&&n.hasMultipleSlides,n.noWrap=n.options.noWrap||!n.hasMultipleSlides,n.pressed=!1,n.dragged=!1,n.offset=n.target=0,n.images=[],n.itemWidth=n.$el.find(".carousel-item").first().innerWidth(),n.itemHeight=n.$el.find(".carousel-item").first().innerHeight(),n.dim=2*n.itemWidth+n.options.padding||1,n._autoScrollBound=n._autoScroll.bind(n),n._trackBound=n._track.bind(n),n.options.fullWidth&&(n.options.dist=0,n._setCarouselHeight(),n.showIndicators&&n.$el.find(".carousel-fixed-item").addClass("with-indicators")),n.$indicators=b('<ul class="indicators"></ul>'),n.$el.find(".carousel-item").each(function(t,e){if(n.images.push(t),n.showIndicators){var i=b('<li class="indicator-item"></li>');0===e&&i[0].classList.add("active"),n.$indicators.append(i)}}),n.showIndicators&&n.$el.append(n.$indicators),n.count=n.images.length,n.options.numVisible=Math.min(n.count,n.options.numVisible),n.xform="transform",["webkit","Moz","O","ms"].every(function(t){var e=t+"Transform";return void 0===document.body.style[e]||(n.xform=e,!1)}),n._setupEventHandlers(),n._scroll(n.offset),n}return _inherits(i,Component),_createClass(i,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.M_Carousel=void 0}},{key:"_setupEventHandlers",value:function(){var i=this;this._handleCarouselTapBound=this._handleCarouselTap.bind(this),this._handleCarouselDragBound=this._handleCarouselDrag.bind(this),this._handleCarouselReleaseBound=this._handleCarouselRelease.bind(this),this._handleCarouselClickBound=this._handleCarouselClick.bind(this),void 0!==window.ontouchstart&&(this.el.addEventListener("touchstart",this._handleCarouselTapBound),this.el.addEventListener("touchmove",this._handleCarouselDragBound),this.el.addEventListener("touchend",this._handleCarouselReleaseBound)),this.el.addEventListener("mousedown",this._handleCarouselTapBound),this.el.addEventListener("mousemove",this._handleCarouselDragBound),this.el.addEventListener("mouseup",this._handleCarouselReleaseBound),this.el.addEventListener("mouseleave",this._handleCarouselReleaseBound),this.el.addEventListener("click",this._handleCarouselClickBound),this.showIndicators&&this.$indicators&&(this._handleIndicatorClickBound=this._handleIndicatorClick.bind(this),this.$indicators.find(".indicator-item").each(function(t,e){t.addEventListener("click",i._handleIndicatorClickBound)}));var t=M.throttle(this._handleResize,200);this._handleThrottledResizeBound=t.bind(this),window.addEventListener("resize",this._handleThrottledResizeBound)}},{key:"_removeEventHandlers",value:function(){var i=this;void 0!==window.ontouchstart&&(this.el.removeEventListener("touchstart",this._handleCarouselTapBound),this.el.removeEventListener("touchmove",this._handleCarouselDragBound),this.el.removeEventListener("touchend",this._handleCarouselReleaseBound)),this.el.removeEventListener("mousedown",this._handleCarouselTapBound),this.el.removeEventListener("mousemove",this._handleCarouselDragBound),this.el.removeEventListener("mouseup",this._handleCarouselReleaseBound),this.el.removeEventListener("mouseleave",this._handleCarouselReleaseBound),this.el.removeEventListener("click",this._handleCarouselClickBound),this.showIndicators&&this.$indicators&&this.$indicators.find(".indicator-item").each(function(t,e){t.removeEventListener("click",i._handleIndicatorClickBound)}),window.removeEventListener("resize",this._handleThrottledResizeBound)}},{key:"_handleCarouselTap",value:function(t){"mousedown"===t.type&&b(t.target).is("img")&&t.preventDefault(),this.pressed=!0,this.dragged=!1,this.verticalDragged=!1,this.reference=this._xpos(t),this.referenceY=this._ypos(t),this.velocity=this.amplitude=0,this.frame=this.offset,this.timestamp=Date.now(),clearInterval(this.ticker),this.ticker=setInterval(this._trackBound,100)}},{key:"_handleCarouselDrag",value:function(t){var e=void 0,i=void 0,n=void 0;if(this.pressed)if(e=this._xpos(t),i=this._ypos(t),n=this.reference-e,Math.abs(this.referenceY-i)<30&&!this.verticalDragged)(2<n||n<-2)&&(this.dragged=!0,this.reference=e,this._scroll(this.offset+n));else{if(this.dragged)return t.preventDefault(),t.stopPropagation(),!1;this.verticalDragged=!0}if(this.dragged)return t.preventDefault(),t.stopPropagation(),!1}},{key:"_handleCarouselRelease",value:function(t){if(this.pressed)return this.pressed=!1,clearInterval(this.ticker),this.target=this.offset,(10<this.velocity||this.velocity<-10)&&(this.amplitude=.9*this.velocity,this.target=this.offset+this.amplitude),this.target=Math.round(this.target/this.dim)*this.dim,this.noWrap&&(this.target>=this.dim*(this.count-1)?this.target=this.dim*(this.count-1):this.target<0&&(this.target=0)),this.amplitude=this.target-this.offset,this.timestamp=Date.now(),requestAnimationFrame(this._autoScrollBound),this.dragged&&(t.preventDefault(),t.stopPropagation()),!1}},{key:"_handleCarouselClick",value:function(t){if(this.dragged)return t.preventDefault(),t.stopPropagation(),!1;if(!this.options.fullWidth){var e=b(t.target).closest(".carousel-item").index();0!==this._wrap(this.center)-e&&(t.preventDefault(),t.stopPropagation()),this._cycleTo(e)}}},{key:"_handleIndicatorClick",value:function(t){t.stopPropagation();var e=b(t.target).closest(".indicator-item");e.length&&this._cycleTo(e.index())}},{key:"_handleResize",value:function(t){this.options.fullWidth?(this.itemWidth=this.$el.find(".carousel-item").first().innerWidth(),this.imageHeight=this.$el.find(".carousel-item.active").height(),this.dim=2*this.itemWidth+this.options.padding,this.offset=2*this.center*this.itemWidth,this.target=this.offset,this._setCarouselHeight(!0)):this._scroll()}},{key:"_setCarouselHeight",value:function(t){var i=this,e=this.$el.find(".carousel-item.active").length?this.$el.find(".carousel-item.active").first():this.$el.find(".carousel-item").first(),n=e.find("img").first();if(n.length)if(n[0].complete){var s=n.height();if(0<s)this.$el.css("height",s+"px");else{var o=n[0].naturalWidth,a=n[0].naturalHeight,r=this.$el.width()/o*a;this.$el.css("height",r+"px")}}else n.one("load",function(t,e){i.$el.css("height",t.offsetHeight+"px")});else if(!t){var l=e.height();this.$el.css("height",l+"px")}}},{key:"_xpos",value:function(t){return t.targetTouches&&1<=t.targetTouches.length?t.targetTouches[0].clientX:t.clientX}},{key:"_ypos",value:function(t){return t.targetTouches&&1<=t.targetTouches.length?t.targetTouches[0].clientY:t.clientY}},{key:"_wrap",value:function(t){return t>=this.count?t%this.count:t<0?this._wrap(this.count+t%this.count):t}},{key:"_track",value:function(){var t,e,i,n;e=(t=Date.now())-this.timestamp,this.timestamp=t,i=this.offset-this.frame,this.frame=this.offset,n=1e3*i/(1+e),this.velocity=.8*n+.2*this.velocity}},{key:"_autoScroll",value:function(){var t=void 0,e=void 0;this.amplitude&&(t=Date.now()-this.timestamp,2<(e=this.amplitude*Math.exp(-t/this.options.duration))||e<-2?(this._scroll(this.target-e),requestAnimationFrame(this._autoScrollBound)):this._scroll(this.target))}},{key:"_scroll",value:function(t){var e=this;this.$el.hasClass("scrolling")||this.el.classList.add("scrolling"),null!=this.scrollingTimeout&&window.clearTimeout(this.scrollingTimeout),this.scrollingTimeout=window.setTimeout(function(){e.$el.removeClass("scrolling")},this.options.duration);var i,n,s,o,a=void 0,r=void 0,l=void 0,h=void 0,d=void 0,u=void 0,c=this.center,p=1/this.options.numVisible;if(this.offset="number"==typeof t?t:this.offset,this.center=Math.floor((this.offset+this.dim/2)/this.dim),o=-(s=(n=this.offset-this.center*this.dim)<0?1:-1)*n*2/this.dim,i=this.count>>1,this.options.fullWidth?(l="translateX(0)",u=1):(l="translateX("+(this.el.clientWidth-this.itemWidth)/2+"px) ",l+="translateY("+(this.el.clientHeight-this.itemHeight)/2+"px)",u=1-p*o),this.showIndicators){var v=this.center%this.count,f=this.$indicators.find(".indicator-item.active");f.index()!==v&&(f.removeClass("active"),this.$indicators.find(".indicator-item").eq(v)[0].classList.add("active"))}if(!this.noWrap||0<=this.center&&this.center<this.count){r=this.images[this._wrap(this.center)],b(r).hasClass("active")||(this.$el.find(".carousel-item").removeClass("active"),r.classList.add("active"));var m=l+" translateX("+-n/2+"px) translateX("+s*this.options.shift*o*a+"px) translateZ("+this.options.dist*o+"px)";this._updateItemStyle(r,u,0,m)}for(a=1;a<=i;++a){if(this.options.fullWidth?(h=this.options.dist,d=a===i&&n<0?1-o:1):(h=this.options.dist*(2*a+o*s),d=1-p*(2*a+o*s)),!this.noWrap||this.center+a<this.count){r=this.images[this._wrap(this.center+a)];var g=l+" translateX("+(this.options.shift+(this.dim*a-n)/2)+"px) translateZ("+h+"px)";this._updateItemStyle(r,d,-a,g)}if(this.options.fullWidth?(h=this.options.dist,d=a===i&&0<n?1-o:1):(h=this.options.dist*(2*a-o*s),d=1-p*(2*a-o*s)),!this.noWrap||0<=this.center-a){r=this.images[this._wrap(this.center-a)];var _=l+" translateX("+(-this.options.shift+(-this.dim*a-n)/2)+"px) translateZ("+h+"px)";this._updateItemStyle(r,d,-a,_)}}if(!this.noWrap||0<=this.center&&this.center<this.count){r=this.images[this._wrap(this.center)];var y=l+" translateX("+-n/2+"px) translateX("+s*this.options.shift*o+"px) translateZ("+this.options.dist*o+"px)";this._updateItemStyle(r,u,0,y)}var k=this.$el.find(".carousel-item").eq(this._wrap(this.center));c!==this.center&&"function"==typeof this.options.onCycleTo&&this.options.onCycleTo.call(this,k[0],this.dragged),"function"==typeof this.oneTimeCallback&&(this.oneTimeCallback.call(this,k[0],this.dragged),this.oneTimeCallback=null)}},{key:"_updateItemStyle",value:function(t,e,i,n){t.style[this.xform]=n,t.style.zIndex=i,t.style.opacity=e,t.style.visibility="visible"}},{key:"_cycleTo",value:function(t,e){var i=this.center%this.count-t;this.noWrap||(i<0?Math.abs(i+this.count)<Math.abs(i)&&(i+=this.count):0<i&&Math.abs(i-this.count)<i&&(i-=this.count)),this.target=this.dim*Math.round(this.offset/this.dim),i<0?this.target+=this.dim*Math.abs(i):0<i&&(this.target-=this.dim*i),"function"==typeof e&&(this.oneTimeCallback=e),this.offset!==this.target&&(this.amplitude=this.target-this.offset,this.timestamp=Date.now(),requestAnimationFrame(this._autoScrollBound))}},{key:"next",value:function(t){(void 0===t||isNaN(t))&&(t=1);var e=this.center+t;if(e>=this.count||e<0){if(this.noWrap)return;e=this._wrap(e)}this._cycleTo(e)}},{key:"prev",value:function(t){(void 0===t||isNaN(t))&&(t=1);var e=this.center-t;if(e>=this.count||e<0){if(this.noWrap)return;e=this._wrap(e)}this._cycleTo(e)}},{key:"set",value:function(t,e){if((void 0===t||isNaN(t))&&(t=0),t>this.count||t<0){if(this.noWrap)return;t=this._wrap(t)}this._cycleTo(t,e)}}],[{key:"init",value:function(t,e){return _get(i.__proto__||Object.getPrototypeOf(i),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Carousel}},{key:"defaults",get:function(){return e}}]),i}();M.Carousel=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"carousel","M_Carousel")}(cash),function(S){"use strict";var e={onOpen:void 0,onClose:void 0},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_TapTarget=i).options=S.extend({},n.defaults,e),i.isOpen=!1,i.$origin=S("#"+i.$el.attr("data-target")),i._setup(),i._calculatePositioning(),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this.el.TapTarget=void 0}},{key:"_setupEventHandlers",value:function(){this._handleDocumentClickBound=this._handleDocumentClick.bind(this),this._handleTargetClickBound=this._handleTargetClick.bind(this),this._handleOriginClickBound=this._handleOriginClick.bind(this),this.el.addEventListener("click",this._handleTargetClickBound),this.originEl.addEventListener("click",this._handleOriginClickBound);var t=M.throttle(this._handleResize,200);this._handleThrottledResizeBound=t.bind(this),window.addEventListener("resize",this._handleThrottledResizeBound)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("click",this._handleTargetClickBound),this.originEl.removeEventListener("click",this._handleOriginClickBound),window.removeEventListener("resize",this._handleThrottledResizeBound)}},{key:"_handleTargetClick",value:function(t){this.open()}},{key:"_handleOriginClick",value:function(t){this.close()}},{key:"_handleResize",value:function(t){this._calculatePositioning()}},{key:"_handleDocumentClick",value:function(t){S(t.target).closest(".tap-target-wrapper").length||(this.close(),t.preventDefault(),t.stopPropagation())}},{key:"_setup",value:function(){this.wrapper=this.$el.parent()[0],this.waveEl=S(this.wrapper).find(".tap-target-wave")[0],this.originEl=S(this.wrapper).find(".tap-target-origin")[0],this.contentEl=this.$el.find(".tap-target-content")[0],S(this.wrapper).hasClass(".tap-target-wrapper")||(this.wrapper=document.createElement("div"),this.wrapper.classList.add("tap-target-wrapper"),this.$el.before(S(this.wrapper)),this.wrapper.append(this.el)),this.contentEl||(this.contentEl=document.createElement("div"),this.contentEl.classList.add("tap-target-content"),this.$el.append(this.contentEl)),this.waveEl||(this.waveEl=document.createElement("div"),this.waveEl.classList.add("tap-target-wave"),this.originEl||(this.originEl=this.$origin.clone(!0,!0),this.originEl.addClass("tap-target-origin"),this.originEl.removeAttr("id"),this.originEl.removeAttr("style"),this.originEl=this.originEl[0],this.waveEl.append(this.originEl)),this.wrapper.append(this.waveEl))}},{key:"_calculatePositioning",value:function(){var t="fixed"===this.$origin.css("position");if(!t)for(var e=this.$origin.parents(),i=0;i<e.length&&!(t="fixed"==S(e[i]).css("position"));i++);var n=this.$origin.outerWidth(),s=this.$origin.outerHeight(),o=t?this.$origin.offset().top-M.getDocumentScrollTop():this.$origin.offset().top,a=t?this.$origin.offset().left-M.getDocumentScrollLeft():this.$origin.offset().left,r=window.innerWidth,l=window.innerHeight,h=r/2,d=l/2,u=a<=h,c=h<a,p=o<=d,v=d<o,f=.25*r<=a&&a<=.75*r,m=this.$el.outerWidth(),g=this.$el.outerHeight(),_=o+s/2-g/2,y=a+n/2-m/2,k=t?"fixed":"absolute",b=f?m:m/2+n,w=g/2,C=p?g/2:0,E=u&&!f?m/2-n:0,O=n,x=v?"bottom":"top",L=2*n,T=L,$=g/2-T/2,B=m/2-L/2,D={};D.top=p?_+"px":"",D.right=c?r-y-m+"px":"",D.bottom=v?l-_-g+"px":"",D.left=u?y+"px":"",D.position=k,S(this.wrapper).css(D),S(this.contentEl).css({width:b+"px",height:w+"px",top:C+"px",right:"0px",bottom:"0px",left:E+"px",padding:O+"px",verticalAlign:x}),S(this.waveEl).css({top:$+"px",left:B+"px",width:L+"px",height:T+"px"})}},{key:"open",value:function(){this.isOpen||("function"==typeof this.options.onOpen&&this.options.onOpen.call(this,this.$origin[0]),this.isOpen=!0,this.wrapper.classList.add("open"),document.body.addEventListener("click",this._handleDocumentClickBound,!0),document.body.addEventListener("touchend",this._handleDocumentClickBound))}},{key:"close",value:function(){this.isOpen&&("function"==typeof this.options.onClose&&this.options.onClose.call(this,this.$origin[0]),this.isOpen=!1,this.wrapper.classList.remove("open"),document.body.removeEventListener("click",this._handleDocumentClickBound,!0),document.body.removeEventListener("touchend",this._handleDocumentClickBound))}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_TapTarget}},{key:"defaults",get:function(){return e}}]),n}();M.TapTarget=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"tapTarget","M_TapTarget")}(cash),function(d){"use strict";var e={classes:"",dropdownOptions:{}},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return i.$el.hasClass("browser-default")?_possibleConstructorReturn(i):((i.el.M_FormSelect=i).options=d.extend({},n.defaults,e),i.isMultiple=i.$el.prop("multiple"),i.el.tabIndex=-1,i._keysSelected={},i._valueDict={},i._setupDropdown(),i._setupEventHandlers(),i)}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this._removeDropdown(),this.el.M_FormSelect=void 0}},{key:"_setupEventHandlers",value:function(){var e=this;this._handleSelectChangeBound=this._handleSelectChange.bind(this),this._handleOptionClickBound=this._handleOptionClick.bind(this),this._handleInputClickBound=this._handleInputClick.bind(this),d(this.dropdownOptions).find("li:not(.optgroup)").each(function(t){t.addEventListener("click",e._handleOptionClickBound)}),this.el.addEventListener("change",this._handleSelectChangeBound),this.input.addEventListener("click",this._handleInputClickBound)}},{key:"_removeEventHandlers",value:function(){var e=this;d(this.dropdownOptions).find("li:not(.optgroup)").each(function(t){t.removeEventListener("click",e._handleOptionClickBound)}),this.el.removeEventListener("change",this._handleSelectChangeBound),this.input.removeEventListener("click",this._handleInputClickBound)}},{key:"_handleSelectChange",value:function(t){this._setValueToInput()}},{key:"_handleOptionClick",value:function(t){t.preventDefault();var e=d(t.target).closest("li")[0],i=e.id;if(!d(e).hasClass("disabled")&&!d(e).hasClass("optgroup")&&i.length){var n=!0;if(this.isMultiple){var s=d(this.dropdownOptions).find("li.disabled.selected");s.length&&(s.removeClass("selected"),s.find('input[type="checkbox"]').prop("checked",!1),this._toggleEntryFromArray(s[0].id)),n=this._toggleEntryFromArray(i)}else d(this.dropdownOptions).find("li").removeClass("selected"),d(e).toggleClass("selected",n);d(this._valueDict[i].el).prop("selected")!==n&&(d(this._valueDict[i].el).prop("selected",n),this.$el.trigger("change"))}t.stopPropagation()}},{key:"_handleInputClick",value:function(){this.dropdown&&this.dropdown.isOpen&&(this._setValueToInput(),this._setSelectedStates())}},{key:"_setupDropdown",value:function(){var n=this;this.wrapper=document.createElement("div"),d(this.wrapper).addClass("select-wrapper "+this.options.classes),this.$el.before(d(this.wrapper)),this.wrapper.appendChild(this.el),this.el.disabled&&this.wrapper.classList.add("disabled"),this.$selectOptions=this.$el.children("option, optgroup"),this.dropdownOptions=document.createElement("ul"),this.dropdownOptions.id="select-options-"+M.guid(),d(this.dropdownOptions).addClass("dropdown-content select-dropdown "+(this.isMultiple?"multiple-select-dropdown":"")),this.$selectOptions.length&&this.$selectOptions.each(function(t){if(d(t).is("option")){var e=void 0;e=n.isMultiple?n._appendOptionWithIcon(n.$el,t,"multiple"):n._appendOptionWithIcon(n.$el,t),n._addOptionToValueDict(t,e)}else if(d(t).is("optgroup")){var i=d(t).children("option");d(n.dropdownOptions).append(d('<li class="optgroup"><span>'+t.getAttribute("label")+"</span></li>")[0]),i.each(function(t){var e=n._appendOptionWithIcon(n.$el,t,"optgroup-option");n._addOptionToValueDict(t,e)})}}),this.$el.after(this.dropdownOptions),this.input=document.createElement("input"),d(this.input).addClass("select-dropdown dropdown-trigger"),this.input.setAttribute("type","text"),this.input.setAttribute("readonly","true"),this.input.setAttribute("data-target",this.dropdownOptions.id),this.el.disabled&&d(this.input).prop("disabled","true"),this.$el.before(this.input),this._setValueToInput();var t=d('<svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');if(this.$el.before(t[0]),!this.el.disabled){var e=d.extend({},this.options.dropdownOptions);e.onOpenEnd=function(t){var e=d(n.dropdownOptions).find(".selected").first();if(e.length&&(M.keyDown=!0,n.dropdown.focusedIndex=e.index(),n.dropdown._focusFocusedItem(),M.keyDown=!1,n.dropdown.isScrollable)){var i=e[0].getBoundingClientRect().top-n.dropdownOptions.getBoundingClientRect().top;i-=n.dropdownOptions.clientHeight/2,n.dropdownOptions.scrollTop=i}},this.isMultiple&&(e.closeOnClick=!1),this.dropdown=M.Dropdown.init(this.input,e)}this._setSelectedStates()}},{key:"_addOptionToValueDict",value:function(t,e){var i=Object.keys(this._valueDict).length,n=this.dropdownOptions.id+i,s={};e.id=n,s.el=t,s.optionEl=e,this._valueDict[n]=s}},{key:"_removeDropdown",value:function(){d(this.wrapper).find(".caret").remove(),d(this.input).remove(),d(this.dropdownOptions).remove(),d(this.wrapper).before(this.$el),d(this.wrapper).remove()}},{key:"_appendOptionWithIcon",value:function(t,e,i){var n=e.disabled?"disabled ":"",s="optgroup-option"===i?"optgroup-option ":"",o=this.isMultiple?'<label><input type="checkbox"'+n+'"/><span>'+e.innerHTML+"</span></label>":e.innerHTML,a=d("<li></li>"),r=d("<span></span>");r.html(o),a.addClass(n+" "+s),a.append(r);var l=e.getAttribute("data-icon");if(l){var h=d('<img alt="" src="'+l+'">');a.prepend(h)}return d(this.dropdownOptions).append(a[0]),a[0]}},{key:"_toggleEntryFromArray",value:function(t){var e=!this._keysSelected.hasOwnProperty(t),i=d(this._valueDict[t].optionEl);return e?this._keysSelected[t]=!0:delete this._keysSelected[t],i.toggleClass("selected",e),i.find('input[type="checkbox"]').prop("checked",e),i.prop("selected",e),e}},{key:"_setValueToInput",value:function(){var i=[];if(this.$el.find("option").each(function(t){if(d(t).prop("selected")){var e=d(t).text();i.push(e)}}),!i.length){var t=this.$el.find("option:disabled").eq(0);t.length&&""===t[0].value&&i.push(t.text())}this.input.value=i.join(", ")}},{key:"_setSelectedStates",value:function(){for(var t in this._keysSelected={},this._valueDict){var e=this._valueDict[t],i=d(e.el).prop("selected");d(e.optionEl).find('input[type="checkbox"]').prop("checked",i),i?(this._activateOption(d(this.dropdownOptions),d(e.optionEl)),this._keysSelected[t]=!0):d(e.optionEl).removeClass("selected")}}},{key:"_activateOption",value:function(t,e){e&&(this.isMultiple||t.find("li.selected").removeClass("selected"),d(e).addClass("selected"))}},{key:"getSelectedValues",value:function(){var t=[];for(var e in this._keysSelected)t.push(this._valueDict[e].el.value);return t}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_FormSelect}},{key:"defaults",get:function(){return e}}]),n}();M.FormSelect=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"formSelect","M_FormSelect")}(cash),function(s,e){"use strict";var i={},t=function(t){function n(t,e){_classCallCheck(this,n);var i=_possibleConstructorReturn(this,(n.__proto__||Object.getPrototypeOf(n)).call(this,n,t,e));return(i.el.M_Range=i).options=s.extend({},n.defaults,e),i._mousedown=!1,i._setupThumb(),i._setupEventHandlers(),i}return _inherits(n,Component),_createClass(n,[{key:"destroy",value:function(){this._removeEventHandlers(),this._removeThumb(),this.el.M_Range=void 0}},{key:"_setupEventHandlers",value:function(){this._handleRangeChangeBound=this._handleRangeChange.bind(this),this._handleRangeMousedownTouchstartBound=this._handleRangeMousedownTouchstart.bind(this),this._handleRangeInputMousemoveTouchmoveBound=this._handleRangeInputMousemoveTouchmove.bind(this),this._handleRangeMouseupTouchendBound=this._handleRangeMouseupTouchend.bind(this),this._handleRangeBlurMouseoutTouchleaveBound=this._handleRangeBlurMouseoutTouchleave.bind(this),this.el.addEventListener("change",this._handleRangeChangeBound),this.el.addEventListener("mousedown",this._handleRangeMousedownTouchstartBound),this.el.addEventListener("touchstart",this._handleRangeMousedownTouchstartBound),this.el.addEventListener("input",this._handleRangeInputMousemoveTouchmoveBound),this.el.addEventListener("mousemove",this._handleRangeInputMousemoveTouchmoveBound),this.el.addEventListener("touchmove",this._handleRangeInputMousemoveTouchmoveBound),this.el.addEventListener("mouseup",this._handleRangeMouseupTouchendBound),this.el.addEventListener("touchend",this._handleRangeMouseupTouchendBound),this.el.addEventListener("blur",this._handleRangeBlurMouseoutTouchleaveBound),this.el.addEventListener("mouseout",this._handleRangeBlurMouseoutTouchleaveBound),this.el.addEventListener("touchleave",this._handleRangeBlurMouseoutTouchleaveBound)}},{key:"_removeEventHandlers",value:function(){this.el.removeEventListener("change",this._handleRangeChangeBound),this.el.removeEventListener("mousedown",this._handleRangeMousedownTouchstartBound),this.el.removeEventListener("touchstart",this._handleRangeMousedownTouchstartBound),this.el.removeEventListener("input",this._handleRangeInputMousemoveTouchmoveBound),this.el.removeEventListener("mousemove",this._handleRangeInputMousemoveTouchmoveBound),this.el.removeEventListener("touchmove",this._handleRangeInputMousemoveTouchmoveBound),this.el.removeEventListener("mouseup",this._handleRangeMouseupTouchendBound),this.el.removeEventListener("touchend",this._handleRangeMouseupTouchendBound),this.el.removeEventListener("blur",this._handleRangeBlurMouseoutTouchleaveBound),this.el.removeEventListener("mouseout",this._handleRangeBlurMouseoutTouchleaveBound),this.el.removeEventListener("touchleave",this._handleRangeBlurMouseoutTouchleaveBound)}},{key:"_handleRangeChange",value:function(){s(this.value).html(this.$el.val()),s(this.thumb).hasClass("active")||this._showRangeBubble();var t=this._calcRangeOffset();s(this.thumb).addClass("active").css("left",t+"px")}},{key:"_handleRangeMousedownTouchstart",value:function(t){if(s(this.value).html(this.$el.val()),this._mousedown=!0,this.$el.addClass("active"),s(this.thumb).hasClass("active")||this._showRangeBubble(),"input"!==t.type){var e=this._calcRangeOffset();s(this.thumb).addClass("active").css("left",e+"px")}}},{key:"_handleRangeInputMousemoveTouchmove",value:function(){if(this._mousedown){s(this.thumb).hasClass("active")||this._showRangeBubble();var t=this._calcRangeOffset();s(this.thumb).addClass("active").css("left",t+"px"),s(this.value).html(this.$el.val())}}},{key:"_handleRangeMouseupTouchend",value:function(){this._mousedown=!1,this.$el.removeClass("active")}},{key:"_handleRangeBlurMouseoutTouchleave",value:function(){if(!this._mousedown){var t=7+parseInt(this.$el.css("padding-left"))+"px";s(this.thumb).hasClass("active")&&(e.remove(this.thumb),e({targets:this.thumb,height:0,width:0,top:10,easing:"easeOutQuad",marginLeft:t,duration:100})),s(this.thumb).removeClass("active")}}},{key:"_setupThumb",value:function(){this.thumb=document.createElement("span"),this.value=document.createElement("span"),s(this.thumb).addClass("thumb"),s(this.value).addClass("value"),s(this.thumb).append(this.value),this.$el.after(this.thumb)}},{key:"_removeThumb",value:function(){s(this.thumb).remove()}},{key:"_showRangeBubble",value:function(){var t=-7+parseInt(s(this.thumb).parent().css("padding-left"))+"px";e.remove(this.thumb),e({targets:this.thumb,height:30,width:30,top:-30,marginLeft:t,duration:300,easing:"easeOutQuint"})}},{key:"_calcRangeOffset",value:function(){var t=this.$el.width()-15,e=parseFloat(this.$el.attr("max"))||100,i=parseFloat(this.$el.attr("min"))||0;return(parseFloat(this.$el.val())-i)/(e-i)*t}}],[{key:"init",value:function(t,e){return _get(n.__proto__||Object.getPrototypeOf(n),"init",this).call(this,this,t,e)}},{key:"getInstance",value:function(t){return(t.jquery?t[0]:t).M_Range}},{key:"defaults",get:function(){return i}}]),n}();M.Range=t,M.jQueryLoaded&&M.initializeJqueryWrapper(t,"range","M_Range"),t.init(s("input[type=range]"))}(cash,M.anime);

$(document).on("mousedown", function (e1) {
    if (e1.which === 2) {
        $(document).one("mouseup", function (e2) {
            if (e1.target === e2.target) {
                var e3 = $.event.fix(e2);
                e3.type = "middleclick";
                $(e2.target).trigger(e3);
            }
        });
    }
});
var bg_main_c = '';

function startTabs() {
    $('a[tab-name], a[tab-name] > span').on('click', function (e) {
        var el = $(this).closest('a[tab-name]');
        var url = el.attr('href');
        var tabName = el.attr('tab-name');
        var tabTitle = el.attr('tab-title');
        var tabHint = el.attr('title');
        var tabTarget = el.attr('target');
        var tabIcon = (el.find('i.mb_icon')[0]) ? el.find('i.mb_icon')[0].outerHTML : '';
        if (tabTarget == 'nm_frame_app') {
            e.preventDefault();
            e.stopPropagation();

            openInTab(url, tabName, tabTitle, tabHint, tabIcon, tabTarget);
        }
    });

    $('.tabs').tabs({
        swipeable: false
    });
    $('.nm_frame_app').remove();

    $(document).on('middleclick', "#contrl_abas li", function (ev) {
        ev.preventDefault();
        $(this).find('i.close_icon').click();
    })

    $('ul.context-menu-list.context-menu-root').attr('data-aetheme', $('[data-aetheme]').attr('data-aetheme'));
    // $('#id_links_abas').remove();
    // $('#idMenuDown').remove();
    bg_main_c = getComputedStyle(document.body).backgroundColor;
}


function scrollTabs(where) {
    var pos = $('.tabs').scrollLeft();
    var step = 300;

    if (where == 'right') {
        pos = pos + step;
    } else {
        pos = pos - step;
    }
    if (pos < 0) {
        pos = 0;
    }
    $('.tabs').stop().animate({
        scrollLeft: pos
    },'fast');
}
function activateTabOwner(e) {
    var vert = document.querySelector('.ae-menubar.menubar').getAttribute('aria-orientation') == 'vertical';
    var activeTab =  $('[tab-name="' + e.id + '"]');
    $('[role="menuitem"]').attr('data-active', 'false');
    activeTab.attr('data-active', 'true');
    if (vert) {
        activeTab.parents('.wrapper').find(' > [role="menuitem"]').attr('data-active', 'true');
    } else {
        activeTab.parents('[role="menuitem"]').attr('data-active', 'true');
    }
}
function checkTabs() {
    var tabs = $('.tabs > .tab:not(.stump-tab)');
    if (tabs.length > 0) {
        $('.ae-menubar.toolbar').addClass('connected');
    } else {
        $('.ae-menubar.toolbar').removeClass('connected');
    }
    if ($('#contrl_abas')[0]) {
        $('.nav-content').removeClass('scrolling');
        if ($('#contrl_abas')[0].scrollWidth - $('#contrl_abas')[0].clientWidth != 0) {
            $('.nav-content').addClass('scrolling');
        }
    }
}

function createCustomTab(str_id, str_label, str_hint, str_link, tp_apl, fa_ico) {
    console.log(fa_ico);
    console.log(fa_ico);
    try {
        if (!fa_ico || (fa_ico + '').trim() == '') {
            fa_ico = false;
        }
    } catch (e) {
        fa_ico = false;
    }
    var ico = '<i class="fa-brands fa-wpforms"></i>';
    if ( !fa_ico ) {
        var apps_icons = {
            grid: '<i class="fa-solid fa-table"></i>',
            search: '<i class="fa-brands fa-wpforms"></i>',
            controle: '<i class="fa-brands fa-wpforms"></i>',
            form: '<i class="fa-brands fa-wpforms"></i>',
            chart: '<i class="fa-solid fa-chart-pie"></i>',
            calendar: '<i class="fa-solid fa-calendar-days"></i>'
        }
        if (apps_icons[tp_apl]) {
            ico = apps_icons[tp_apl];
        }
    } else {
        ico = '<i class="' + fa_ico + '"></i>';
    }


    openInTab(str_link, str_id, str_label, str_hint, ico, 'nm_app_frame', false);
}

function openInTab(url, tabName, tabTitle, tabHint, tabIcon, tabTarget, unclosable) {
    var loadClass = '';
    if (typeof use_load != 'undefined' && use_load) {
        loadClass = 'loading';
    }
    var tabReload = true;
    if (typeof should_reload != 'undefined' && should_reload) {
        tabReload = false;
    }
    if (typeof event != 'undefined') {
        event.stopPropagation();
        event.preventDefault();
    }
    if (url == '#') {
        console.log(tabTarget)
        if (tabTarget == '_self') {
            window.close();
        }
        return false;
    }

    var tab_exists = false;


    if (!$('#' + tabName)[0]) {
        var closeIcon = (unclosable) ? '' : ' <i class=\'fas fa-xmark close_icon\' style="font-size: 0.875"></i> ';
        var tabLabel = (tabTitle == '') ? '' :' <span>' + tabTitle + '</span> ';
        var tabHint = (tabHint == '' || typeof tabHint == 'undefined') ? '' :' title="' + tabHint + '" ';
        var frameOnload = ' onload="bodyColorUpdate(this.parentNode); $(this).removeClass(\'loading\');"';
        var frameOnerror = ' onerror=" $(this).removeClass(\'loading\'); $(this).addClass(\'error\');"';
        var tab = $('<li class=\'tab\' ' + tabHint + ' id=\'id_tab_' + tabName + '\'><a href=\'#' + tabName + '\'   >' + tabIcon  + tabLabel + closeIcon + '  </a></li>');
        var app = $('<div id="' + tabName + '"><iframe '+ frameOnload + frameOnerror +' class="' + loadClass + '" name="' + tabName + '" src="' + url + '" frameborder="0"></iframe><div class="loader-placeholder"><div class="lds-dual-ring"></div></div></div>');

        tab.find('i.close_icon').on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();

            if ($('#' + tabName).is('.active')) {
                var tabs = M.Tabs.getInstance($('.tabs')[0]);
                var sibiling = $('#' + tabName).prev(':not(.stump-tab)');
                if (sibiling.length > 0 && sibiling.attr('id')) {
                    sibiling = sibiling.attr('id').replaceAll('#', '');
                    tabs.select(sibiling);
                } else {
                    sibiling = $('#' + tabName).next(':not(.stump-tab)');
                    if (sibiling.length > 0 && sibiling.attr('id')) {
                        sibiling = sibiling.attr('id').replaceAll('#', '');
                        tabs.select(sibiling);
                    }
                    $('[role="menuitem"]').attr('data-active', 'false');
                }
            }

            tab.remove();
            app.remove();
            checkTabs();

            // $('.tabs').tabs({
            //     swipeable: false
            // });
        });

        $('#app-frames').append(app);
        $('#contrl_abas').append(tab);
        setTimeout(function() {
            $('#' + tabName + ' iframe').removeClass('loading');
        }, 10000);
        $('.tabs').animate({
            scrollLeft: $('.tabs').outerWidth()
        },'slow');
    } else {
        tab_exists = true;
    }

    $('.tabs').tabs({
        swipeable: false,
        onShow: function (e) {
            if (typeof openTabBreadCrumb == 'function') {
                openTabBreadCrumb(e);
            }
            $('body').removeAttr("style");
            activateTabOwner(e);
            if (!$(e).find('iframe').hasClass('loading')) {
                bodyColorUpdate(e);
            }
        }
    });
    var tabs = M.Tabs.getInstance($('.tabs')[0]);
    if (tab_exists) {
        if (tabReload) {
            $('#' + tabName + ' iframe').attr( 'src', function ( i, val ) { return val; });
        }
    }
    tabs.select(tabName);
    $('.menu-plate').removeClass('open');
    $('.menu-plate input').prop( "checked", false);
    checkTabs();
    // var toolbarHeight = ($('.ae-menubar.toolbar').length > 0) ? $('.ae-menubar.toolbar').outerHeight() : 0;
    // var clearanceHeight = $('.tabs').closest('section').outerHeight() + toolbarHeight + 20;
    // console.log(clearanceHeight)
    // $('body').css({
    //     'padding-top': clearanceHeight,
    //     'height': 'calc( 100vh - ' + clearanceHeight + 'px )',
    // });
    // $('.frame-container').css({
    //     'height': 'calc( 100vh - ' + clearanceHeight + 'px )',
    // });
}

function openInTab_sv(url, tabName, tabTitle) {
    if (!$('#' + tabName)[0]) {
        var tab = $('<li class=\'tab\'><a href=\'#' + tabName + '\' >' + tabTitle + ' <i class=\'fas fa-times-circle close_icon\'></i> </a></li>');
        var app = $('<div id="' + tabName + '"><iframe name="' + tabName + '" src="' + url + '" frameborder="0"></iframe></div>');

        tab.find('i').on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();

            if ($('#' + tabName).is('.active')) {
                var tabs = M.Tabs.getInstance($('.tabs')[0]);
                var sibiling = $('#' + tabName).prev(':not(.stump-tab)').attr('id');
                if (sibiling.length > 0) {
                    sibiling = sibiling.replaceAll('#', '');
                    tabs.select(sibiling);
                }
            }

            tab.remove();
            app.remove();

            $('.tabs').tabs({
                swipeable: false
            });
        });

        $('#app-frames').append(app);
        $('#contrl_abas').append(tab);
    }

    $('.tabs').tabs({
        swipeable: false
    });
    var tabs = M.Tabs.getInstance($('.tabs')[0]);
    tabs.select(tabName);
    sidemenu.close();
}
function contextMenuCloseAllTabs()
{
    $( "#contrl_abas li" ).each(function( index ) {
        contextMenuCloseTab($( this ).attr('id'));
    });
}

function contextMenuCloseTab(str_id)
{
    $('#' + str_id).find('i.close_icon').click();
}

function contextMenuCloseRight(str_id)
{
    bol_start_del = false;
    $( "#contrl_abas li" ).each(function( index ) {

        if(bol_start_del)
        {
            contextMenuCloseTab($( this ).attr('id'));
        }

        if(str_id == $( this ).attr('id'))
        {
            bol_start_del = true;
        }
    });
}


function contextMenuCloseLeft(str_id)
{
    $( "#contrl_abas li" ).each(function( index ) {

        if(str_id == $( this ).attr('id'))
        {
            return false;
        }
        else
        {
            contextMenuCloseTab($( this ).attr('id'));
        }
    });
}

function contextMenuCloseOthersTabs(str_id)
{
    $( "#contrl_abas li" ).each(function( index ) {
        if(str_id != $( this ).attr('id'))
        {
            contextMenuCloseTab($( this ).attr('id'));
        }
    });
} </script> 
      </section>
      
      <div class="frame-container" id="app-frames" data-aetheme="dark-pink">
        
          <div class="loader-placeholder"><div class="lds-dual-ring"></div></div>
      </div>
    </div>
  </main>
    <script>
        var items_data = [{"label":"Home","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_1&sc_apl_menu=blank_menus_910&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"fas fa-home","link_target":"self","fav_check":"N","icon_check":"S","id":"item_1","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":[]},{"label":"Ecommerce","link":"#","hint":"","icon_fa":"fas fa-shopping-cart","link_target":"self","fav_check":"N","icon_check":"S","id":"item_2","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":{"item_10":{"label":"Products","link":"#","hint":"","icon_fa":"fas fa-boxes","link_target":"self","fav_check":"N","icon_check":"S","id":"item_10","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2"],"itens":{"item_13":{"label":"Products List","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_13&sc_apl_menu=grid_action_bar_btn_v99&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"far fa-list-alt","link_target":"self","fav_check":"S","icon_check":"S","id":"item_13","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2","item_10"],"itens":[]},"item_14":{"label":"Add Products","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_14&sc_apl_menu=grid_action_bar_btn_v99&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"far fa-plus-square","link_target":"self","fav_check":"S","icon_check":"S","id":"item_14","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2","item_10"],"itens":[]}}},"item_11":{"label":"Orders","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_11&sc_apl_menu=grid_fixed_toolbar_v99&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"fas fa-cart-plus","link_target":"self","fav_check":"N","icon_check":"S","id":"item_11","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2"],"itens":[]},"item_12":{"label":"Customers","link":"#","hint":"","icon_fa":"fas fa-users","link_target":"self","fav_check":"N","icon_check":"S","id":"item_12","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2"],"itens":{"item_15":{"label":"Customers List","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_15&sc_apl_menu=grid39&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"far fa-list-alt","link_target":"self","fav_check":"S","icon_check":"S","id":"item_15","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2","item_12"],"itens":[]},"item_16":{"label":"Add Customers","link":"vertical_menu_v910_form_php.php?sc_item_menu=item_16&sc_apl_menu=sample_block_expand_and_collapse&sc_apl_link=%2Fsistemas%2Fv9%2Fexemplos%2F&sc_usa_grupo=","hint":"","icon_fa":"far fa-plus-square","link_target":"self","fav_check":"S","icon_check":"S","id":"item_16","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_2","item_12"],"itens":[]}}}}},{"label":"Academy","link":"#","hint":"","icon_fa":"fas fa-graduation-cap","link_target":"self","fav_check":"N","icon_check":"S","id":"item_3","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":{"item_21":{"label":"Dashboard","link":"#","hint":"","icon_fa":"fas fa-chart-line","link_target":"self","fav_check":"N","icon_check":"S","id":"item_21","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_3"],"itens":[]},"item_22":{"label":"My Courses","link":"#","hint":"","icon_fa":"fas fa-chalkboard-teacher","link_target":"self","fav_check":"N","icon_check":"S","id":"item_22","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_3"],"itens":[]},"item_23":{"label":"Course Details","link":"#","hint":"","icon_fa":"fas fa-asterisk","link_target":"self","fav_check":"S","icon_check":"S","id":"item_23","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_3"],"itens":[]}}},{"label":"Email","link":"#","hint":"","icon_fa":"far fa-envelope","link_target":"self","fav_check":"N","icon_check":"S","id":"item_5","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":{"item_24":{"label":"Inbox","link":"#","hint":"","icon_fa":"fas fa-inbox","link_target":"self","fav_check":"N","icon_check":"S","id":"item_24","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_5"],"itens":[]},"item_25":{"label":"Send Campaign","link":"#","hint":"","icon_fa":"far fa-paper-plane","link_target":"self","fav_check":"S","icon_check":"S","id":"item_25","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_5"],"itens":[]}}},{"label":"Chat","link":"#","hint":"","icon_fa":"far fa-comment-alt","link_target":"self","fav_check":"N","icon_check":"S","id":"item_6","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":[]},{"label":"Invoice","link":"#","hint":"","icon_fa":"far fa-file-alt","link_target":"self","fav_check":"N","icon_check":"S","id":"item_7","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":{"item_17":{"label":"List","link":"#","hint":"","icon_fa":"far fa-list-alt","link_target":"self","fav_check":"N","icon_check":"S","id":"item_17","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_7"],"itens":[]},"item_18":{"label":"Preview","link":"#","hint":"","icon_fa":"far fa-file-pdf","link_target":"self","fav_check":"N","icon_check":"S","id":"item_18","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_7"],"itens":[]},"item_19":{"label":"Edit","link":"#","hint":"","icon_fa":"far fa-edit","link_target":"self","fav_check":"N","icon_check":"S","id":"item_19","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_7"],"itens":[]},"item_20":{"label":"Add","link":"#","hint":"","icon_fa":"far fa-plus-square","link_target":"self","fav_check":"N","icon_check":"S","id":"item_20","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_7"],"itens":[]}}},{"label":"Users","link":"#","hint":"","icon_fa":"far fa-user","link_target":"self","fav_check":"N","icon_check":"S","id":"item_8","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":[]},{"label":"Roles & Permissions","link":"#","hint":"","icon_fa":"fas fa-cog","link_target":"self","fav_check":"N","icon_check":"S","id":"item_9","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":[],"itens":{"item_26":{"label":"Roles","link":"#","hint":"","icon_fa":"fas fa-briefcase","link_target":"self","fav_check":"N","icon_check":"S","id":"item_26","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_9"],"itens":[]},"item_27":{"label":"Permissions","link":"#","hint":"","icon_fa":"fas fa-cog","link_target":"self","fav_check":"N","icon_check":"S","id":"item_27","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":["item_9"],"itens":[]}}}];
        var user_menu_data = [{"label":"Profile","link":"#","hint":"","icon_fa":"far fa-user-circle","link_target":"self","fav_check":"N","icon_check":"S","id":"item_user_1","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":false,"itens":[]},{"label":"Settings","link":"#","hint":"","icon_fa":"fas fa-cog","link_target":"self","fav_check":"N","icon_check":"S","id":"item_user_2","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":false,"itens":[]},{"label":"FAQ","link":"#","hint":"","icon_fa":"far fa-question-circle","link_target":"self","fav_check":"N","icon_check":"S","id":"item_user_3","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":false,"itens":[]},{"label":"Logout","link":"#","hint":"","icon_fa":"fas fa-sign-out-alt","link_target":"self","fav_check":"N","icon_check":"S","id":"item_user_4","target":"vertical_menu_v910_iframe","disabled":"N","parent_list":false,"itens":[]}];
        var targets_list = {"blank":"_blank","_blank":"_blank","self":"nm_frame_app","_self":"nm_frame_app","window":"_window","parente":"_self","_parent":"_self"};
        var apl_default = '';
        var use_load = ('N' == 'S');
        var should_reload = ('' != 'S');
        var start_expanded = ('' == 'S');
    </script>
    <script>
        
var Menubar = class {
    static #config;
    static #settings;
    static #animationShow;
    static #animationName;
    static #menubar;
    static #menubarVertical;
    static #toolbar;
    static #mainNavigation;
    static #mobileButton;
    static #mobileNavigation;
    static #actionButton;
    static #userPanel;
    static #accordion;
    static #collapseMenu;
    static #submenus;


    closePanel() {
        this.#closepanelOpened();
    }
    constructor(settings) {
        Menubar.#config = this.#configs();
        Menubar.#settings = { ...Menubar.#config.settings, ...settings };
        Menubar.#animationShow = Menubar.#settings.animation.show !== undefined ? Menubar.#settings.animation.show : Menubar.#config.settings.animation.show;
        Menubar.#animationName = Menubar.#settings.animation.name ? Menubar.#settings.animation.name : Menubar.#config.settings.animation.name;
        Menubar.#menubar = document.querySelector(Menubar.#config.selectors.menubar);
        Menubar.#menubarVertical = document.querySelector(Menubar.#config.selectors.menubarVertical);
        Menubar.#toolbar = document.querySelector(Menubar.#config.selectors.toolbar);
        Menubar.#mainNavigation = Menubar.#menubar.querySelector(Menubar.#config.selectors.mainNavigation);
        Menubar.#mobileButton = Menubar.#menubar.querySelector(Menubar.#config.selectors.mobileButton);
        Menubar.#mobileNavigation = Menubar.#menubar.querySelector(Menubar.#config.selectors.mobileNavigation);
        Menubar.#actionButton = document.querySelectorAll(Menubar.#config.selectors.actionButton);
        Menubar.#accordion = document.querySelectorAll(Menubar.#config.selectors.accordion);
        Menubar.#collapseMenu = Menubar.#menubar.querySelector(Menubar.#config.selectors.switchMenuPosition);
        Menubar.#submenus = Menubar.#menubar.querySelectorAll(Menubar.#config.selectors.submenu);

        // init
        this.#init();
    };

    /**
     * Método de configuração
     * @private
     * @returns {object} config
     */
    #configs() {
        const config = {
            selectors: {
                menubar: '.ae-menubar',
                menubarVertical: '.ae-menubar.menubar[aria-orientation="vertical"]',
                toolbar: '.ae-menubar [role="toolbar"]',
                mainNavigation: '.main-navigation',
                hasSubmenu: '[role="menuitem"][aria-haspopup="true"]',
                isActive: '[role="menuitem"][data-active="true"]',
                mobileButton: '.menu-mobile-control',
                mobileButtonIconControl: '#hamburger-icon-control',
                mobileNavigation: '.ae-menu-mobile',
                mobileNavigationOverlay: '#mobile-navigation-overlay',
                panels: '.panel',
                actionButton: '.action-button',
                userActionsMenu: '.section.actions',
                accordion: '.ae-menubar-accordion',
                switchMenuPosition: '#switch-menu-position',
                wrapperUser: '.wrapper-user',
                userButton: '.user.action-button',
                userMenu: '.user-menu',
                userInfo: '.user-info',
                userMenuContent: '.user-menu-content',
                submenu: '.submenu',
            },
            menubar: {
                loadingTime: 500
            },
            settings: {
                keepOpen: false,
                animation: {
                    show: true,
                    name: 'slide-left'
                },
                overlay: {
                    show: true,
                    bgColor: 'rgba(0,0,0,.55)'
                },
                panel: {
                    offset: 4, //pixels
                    animation: 'slide-right-top'
                }
            },
            layers: {
                layer_1: 'layer-900',
                layer_2: 'layer-800',
            },
            animation: {
                className: [
                    'slide-top-bouncy',
                    'slide-right-bouncy',
                    'slide-bottom-bouncy',
                    'slide-left-bouncy',
                    'slide-top',
                    'slide-right',
                    'slide-bottom',
                    'slide-left',
                    'reveal-opacity',
                    'reveal-blur'
                ],
                duration: 650,
            }
        }
        return config;
    }

    #init() {
        // inic. métodos
        // -----------------------------------
        if (Menubar.#menubar && Menubar.#menubar.classList.contains('menubar') && Menubar.#menubar.getAttribute('aria-orientation') === 'horizontal') {
            if (Menubar.#mainNavigation) {
                this.#responsiveObserver()
            } else if (Menubar.#mobileNavigation) {
                Menubar.#mobileButton.style.display = 'grid';
                Menubar.#mobileNavigation.style.top = `${Menubar.#menubar.getBoundingClientRect().height}px`;
                Menubar.#mobileNavigation.classList.add(Menubar.#config.layers.layer_1);
            }
        }

        if (Menubar.#menubar.getAttribute('aria-orientation') === 'horizontal') {
            this.#submenusCheckVisibilityInViewport()
        }

        if (Menubar.#mobileButton && Menubar.#mobileNavigation) {
            this.#mobileControl();

            document.addEventListener('click', () => {
                if (Menubar.#mobileButton.getAttribute('aria-pressed') === 'true') {
                    Menubar.#mobileButton.click();
                }
            });
        }

        if (Menubar.#accordion) {
            Menubar.#accordion.forEach(accordion => {
                this.#menubarAccordion(accordion);
            });
        }

        if (Menubar.#menubarVertical) {
            if (Menubar.#collapseMenu) {
                Menubar.#collapseMenu.addEventListener('click', () => {

                    if (Menubar.#collapseMenu.getAttribute('aria-checked') === 'false') {
                        Menubar.#collapseMenu.setAttribute('aria-checked', 'true');
                        Menubar.#collapseMenu.classList.remove('fa-expand');
                        Menubar.#collapseMenu.classList.add('fa-compress');
                    } else {
                        Menubar.#collapseMenu.setAttribute('aria-checked', 'false');
                        Menubar.#collapseMenu.classList.remove('fa-compress');
                        Menubar.#collapseMenu.classList.add('fa-expand');
                    }

                    if (Menubar.#menubarVertical.getAttribute('data-collapsible') === 'true') {
                        Menubar.#menubarVertical.setAttribute('data-collapsible', 'false');
                    } else {
                        Menubar.#menubarVertical.setAttribute('data-collapsible', 'true');
                    }

                    this.#collapsibleMenu();
                });
            }

            Menubar.#menubarVertical.addEventListener('mouseenter', () => {
                if (Menubar.#menubarVertical.classList.contains('collapsed')) {
                    this.#collapsibleMenu();
                }
            });
            Menubar.#menubarVertical.addEventListener('mouseleave', () => {
                if (Menubar.#menubarVertical.classList.contains('expanded')) {
                    this.#collapsibleMenu();
                }
            });

            if (Menubar.#menubarVertical.querySelector(Menubar.#config.selectors.wrapperUser)) {
                this.#userMenu();
            }
        }

        if (document.querySelectorAll(`${Menubar.#config.selectors.menubar} ${Menubar.#config.selectors.panels}`).length !== 0) {
            this.#panel();

            document.addEventListener('click', () => {
                const keepOpened = document.querySelector("[data-keep-open='true']");

                if (keepOpened.style.visibility === "hidden" || keepOpened.style.visibility === "") {
                    this.#closepanelOpened();
                }
            });
        }

        this.#close();

        // Configurações do objeto
        // -----------------------------------
        Object.preventExtensions(this);
    }

    /**
     * Controla a responsividade da barra de menu e de seus elementos
     * @private
     */
    #responsiveObserver() {
        const gridGap = window.getComputedStyle(Menubar.#menubar.firstElementChild).columnGap;
        const menubarSplit = document.querySelector('.ae-menubar.menubar.split');

        const mainNavigationControl = (visibility) => {
            if (visibility === 'show') {
                Menubar.#mobileButton.style.display = 'none';
                Menubar.#mainNavigation.style.display = 'flex';
                Menubar.#mainNavigation.classList.remove('hide');
                Menubar.#mainNavigation.removeAttribute('aria-hidden');
                Menubar.#mainNavigation.removeAttribute('aria-hidden');
            } else if (visibility === 'hide') {
                Menubar.#mobileButton.style.display = 'grid';
                Menubar.#mainNavigation.style.display = 'none';
                Menubar.#mainNavigation.classList.add('hide');
                Menubar.#mainNavigation.classList.remove('show');
                Menubar.#mainNavigation.setAttribute('aria-hidden', 'true');
            }
        }

        const responseMobile = () => {
            //oculta mainNavigation
            mainNavigationControl('hide');
        };

        setTimeout(() => {
            let menubarMinWidth = null;

            if (menubarSplit) {
                menubarMinWidth = Menubar.#mainNavigation.offsetWidth;
            } else {
                menubarMinWidth = sumElementsWidth(Array.from(Menubar.#menubar.children).splice(0, 2));
            }

            const mobileObserver = new ResizeObserver(entries => {
                entries.forEach(entry => {
                    if (entry.target.classList.contains((Menubar.#config.selectors.menubar).replace('.', ''))) {
                        if (menubarMinWidth > entry.borderBoxSize[0].inlineSize) {
                            responseMobile();
                        } else {
                            mainNavigationControl('show');
                            if (Menubar.#mobileNavigation && Menubar.#mobileButton.getAttribute('aria-pressed') === 'true') {
                                this.#mobileButtonControl();
                                this.#mobileNavigationControl();
                            }
                        }
                    }
                });
            });
            mobileObserver.observe(Menubar.#menubar);

            if (Menubar.#mobileNavigation) {
                Menubar.#mobileNavigation.style.top = `${Menubar.#menubar.getBoundingClientRect().height}px`;
                Menubar.#mobileNavigation.classList.add(Menubar.#config.layers.layer_1);
            }

        }, Menubar.#config.menubar.loadingTime);
    }

    /**
     * Controla o botão de disparo do menu mobile
     * @private
     */
    #mobileButtonControl() {
        const mobileButtonIconControl = Menubar.#mobileButton.querySelector(Menubar.#config.selectors.mobileButtonIconControl);
        let ariaPressed = Menubar.#mobileButton.getAttribute('aria-pressed');

        if (ariaPressed === 'true') {
            Menubar.#mobileButton.setAttribute('aria-pressed', 'false');
            mobileButtonIconControl.checked = false;

        } else {
            Menubar.#mobileButton.setAttribute('aria-pressed', 'true');
            mobileButtonIconControl.checked = true;
        }
    }

    /**
     * Controla a visibilidade e animação da navegação mobile
     * @private
     */
    #mobileNavigationControl() {
        const overlayShow = Menubar.#settings.overlay.show !== undefined ? Menubar.#settings.overlay.show : Menubar.#config.settings.overlay.show;

        const showMobile = () => {
            // props
            Menubar.#mobileNavigation.setAttribute('aria-hidden', 'false');
            Menubar.#mobileNavigation.setAttribute('data-show', 'true');
            if (!Menubar.#animationShow) {
                Menubar.#mobileNavigation.style.setProperty('display', 'block');
            }
            // adiciona overlay
            if (overlayShow) {
                document.body.appendChild(this.#createOverlay());
                Menubar.#mobileButton.classList.add(Menubar.#config.layers.layer_1);
            }
            // Fecha o painel aberto
            this.#closepanelOpened();
        }
        const hideMobile = () => {
            // props
            Menubar.#mobileNavigation.setAttribute('aria-hidden', 'true');
            Menubar.#mobileNavigation.setAttribute('data-show', 'false');
            if (!Menubar.#animationShow) {
                Menubar.#mobileNavigation.style.setProperty('display', 'none');
            }
            // remove overlay
            if (overlayShow) {
                this.#removeOverlay(document.getElementById(Menubar.#config.selectors.mobileNavigationOverlay));
            }
        }

        if (Menubar.#mobileNavigation.getAttribute('data-show') === 'false') {
            showMobile();
        }
        else {
            hideMobile();
        }

        // controle de animação
        if (Menubar.#animationShow) {
            this.#animationClassControl(Menubar.#mobileNavigation);
        }
    }

    /**
     * Controla o status do botão mobile, a exibição do menu mobile e configurações iniciais do menu
     * @private
     */
    #mobileControl() {
        if (Menubar.#mobileButton) {
            Menubar.#mobileButton.addEventListener('click', () => {
                event.preventDefault();
                event.stopImmediatePropagation();
                this.#mobileButtonControl();
                this.#mobileNavigationControl();
                this.#isActive();
            });
        }

        if (Menubar.#mobileNavigation) {
            const mainNavMobile = Menubar.#mobileNavigation.querySelector('.main-navigation-mobile');
            mainNavMobile.style.paddingBottom = `${parseInt(window.getComputedStyle(mainNavMobile).paddingBottom.replace('px', '')) + Menubar.#menubar.offsetHeight}px`;
        }
    }

    /**
     * Expande ou colapsa o submenu da navegação mobile
     * @private
     */
    #menubarAccordion(element) {
        if (element) {
            const hasSubmenu = element.querySelectorAll(Menubar.#config.selectors.hasSubmenu);
            let animExpandId = null;

            if (hasSubmenu) {
                hasSubmenu.forEach(menuitem => {
                    // Funcionalidades
                    // ----------------------------------------------
                    function toggle() {
                        const nestingSubmenuOpen = menuitem.nextElementSibling.querySelectorAll('.submenu.isOpen');
                        let start;

                        // accordion: animações
                        // -----------------------
                        const animExpand = (timestamp) => {
                            if (start === undefined) { start = timestamp };

                            const elapsed = timestamp - start;

                            if (menuitem.nextElementSibling.offsetHeight < menuitem.nextElementSibling.firstElementChild.offsetHeight) {
                                menuitem.nextElementSibling.style.height = `${menuitem.nextElementSibling.offsetHeight + Math.round(0.1 * elapsed)}px`;
                                menuitem.classList.add('animating');
                                animExpandId = requestAnimationFrame(animExpand);
                            }
                            // aplica altura flexível para comportar automaticamente a altura dos submenus aninhados (filhos)
                            if (menuitem.nextElementSibling.offsetHeight >= menuitem.nextElementSibling.firstElementChild.offsetHeight) {
                                menuitem.nextElementSibling.style.height = '100%';
                                menuitem.classList.remove('animating');
                            }
                        };
                        const animCollapse = (timestamp) => {
                            if (start === undefined) { start = timestamp };

                            const elapsed = timestamp - start;

                            if (menuitem.nextElementSibling.offsetHeight > 0) {
                                menuitem.nextElementSibling.style.height = `${menuitem.nextElementSibling.offsetHeight - Math.round(0.1 * elapsed)}px`;
                                menuitem.classList.add('animating');
                                requestAnimationFrame(animCollapse);
                            }
                            // verifica se o resultado da subtração é um número negativo e iguala altura a zero
                            if (Math.sign(menuitem.nextElementSibling.offsetHeight - Math.round(0.1 * elapsed)) === -1) {
                                menuitem.nextElementSibling.style.height = '0px';
                                menuitem.classList.remove('animating');
                            }
                        };
                        // -----------------------

                        // accordion: expande submenu
                        if (menuitem.nextElementSibling.offsetHeight === 0) {
                            requestAnimationFrame(animExpand);
                            menuitem.setAttribute('aria-expanded', 'true');
                            menuitem.nextElementSibling.firstElementChild.setAttribute('aria-hidden', 'false');
                        }
                        // accordion: colapsa submenu
                        else {
                            if (!Menubar.#settings.keepOpen) {
                                //fechar todos os submenus aninhados
                                let nestedMenuitems = menuitem.parentElement.querySelectorAll('[role="menuitem"][aria-haspopup="true"][aria-expanded="true"]');
                                nestedMenuitems = Array.from(nestedMenuitems);
                                for (let i = 1; i < nestedMenuitems.length; i++) {
                                    nestedMenuitems[i].click();
                                }
                            }
                            requestAnimationFrame(animCollapse);
                            menuitem.setAttribute('aria-expanded', 'false');
                            menuitem.nextElementSibling.firstElementChild.setAttribute('aria-hidden', 'true');
                        }
                        //submenu aninhado
                        if (menuitem.parentElement.parentElement.classList.contains('submenu')) {
                            const globalWrapper = menuitem.parentElement.parentElement.parentElement;

                            if (!menuitem.nextElementSibling.firstElementChild.classList.contains('isOpen')) {
                                menuitem.nextElementSibling.firstElementChild.classList.add('isOpen');
                            }
                            else {
                                menuitem.nextElementSibling.firstElementChild.classList.remove('isOpen');
                            }
                        }
                    }

                    // Eventos
                    // ----------------------------------------------
                    menuitem.addEventListener('click', () => {
                        event.stopPropagation();
                        toggle();
                    })
                })
            }
        }
    }

    /**
     * Verifica a visibilidade dos submenus em relação a viewport, e corrige sua posição horizontal
     */
    #submenusCheckVisibilityInViewport() {
        function isElementPartiallyInViewport(el) {
            const rect = el.getBoundingClientRect();

            return (
                (rect.left + rect.width) <= window.innerWidth
            );
        }

        function checkSubmenusVisibility() {
            Menubar.#submenus.forEach(submenu => {
                submenu.style.removeProperty("right");
                submenu.style.removeProperty("left");

                if (!isElementPartiallyInViewport(submenu)) {
                    submenu.style.setProperty("right", "calc(100% - 0.5em)");
                    submenu.style.setProperty("left", "auto");
                }
            });
        }

        const menuitens = document.querySelectorAll(".ae-menubar[aria-orientation='horizontal'] [role='menuitem']");

        menuitens.forEach(menuitem => {
            menuitem.addEventListener('mouseenter', checkSubmenusVisibility);
        })
    }

    /**
     * Fecha o elemento aberto ao apertar a tecla ESC (menubar e/ou painel)
     * @private
     */
    #close() {
        const closeAll = () => {
            // fecha o menu mobile
            if (Menubar.#mobileNavigation && Menubar.#mobileNavigation.getAttribute('data-show') === 'true') {
                Menubar.#mobileButton.click();
            }

            // fecha painel aberto
            this.#closepanelOpened();
        }

        window.addEventListener('keydown', () => {
            if (event.keyCode === 27) {
                closeAll();
            }
        });
    }

    /**
     * Fecha o painel aberto
     */
    #closepanelOpened() {
        const panelOpeneds = document.querySelectorAll(`${Menubar.#config.selectors.panels}[is-open]`);

        if (panelOpeneds) {
            panelOpeneds.forEach(panel => {
                const evtDispatch = new CustomEvent('panel-closed', {detail: {panel: panel}});
                document.querySelector(`[aria-owns="${panel.getAttribute('id')}"]`).click();
                document.dispatchEvent(evtDispatch);
            });
        }
    }

    /**
     * Configura e controla comportamentos padrões de painéis da toolbar
     * @private
     */
    #panel() {
        const panelAnimationName = Menubar.#settings.panel.animation;
        let panelCloseButton = null;

        const addClass = (panel) => {
            if (panel) {
                panel.classList.add(panelAnimationName);
            } else {
                event.target.classList.add(panelAnimationName);
            }
        }
        const removeClass = (panel) => {
            if (panel) {
                panel.classList.remove(panelAnimationName);
            } else {
                event.target.classList.remove(panelAnimationName);
            }
        }
        const startAnimation = (event) => {
            removeClass();
            event.target.removeEventListener('animationend', startAnimation);
        }
        const endAnimation = (event) => {
            removeClass();
            event.target.style.opacity = '0';
            event.target.style.visibility = 'hidden';
            event.target.removeEventListener('animationend', endAnimation);
        }
        const setPanelPosition = (panel, button) => {

            let offsetTop;

            if (document.querySelector('.ae-menubar.menubar[aria-orientation="horizontal"]')) {
                if (document.querySelector('.ae-menubar.menubar.split')) {
                    offsetTop = `${((parseInt(window.getComputedStyle(document.querySelector('.ae-menubar.menubar')).height.replace('px', ''))) / 2) + Menubar.#settings.panel.offset}px`
                } else {
                    offsetTop = `${(parseInt(window.getComputedStyle(document.querySelector('.ae-menubar.menubar')).height.replace('px', ''))) + Menubar.#settings.panel.offset}px`
                }
            } else {
                offsetTop = `${(parseInt(window.getComputedStyle(document.querySelector('.ae-menubar.toolbar')).height.replace('px', ''))) + Menubar.#settings.panel.offset}px`
            }

            panel.style.position = 'absolute';
            panel.style.top = offsetTop;

            // if (!Menubar.#menubar.classList.contains('is-rtl')) {
            if (document.querySelector('html').getAttribute('dir') != "RTL") {
                if (document.querySelector('.ae-menubar.toolbar')) {
                    panel.style.left = button.getBoundingClientRect().right - panel.offsetWidth - document.querySelector('.ae-menubar.toolbar').offsetLeft + 'px';
                }
                else if (document.querySelector('.ae-menubar.menubar .toolbar') || document.querySelector('.ae-menubar.menubar .user.action-button')) {
                    panel.style.left = button.getBoundingClientRect().right - panel.offsetWidth - document.querySelector('.ae-menubar.menubar').offsetLeft + 'px';
                }
            } else {
                if (document.querySelector('.ae-menubar.toolbar')) {
                    panel.style.left = button.getBoundingClientRect().right - button.offsetWidth - document.querySelector('.ae-menubar.toolbar').offsetLeft + 'px';
                }
                else if (document.querySelector('.ae-menubar.menubar .toolbar') || document.querySelector('.ae-menubar.menubar .user.action-button')) {
                    panel.style.left = button.getBoundingClientRect().right - button.offsetWidth - document.querySelector('.ae-menubar.menubar').offsetLeft + 'px';
                }
            }

        }

        // configurações iniciais dos painéis
        document.querySelectorAll(Menubar.#config.selectors.panels).forEach(panel => {
            const panelButton = document.querySelector(`[aria-owns="${panel.getAttribute('id')}"]`);
            panelCloseButton = panel.querySelector("[data-close]");

            // adiciona classe de animação na inicialização dos painéis
            if (panel && !panel.classList.contains(panelAnimationName)) {
                panel.style.setProperty('animation-direction', 'normal', 'important');
                addClass(panel, panelAnimationName);
                panel.addEventListener('animationend', startAnimation);
            }

            if (panel) {
                if (panelButton) {
                    // reposicionamento dinâmico
                    window.addEventListener('resize', () => {
                        setPanelPosition(panel, panelButton);
                    });
                    // reposicionamento no click
                    panelButton.addEventListener('click', () => {
                        setPanelPosition(panel, panelButton);
                    });
                }
            }
        });

        // controle de exibição
        Menubar.#actionButton.forEach(button => {
            button.addEventListener('click', () => {
                event.stopImmediatePropagation();

                const panelOpened = document.querySelector(`${Menubar.#config.selectors.panels}[is-open]`);
                let panel = button.getAttribute('aria-owns');
                panel = document.getElementById(panel);
                const evtDispatch = new CustomEvent('panel-oppened', {detail: {panel: panel}});

                if (panelOpened && panelOpened.getAttribute('id') !== panel.getAttribute('id')) {
                    const panelOwns = document.querySelector(`[aria-owns="${panelOpened.getAttribute('id')}"]`);
                    panelOwns.setAttribute('aria-expanded', 'false');
                    panelOpened.style.opacity = '0';
                    panelOpened.style.visibility = 'hidden';
                    panelOpened.removeAttribute('is-open');
                    panelOpened.setAttribute('aria-hidden', 'true');
                }

                try {
                    if (panel.hasAttribute('is-open')) {
                        panel.removeAttribute('is-open');
                        panel.setAttribute('aria-hidden', 'true');
                        panel.style.setProperty('animation-direction', 'reverse', 'important');
                        addClass(panel);
                        panel.addEventListener('animationend', endAnimation);
                        button.setAttribute('aria-expanded', 'false');

                    } else {
                        panel.setAttribute('is-open', 'true');
                        panel.style.opacity = '1';
                        panel.style.visibility = 'visible';
                        panel.setAttribute('aria-hidden', 'false');
                        panel.style.setProperty('animation-direction', 'normal', 'important');
                        addClass(panel)
                        panel.addEventListener('animationend', startAnimation);
                        button.setAttribute('aria-expanded', 'true');
                        // fecha o menu mobile
                        if (Menubar.#mobileNavigation && Menubar.#mobileNavigation.getAttribute('data-show') === 'true') {
                            Menubar.#mobileButton.click();
                        }
                    }
                } catch (err) {
                    console.debug('Este trigger não possui um painel associado!', err);
                }
                document.dispatchEvent(evtDispatch);


            })
        })

        // fecha o painel no botão data-close
        if (panelCloseButton) {
            panelCloseButton.addEventListener("click", ev => {
                // const ownButton = document.getElementById(ev.currentTarget.dataset.close);
                // ownButton.click();
                this.#closepanelOpened();
            });
        }
    }

    /**
     * Verifica se um item do menu tem o status ativo e realiza ações complementares
     * @private
     */
    #isActive() {
        const isActive = Menubar.#mobileNavigation.querySelectorAll(Menubar.#config.selectors.isActive);

        if (isActive) {
            isActive.forEach(menuitem => {
                if (!menuitem.getAttribute('href') && menuitem.getAttribute('aria-expanded') === 'false') {
                    menuitem.click();
                }
            })
        }
    }

    /**
     * Cria um overlay para impedir interações com os elementos abaixo deste
     * @private
     * @return { DOM Element} overlay
     */
    #createOverlay() {
        const overlay = document.createElement('div');

        overlay.style.position = 'fixed';
        overlay.style.top = '0';
        overlay.style.left = '0';
        overlay.style.width = '100%';
        overlay.style.height = '100%';
        overlay.style.backgroundColor = Menubar.#settings.overlay.bgColor ? Menubar.#settings.overlay.bgColor : Menubar.#config.settings.overlay.bgColor;
        overlay.classList.add('ae-overlay', Menubar.#config.layers.layer_2);
        overlay.setAttribute('id', Menubar.#config.selectors.mobileNavigationOverlay);

        return overlay;
    }

    /**
     * Remove uma overlay ativa
     * @param {DOM Element} overlay ['mobile-navigation' || 'main-navigation'] Informa ao método qual overlay remover.
     */
    #removeOverlay(target) {
        document.querySelector('body').removeChild(target);
    }

    /**
     * Controla a animação de entrada e saída do elemento
     * @param {DOM Element} element Elemento que receberá a classe de animação
     */
    #animationClassControl(element) {
        const startAnimation = () => {
            switch (Menubar.#animationName) {
                case 'slide-top-bouncy':
                    element.classList.add('slide-top-bouncy');
                    break;
                case 'slide-right-bouncy':
                    element.classList.add('slide-right-bouncy');
                    break;
                case 'slide-bottom-bouncy':
                    element.classList.add('slide-bottom-bouncy');
                    break;
                case 'slide-left-bouncy':
                    element.classList.add('slide-left-bouncy');
                    break;
                case 'slide-top':
                    element.classList.add('slide-top');
                    break;
                case 'slide-right':
                    element.classList.add('slide-right');
                    break;
                case 'slide-bottom':
                    element.classList.add('slide-bottom');
                    break;
                case 'slide-left':
                    element.classList.add('slide-left');
                    break;
                case 'reveal-opacity':
                    element.classList.add('reveal-opacity');
                    break;
                case 'reveal-blur':
                    element.classList.add('reveal-blur');
                    break;
            }

            Menubar.#mobileButton.style.setProperty('pointer-events', 'none');
            element.style.setProperty('display', 'block');
            element.addEventListener('animationend', endAnimation);
        }

        const endAnimation = () => {
            if (Menubar.#animationShow) {
                Menubar.#config.animation.className.forEach(className => {
                    if (element.classList.contains(className)) {
                        element.classList.remove(className);
                    }
                });

                element.style.setProperty('animation-direction', 'reverse', 'important');
                Menubar.#mobileButton.style.removeProperty('pointer-events');
                element.removeEventListener('animationend', endAnimation);
            }

            if (element.getAttribute('data-show') === 'false') {
                element.style.setProperty('display', 'none');

                if (Menubar.#animationShow) {
                    element.style.setProperty('animation-direction', 'normal', 'important');
                }
            }
        }


        if (Menubar.#animationShow) {
            startAnimation();
        }
    }

    /**
     * Controla a interação de visualização do menu vertical entre colapsada e extendida
     */
    #collapsibleMenu() {
        if (Menubar.#menubarVertical) {
            let logos = Menubar.#menubarVertical.querySelectorAll('.logo img');
            let menubarVert_width = Menubar.#menubarVertical.offsetWidth;
            const menuitems = Menubar.#menubarVertical.querySelectorAll('.wrapper-navigation [role="menuitem"]');
            const menuitems_labels = Menubar.#menubarVertical.querySelectorAll('.wrapper-navigation [role="menubar"] > .wrapper > [role="menuitem"] > .label');
            const navgroup_labels = Menubar.#menubarVertical.querySelectorAll('.wrapper-navigation [role="menubar"] .navigation-group > .label');
            const menuitems_opened = Menubar.#menubarVertical.querySelectorAll('.wrapper-navigation [role="menubar"] [role="menuitem"][aria-expanded="true"]');

            const wrapperUser = Menubar.#menubarVertical.querySelector(Menubar.#config.selectors.wrapperUser);
            let userMenu, userInfo, userInfoGroup, userButton;
            const wrapperHeader = Menubar.#menubarVertical.querySelector(".wrapper-header");

            if (wrapperUser) {
                userMenu = wrapperUser.querySelector(Menubar.#config.selectors.userMenu);
                userInfo = wrapperUser.querySelector(Menubar.#config.selectors.userInfo);
                userInfoGroup = wrapperUser.querySelector(`${Menubar.#config.selectors.userInfo} > .group`);
                userButton = wrapperUser.querySelector(Menubar.#config.selectors.userButton);
            }

            let start, previousTimestamp;

            const animate_expand = timestamp => {
                if (start === undefined) { start = timestamp };

                const menubarMaxWidth = parseInt(Menubar.#menubarVertical.getAttribute('data-width'));
                const menubarWidth = Menubar.#menubarVertical.offsetWidth;
                const elapsed = timestamp - start;

                if (previousTimestamp !== timestamp) {
                    const width = Math.min(menubarWidth + elapsed, menubarMaxWidth);
                    Menubar.#menubarVertical.style.width = `${width}px`;
                }

                if (menubarWidth !== menubarMaxWidth) {
                    requestAnimationFrame(animate_expand)
                } else {
                    Menubar.#menubarVertical.style.width = '260px';
                    Menubar.#menubarVertical.classList.add('expanded');
                }
            }

            const animate_collapse = timestamp => {
                if (start === undefined) { start = timestamp };

                const menubarWidth = Menubar.#menubarVertical.offsetWidth;
                const elapsed = timestamp - start;

                if (menubarWidth === menubarVert_width) {
                    Menubar.#menubarVertical.setAttribute('data-width', menubarWidth);
                }

                if (previousTimestamp !== timestamp) {
                    const width = Math.max(menubarWidth - elapsed, 80);
                    Menubar.#menubarVertical.style.width = `${width}px`;
                    Menubar.#menubarVertical.style.minWidth = `${width}px`;
                }

                if (menubarWidth !== 80) {
                    requestAnimationFrame(animate_collapse)
                } else if (menubarWidth === 80) {
                    Menubar.#menubarVertical.classList.add('collapsed');
                }
            }

            const handler_collapse = () => {
                requestAnimationFrame(animate_collapse);

                Menubar.#menubarVertical.classList.remove('expanded');
                Menubar.#collapseMenu.classList.add('d-none');

                wrapperHeader.style.setProperty("justify-content", "center");

                logos[0].classList.add('d-none');
                logos[0].classList.remove('d-block');
                logos[1].classList.add('d-block');
                logos[1].classList.remove('d-none');

                let checkWrapperUserAnimating = null;
                const checkWrapperUserClassAnimating = () => {
                    if (wrapperUser && !wrapperUser.classList.contains('animating')) {
                        clearInterval(checkWrapperUserAnimating);

                        wrapperUser.style.display = 'flex';
                        wrapperUser.style.flexFlow = 'row nowrap';
                        wrapperUser.style.justifyContent = 'center';
                        userMenu.classList.add('d-none');
                        userInfoGroup.classList.add('d-none');
                        userInfo.setAttribute('data-expanded', userInfo.getAttribute('aria-expanded'));
                        userInfo.removeAttribute('aria-expanded');
                    }
                }

                if (wrapperUser) {
                    checkWrapperUserAnimating = setInterval(checkWrapperUserClassAnimating, 50);
                }

                let checkMenuitemAnimation = null;
                const checkMenuitemClassAnimation = () => {
                    menuitems.forEach(menuitem => {
                        if (!menuitem.classList.contains('animating')) {
                            clearInterval(checkMenuitemAnimation);

                            menuitems_opened.forEach(menuitem => {
                                menuitem.nextElementSibling.classList.add('d-none');
                            });

                            menuitems_labels.forEach(label => {
                                label.classList.add('d-none');
                                label.parentElement.style.justifyContent = 'center';
                            });

                            navgroup_labels.forEach(label => {
                                label.classList.add('d-none');
                                label.previousElementSibling.classList.remove('d-none');
                                label.parentElement.style.justifyContent = 'center';
                            });
                        }
                    })
                }

                checkMenuitemAnimation = setInterval(checkMenuitemClassAnimation, 50);
            }

            const handler_expand = () => {
                requestAnimationFrame(animate_expand);

                Menubar.#menubarVertical.classList.remove('collapsed');
                Menubar.#collapseMenu.classList.remove('d-none');

                wrapperHeader.style.removeProperty("justify-content");

                logos[1].classList.add('d-none');
                logos[1].classList.remove('d-block');
                logos[0].classList.add('d-block');
                logos[0].classList.remove('d-none');

                let checkWrapperUserAnimating = null;
                const checkWrapperUserClassAnimating = () => {
                    if (wrapperUser && !wrapperUser.classList.contains('animating')) {
                        clearInterval(checkWrapperUserAnimating);

                        wrapperUser.style.display = 'block';
                        wrapperUser.style.flexFlow = '';
                        wrapperUser.style.justifyContent = '';
                        userMenu.classList.remove('d-none');
                        userInfoGroup.classList.remove('d-none');
                        userInfo.setAttribute('aria-expanded', userInfo.getAttribute('data-expanded'));
                        userInfo.removeAttribute('data-expanded');
                    }
                }

                if (wrapperUser) {
                    checkWrapperUserAnimating = setInterval(checkWrapperUserClassAnimating, 50);
                }

                let checkMenuitemAnimation = null;
                const checkMenuitemClassAnimation = () => {
                    menuitems.forEach(menuitem => {
                        if (!menuitem.classList.contains('animating')) {
                            clearInterval(checkMenuitemAnimation);

                            menuitems_opened.forEach(menuitem => {
                                menuitem.nextElementSibling.classList.remove('d-none');
                            });

                            menuitems_labels.forEach(label => {
                                label.classList.remove('d-none');
                                label.parentElement.style.justifyContent = 'flex-start';
                            });

                            navgroup_labels.forEach(label => {
                                label.classList.remove('d-none');
                                label.previousElementSibling.classList.add('d-none');
                                label.parentElement.style.justifyContent = 'flex-start';
                            });
                        }
                    })
                }

                checkMenuitemAnimation = setInterval(checkMenuitemClassAnimation, 50);
            }

            if (Menubar.#menubarVertical.getAttribute('data-collapsible') === 'true') {
                if (!Menubar.#menubarVertical.classList.contains('collapsed')) {
                    handler_collapse();
                } else {
                    handler_expand();
                }
            }

        }
    }

    /**
     * Controla o menu do usuário da menubar vertical
     */
    #userMenu() {
        const wrapperUser = Menubar.#menubarVertical.querySelector(Menubar.#config.selectors.wrapperUser);
        const userInfo = wrapperUser.querySelector(Menubar.#config.selectors.userInfo)

        if (wrapperUser) {
            userInfo.addEventListener('click', () => {
                const expanded = userInfo.getAttribute('aria-expanded');
                const userMenu = wrapperUser.querySelector(Menubar.#config.selectors.userMenu);
                const userMenuWrapper = wrapperUser.querySelector(`${Menubar.#config.selectors.userMenu} > .wrapper`);
                const userMenuContentHeight = wrapperUser.querySelector(Menubar.#config.selectors.userMenuContent).offsetHeight;
                let start;

                const animExpand = timestamp => {
                    if (start === undefined) { start = timestamp };

                    const elapsed = timestamp - start;

                    if (userMenuWrapper.offsetHeight < userMenuContentHeight) {
                        userMenuWrapper.style.height = `${Math.min(userMenuWrapper.offsetHeight + (0.1 * elapsed), userMenuContentHeight)}px`;
                        wrapperUser.classList.add('animating');
                        requestAnimationFrame(animExpand);
                    } else {
                        userInfo.setAttribute('aria-expanded', 'true');
                        userMenuWrapper.style.height = 'fit-content';
                        wrapperUser.classList.remove('animating');
                    }
                }

                const animCollapse = timestamp => {
                    if (start === undefined) { start = timestamp };

                    const elapsed = timestamp - start;

                    if (userMenuWrapper.offsetHeight !== 0) {
                        userMenuWrapper.style.height = `${Math.max(userMenuWrapper.offsetHeight - (0.1 * elapsed), 0)}px`;
                        wrapperUser.classList.add('animating');
                        requestAnimationFrame(animCollapse);
                    } else {
                        userInfo.setAttribute('aria-expanded', 'false');
                        userMenu.classList.remove('m-top-4');
                        wrapperUser.classList.remove('animating');
                    }
                }

                if (expanded === 'false') {
                    requestAnimationFrame(animExpand);
                    userMenu.classList.add('m-top-4');
                } else {
                    requestAnimationFrame(animCollapse);
                }
            })
        }
    }
}

// Funções auxiliares
// ----------------------------------------------------------
function sumElementsWidth(nodeElements) {
    let width = 0;
    if (nodeElements) {
        nodeElements.forEach(element => {
            width += element.offsetWidth;
        });
        return width;
    }
}
const menuJSON_url = {};
const panelTheme = document.getElementById('themes-panel');
var loadTimeout = null;

function startAppTab(initApp) {
    if (typeof openInTab == 'function') {
        openInTab(apl_default, 'init_tab', '', '', '<i class="fas fa-home"></i>', '_self', true);
    } else {
        $('#app-frames').find('iframe').addClass('loading');
        if (loadTimeout) {
            clearTimeout(loadTimeout);
        }
        loadTimeout = setTimeout(function () {
            $('#app-frames iframe').removeClass('loading');
        }, 10000);
        $('.nm_frame_app').attr('src', apl_default);
    }
}
function layoutControl(offsetX) {
    const thresholdX = offsetX ? offsetX : 16;
    const menubar_vertical = document.querySelector('.ae-menubar.menubar[aria-orientation="vertical"]');
    const toolbar = document.querySelector('.ae-menubar.toolbar');
    const switch_menu_pos_button = document.getElementById('switch-menu-position');
    const sc_main_content = document.getElementById('sc-main-content');
    const checkRTL = document.querySelector('html').getAttribute('dir') == "RTL";

    sc_main_content.parentElement.style.height = '100%';

    if(checkRTL) {
        if(window.getComputedStyle(menubar_vertical).left !== 'auto') {
            menubar_vertical.style.right = '0';
            menubar_vertical.style.left = 'auto';
        }
    }

    const layout = () => {
        if(checkRTL) {
            sc_main_content.style.paddingRight = menubar_vertical.offsetWidth + 'px';

            if(toolbar) {
                setTimeout(() => {
                    toolbar.style.width = sc_main_content.offsetWidth - menubar_vertical.offsetWidth - thresholdX - 16 + 'px';
                }, 251)
            }

        } else {
            sc_main_content.style.paddingLeft = menubar_vertical.offsetWidth + 'px';
        }
    }

    // init
    layout();

    // click
    switch_menu_pos_button.addEventListener('click', () => {
        setTimeout(layout, 350);
    });
}
function themeApply(themeName) {
    panelTheme.querySelectorAll('[data-themeapply]').forEach(button => {
        button.addEventListener('click', () => {
            $('[data-themeapply]').closest('li.theme-name.button ').removeClass('active');
            $(button).closest('li.theme-name.button ').addClass('active');
            document.querySelectorAll('.ae-menubar').forEach(menubar => {
                menubar.setAttribute('data-aetheme', button.getAttribute('data-theme'));
            });
            $('ul.context-menu-list.context-menu-root').attr('data-aetheme', button.getAttribute('data-theme'));
            $('#app-frames').attr('data-aetheme', button.getAttribute('data-theme'));
        });
    });
}

function loadJSON(url) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação ${response.status}`)
            }

            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Erro ao carregar o arquivo JSON:', error);
        })
}


function updateNavMenu() {
    var vert = document.querySelector('.ae-menubar.menubar').getAttribute('aria-orientation') == 'vertical';
    if (vert) {
        layoutControl(4);
    }
    document.getElementById('nav_list').innerHTML = renderItems(items_data, vert);
    if (document.getElementById('nav_mobile')) {
        document.getElementById('nav_mobile').innerHTML = renderItems(items_data, true);
    }
    if ($('#user_menu_list')[0]) {
        if (user_menu_data.length > 0) {
            $('#user_menu_list')[0].innerHTML = renderItems(user_menu_data, true);
        } else {
            $('#user_menu_list').closest('.section.actions.ae-menubar-accordion').remove();
            $('.user-info').addClass('inactive').off('click');
            $('.user-menu').remove();
        }
    }
    $('.ae-menubar.menubar[aria-orientation="vertical"] a,.ae-menubar.menubar[aria-orientation="vertical"] a span').on('click.closeVertMenu', function() {
        $('.ae-menubar.menubar[aria-orientation="vertical"]').removeClass('expanded-mob');
    });
}
function renderUserImage(arr_items, is_vert) {
    var el = $('.user_image');
    if (el.length > 0) {
        var src = el.attr('src');
        if (src.trim() == '') {
            el.replaceWith('<i class="mb_icon fa-solid fa-user" aria-hidden="true"></i>');
        }
    }
}
function renderLogo() {
    var el_list = $('.logo img');
    el_list.each(function(i, el) {
        var src = $(el).attr('src');
        if (src.trim() != '') {
            $(el).css('visibility', 'visible');
        }
    });
}
function renderMenuUser(arr_items){
    var ret_html = '';
    arr_items.forEach(function (item) {
        var has_icon = item.icon_check == 'S';
        var icon = item.icon_fa;
        var label = item.label;
        var url = item.link;
        var id = item.id;
        var target = item.target;

        ret_html += '<li class="wrapper" role="none">'+"\n";
        ret_html += "<a href=\"" + url + "\" tab-name=\""+ id + "\" tab-title=\""+ label + "\" target=\""+ target + "\" role=\"menuitem\" aria-haspopup=\"false\" aria-expanded=\"false\" data-active=\"false\">"+"\n";

        if (has_icon) {
            ret_html += '   <i class="mb_icon ' + icon + '" aria-hidden="true"> </i>'+"\n";
        }
        ret_html += '       <span class="label">' + label + '</span>'+"\n";
        ret_html += '</a>'+"\n";
        ret_html += '</li>'+"\n";
    });
    return ret_html;
}
function getTarget(target_name) {
    var ret = 'nm_frame_app';
    try {
        var targets = targets_list;
        if (targets[target_name] !== undefined) {
            ret = targets[target_name];
        }
    } catch (e) {
        ret = 'nm_frame_app';
    }
    return ret
}
function renderItems(arr_items, is_vert) {
    var ret_html = '';
    arr_items.forEach(function (item) {
        var has_icon = item.icon_check == 'S';
        var icon = item.icon_fa;
        var disabled = (item.disabled == 'Y') ? 'disabled="disabled"' : '';
        var label = item.label;
        var hint = item.hint;
        var url = item.link;
        var id = item.id;
        var link_target = item.link_target;
        var fav_check = item.fav_check;
        var children = Object.values(item.itens);
        var has_popup = 'true';

        try {
            link_target = getTarget(link_target);
            if (link_target == '_self' && url == '#' && (!children || !children.length)) {
                url = 'javascript: window.close();';
            }
        } catch (e) {
            link_target = 'nm_frame_app';
        }

        ret_html += '<li class="wrapper" ' + disabled + ' role="none">'+"\n";
        if (!children || !children.length) {
            has_popup = 'false';
            ret_html += "<a href=\"" + url + "\" tab-name=\""+ id + "\" title=\"" + hint + "\" tab-title=\""+ label + "\" target=\""+ link_target + "\" role=\"menuitem\" aria-haspopup=\""+ has_popup + "\" aria-expanded=\"false\" data-active=\"false\">"+"\n";
        } else {
            ret_html += '   <span role="menuitem" aria-haspopup="' + has_popup + '" aria-expanded="false" aria-controls="submenu-' + id + '" data-active="false">' + "\n";
        }
        if (has_icon) {
            ret_html += '   <i class="mb_icon ' + icon + '" aria-hidden="true"> </i>'+"\n";
        }
        ret_html += '       <span class="label">' + label + '</span>'+"\n";
        if (!children || !children.length) {
        } else {
            if (is_vert) {
                ret_html += '   </span>' + "\n";
            }
        }
        if (children && children.length > 0) {
            if (is_vert) {
                ret_html += '<div class="wrapper">' + "\n";
            }
            ret_html += '   <ul class="submenu" id="submenu-' + id + '" role="menu" aria-label="' + label + '" aria-hidden="true">'+"\n";
            ret_html +=         renderItems(children, is_vert);
            ret_html += '   </ul>'+"\n";
            if (is_vert) {
                ret_html += '</div>'+"\n";
            }
        } else {
            ret_html += '</a>'+"\n";
        }
        if (!children || !children.length) {
        } else {
            if (!is_vert) {
                ret_html += '   </span>' + "\n";
            }
        }
        ret_html += '</li>'+"\n";
    });
    return ret_html;
}

function hideTBButton(panel_name) {
    $('[aria-controls="'+panel_name+'-panel"]').hide();
}
function showTBButton(panel_name) {
    $('[aria-controls="'+panel_name+'-panel"]').show();
}
function bodyColorUpdate(el_wrap) {
    try {
        var iFrameEl = $(el_wrap).find('iframe')[0];
        var bgcolor = '#efefef';
        var iframeDoc = iFrameEl.contentDocument || iFrameEl.contentWindow.document;
        bgcolor = iFrameEl.contentWindow.getComputedStyle(iframeDoc.body).backgroundColor;
        $('body').css('background-color', bgcolor);
    } catch (e) {
        console.log(e);
    }
}

function activateItem(id) {
    var vert = document.querySelector('.ae-menubar.menubar').getAttribute('aria-orientation') == 'vertical';
    var activeItem =  $('[tab-name="' + id + '"]');
    $('[role="menuitem"]').attr('data-active', 'false');
    activeItem.attr('data-active', 'true');
    if (vert) {
        activeItem.parents('.wrapper').find(' > [role="menuitem"]').attr('data-active', 'true');
    } else {
        activeItem.parents('[role="menuitem"]').attr('data-active', 'true');
    }
}
function handleLinks(e) {
    if ($('a[tab-name="' + e + '"]').attr('target') == '_self' && ($('a[tab-name="' + e + '"]').attr('href') == '#' || $('a[tab-name="' + e + '"]').attr('href') == '')) {
        window.close();
        return false;
    }
    if ($('a[tab-name="' + e + '"]').attr('href') == '#' || $('a[tab-name="' + e + '"]').attr('href') == '') {
        event.preventDefault();
        event.stopPropagation();
        return false;
    }
    // $('body').removeAttr("style");
    activateItem(e);
    if (typeof use_load != 'undefined' && use_load) {
        $('#app-frames').find('iframe').addClass('loading');
    }
    // if (!$('#app-frames').find('iframe').hasClass('loading')) {
    //     bodyColorUpdate($('#app-frames'));
    // }
    if (typeof use_load != 'undefined' && use_load) {
        if (loadTimeout) {
            clearTimeout(loadTimeout);
        }
        loadTimeout = setTimeout(function() {
            $('#app-frames iframe').removeClass('loading');
        }, 10000);
    }
}
function flattenItems(arr_items) {

    return arr_items.reduce((acc, x) => {
        acc = acc.concat(x);
        if (typeof x.itens == typeof {}) {
            acc = acc.concat(flattenItems(Object.values(x.itens)));
            // x.itens = [];
        }
        return acc;
    }, []);


}

var SCMenubar;
window.addEventListener('load', () => {

    // Inicialização da aplicação de temas
    //-------------------------------------
    if (panelTheme) {
        themeApply();
    }

    // Sistema de busca do menu
    //-------------------------------------

    renderUserImage();
    renderLogo();
    // Controle de layout
    //---------------------------------
    /**
     * @param {number} offsetX - deslocamento entre a toolbar e a menubar vertical
     */
    updateNavMenu();
    if (typeof startCrumbs == 'function') {
        startCrumbs();
    }
    if (typeof searchInit == 'function') {
        searchInit();
    }
    if (typeof startTabs == 'function') {
        startTabs();
    } else {
        $('#app-frames iframe').on('load', function () {
            bodyColorUpdate($('#app-frames')); $('#app-frames iframe').removeClass('loading');
        });
        $('a[tab-name], a[tab-name] > span').on('click', function (e) {
            var el = $(this).closest('a[tab-name]');
            if (el.attr('target') == 'nm_frame_app') {
                handleLinks(el.attr('tab-name'));
            }
        });
    }
    // Inicialização do menu
    //-------------------------------------
    SCMenubar = new Menubar({
        animation: {
            show: true,
            name: 'slide-left'
        }
    });

    document.addEventListener('panel-oppened', function(e) {
        if (e.detail.panel.id == 'search-panel') {
            $('#main-search').focus();
        }
        $('#' + e.detail.panel.id).after('<div class="panel-backdrop-overlay"></div>');
        $('.panel-backdrop-overlay').off('click');
        $('.panel-backdrop-overlay').on('click', function () {
            SCMenubar.closePanel();
        });
    });
    document.addEventListener('panel-closed', function(e) {
        $('.panel-backdrop-overlay').remove();
        $('#main-search').val('');
        $('#search-result .result-links').html('');
    });

    $('.button.expand-button').on('click', function () {
        $('.ae-menubar.menubar[aria-orientation="vertical"]').addClass('expanded-mob');
    });
    $('#close-menu-expand').on('click', function () {
        $('.ae-menubar.menubar[aria-orientation="vertical"]').removeClass('expanded-mob');
    });
    if (apl_default != '') {
        startAppTab('');
    }
    if (!start_expanded) {
        $('#switch-menu-position').click();
    }
})
    </script>
                    </div>
            </div>
        </div>    </div>
          <script>     function isMobile() {
        var check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
    }
    $(document).ready(function () {
        if (!$('#idMenuHeader').length && $('#idMenuFLoat').length) {
            $('#id_links_abas').css('padding-top', $('#bmenu').outerHeight() + 'px');
        }
    })</script>
          <div id="id_links_abas" style="display: none; " class="scTabLine">
            <div class="scTabScroll left" style="float:left;display:none;" onmousedown="scTabScroll(&quot;left&quot;);" onmouseup="scTabScroll(&quot;stop&quot;);" onmouseout="scTabScroll(&quot;stop&quot;);"></div>
            <div class="scTabScroll right" style="float:right;display:none;" onmousedown="scTabScroll(&quot;right&quot;);" onmouseup="scTabScroll(&quot;stop&quot;);" onmouseout="scTabScroll(&quot;stop&quot;);"></div>
            <div id="div_contrl_abas" class="scTabCtrl" style="overflow:hidden;white-space: nowrap;">
              <ul id="contrl_abas" style="margin:0px; padding:0px; display: inline-block;"></ul>
            </div>
          </div>
    <div id="idMenuDown">
        <div id="idMenuRightSide">
    <div id="Iframe_control" style="">
      <iframe id="iframe_vertical_menu_v910" name="vertical_menu_v910_iframe" frameborder="0" class="scMenuIframe" style="width: 100%; height: ;" src="vertical_menu_v910_pag_ini.php"></iframe>
             </div>
        </div>
    </div>
</div>

    <script>
    $(document).ready(function() {
        $('.menu .menu__toggle').click(function(e){
            e.preventDefault();
            $(this).toggleClass('menu__toggle--active');
            $(this).parent().toggleClass('menu--active');
        });
        if($('#idMenuFooter').length)
        {
            $('#idMenuDown').css('height', "calc(100% - "+ $('#idMenuFooter').height() +")");

            if($('#idMenuVertical').length)
            {
                $('#idMenuVertical').css('height', "calc(100% - "+ $('#idMenuFooter').height() +")");
            }
        }
    });
    </script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;866f0e43594e0508&quot;,&quot;version&quot;:&quot;2024.3.0&quot;,&quot;token&quot;:&quot;f859ae58bfec466e82e909f1fab64a7e&quot;}" crossorigin="anonymous"></script>

 
<ul class="context-menu-list context-menu-root" data-aetheme="dark-pink" style="display: none;"><li class="context-menu-item"><span>Close tab</span></li><li class="context-menu-item"><span>Close all</span></li><li class="context-menu-item"><span>Close others</span></li><li class="context-menu-item"><span>Close all from the right</span></li><li class="context-menu-item"><span>Close all from the left</span></li></ul></body></html>