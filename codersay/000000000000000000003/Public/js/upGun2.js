// ActionScript Document

              var speed=60;
              var colee2=document.getElementById("colee2");
              var colee1=document.getElementById("colee1");
              var colee=document.getElementById("colee");
              colee2.innerHTML=colee1.innerHTML; //��¡colee1Ϊcolee2
              function Marquee1(){
              //��������colee1��colee2����ʱ
                 if(colee2.offsetTop-colee.scrollTop<=0){
                   colee.scrollTop-=colee1.offsetHeight; //colee�������
                 }else{
                     colee.scrollTop++
                     }
                 }
             var MyMar1=setInterval(Marquee1,speed)//���ö�ʱ��
            //�������ʱ�����ʱ���ﵽ����ֹͣ��Ŀ��
             colee.onmouseover=function() {clearInterval(MyMar1)}
            //����ƿ�ʱ���趨ʱ��
             colee.onmouseout=function(){MyMar1=setInterval(Marquee1,speed)}