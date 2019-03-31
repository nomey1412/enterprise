<?php
namespace App\Http\Controllers;


class Index extends Controller{
    /**
     *  首页列表
     */
    public function index(){
        $data = [
            [
                'id' => 1,
                'title' => '项目1',
                'img' => getenv('APP_URL').('/img/1.png'),
            ],[
                'id' => 2,
                'title' => '项目2',
                'img' => getenv('APP_URL').('/img/2.png'),
            ],[
                'id' => 3,
                'title' => '项目3',
                'img' => getenv('APP_URL').('/img/3.png'),
            ],[
                'id' => 4,
                'title' => '项目4',
                'img' => getenv('APP_URL').('/img/4.png'),
            ],[
                'id' => 5,
                'title' => '项目5',
                'img' => getenv('APP_URL').('/img/5.png'),
            ],[
                'id' => 6,
                'title' => '项目6',
                'img' => getenv('APP_URL').('/img/6.png'),
            ],[
                'id' => 7,
                'title' => '项目7',
                'img' => getenv('APP_URL').('/img/7.png'),
            ],[
                'id' => 8,
                'title' => '项目8',
                'img' => getenv('APP_URL').('/img/1.png'),
            ],
        ];
//        print_r($data);die;
        return json_encode($data);
    }

    /**
     * 功能页面
     */
    public function get_tarfunciton(){
        $data = [

            'tar_list'=> [
                [
                'id' => 1,
                'title' => '储值',
                'img' => getenv('APP_URL').('/img/tar1.png'),
                ],[
                    'id' => 2,
                    'title' => '当面付',
                    'img' => getenv('APP_URL').('/img/tar2.png'),
                ],[
                    'id' => 3,
                    'title' => '会员卡',
                    'img' => getenv('APP_URL').('/img/tar3.png'),
                ],[
                    'id' => 4,
                    'title' => '优惠券',
                    'img' => getenv('APP_URL').('/img/tar4.png'),
                ]
            ],
            'product_list' =>[
                [
                    'product_id' => 1,
                    'product_price' => 57777,
                    'product_name' => '小程序高级版',
                    'product_img' => getenv('APP_URL').('/img/product1.png'),
                    'product_Sale_number' => 9999,
                ],[
                    'product_id' => 2,
                    'product_price' => 6888,
                    'product_name' => '小程序多商家版',
                    'product_img' => getenv('APP_URL').('/img/product2.png'),
                    'product_Sale_number' => 9999,
                ],

            ],

        ];

        return json_encode($data);
    }
    /**
     * 会员专区展示数据
     */
    public function get_MemberHeadText(){
        $data = [
            [
                'member_text_id' => 1,
                'member_text_name' => '1张',
                'member_text_title' => '优惠券',
            ], [
                'member_text_id' => 2,
                'member_text_name' => '30',
                'member_text_title' => '积分',
            ], [
                'member_text_id' => 3,
                'member_text_name' => '0元',
                'member_text_title' => '储值',
            ], [
                'member_text_id' => 4,
                'member_text_name' => '3',
                'member_text_title' => '足迹',
            ]

        ];
        return json_encode($data);
    }

    /**
     * 电商订单功能
     */
    public function get_OnlineIndex(){
        $data = [
            'online'=>[ [
                    'online_id' => 1,
                    'online_title' => '待付款',
                    'online_img' => getenv('APP_URL').('/img/online1.png'),
                ],[
                    'online_id' => 2,
                    'online_title' => '待发货',
                    'online_img' => getenv('APP_URL').('/img/online2.png'),
                ],[
                    'online_id' => 3,
                    'online_title' => '代收货',
                    'online_img' => getenv('APP_URL').('/img/online3.png'),
                ],[
                    'online_id' => 4,
                    'online_title' => '待评价',
                    'online_img' => getenv('APP_URL').('/img/online4.png'),
                ],[
                    'online_id' => 5,
                    'online_title' => '售后',
                    'online_img' => getenv('APP_URL').('/img/online5.png'),
                ]
            ],
            'tool'=>[ [
                    'tool_id' => 1,
                    'tool_title' => '收货地址',
                    'tool_img' => getenv('APP_URL').('/img/tool1.png'),
                ],[
                    'tool_id' => 2,
                    'tool_title' => '购物车',
                    'tool_img' => getenv('APP_URL').('/img/tool2.png'),
                ],[
                    'tool_id' => 3,
                    'tool_title' => '系统通知',
                    'tool_img' => getenv('APP_URL').('/img/tool3.png'),
                ],[
                    'tool_id' => 4,
                    'tool_title' => '足迹',
                    'tool_img' => getenv('APP_URL').('/img/tool4.png'),
                ],[
                    'tool_id' => 5,
                    'tool_title' => '收藏',
                    'tool_img' => getenv('APP_URL').('/img/tool5.png'),
                ]
            ],
            'marketing'=>[ [
                    'marketing_id' => 1,
                    'marketing_title' => '我的拼团',
                    'marketing_img' => getenv('APP_URL').('/img/marketing1.png'),
                ],[
                    'marketing_id' => 2,
                    'marketing_title' => '中奖记录',
                    'marketing_img' => getenv('APP_URL').('/img/marketing2.png'),
                ],[
                    'marketing_id' => 3,
                    'marketing_title' => '代言人中心',
                    'marketing_img' => getenv('APP_URL').('/img/marketing3.png'),
                ],
            ],
            'other'=>[ [
                    'other_id' => 1,
                    'other_title' => '我的视频',
                    'other_img' => getenv('APP_URL').('/img/other1.png'),
                ],
            ]
        ];
        return json_encode($data);
    }
}