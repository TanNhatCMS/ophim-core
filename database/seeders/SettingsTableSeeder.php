<?php

namespace Ophim\Core\Database\Seeders;

use Backpack\Settings\app\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds_
     *
     * @return void
     */
    public function run()
    {
        $generals = [
            [
                'key'         => 'site_cache_ttl',
                'name'        => 'Thời gian lưu cache',
                'description' => 'site_cache_ttl',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'giây (s)',
                ]),
                'value' => 60,
                'active'      => 0,
            ],
            [
                'key'         => 'site_brand',
                'description' => 'site_brand',
                'name'        => 'Thương hiệu trang web',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'textarea',
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'site_logo',
                'description' => 'site_logo',
                'name'        => 'Logo trang web',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'textarea',
                ]),
                'active'      => 0,
            ],
        ];

        $metas = [
            [
                'key'         => 'site_meta_siteName',
                'description' => 'site_meta_siteName',
                'name'        => 'Meta Tên trang web',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'tab' => 'Cài đặt chung'
                ]),
                'value' => 'Ophim.TV',
                'active'      => 0,
            ],
            [
                'key'         => 'site_meta_shortcut_icon',
                'description' => 'site_meta_shortcut_icon',
                'name'        => 'Meta biểu tượng phím tắt',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'ckfinder',
                    'tab' => 'Cài đặt chung'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'site_homepage_title',
                'description' => 'site_homepage_title',
                'name'        => 'Tiêu đề mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'tab' => 'Cài đặt chung'
                ]),
                'value' => 'Phim hay mới cập nhật 2022',
                'active'      => 0,
            ],
            [
                'key'         => 'site_meta_description',
                'description' => 'site_meta_description',
                'name'        => 'Meta miêu tả',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'textarea',
                    'tab' => 'Cài đặt chung'
                ]),
                'value' => 'Ophim.TV',
                'active'      => 0,
            ],
            [
                'key'         => 'site_meta_keywords',
                'description' => 'site_meta_keywords',
                'name'        => 'Meta từ khóa',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'textarea',
                    'tab' => 'Cài đặt chung'
                ]),
                'value' => 'Ophim.TV',
                'active'      => 0,
            ],
            [
                'key'         => 'site_meta_image',
                'description' => 'site_meta_image',
                'name'        => 'Meta hình ảnh',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'ckfinder',
                    'tab' => 'Cài đặt chung'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'site_meta_type',
                'description' => 'site_meta_type',
                'name'        => 'Meta Loại trang web',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'tab' => 'Cài đặt chung'
                ]),
                'active'      => 0,
                'value' => 'movie',
            ],
            [
                'key'         => 'site_movie_title',
                'description' => 'site_movie_title',
                'name'        => 'Mẫu tiêu đề trang thông tin phim',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin phim: {name}|{origin_name}|{language}|{quality}|{episode_current}|{publish_year}|...',
                    'tab' => 'Phim'
                ]),
                'value' => 'Phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_episode_watch_title',
                'description' => 'site_episode_watch_title',
                'name'        => 'Mẫu tiêu đề trang xem phim',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin phim: {movie.name}|{movie.origin_name}|{movie.language}|{movie.quality}|{movie.episode_current}|movie.publish_year}|...<br />Thông tin tập: {name}',
                    'tab' => 'Phim'
                ]),
                'value' => 'Xem phim {movie.name} tập {name} {movie.language} {movie.quality}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_category_title',
                'description' => 'site_category_title',
                'name'        => 'Tiêu đề thể loại mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Thể Loại'
                ]),
                'value' => 'Danh sách phim {name} - tổng hợp phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_category_des',
                'description' => 'site_category_des',
                'name'        => 'Sự miêu tả thể loại mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Thể Loại'
                ]),
                'value' => 'Phim {name} mới nhất tuyển chọn hay nhất. Top những bộ phim {name} đáng để bạn cày 2022',
                'active'      => 0,
            ],
            [
                'key'         => 'site_category_key',
                'description' => 'site_category_key',
                'name'        => 'từ khóa thể loại mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Thể Loại'
                ]),
                'value' => 'Xem phim {name},Phim {name} mới,Phim {name} 2022,phim hay',
                'active'      => 0,
            ],
            [
                'key'         => 'site_region_title',
                'description' => 'site_region_title',
                'name'        => 'Tiêu đề quốc gia mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Quốc Gia'
                ]),
                'value' => 'Danh sách phim {name} - tổng hợp phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_region_des',
                'description' => 'site_region_des',
                'name'        => 'Sự miêu tả quốc gia mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Quốc Gia'
                ]),
                'value' => 'Phim {name} mới nhất tuyển chọn hay nhất. Top những bộ phim {name} đáng để bạn cày 2022',
                'active'      => 0,
            ],
            [
                'key'         => 'site_region_key',
                'description' => 'site_region_key',
                'name'        => 'từ khóa quốc gia mặc định',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Quốc Gia'
                ]),
                'value' => 'Xem phim {name},Phim {name} mới,Phim {name} 2022,phim hay',
                'active'      => 0,
            ],
            [
                'key'         => 'site_studio_title',
                'description' => 'site_studio_title',
                'name'        => 'studio tiêu đề',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Studio'
                ]),
                'value' => 'Danh sách phim {name} - tổng hợp phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_studio_des',
                'description' => 'site_studio_des',
                'name'        => 'mô tả phòng thu',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Studio'
                ]),
                'value' => 'Phim {name} mới nhất tuyển chọn hay nhất. Top những bộ phim {name} đáng để bạn cày 2022',
                'active'      => 0,
            ],
            [
                'key'         => 'site_studio_key',
                'description' => 'site_studio_key',
                'name'        => 'studio từ khóa',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Studio'
                ]),
                'value' => 'Xem phim {name},Phim {name} mới,Phim {name} 2022,phim hay',
                'active'      => 0,
            ],
            [
                'key'         => 'site_actor_title',
                'description' => 'site_actor_title',
                'name'        => 'Tiêu đề diễn viên',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Diễn Viên'
                ]),
                'value' => 'Phim của diễn viên {name} - tổng hợp phim {name} hay nhất',
                'active'      => 0,
            ],
            [
                'key'         => 'site_actor_des',
                'description' => 'site_actor_des',
                'name'        => 'diễn viên & Sự miêu tả ',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Diễn Viên'
                ]),
                'value' => 'Phim của diễn viên {name} - tổng hợp phim {name} hay nhất',
                'active'      => 0,
            ],
            [
                'key'         => 'site_actor_key',
                'description' => 'site_actor_key',
                'name'        => 'Từ khóa diễn viên',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Diễn Viên'
                ]),
                'value' => 'xem phim {name},phim {name},tuyen tap phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_director_title',
                'description' => 'site_director_title',
                'name'        => 'Tiêu đề đạo diễn',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Đạo Diễn'
                ]),
                'value' => 'Phim của đạo diễn {name} - tổng hợp phim {name} hay nhất',
                'active'      => 0,
            ],
            [
                'key'         => 'site_director_des',
                'description' => 'site_director_des',
                'name'        => 'Miêu tả đạo diễn',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Đạo Diễn'
                ]),
                'value' => 'Phim của đạo diễn {name} - tổng hợp phim {name} hay nhất',
                'active'      => 0,
            ],
            [
                'key'         => 'site_director_key',
                'description' => 'site_director_key',
                'name'        => 'Keywords đạo diễn',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Đạo Diễn'
                ]),
                'value' => 'xem phim {name},phim {name},tuyen tap phim {name}',
                'active'      => 0,
            ],
            [
                'key'         => 'site_tag_title',
                'description' => 'site_tag_title',
                'name'        => 'Tiêu đề tag',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Tag'
                ]),
                'value' => 'Phim {name} vietsub - phim {name} full hd',
                'active'      => 0,
            ],
            [
                'key'         => 'site_tag_des',
                'description' => 'site_tag_des',
                'name'        => 'Miêu tả',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Tag'
                ]),
                'value' => 'Phim {name} vietsub - phim {name} full hd',
                'active'      => 0,
            ],
            [
                'key'         => 'site_tag_key',
                'description' => 'site_tag_key',
                'name'        => 'Từ khóa',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'Thông tin: {name}',
                    'tab' => 'Tag'
                ]),
                'value' => 'xem phim {name},phim {name},{name} vietsub',
                'active'      => 0,
            ]
        ];

        $players = [
            [
                'key'         => 'jwplayer_license',
                'description' => 'jwplayer_license',
                'name'        => 'Jwplayer giấy phép',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'tab' => 'Trình phát'
                ]),
                'value' => 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=',
                'active'      => 0,
            ],
            [
                'key'         => 'jwplayer_logo_file',
                'description' => 'jwplayer_logo_file',
                'name'        => 'Jwplayer hình ảnh logo',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'ckfinder',
                    'tab' => 'Trình phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'jwplayer_logo_link',
                'description' => 'jwplayer_logo_link',
                'name'        => 'Jwplayer liên kết logo',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'tab' => 'Trình phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'jwplayer_logo_position',
                'description' => 'jwplayer_logo_position',
                'name'        => 'Jwplayer vị trí logo',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'select_from_array',
                    'options' => [
                        'top-left' => 'Top left',
                        'top-right' => 'Top right',
                        'bottom-right' => 'Bottom right',
                        'bottom-left' => 'Dưới cùng bên trái',
                        'control-bar' => 'Control bar',
                    ],
                    'tab' => 'Trình phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'jwplayer_advertising_file',
                'description' => 'jwplayer_advertising_file',
                'name'        => 'Jwplayer quảng cáo tập tin lớn',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'ckfinder',
                    'tab' => 'Trình phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'jwplayer_advertising_skipoffset',
                'description' => 'jwplayer_advertising_skipoffset',
                'name'        => 'Jwplayer bỏ qua quảng cáo',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'number',
                    'hint' => 'giây',
                    'tab' => 'Trình phát'
                ]),
                'value' => 5,
                'active'      => 0,
            ],
            [
                'key'         => 'server_player_1',
                'description' => 'server_player_1',
                'name'        => 'Máy chủ phát video 1',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'tên miền 1',
                    'tab' => 'Máy chủ phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'server_player_2',
                'description' => 'server_player_2',
                'name'        => 'Máy chủ phát video 2',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'tên miền 2',
                    'tab' => 'Máy chủ phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'server_player_3',
                'description' => 'server_player_3',
                'name'        => 'Máy chủ phát video 3',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'tên miền 3',
                    'tab' => 'Máy chủ phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'server_player_4',
                'description' => 'server_player_4',
                'name'        => 'Máy chủ phát video 4',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'tên miền 4',
                    'tab' => 'Máy chủ phát'
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'server_player_5',
                'description' => 'server_player_5',
                'name'        => 'Máy chủ phát video 5',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                    'hint' => 'tên miền 5',
                    'tab' => 'Máy chủ phát'
                ]),
                'active'      => 0,
            ],
        ];

        $systems = [
            [
                'key'         => 'site_theme',
                'name'        => 'Theme',
                'description' => 'site_theme',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'view',
                    'view' => 'themes::selector'
                ]),
                'value' => 'default',
                'active'      => 0,
            ],
            [
                'key'         => 'hide_ads_boss',
                'name'        => 'Ẩn quảng cáo i9',
                'description' => 'hide_ads_boss',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'switch',
                    
                ]),
                'value' => 'default',
                'active'      => 0,
            ],
        ];

        $others = [
            [
                'key'         => 'social_facebook_app_id',
                'description' => 'social_facebook_app_id',
                'name'        => 'Facebook App ID',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'site_scripts_facebook_sdk',
                'description' => 'site_scripts_facebook_sdk',
                'name'        => 'Facebook JS SDK script tag',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'code',
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'google_ads_id',
                'description' => 'google_ads_id',
                'name'        => 'Google ADS ID',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'text',
                ]),
                'active'      => 0,
            ],
            [
                'key'         => 'site_scripts_google_analytics',
                'description' => 'site_scripts_google_analytics',
                'name'        => 'Google analytics script tag',
                'field'       => json_encode([
                    'name' => 'value',
                    'type' => 'code',
                ]),
                'active'      => 0,
            ],
        ];

        foreach ($systems as $index => $setting) {
            $result = Setting::firstOrCreate(collect($setting)->only('key')->toArray(), collect($setting)->except('key')->toArray());

            if (!$result) {
                $this->command->info("Insert failed at record $index");

                return;
            }
        }

        foreach ($generals as $index => $setting) {
            $result = Setting::firstOrCreate(collect($setting)->only('key')->toArray(), collect($setting)
                ->merge(['group' => 'generals'])->except('key')->toArray());

            if (!$result) {
                $this->command->info("Insert failed at record $index");

                return;
            }
        }

        foreach ($metas as $index => $setting) {
            $result = Setting::firstOrCreate(collect($setting)->only('key')->toArray(), collect($setting)->merge(['group' => 'metas'])->except('key')->toArray());

            if (!$result) {
                $this->command->info("Insert failed at record $index");

                return;
            }
        }

        foreach ($players as $index => $setting) {
            $result = Setting::updateOrCreate(collect($setting)->only('key')->toArray(), collect($setting)->merge(['group' => 'jwplayer'])->except('key')->toArray());

            if (!$result) {
                $this->command->info("Insert failed at record $index");

                return;
            }
        }

        foreach ($others as $index => $setting) {
            $result = Setting::firstOrCreate(collect($setting)->only('key')->toArray(), collect($setting)->merge(['group' => 'others'])->except('key')->toArray());

            if (!$result) {
                $this->command->info("Insert failed at record $index");

                return;
            }
        }

        // Delete key not using
        $all_settings = array_merge($generals, $metas, $players, $systems, $others);
        $all_settings = array_map( function( $a ) { return $a['key']; }, $all_settings );
        Setting::whereIn('group', ['generals', 'metas', 'players', 'systems', 'others'])->whereNotIn('key', $all_settings)->delete();
    }
}