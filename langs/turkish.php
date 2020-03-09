﻿<?php
function lang($txt){
    static $lang = array(
    // home page
    'html_dir' => 'ltr',
    'homeLinks' => 'left',
    'sponsored_align' => 'left',
    'main' => 'Main',
    'my_photos' => 'Fotoğraflarım',
    'my_posts' => 'Paylaşımlarım',
    'settings' => 'Ayarlar',
    'my_notepad' => 'Notlarım',
    'new_note' => 'Yeni Not',
    'see_all_notes' => 'Tüm Notları Görüntüle',
    'more' => 'Daha Fazla',
    'advertisement' => 'Reklamlar',
    'followers' => 'Takipçiler',
    'following' => 'Takip Edilenler',
    'saved_posts' => 'Kaydedilenler',
    'sponsored' => 'Sponsorlu',
    'w_post_li' => 'left',
    'w_post_li2' => 'right',
    'w_post_align' => 'left',
    'w_post_dir' => 'ltr',
    'post_textbox_placeholder' => 'Ne düşünüyorsun?',
    'post_textbox_align' => 'left',
    'post_now' => 'Paylaş',
    'w_title_inputText' => 'Paylaşımına bir başlık ekle (isteğe göre)',
    'post_align' => 'left',
    'post_span_float' => 'right',
    'post_options' => 'right',
    'post_content_align' => 'left',
    'comment_field_align' => 'left',
    'comment_field_ph' => 'Bir yorum yaz...',
    'comment' => 'Yorum',
    'u_liked_this' => 'Bunu beğendin',
    'liked' => 'Beğen',
    'share_now' => 'Paylaş',
    'comment_time_align' => 'left',
    'comments' => 'yorumlar',
    'no_comments' => 'Yorum yok',
    'likes' => 'Beğeniler',
    'no_likes' => 'İlk beğenen ol',
    'like' => 'Beğen',
    'just_now' => 'Şimdi',
    'minute_ago' => 'dakika önce',
    'minutes_ago' => 'dakika önce',
    'hour_ago' => 'saat önce',
    'hours_ago' => 'saat önce',
    'day_ago' => 'gün önce',
    'days_ago' => 'gün önce',
    'week_ago' => 'hafta önce',
    'weeks_ago' => 'hafta önce',
    'month_ago' => 'ay önce',
    'months_ago' => 'ay önce',
    'year_ago' => 'yıl önce',
    'years_ago' => 'yıl önce',
    'HLP_b' => 'homelinksP_borderL',
    'user_info_align' => 'left',
    'comment_field_align' => 'left',
    'edit_profile' => 'Profili düzenle',
    'posts_str' => 'Paylaşımlar',
    'followers_str' => 'Takipçiler',
    'following_str' => 'Takip Edilenler',
    'uProf_ffTitle_align' => 'left',
    'uProf_followersTitle' => 'takipçiler',
    'uProf_urfollowersTitle' => 'Senin takipçilerin',
    'uProf_followersTitleCheck' => 'en',
    'uProf_followingTitle' => 'takipçiler',
    'uProf_urfollowingTitle' => 'Takip ettiklerin',
    'uProf_followingTitleHe' => 'he ',
    'uProf_followingTitleShe' => 'she ',
    'uProf_followingTitle1' => 'People that',
    'uProf_followingTitle2' => 'are following',
    'followingBtn_str' => 'Takip ediyorsun',
    'followBtn_str' => 'Takip et',
    'postDropdown' => 'dropdown-menu-right',
    'postDropdownTxtAlign' => 'left',
    'EditPost_DDM' => 'Düzenle',
    'DeletePost_DDM' => 'Sil',
    'reportPost_DDM' => 'Bildir',
    'savePost_DDM' => 'Paylaşımı kaydet',
    'p_title_male' => ' profil fotoğrafını güncelledi.',
    'p_title_famale' => ' profil fotoğrafını güncelledi.',
    'pc_title_male' => ' kapak fotoğrafını güncelledi.',
    'pc_title_famale' => ' kapak fotoğrafını güncelledi.',
    'not_specified' => 'Belirtilmemiş',
    'verified_page' => 'Onaylı sayfa',
    'my_photos' => 'Fotoğraflarım',
    'my_photos_align' => 'left',
    'all_postsSTR' => 'tüm paylaşımlar',
    'all_postsSTR_align' => 'left',
    'nothingToShow' => 'Gösterecek bir şey yok',
    'working' => 'Çalıştığı yer ve pozisyon:',
    'at' => '\'da',
    'lives_in' => 'Yaşadığı yer:',
    'born_on' => 'Doğum tarihi:',
    'studies' => 'Eğitim Durumu: ',
    'about' => 'kimdir?',
    'bio' => 'Bio',
    'onlyUcanCThis' => 'Bunu sadece sen görebilirsin',
    'save' => 'Kaydet',
    'cancel' => 'İptal',
    'uploadPhoto' => 'Yükle',
    'addToFavoritePages' => 'Favorilerine kaydet',
    'unFavoritePage' => 'Favorilerinden çıkar',
    'report' => 'Bildir',
    'textAlign' => 'left',
    'errorPost_n1' => 'Bu paylaşım 15 karakterden daha az olmamalıdır.',
    'errorPost_n2' => 'Lütfen bir fotoğraf seçin, sonra tekrar deneyin.',
    'errorPost_n3' => 'Fotoğrafınız 4MB den daha az olmalıdır.',
    'errorPost_n4' => 'Fotoğrafınız jpeg, jpg ya da png uzantılı değil.',
    'errorPost_n5' => 'Fotoğrafınız işlenirken bir hata oluştu, lütfen tekrar deneyin.',
    'errorPost_n6' => 'ERROR: Fotoğraf yüklenemedi, tekrar deneyin.',
    'supportBox' => 'Destek kutusu',
    'seeAll' => 'Hepsini gör',
    'language' => 'Dil',
    'float' => 'left',
    'float2' => 'right',
    'ul_navbar_nav1' => 'nav navbar-nav',
    'ul_navbar_nav2' => 'nav navbar-nav navbar-right',
    'navbar_home' => 'Ana sayfa',
    'notifications' => 'Bildirimler',
    'messages' => 'Mesajlar',
    'navbar_uMenu_UserProfile' => 'Profil',
    'adminOptions' => 'Admin ayarları',
    'dashboard' => 'Kontrol paneli',
    'terms' => 'Şartlar',
    'privacyPolicy' => 'Gizlilik politikası',
    'Report_A_Problem' => 'Sorun bildir',
    'logout' => 'Çıkış yap',
    'navbar_serchBox_ph' => 'Ara..',
    'trending_worldWide' => 'Dünya ne konuşuyor?',
    'posts' => 'Paylaşımlar',
    'pages' => 'Sayfalar',
    'reactions' => 'tepkiler',
    'by' => 'By',
    'please_wait' => 'Lütfen bekleyin...',
    'favourite_pages' => 'Beğenilen sayfalar',
    'wpr_public' => 'Herkese açık',
    'wpr_followers' => 'Takipçiler',
    'wpr_onlyme' => 'Sadece ben',
    'user_photos' => 'Fotoğraflar',
    'stars_str' => 'Favoriler',
    'share' => 'paylaşım',
    'shares' => 'paylaşımlar',
    'no_shares' => 'paylaşım yok',
    'wpost_write' => 'Yaz..',
    'wpost_upPhoto' => 'Fotoğraf',
    'wpost_title' => 'Başlık',
    'shared_a_Post' => 'Bir paylaşımda bulundu',
    'comm_edited' => 'Düzenlendi',
    'comm_edit' => 'Yorumu düzenle',
    'comm_delete' => 'Yorumu sil',
    'comm_report' => 'Yorumu bildir',
    'recently_starts_from' => 'Recently starts from :',
    'load_more' => 'Daha fazla göster',
    'postSaved' => 'Paylaşım kaydedildi',
    'postSavedBefore' => 'Bu paylaşımı daha önce kaydetmişsin!',
    'errorSomthingWrong' => 'Eyvah, bir hata oluştu! Daha sonra tekrar deneyin.',
    'postShared' => 'Paylaşımınız akışınızda paylaşıldı',
    'newLine_Shift_enter' => 'Yeni satır &xrarr;',
    'totalPhotos' => 'Toplam fotoğraf',
    'see_all' => 'Hepsini gör',
    'likeNotify_str' => 'fotoğrafını beğendi',
    'commmentNotify_str' => 'paylaşımına yorum yaptı',
    'shareNotify_str' => 'paylaşımını paylaştı',
    'starNotify_str' => 'You got new star from',
    'followNotify_str' => 'seni takip ediyor',
    'no_notifications' => 'Bildirim yok',
    'accountSetup' => 'Hesap ayarları',
    'complete' => 'Tamamla',
    'as_followPeople' => 'İnsanları takip et',
    'as_profileInfo' => 'Profil bilgileri',
    'as_coverPhoto' => 'Kapak fotoğrafı',
    'as_userPhoto' => 'Kullanıcı fotoğrafı',
    'noMoreStories' => 'Daha fazla hikaye yok',
    'you_have_not_posted_anything_yet' => 'Şimdiye kadar hiçbir şey paylaşmadın',
    'has_not_posted_anything_yet' => 'şimdiye kadar hiçbir şey paylaşmadı',
    'not_found' => 'Bulunamadı',
    'no_users_like_the_name_you_entered' => 'Bu isimde kimse yok',
    'publicPosts' => 'Herkese açık paylaşımlar',
    'searchMoreAbout' => 'Search more about',
    'advancedSearch' => 'Gelişmiş arama',
    'profilePageNotFound_str1' => 'Üzgünüm, böyle bir sayfa yok.',
    'profilePageNotFound_str2' => 'Üzgünüm, böyle bir sayfa ya hiç olmadı, ya da kaldırıldı.',
    'profilePageNotFound_str3' => 'Bir önceki sayfaya dön',
    'posting' => 'Paylaşılıyor..',
    'hashtag_not_available' => 'Hashtag uygun değil!',
    'news' => 'Haberler',
    'tv' => 'Tv',
    'store' => 'Mağaza',
    'new' => 'Yeni',
    'job' => 'İş',
    'all_posts_that_you_saved' => 'Kaydettiğiniz bütün paylaşımlar',
    'nothing_saved_yet' => 'Daha hiçbir şey kaydedilmedi',
    'do_you_want_to_delete_this' => 'Bunu silmek istediğine emin misin?',
    'you_can_not_undo_this_after_deleting_it' => 'Sildikten sonra geri getiremezsin.',
    'delete' => 'Sil',
    'open' => 'açık',
    'closed' => 'kapalı',
    'you_anonymously_reported_a' => 'You anonymously reported a',
    'post' => 'paylaşım',
    'click_to_view_your_report' => 'Bildirini görüntülemek için tıkla',
    'replay' => 'Tekrar',
    'your_report' => 'Senin raporun',
    'help_us_to_make_our_community_better' => 'Sayfamızı daha iyi yerlere getirebilmemiz için yardımda bulunun. ',
    'submit' => 'gönder',
    'subject' => 'Konu',
    'your_feedback_helps_us_improve_our_community' => 'Geri bildiriminiz sayfamızı daha iyi günlere getirir.',
    'post_reported' => 'Paylaşım bildirildi. En kısa zamanda incelenecektir.',
    'mynotepad_main_title' => 'Save your secret password, codes, notes, links and everything online .. just you can view or edit it',
    'newNote_p' => 'Create new secret note, Only you can see and edit it',
    'newNote_title' => 'Note title',
    'newNote_content' => 'Note content',
    'create' => 'create',
    'saved' => 'Saved',
    'current_password_is_incorrect' => 'Current password is incorrect',
    'please_fill_required_fields' => 'Please fill required fields',
    'new_password_doesnt_match_the_confirm_field' => 'New password field doesn\'t match the confirm field',
    'changes_saved_seccessfully' => 'changes saved seccessfully',
    'remove_account' => 'Hesabı kaldır',
    'general' => 'Genel',
    'male' => 'Erkek',
    'female' => 'Kadın',
    'fullname' => 'İsim',
    'username' => 'Kullanıcı adı',
    'email' => 'Email adresi',
    'required' => 'Gerekli',
    'new_password' => 'Yeni şifre',
    'confirm_new_password' => 'Şifrenizi tekrar girin',
    'gender' => 'Cinsiyet',
    'current_password' => 'Şuanki şifreniz',
    'save_changes' => 'Değişiklikleri kaydedin',
    'education' => 'Eğitim',
    'work' => 'İş',
    'work_title' => 'İş ünvanı',
    'work_place' => 'Çalıştığınız yer',
    'at' => 'da',
    'country' => 'Ülke',
    'birthday' => 'Doğum günü',
    'website' => 'Website',
    'bio' => 'Hakkında',
    'profile_pic_shape' => 'Profil fotoğrafı şekli',
    'circle' => 'Daire',
    'square' => 'Kare',
    'remove_account' => 'Hesabı kaldır',
    'remove_account_note' => '<b>Hesabı kaldır</b> tuşuna bastığın anda bütün verilerin silinecektir, emin misin?',
    'loadmore' => 'Daha fazla',
    'users' => 'Kullanıcılar',
    'males' => 'Erkekler',
    'females' => 'Kadınlar',
    'completed_profiles' => 'Tamamlanmış profiller',
    'stars' => 'Yıldızlar',
    'notes' => 'Notlar',
    'verified_users' => 'Onaylı kullanıcılar',
    'admins' => 'Adminler',
    'verify_badge' => 'Verify badge',
    'verify_user' => 'Kullanıcıyı onayla',
    'remove_verifyBadge' => 'Onaylı simgesini kaldır',
    'edit_delete_dashboard' => 'Düzenle / Sil',
    'verify_badge_removed_succ_from' => 'Onaylı simgesini başarıyla kaldırdın: ',
    'verified_successfully' => 'Başarıyla onaylandı',
    'user_doesnt_exist' => 'Böyle bir kullanıcı bulunmuyor.',
    'yes' => 'Evet',
    'no' => 'Hayır',
    'upgradeToAdmin' => 'Admin yap',
    'password' => 'Şifre',
    'username_allowed_error' => 'Özel karakterler ya da boşluklar kullanılamaz. Sadece "_","." sembolleri kelimeler arasında kullanılabilir.',
    'user_already_exist' => 'Kullanıcı adı zaten kullanılıyor!',
    'uCannot_access_admin_data' => 'Admin verisini değiştiremezsin!',
    'uCan_access_your_data_from_settings' => 'Buranın adminisin, verileri düzenleyebilir, silebilirsin.',
    'from' => 'From',
    'time' => 'Zaman',
    'options' => 'Ayarlar',
    'report_about_post' => 'Şikayet edilen paylaşım',
    'dir' => 'ltr',
    'dir2' => 'rtl',
    'activeNow' => 'Aktif',
    'notActiveNow' => 'Pasif',
    'selectToChat' => 'Mesajlaşmak için seçiniz.',
    'user_profile' => 'Kullanıcı profili',
    'emptyChat' => 'Hiç mesajın bulunmuyor, merhaba diyerek başlayabilirsin.',
    'you' => 'Sen',
    'write_a_message' => 'Bir mesaj yaz...',
    'search' => 'Ara...',
    'welcome' => 'Hoşgeldin',
    'help' => 'Yardım',
    'login' => 'Giriş yap',
    'signup' => 'Üye ol!',
    'welcome_to' => 'Hoşgeldin',
    'wallstant_main_string' => 'Yeni insanlarla tanış ve onlarla ne zaman istersen sosyalleş.',
    'login_now' => 'Giriş yap',
    'forgot_password' => 'Şifremi unuttum.',
    'dont_have_an_account' => 'Hesabın yok mu?',
    'for_free' => 'Ücretsiz',
    'email_or_username' => 'Email ya da kullanıcı adı',
    'loading' => 'Yükleniyor',
    'create_new_account' => 'Yeni hesap oluştur',
    'create_account' => 'Hesap oluştur',
    'confirm_password' => 'Şifreni onayla',
    'by_clicking_signup_str' => 'By clicking Create account, you agree to our',
    'and' => 'and',
    'cookie_use' => 'Cookie use',
    'already_have_an_account' => 'Zaten bir hesabın bulunuyor',
    'creating_your_account' => 'Creating your account',
    'done' => 'done',
    'enter_un_pwd_to_login' => 'Giriş yapmak için kullanıcı adını ve şifreni gir',
    'enter_username_to_login' => 'Giriş yapmak için kullanıcı adını gir',
    'enter_password_to_login' => 'Giriş yapmak için şifreni gir',
    'cannot_login_attempts' => 'Şu an giriş yapmazsın. 15 dakika sonra tekrar dene.',
    'un_email_not_exist' => 'Kullanıcı adı ya da email bulunamadı',
    'password_incorrect_you_have' => 'User password incorrect! You have',
    'attempts_to_login' => 'giriş yapmaya çalışıyor',
    'un_and_pwd_incorrect' => 'Kullanıcı adı ya da şifreniz hatalı',
    'email_already_exist' => 'Bu email adresi zaten kullanılıyor.',
    'password_short' => 'Şifreniz, en az altı harf uzunluğunda olmalıdır.',
    'password_not_match_with_cpassword' => 'Şifreniz doğrulama şifrenizle örtüşmüyor.',
    'invalid_email_address' => 'Geçersiz email adresi',
    'signup_username_should_be_1' => 'Özel karakterler bulunamaz.',
    'signup_username_should_be_2' => 'Kullanıcı adında Türkçe karakter bulunamaz.',
    'signup_username_should_be_3' => 'Kelimeler arası sadece (_) sembolü kabul edilebilir.',
    'signup_username_should_be_4' => 'Sayılar ve harfler kabul edilir',
    'signup_username_should_be_5' => 'Boşluk bulunamaz',
    'username_not_allowed' => 'Kullanıcı adı kabul edilmiyor',
    'username_not_exists' => 'Kullanıcı adı bulunamadı',
    'friends' => 'Arkadaşlar',
    'requests' => 'İstekler',
    'continue_reading' => 'Okumaya devam et',


   // ==========================================

    );
    return $lang[$txt];
}

?>