echo "\n".color("white","CLAIM A..");
        echo "\n".color("white"," Please wait");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(15);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"pakegofood2206"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("white"," Message: ".$message);
	gocar:
