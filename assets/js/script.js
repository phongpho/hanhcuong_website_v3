
document.addEventListener("DOMContentLoaded", function () {
    const fieldNodes = document.querySelectorAll(".fields-node");
    const fieldPanels = document.querySelectorAll(".fields-panel");

    fieldNodes.forEach(node => {
        node.addEventListener("click", function () {
            // Xóa trạng thái active cũ
            fieldNodes.forEach(n => n.classList.remove("active"));
            // Kích hoạt nút mới
            this.classList.add("active");

            // Ẩn nội dung cũ
            fieldPanels.forEach(panel => panel.classList.remove("active"));
            // Hiện nội dung mới
            const targetId = this.getAttribute("data-target");
            const targetPanel = document.getElementById(targetId);

            if (targetPanel) {
                targetPanel.classList.add("active");
            }
        });
    });
});
