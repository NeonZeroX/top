<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="agenda.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    <title>เมนูร้านtopza007</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
    <style>
        body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;  
          background-color: #ebf1c8ce;
}			
		.p{background-color: blueviolet;}
    </style>

</head>

<body>
    <div class="container">
        <div class="text-center">
            <img src="https://scontent.fbkk14-1.fna.fbcdn.net/v/t39.30808-6/p843x403/269259599_3000490053597052_8673247222491743558_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFSi78tzd2XAaleiETJ-WdH2Yo5_fg9MqbZijn9-D0ypuqLccwCAZ8APYuj-FFqTf2za3G6Ai5ZnLWgoP40LatZ&_nc_ohc=DA6sypVko4gAX_myWw7&_nc_ht=scontent.fbkk14-1.fna&oh=00_AT9K0zUk1z783UnvTE_U-7Rh60TltfebvF5hXZ-cyWEUNA&oe=61C45AB8" alt="network-logo" width="130" height="100">
            <h2>
                <font color="brow">Topza007<font>
            </h2>
            <h6>
                <font color="brow">อาหารสำหรับเกมเมอร์</font>
            </h6>
        </div>
        <hr>
        <input type="hidden" id="hfRowIndex" value="">
        <table class="table">
            <tbody><tr>
                <td class="text-center">
                    <h4>
                        <font color="blue">อาหาร</font>
                    </h4>
                </td>
                <td><input type="text" name="Id" id="txtId" value="..."></td>
            </tr>
            <tr>
                <td class="text-center">
                    <h4>
                        <font color="blue">เครื่องดื่ม</font>
                    </h4>
                </td>
                <td><input type="text" name="Name" id="txtName" value="..."></td>
            </tr>
            <tr>
                <td class="text-center">
                    <h4>
                        <font color="blue">ราคา</font>
                    </h4>
                </td>
                <td><input type="text" name="Country" id="txtCountry" value="..."></td>
            </tr>
            <tr>
                <td>
                    <button class="btn-block" type="submit" id="btnAdd">เพิ่ม</button>
                    <button class="btn-block" type="submit" id="btnUpdate" style="display: none;">Update</button>
                </td>
                <td><button class="btn-block" type="button" id="btnClear">ล้าง</button>
                </td>
            </tr>
        </tbody></table>
        <table id="tblCustomers" class="table">
            <thead>
                <tr>
                    <th class="text-center">
                        <h4>
                            <font color="red">อาหาร</font>
                        </h4>
                    </th>
                    <th class="text-center">
                        <h4>
                            <font color="red">เครื่องดื่ม</font>
                        </h4>
                    </th>
                    <th class="text-center">
                        <h4>
                            <font color="red">ราคา</font>
                        </h4>
                    </th>
                    <th class="text-center">
                        <h4>
                            <font color="red">แก้ไข</font>
                        </h4>
                    </th>
                    <th class="text-center">
                        <h4>
                            <font color="red">ยกเลิก</font>
                        </h4>
						
                    </th>
                </tr>
            </thead>
            <tbody>

    </div>
	<div class="container">
        <div class="text-center">
            <img src="https://riccoprint.com/wp-content/uploads/2020/09/conntent_menu_food_a4-02.jpg" alt="network-logo" width="600" height="600">
	</div>
            


<script>
    $(function () {
        $('#btnAdd').on('click', function () {
            var name, country, id;
            id = $("#txtId").val();
            name = $("#txtName").val();
            country = $("#txtCountry").val();

            var edit = "<a class='edit' href='JavaScript:void(0);' >Edit</a>";
            var del = "<a class='delete' href='JavaScript:void(0);'>Delete</a>";

            if (name == "" || country == "") {
                alert("Name and Country fields required!");
            } else {
                var table = "<tr><td>" + id + "</td><td>" + name + "</td><td>" + country + "</td><td>" + edit + "</td><td>" + del + "</td></tr>";
                $("#tblCustomers").append(table);
            }
            id = $("#txtId").val("");
            name = $("#txtName").val("");
            country = $("#txtCountry").val("");
            Clear();
        });

        $('#btnUpdate').on('click', function () {
            var name, country, id;
            id = $("#txtId").val();
            name = $("#txtName").val();
            country = $("#txtCountry").val();

            $('#tblCustomers tbody tr').eq($('#hfRowIndex').val()).find('td').eq(1).html(name);
            $('#tblCustomers tbody tr').eq($('#hfRowIndex').val()).find('td').eq(2).html(country)

            $('#btnAdd').show();
            $('#btnUpdate').hide();
            Clear();
        });

        $("#tblCustomers").on("click", ".delete", function (e) {
            if (confirm("Are you sure want to delete this record!")) {
                $(this).closest('tr').remove();
            } else {
                e.preventDefault();
            }
        });

        $('#btnClear').on('click', function () {
            Clear();
        });

        $("#tblCustomers").on("click", ".edit", function (e) {
            var row = $(this).closest('tr');
            $('#hfRowIndex').val($(row).index());
            var td = $(row).find("td");
            $('#txtId').val($(td).eq(0).html());
            $('#txtName').val($(td).eq(1).html());
            $('#txtCountry').val($(td).eq(2).html());
            $('#btnAdd').hide();
            $('#btnUpdate').show();
        });
    });
    function Clear() {
        $("#txtId").val("");
        $("#txtName").val("");
        $("#txtCountry").val("");
        $("#hfRowIndex").val("");
    }

</script>

</body>
</html>
