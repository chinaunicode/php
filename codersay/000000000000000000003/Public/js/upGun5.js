
              var speed=60;
              var pcolee2=document.getElementById("pcolee2");
              var pcolee1=document.getElementById("pcolee1");
              var pcolee=document.getElementById("pcolee");
              pcolee2.innerHTML=pcolee1.innerHTML; //��¡colee1Ϊcolee2
              function pMarquee1(){
              //��������colee1��colee2����ʱ
                 if(pcolee2.offsetTop-pcolee.scrollTop<=0){
                   pcolee.scrollTop-=pcolee1.offsetHeight; //colee�������
                 }else{
                     pcolee.scrollTop++
                     }
                 }
             var pMyMar1=setInterval(pMarquee1,speed)//���ö�ʱ��
            //�������ʱ�����ʱ���ﵽ����ֹͣ��Ŀ��
             pcolee.onmouseover=function() {clearInterval(pMyMar1)}
            //����ƿ�ʱ���趨ʱ��
             pcolee.onmouseout=function(){pMyMar1=setInterval(pMarquee1,speed)}
	  