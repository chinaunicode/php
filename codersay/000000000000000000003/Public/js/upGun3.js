// ActionScript Document

  var speed=60;
              var ycolee2=document.getElementById("ycolee2");
              var ycolee1=document.getElementById("ycolee1");
              var ycolee=document.getElementById("ycolee");
              ycolee2.innerHTML=ycolee1.innerHTML; //��¡colee1Ϊcolee2
              function yMarquee1(){
              //��������colee1��colee2����ʱ
                 if(ycolee2.offsetTop-ycolee.scrollTop<=0){
                   ycolee.scrollTop-=ycolee1.offsetHeight; //colee�������
                 }else{
                     ycolee.scrollTop++
                     }
                 }
             var yMyMar1=setInterval(yMarquee1,speed)//���ö�ʱ��
            //�������ʱ�����ʱ���ﵽ����ֹͣ��Ŀ��
             ycolee.onmouseover=function() {clearInterval(yMyMar1)}
            //����ƿ�ʱ���趨ʱ��
             ycolee.onmouseout=function(){yMyMar1=setInterval(yMarquee1,speed)}