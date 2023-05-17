<?php include 'link.php';

            $act_id = $_GET['act_id'];
            $act_category = $_GET['act_category'];
            $act_state = $_GET['act_state'];
            $act_presenter = $_GET['act_presenter'];
            $act_name = $_GET['act_name'];
            $act_signup = $_GET['act_signup'];
            $act_signdue = $_GET['act_signdue'];
            $act_organizer = $_GET['act_organizer'];
            $act_coorganizer =  $_GET['act_coorganizer'];
            $act_fee = $_GET['act_fee'];
            $act_way =  $_GET['act_way'];
            $act_people =  $_GET['act_people'];
            $act_contact =  $_GET['act_contact'];
            $act_detail = $_GET['act_detail'];
            $option_length = $_GET["options"];
            $act_type = "";
            for ($i=0; $i <sizeof($option_length) ; $i++) { 
              $act_type=$act_type." ".$option_length[$i];
            }
            if (isset($_GET['decision'])) {
                if ($_GET['decision'] == 'cancel') {
                    $act_id = $_GET['act_id'];
                    $sql = "UPDATE activity SET act_state = '活動取消' WHERE act_id = $act_id";
            
                    if (mysqli_query($link, $sql)) {
                        exit("<script>
                            alert('取消成功');
                            location.href='瀏覽活動.php';
                        </script>");
                    } else {
                        exit("<script>
                            alert('取消失敗');
                            location.href='瀏覽活動.php';
                        </script>");
                    }
                  } elseif ($_GET['decision'] == 'adjust') {
                    $act_id = $_GET['act_id'];
                    echo $act_category;
                    $sql = "UPDATE activity SET act_category='$act_category', act_state='$act_state', act_presenter='$act_presenter', act_name='$act_name', act_signup='$act_signup', act_signdue='$act_signdue', act_organizer='$act_organizer', act_coorganizer='$act_coorganizer', act_fee='$act_fee', act_way='$act_way', act_people='$act_people', act_contact='$act_contact', act_detail='$act_detail', act_type='$act_type' WHERE act_id='$act_id'";

                    if (mysqli_query($link, $sql)) {
                        exit("<script>
                            alert('修改成功');
                            location.href='瀏覽活動.php';
                        </script>");
                    } else {
                        exit("<script>
                            alert('修改失敗');
                            location.href='瀏覽活動.php';
                        </script>");
                    }
                }
            }
            
            ?>
            
</body>
</html>