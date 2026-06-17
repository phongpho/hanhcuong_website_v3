<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công ty cổ phần nông nghiệp Hạnh Cường</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <!-- banner -->
    <section class="banner">
        <div class="banner-content" alt="banner công ty cổ phần nông nghiệp Hạnh Cường">
            <span class="welcome-label">Welcome to</span>
            <h1>HẠNH CƯỜNG</h1>
            <div class="title-divider"></div>
            <p>
                Hệ sinh thái nông nghiệp quy mô lớn<br>tại An Giang
            </p>
        </div>
    </section>

    <!-- giới thiệu sơ lược -->
    <section class="about">
        <div class="container-about">

            <div class="about-picture" alt="">
                <img src="assets/images/background_banner.jpg" data-aos="fade-right">
            </div>

            <div class="about-content">
                <h2>
                    Giới thiệu về <span>HẠNH CƯỜNG</span>
                </h2>

                <p>
                    Công ty Cổ phần Nông nghiệp Hạnh Cường tự hào là một trong những đơn vị tiên phong, đặt nền móng cho mô hình phát triển kinh tế bền vững trong lĩnh vực chăn nuôi đại gia súc và nuôi trồng thủy sản tại tỉnh An Giang. Kể từ khi chính thức thành lập vào năm 2018, với tầm nhìn chiến lược và khát vọng nâng tầm nông nghiệp Việt Nam, công ty đã không ngừng nỗ lực nới rộng quy mô sản xuất, xây dựng thành công một hệ sinh thái nông nghiệp tuần hoàn, khép kín và đồng bộ từ chuỗi thức ăn đầu vào cho đến sản phẩm đầu ra chất lượng cao.
                </p>
                <p>
                    Sở hữu tiềm lực kinh tế vững vàng với tổng giá trị tài sản đạt khoảng 600 tỷ đồng, Hạnh Cường liên tục đầu tư mạnh mẽ vào hệ thống hạ tầng trang trại đạt chuẩn quốc tế, ứng dụng các giải pháp công nghệ cao hàng đầu vào quy trình chăn nuôi và kiểm soát nghiêm ngặt dịch bệnh. Chúng tôi luôn cam kết cung ứng nguồn thực phẩm sạch, an toàn tuyệt đối cho thị trường, đồng thời tối ưu hóa chuỗi giá trị nông nghiệp, bảo vệ môi trường sinh thái và đồng hành cùng sự phát triển thịnh vượng của cộng đồng địa phương.
                </p>

            </div>

        </div>
    </section>

    <!-- số liệu nổi bật -->
    <section class="features-section">
        <div class="container-features">
            <div class="features-grid">

                <!-- Thẻ 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sack-dollar"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Vốn Đầu Tư 600 Tỷ</h4>
                        <p>Tiềm lực tài chính vững mạnh</p>
                    </div>
                </div>
                
                <!-- Thẻ 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Chất lượng đạt chuẩn</h4>
                        <p>đạt chuẩn chất lượng...</p>
                    </div>
                </div>


                <!-- Thẻ 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Áp dụng công nghệ mới</h4>
                        <p>Công nghệ cao...</p>
                    </div>
                </div>

                <!-- Thẻ 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Hợp tác cùng phát triển</h4>
                        <p>hợp tác...</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- lĩnh vực hoạt động -->
    <section class="fields">
        <div class="container-fields">
            
            <div class="fields-header">
                <h2>Lĩnh Vực Hoạt Động</h2>
                <div class="why-divider">
                    <span class="line-orange"></span>
                    <i class="fas fa-leaf"></i>
                    <span class="line-orange"></span>
                </div>
                <p>Sự kết hợp hài hòa giữa tự nhiên và công nghệ cao tại vùng đất An Giang</p>
            </div>

            <div class="fields-showcase-wrapper">
                
                <div class="fields-navigation-axis">
                    <div class="fields-line-curve"></div>
                    
                    <div class="fields-node active" data-target="panel-channuoi">
                        <span class="node-number">01</span>
                        <span class="node-label">Chăn Nuôi Bò</span>
                    </div>

                    <div class="fields-node" data-target="panel-thuysan">
                        <span class="node-number">02</span>
                        <span class="node-label">Chăn nuôi Dê</span>
                    </div>

                    <div class="fields-node" data-target="panel-nongsan">
                        <span class="node-number">03</span>
                        <span class="node-label">Chăn nuôi Cá Tra</span>
                    </div>
                </div>

                <div class="fields-studio-display">
                    
                    <div class="fields-panel active" id="panel-channuoi">
                        <div class="studio-text-block">
                            <span class="studio-meta">Đang cập nhật</span>
                            <h3>Đang cập nhật</h3>
                            <p>Hạnh Cường đầu tư đồng bộ hệ thống chuồng trại khép kín hiện đại. Áp dụng nghiêm ngặt quy trình kỹ thuật chăn nuôi tiên tiến, chủ động kiểm soát nguồn con giống dinh dưỡng và dịch bệnh nhằm cung ứng sản lượng thịt sạch ổn định.</p>
                            <a href="#" class="studio-explore-btn">Xem chi tiết<i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="studio-image-block">
                            <img src="assets/images/chan-nuoi-bo.jpg" alt="Chăn nuôi bò gia súc">
                        </div>
                    </div>

                    <div class="fields-panel" id="panel-thuysan">
                        <div class="studio-text-block">
                            <span class="studio-meta">Đang cập nhật</span>
                            <h3>Đang cập nhật</h3>
                            <p>Khai thác lợi thế dòng nước ngọt dồi dào từ sông Hậu tại tỉnh An Giang, vùng nuôi cá tra thâm canh của chúng tôi áp dụng tiêu chuẩn an toàn thực phẩm khắt khe, kiểm soát chặt chẽ từ môi trường nước đến thức ăn đầu vào.</p>
                            <a href="#" class="studio-explore-btn">Xem chi tiết<i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="studio-image-block">
                            <img src="assets/images/chan-nuoi-ca-tra.jpg" alt="Nuôi cá tra xuất khẩu">
                        </div>
                    </div>

                    <div class="fields-panel" id="panel-nongsan">
                        <div class="studio-text-block">
                            <span class="studio-meta">Đang cập nhật</span>
                            <h3>Đang cập nhật</h3>
                            <p>Ứng dụng triệt để giải pháp nông nghiệp sạch. Phế phụ phẩm từ quá trình trồng trọt được xử lý khoa học để tái sản xuất nguồn thức ăn chăn nuôi giàu dinh dưỡng, vừa giảm thiểu tác động môi trường vừa tối ưu chuỗi giá trị.</p>
                            <a href="#" class="studio-explore-btn">Xem chi tiết<i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="studio-image-block">
                            <img src="assets/images/background_banner.jpg" alt="Nông nghiệp tuần hoàn">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- vì sao chọn chúng tôi -->
    <section class="why-choose-us">
        <div class="container-why">

            <div class="why-header">
                <h2>Vì Sao Chọn Chúng Tôi</h2>
                <div class="why-divider">
                    <span class="line"></span>
                    <i class="fas fa-leaf"></i>
                    <span class="line"></span>
                </div>
                <p>Mô tả vì sao chọn chúng tôi</p>
            </div>

            <div class="timeline-wrapper">
                <div class="center-line"></div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>Quy mô sản xuất lớn</h3>
                        <p>Sở hữu hệ thống trang trại tập trung quy mô lớn, áp dụng công nghệ hiện đại mang lại năng suất và sản lượng vượt trội.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <div class="horizontal-line"></div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-dot"></div>
                    <div class="horizontal-line"></div>
                    <div class="timeline-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Tổng tài sản 600 tỷ đồng</h3>
                        <p>Tiềm lực tài chính vững mạnh đảm bảo khả năng đầu tư dài hạn vào công nghệ, hạ tầng và mở rộng chuỗi cung ứng.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>Kinh nghiệm vận hành</h3>
                        <p>Đội ngũ chuyên gia dày dặn kinh nghiệm, làm chủ quy trình kỹ thuật chăn nuôi và kiểm soát dịch bệnh nghiêm ngặt.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="horizontal-line"></div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-dot"></div>
                    <div class="horizontal-line"></div>
                    <div class="timeline-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Phát triển bền vững</h3>
                        <p>Cam kết phát triển mô hình nông nghiệp sạch tuần hoàn, bảo vệ môi trường sinh thái và đồng hành cùng cộng đồng.</p>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- hình ảnh thực tế -->
    <section class="gallery">
        <div class="container-gallery">

            <h2>Hình ảnh tại trang trại</h2>
            <div class="title-divider"></div>

            <div class="gallery-grid">

                <div class="gallery-item large">
                    <img src="assets/images/chan-nuoi-bo.jpg" alt="">
                </div>

                <div class="gallery-item">
                    <img src="assets/images/chan-nuoi-de.jpg" alt="">
                </div>

                <div class="gallery-item">
                    <img src="assets/images/chan-nuoi-ca-tra.jpg" alt="">
                </div>

                <div class="gallery-item wide">
                    <img src="assets/images/chan-nuoi-bo.jpg" alt="">
                </div>

                <div class="gallery-item">
                    <img src="assets/images/chan-nuoi-ca-tra.jpg" alt="">
                </div>

            </div>

        </div>
    </section>

    

    <?php include 'includes/footer.php'; ?>
    <script>
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
    </script>
</body>

</html>