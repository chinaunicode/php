// ActionScript Document
 var speed=60;
              var xcolee2=document.getElementById("xcolee2");
              var xcolee1=document.getElementById("xcolee1");
              var xcolee=document.getElementById("xcolee");
              xcolee2.innerHTML=xcolee1.innerHTML; //��¡colee1Ϊcolee2
              function xMarquee1(){
              //��������colee1��colee2����ʱ
                 if(xcolee2.offsetTop-xcolee.scrollTop<=0){
                   xcolee.scrollTop-=xcolee1.offsetHeight; //colee�������
                 }else{
                     xcolee.scrollTop++
                     }
                 }
             var xMyMar1=setInterval(xMarquee1,speed)//���ö�ʱ��
            //�������ʱ�����ʱ���ﵽ����ֹͣ��Ŀ��
             xcolee.onmouseover=function() {clearInterval(xMyMar1)}
            //����ƿ�ʱ���趨ʱ��
             xcolee.onmouseout=function(){xMyMar1=setInterval(xMarquee1,speed)}