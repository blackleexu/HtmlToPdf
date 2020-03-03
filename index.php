<?php

include('./mpdf/mpdf.php');

function htmlToPdf(){
    //这里需要指定zh-cn格式 要不然中文会乱码
    $mpdf=new mpdf('zh-cn','A4',0,'',30,30);
    $mpdf->SetDisplayMode('real');

    $html=file_get_contents("./normal_table.html");
    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;
    $mpdf->WriteHTML($html);
    //在指定位置添加一张图片（有的开发者用这个来做签章，但是这个位置并不好控制）
//    $mpdf->Image('./attachment.jpg',100,100);

    $mpdf->Output('tem'.time().'.pdf','F');//保存成pdf文件
}

htmlToPdf();
echo 'success';

function htmlStrToPdf(){
    //这里需要指定zh-cn格式 要不然中文会乱码
    $mpdf=new mpdf('zh-cn','A4',0,'',30,30);
    $mpdf->SetDisplayMode('real');

    $html='<p style="text-align: center;color: #FFAAAA">hello world!</p>';
    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;
    $mpdf->WriteHTML($html);
    //在指定位置添加一张图片（有的开发者用这个来做签章，但是这个位置并不好控制）
//    $mpdf->Image('./attachment.jpg',100,100);

    $mpdf->Output('tem'.time().'.pdf','F');//保存成pdf文件
}


//htmlStrToPdf();
//echo 'success';