
# Website Project RPL NEWS

# Bahan yang di gunakan
- XAMPP minimal Versi PHP 5 Keatas
- Visual Studio Code (VSC)
- Google Chrome
- PHP
- HTML
- CSS
- Bootstrap
  
# Cara Menggunakan
1. install xampp minimal versi PHP5 ke atas
2. Lalu import database yang terletak pada folder project1
3. sesuaikan nama koneksi.php yang terletak di project1 dan cari baris 3 `$koneksi = mysqli_connect('localhost', 'root', '', 'rpl_news') or die ('koneksi gagal');` sesuaikan nama database yang telah diimport dengan nama `rpl_news`.
4. lalu pindahkan file yang ada di `project1` ke folder htdocs.
5. jalankan apache dan mysql pada xampp.
6. lalu akses pada browser dengan url `localhost/namafoldernya/file`.
7. contoh cara mengakses di browser
```
http://localhost/project1/index.php
```

# Username & Password
```
- username = `admin`
- password = `1223`
```

## Fitur Project 
- Admin
1. Login
2. Admin_panel : Crud Berita
- User
4. Homepage: responsive css,news
5. Berita:Thumbnail Berita,Judul,Isi,Penulis,Tanggal_terbit.

## Struktur project
📦project1

 ┣ 📜admin.css  
 ┣ 📜admin_panel.php  
 ┣ 📜berita.php  
 ┣ 📜crud.php  
 ┣ 📜delete.php  
 ┣ 📜home.css  
 ┣ 📜index.html  
 ┣ 📜koneksi.php  
 ┣ 📜login.php  
 ┣ 📜stylecrud.css  
 ┣ 📜stylelogin.css  
 ┗ 📜update.php
 
 ┣ 📂aset  
 ┃ ┗ 📜kelas.jpeg  
 
 ┣ 📂database  
 ┃ ┗ 📜rpl_news (1).sql
 
 ┣ 📂img  
 ┃ ┣ 📜6668f15c5cb03.jpg  
 
 ┣ 📂template  
 ┃ ┣ 📂css  
 ┃ ┃ ┣ 📜all.css  
 ┃ ┃ ┣ 📜animate.css  
 ┃ ┃ ┣ 📜aos.css  
 ┃ ┃ ┣ 📜bootstrap.min.css  
 ┃ ┃ ┣ 📜flaticon.css  
 ┃ ┃ ┣ 📜font-awesome.min.css  
 ┃ ┃ ┣ 📜gijgo.min.css  
 ┃ ┃ ┣ 📜magnific-popup.css  
 ┃ ┃ ┣ 📜nice-select.css  
 ┃ ┃ ┣ 📜owl.carousel.min.css  
 ┃ ┃ ┣ 📜slick.css  
 ┃ ┃ ┣ 📜style.css  
 ┃ ┃ ┣ 📜style.map  
 ┃ ┃ ┣ 📜swiper.min.css  
 ┃ ┃ ┗ 📜themify-icons.css  
 ┃ ┣ 📂dingo restautent doc  
 ┃ ┃ ┣ 📂css  
 ┃ ┃ ┃ ┣ 📜font-awesome.min.css  
 ┃ ┃ ┃ ┣ 📜main.css  
 ┃ ┃ ┃ ┗ 📜normalize.min.css  
 ┃ ┃ ┣ 📂fonts  
 ┃ ┃ ┃ ┣ 📜fontawesome-webfont.eot  
 ┃ ┃ ┃ ┣ 📜fontawesome-webfont.svg  
 ┃ ┃ ┃ ┣ 📜fontawesome-webfont.ttf  
 ┃ ┃ ┃ ┣ 📜fontawesome-webfont.woff  
 ┃ ┃ ┃ ┗ 📜FontAwesome.otf  
 ┃ ┃ ┣ 📂img  
 ┃ ┃ ┃ ┗ 📜logo.png  
 ┃ ┃ ┣ 📂js  
 ┃ ┃ ┃ ┣ 📜custom.js  
 ┃ ┃ ┃ ┣ 📜jquery-1.11.0.min.js  
 ┃ ┃ ┃ ┗ 📜jquery.nav.js  
 ┃ ┃ ┗ 📜index.html  
 ┃ ┣ 📂fonts  
 ┃ ┃ ┣ 📜Flaticon.eot  
 ┃ ┃ ┣ 📜Flaticon.ttf  
 ┃ ┃ ┣ 📜Flaticon.woff  
 ┃ ┃ ┣ 📜Flaticon.woff2  
 ┃ ┃ ┣ 📜fontawesome-webfont.eot  
 ┃ ┃ ┣ 📜fontawesome-webfont.svg  
 ┃ ┃ ┣ 📜fontawesome-webfont.ttf  
 ┃ ┃ ┣ 📜fontawesome-webfont.woff  
 ┃ ┃ ┣ 📜fontawesome-webfont.woff2  
 ┃ ┃ ┣ 📜FontAwesome.otf  
 ┃ ┃ ┣ 📜gijgo-material.ttf  
 ┃ ┃ ┣ 📜gijgo-material.woff  
 ┃ ┃ ┣ 📜themify.eot  
 ┃ ┃ ┣ 📜themify.svg  
 ┃ ┃ ┣ 📜themify.ttf  
 ┃ ┃ ┗ 📜themify.woff  
 ┃ ┣ 📂img  
 ┃ ┃ ┣ 📂animate_icon  
 ┃ ┃ ┃ ┣ 📜icon_1.png  
 ┃ ┃ ┃ ┣ 📜icon_2.png  
 ┃ ┃ ┃ ┣ 📜icon_3.png  
 ┃ ┃ ┃ ┣ 📜icon_4.png  
 ┃ ┃ ┃ ┣ 📜icon_5.png  
 ┃ ┃ ┃ ┣ 📜icon_7.png  
 ┃ ┃ ┃ ┣ 📜icon_8.png  
 ┃ ┃ ┃ ┗ 📜icon_9.png  
 ┃ ┃ ┣ 📂blog  
 ┃ ┃ ┃ ┣ 📜author.png  
 ┃ ┃ ┃ ┣ 📜blog_1.png  
 ┃ ┃ ┃ ┣ 📜blog_2.png  
 ┃ ┃ ┃ ┣ 📜blog_3.png  
 ┃ ┃ ┃ ┣ 📜blog_4.png  
 ┃ ┃ ┃ ┣ 📜learn_about_bg.png  
 ┃ ┃ ┃ ┣ 📜single_blog_1.png  
 ┃ ┃ ┃ ┣ 📜single_blog_2.png  
 ┃ ┃ ┃ ┣ 📜single_blog_3.png  
 ┃ ┃ ┃ ┣ 📜single_blog_4.png  
 ┃ ┃ ┃ ┣ 📜single_blog_5.png  
 ┃ ┃ ┃ ┗ 📜slide_thumb_1.png  
 ┃ ┃ ┣ 📂client  
 ┃ ┃ ┃ ┗ 📜client_1.png  
 ┃ ┃ ┣ 📂comment  
 ┃ ┃ ┃ ┣ 📜comment_1.png  
 ┃ ┃ ┃ ┣ 📜comment_2.png  
 ┃ ┃ ┃ ┗ 📜comment_3.png  
 ┃ ┃ ┣ 📂elements  
 ┃ ┃ ┃ ┣ 📜a.jpg  
 ┃ ┃ ┃ ┣ 📜a2.jpg  
 ┃ ┃ ┃ ┣ 📜d.jpg  
 ┃ ┃ ┃ ┣ 📜disabled-check.png  
 ┃ ┃ ┃ ┣ 📜disabled-radio.png  
 ┃ ┃ ┃ ┣ 📜f1.jpg  
 ┃ ┃ ┃ ┣ 📜f2.jpg  
 ┃ ┃ ┃ ┣ 📜f3.jpg  
 ┃ ┃ ┃ ┣ 📜f4.jpg  
 ┃ ┃ ┃ ┣ 📜f5.jpg  
 ┃ ┃ ┃ ┣ 📜f6.jpg  
 ┃ ┃ ┃ ┣ 📜f7.jpg  
 ┃ ┃ ┃ ┣ 📜f8.jpg  
 ┃ ┃ ┃ ┣ 📜g1.jpg  
 ┃ ┃ ┃ ┣ 📜g2.jpg  
 ┃ ┃ ┃ ┣ 📜g3.jpg  
 ┃ ┃ ┃ ┣ 📜g4.jpg  
 ┃ ┃ ┃ ┣ 📜g5.jpg  
 ┃ ┃ ┃ ┣ 📜g6.jpg  
 ┃ ┃ ┃ ┣ 📜g7.jpg  
 ┃ ┃ ┃ ┣ 📜g8.jpg  
 ┃ ┃ ┃ ┣ 📜primary-check.png  
 ┃ ┃ ┃ ┣ 📜primary-radio.png  
 ┃ ┃ ┃ ┣ 📜success-check.png  
 ┃ ┃ ┃ ┗ 📜success-radio.png  
 ┃ ┃ ┣ 📂food_item  
 ┃ ┃ ┃ ┣ 📜food_item_1.png  
 ┃ ┃ ┃ ┣ 📜food_item_2.png  
 ┃ ┃ ┃ ┗ 📜food_item_3.png  
 ┃ ┃ ┣ 📂food_menu  
 ┃ ┃ ┃ ┣ 📜single_food_1.png  
 ┃ ┃ ┃ ┣ 📜single_food_2.png  
 ┃ ┃ ┃ ┣ 📜single_food_3.png  
 ┃ ┃ ┃ ┣ 📜single_food_4.png  
 ┃ ┃ ┃ ┣ 📜single_food_5.png  
 ┃ ┃ ┃ ┗ 📜single_food_6.png  
 ┃ ┃ ┣ 📂icon  
 ┃ ┃ ┃ ┣ 📜left_1.svg  
 ┃ ┃ ┃ ┣ 📜left_2.svg  
 ┃ ┃ ┃ ┣ 📜left_3.svg  
 ┃ ┃ ┃ ┣ 📜play.svg  
 ┃ ┃ ┃ ┗ 📜quate.svg  
 ┃ ┃ ┣ 📂post  
 ┃ ┃ ┃ ┣ 📜next.png  
 ┃ ┃ ┃ ┣ 📜post_1.png  
 ┃ ┃ ┃ ┣ 📜post_10.png  
 ┃ ┃ ┃ ┣ 📜post_2.png  
 ┃ ┃ ┃ ┣ 📜post_3.png  
 ┃ ┃ ┃ ┣ 📜post_4.png  
 ┃ ┃ ┃ ┣ 📜post_5.png  
 ┃ ┃ ┃ ┣ 📜post_6.png  
 ┃ ┃ ┃ ┣ 📜post_7.png  
 ┃ ┃ ┃ ┣ 📜post_8.png  
 ┃ ┃ ┃ ┣ 📜post_9.png  
 ┃ ┃ ┃ ┗ 📜preview.png  
 ┃ ┃ ┣ 📂team  
 ┃ ┃ ┃ ┣ 📜chefs_1.png  
 ┃ ┃ ┃ ┣ 📜chefs_2.png  
 ┃ ┃ ┃ ┗ 📜chefs_3.png  
 ┃ ┃ ┣ 📜about.png  
 ┃ ┃ ┣ 📜about_overlay.png  
 ┃ ┃ ┣ 📜banner_bg.png  
 ┃ ┃ ┣ 📜banner_overlay.png  
 ┃ ┃ ┣ 📜booking_tabel_bg.png  
 ┃ ┃ ┣ 📜breadcrumb.png  
 ┃ ┃ ┣ 📜favicon.png  
 ┃ ┃ ┣ 📜intro_video_bg.png  
 ┃ ┃ ┣ 📜logo.png  
 ┃ ┃ ┗ 📜Quote.png  
 ┃ ┣ 📂js  
 ┃ ┃ ┣ 📜aos.js  
 ┃ ┃ ┣ 📜bootstrap.min.js  
 ┃ ┃ ┣ 📜contact.js  
 ┃ ┃ ┣ 📜custom.js  
 ┃ ┃ ┣ 📜gijgo.min.js  
 ┃ ┃ ┣ 📜gmaps.min.js  
 ┃ ┃ ┣ 📜jquery-1.12.1.min.js  
 ┃ ┃ ┣ 📜jquery-3.3.1.slim.min.js  
 ┃ ┃ ┣ 📜jquery.ajaxchimp.min.js  
 ┃ ┃ ┣ 📜jquery.easing.min.js  
 ┃ ┃ ┣ 📜jquery.form.js  
 ┃ ┃ ┣ 📜jquery.magnific-popup.js  
 ┃ ┃ ┣ 📜jquery.nice-select.min.js  
 ┃ ┃ ┣ 📜jquery.validate.min.js  
 ┃ ┃ ┣ 📜mail-script.js  
 ┃ ┃ ┣ 📜masonry.pkgd.js  
 ┃ ┃ ┣ 📜masonry.pkgd.min.js  
 ┃ ┃ ┣ 📜owl.carousel.min.js  
 ┃ ┃ ┣ 📜particles.min.js  
 ┃ ┃ ┣ 📜popper.min.js  
 ┃ ┃ ┣ 📜slick.min.js  
 ┃ ┃ ┣ 📜swiper.min.js  
 ┃ ┃ ┗ 📜swiper_custom.js  
 ┃ ┣ 📂sass  
 ┃ ┃ ┣ 📜style.scss  
 ┃ ┃ ┣ 📜_about.scss  
 ┃ ┃ ┣ 📜_banner.scss  
 ┃ ┃ ┣ 📜_blog.scss  
 ┃ ┃ ┣ 📜_blog_part.scss  
 ┃ ┃ ┣ 📜_breadcrumb.scss  
 ┃ ┃ ┣ 📜_button.scss  
 ┃ ┃ ┣ 📜_chefs_part.scss  
 ┃ ┃ ┣ 📜_common.scss  
 ┃ ┃ ┣ 📜_contact.scss  
 ┃ ┃ ┣ 📜_copyright_part.scss  
 ┃ ┃ ┣ 📜_elements.scss  
 ┃ ┃ ┣ 📜_exclusive_item_part.scss  
 ┃ ┃ ┣ 📜_extends.scss  
 ┃ ┃ ┣ 📜_food_menu.scss  
 ┃ ┃ ┣ 📜_footer.scss  
 ┃ ┃ ┣ 📜_gallery_part.scss  
 ┃ ┃ ┣ 📜_intro_video_bg.scss  
 ┃ ┃ ┣ 📜_menu.scss  
 ┃ ┃ ┣ 📜_mixins.scss  
 ┃ ┃ ┣ 📜_portfolio.scss  
 ┃ ┃ ┣ 📜_project_details.scss  
 ┃ ┃ ┣ 📜_regervation_part.scss  
 ┃ ┃ ┣ 📜_review.scss  
 ┃ ┃ ┣ 📜_service.scss  
 ┃ ┃ ┣ 📜_single_blog.scss  
 ┃ ┃ ┣ 📜_social_connect_part.scss  
 ┃ ┃ ┣ 📜_team.scss  
 ┃ ┃ ┗ 📜_variables.scss  
 ┃ ┣ 📂webfonts  
 ┃ ┃ ┣ 📜fa-brands-400.eot  
 ┃ ┃ ┣ 📜fa-brands-400.svg  
 ┃ ┃ ┣ 📜fa-brands-400.ttf  
 ┃ ┃ ┣ 📜fa-brands-400.woff  
 ┃ ┃ ┣ 📜fa-brands-400.woff2  
 ┃ ┃ ┣ 📜fa-regular-400.eot  
 ┃ ┃ ┣ 📜fa-regular-400.svg  
 ┃ ┃ ┣ 📜fa-regular-400.ttf  
 ┃ ┃ ┣ 📜fa-regular-400.woff  
 ┃ ┃ ┣ 📜fa-regular-400.woff2  
 ┃ ┃ ┣ 📜fa-solid-900.eot  
 ┃ ┃ ┣ 📜fa-solid-900.svg  
 ┃ ┃ ┣ 📜fa-solid-900.ttf  
 ┃ ┃ ┣ 📜fa-solid-900.woff  
 ┃ ┃ ┗ 📜fa-solid-900.woff2  
 ┃ ┣ 📜about.html  
 ┃ ┣ 📜blog.html  
 ┃ ┣ 📜chefs.html  
 ┃ ┣ 📜contact.html  
 ┃ ┣ 📜contact_process.php  
 ┃ ┣ 📜elements.html  
 ┃ ┣ 📜food_menu.html  
 ┃ ┣ 📜index.html  
 ┃ ┗ 📜single-blog.html  
