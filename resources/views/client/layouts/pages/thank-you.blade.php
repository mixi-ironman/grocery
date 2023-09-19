<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Order Form</title>
        <!-- Link to Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                height: 100vh;
                display: flex;
                flex-direction: column;

            }
            .background-tks{
                width:60vw;
                height:60vh;
                position: relative;
            }
            .wrap{
                display: flex;
                margin:auto;
            }

            .content_tks{
                position: absolute;
                top:0px;
                left:10%;
            }

            .back-home {
                display: inline-block;
                padding: 5px 5px 5px 20px;
                background-color: rgb(171, 210, 171);
                width: 220px;
                color:black ;
                font-size: 18px;
                font-weight: 600;
                border-top-left-radius: 100px;
                border-bottom-left-radius: 100px;
                text-align: left; /* Mặc định text-align là left */
                text-indent: 30px; /* Dịch nội dung về bên trái khi text-align là left */
                transition: all 1s;
            }
            
            .icon-arrow{
               opacity:0;
               visibility: hidden;
            }

            .back-home:hover {
                text-indent: 0; /* Đặt lại text-indent về 0 khi hover */
                color:red;
            }

            .back-home:hover .icon-arrow{
                visibility: visible;
                opacity:1;
            }



        </style>
    </head>

    <body>
            <div class="wrap">
                <img class="background-tks" src="https://img2.thuthuatphanmem.vn/uploads/2019/03/05/anh-cam-on-dep-cho-powerpoint_110939199.jpg" alt="">
                <div class="content_tks">
                    <h2 style="margin: 100px auto">Cảm ơn bạn đã mua hàng tại Mixi-Grocery!</h2>
                    <a class="back-home" href="{{ route('home') }}"><strong class="icon-arrow"><i style="margin-right:4px;" class="fa-solid fa-arrow-left"></i></strong>Về trang chủ</a>
                </div>
            </div>
            

        <!-- Link to Bootstrap JS (optional, for certain Bootstrap components) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

