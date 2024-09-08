 // ฟังก์ชันสำหรับการชำระเงิน
 function handlePayment(a) {
    // ซ่อนปุ่มชำระเงิน
    a.style.display = "none";

    // สร้างข้อความ "ชำระแล้ว"
    var paymentText = document.createElement("span");
    paymentText.textContent = "ชำระแล้ว";

    // เพิ่มข้อความ "ชำระแล้ว" เข้าไปใน label
    var label = document.getElementById("payment-label");
    label.appendChild(paymentText);
}

//วิธีใช้
//  <a  class="btn btn-outline-primary btn-sm payment-btn" onclick="handlePayment(this)">ชำระเงิน</a>
// <label id="payment-label"></label> 


//ตาราง 5 บรรทัด พร้อมปุ่มค้นหา
function setupEquipmentTable() {
    var currentPage = 1;
    var rowsPerPage = 5; // Number of rows per page
    var $tableRows = $("#page-table tbody tr");
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
  