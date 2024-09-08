//checkbox-------------------------

/*$(document).ready(function () {
    $('#select-all').click(function (event) {
        if (this.checked) {
            // Iterate each checkbox and check it
            $(':checkbox').each(function () {
                this.checked = true;
            });
        }
        else {
            // Iterate each checkbox and uncheck it
            $(':checkbox').each(function () {
                this.checked = false;
            });
        }
    });
});
//ไม่มี---------------------------

$(document).ready(function() {
    $('#no-button').click(function() {
        // หากปุ่ม "ไม่มี" ถูกเลือก
        if ($(this).prop('checked')) {
            // ซ่อนปุ่มทั้งหมดยกเว้นปุ่ม "ไม่มี"
            $('input[type="checkbox"]').not(this).hide();
        } else {
            // แสดงปุ่มทั้งหมดอีกครั้ง
            $('input[type="checkbox"]').show();
        }
    });
});

*/

$(document).ready(function() {
    // เมื่อมีการคลิกที่ checkbox "ไม่มี"
    $('#checkbox-no').click(function() {
        // หาก checkbox ถูกเลือก
        if ($(this).prop('checked')) {
            // ซ่อนปุ่ม "ทั้งหมด"
            $('#select-all').hide();
            $('input[type="checkbox"]').not(this).hide();
            $('#container-div').hide();
        } else {
            // แสดงปุ่ม "ทั้งหมด" ในกรณีที่ checkbox "ไม่มี" ไม่ถูกเลือก
            $('#select-all').show();
            $('input[type="checkbox"]').show();
            $('#container-div').show();
        }
    });

    // เมื่อมีการคลิกที่ checkbox ทั้งหมด
    $('#select-all').click(function() {
        // หาก checkbox ถูกเลือก
        if ($(this).prop('checked')) {
            // ตรวจสอบทุก checkbox และเลือกทั้งหมดยกเว้น checkbox "ไม่มี"
            $(':checkbox').not('#checkbox-no').prop('checked', true);
        } else {
            // ยกเลิกการเลือกทั้งหมด
            $(':checkbox').prop('checked', false);
        }
    });
});


//ตาราง 5 บรรทัด พร้อมปุ่มค้นหา
function setupEquipmentTable() {
    var currentPage = 1;
    var rowsPerPage = 7; // Number of rows per page
    var $tableRows = $("#equipment-table tbody tr");
    var totalPages = Math.ceil($tableRows.length / rowsPerPage);

    // Initially show only the first page
    showPage(currentPage);

    // Event listener for next page button
    $(".next-page").click(function() {
        currentPage = currentPage < totalPages ? currentPage + 1 : currentPage;
        showPage(currentPage);
    });

    // Event listener for previous page button
    $(".prev-page").click(function() {
        currentPage = currentPage > 1 ? currentPage - 1 : currentPage;
        showPage(currentPage);
    });

    // Function to show rows for the specified page
    function showPage(page) {
        var startIndex = (page - 1) * rowsPerPage;
        var endIndex = startIndex + rowsPerPage;
        $tableRows.addClass("hidden").slice(startIndex, endIndex).removeClass("hidden");
        $(".page-indicator").text("หน้า " + page);
    }

    // Event listener for search button
    $(".search-btn").click(function() {
        var searchTerm = $(".search-input").val().toLowerCase();
        $tableRows.addClass("hidden").filter(function() {
            return $(this).text().toLowerCase().includes(searchTerm);
        }).removeClass("hidden");
    });
}

$(document).ready(function() {
    setupEquipmentTable();
});
  