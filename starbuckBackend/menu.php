<?php
// 跨域问题处理
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
// header('Access-Control-Allow-Headers:x-requested-with,content-type');

$data = [
    "status" =>true,
    "msg" =>"success",
    "data" => [
        "categories" =>[
            [
                "default_image" =>"",
                "id" =>"combo_category",
                "name" =>"星级套餐",
                "products" =>[],
                "sequence" =>0,
                "menu_category_type" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"combo_sub_category",
                        "name" =>"星级套餐",
                        "products" =>[
                            [
                                "id" =>"2104128464",
                                "name" =>"轻甜尝新GOODGOOD组合",
                                "combo_type" =>"ComboDiscount",
                                "content" =>"任选1杯含燕麦奶客制化的饮品和1件食品，一起星善食主义。参与GoodGood挑战，十日打卡3次星善食，享8.8元换购GoodGood咖啡等好礼券。\n*此商品暂无法参与好礼星星兑换",
                                "icon" =>2,
                                "discount_hint" =>"参与GoodGood 十日挑战",
                                "background_color" =>"#000000",
                                "combo_menu_info" => [
                                    "combo_id" =>"2104128464",
                                    "title" =>"轻甜尝新GOODGOOD组合",
                                    "title_color" =>"#000000",
                                    "sub_title" =>"参与GoodGood 十日挑战",
                                    "sub_title_color" =>"#000000",
                                    "theme_color" =>"#000000",
                                    "mechanism" =>"",
                                    "mechanism_color" =>"#000000",
                                    "artwork" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_2c504512-0e10-41ea-a4d2-638181724859.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_2c504512-0e10-41ea-a4d2-638181724859.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_2c504512-0e10-41ea-a4d2-638181724859.jpg"
                                    ],
                                    "artworkThumb" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_e361a9ab-9885-4b9e-af28-55eb59182eff.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_e361a9ab-9885-4b9e-af28-55eb59182eff.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_e361a9ab-9885-4b9e-af28-55eb59182eff.jpg"
                                    ],
                                    "artworkWX" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_ac105117-ecc1-427b-ba37-3dae7306475d.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_ac105117-ecc1-427b-ba37-3dae7306475d.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_ac105117-ecc1-427b-ba37-3dae7306475d.jpg"
                                    ],
                                    "background_color" =>"#000000",
                                    "content" =>"任选1杯含燕麦奶客制化的饮品和1件食品，一起星善食主义。参与GoodGood挑战，十日打卡3次星善食，享8.8元换购GoodGood咖啡等好礼券。\n*此商品暂无法参与好礼星星兑换",
                                    "has_term" =>0,
                                    "terms_and_conditions" =>null,
                                    "has_pos" =>0,
                                    "category_position" =>null,
                                    "type" =>"ComboDiscount",
                                    "icon_type" =>2,
                                    "combo_category_title" =>"星级套餐",
                                    "combo_in_store" =>1
                                ],
                                "default_image" =>"https://artwork.starbucks.com.cn/mop-combo/main_e361a9ab-9885-4b9e-af28-55eb59182eff.jpg",
                                "sequence" =>0,
                                "status" =>2,
                                "stock" =>-1,
                                "type" =>6,
                                "default_attr" =>"",
                                "price" =>0,
                                "bff_is_new" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ],
                                "has_customization" =>0,
                                "sku" =>"",
                                "is_combo" =>1
                            ],
                            [
                                "id" =>"2102246899",
                                "name" =>"春日桃桃双杯组合",
                                "combo_type" =>"ComboDiscount",
                                "content" =>"冰摇桃桃第二杯半价，清香茶韵融合清甜桃汁，有颜值有美味。\n*此商品暂无法参与好礼星星兑换",
                                "icon" =>2,
                                "discount_hint" =>"限时第二杯半价",
                                "background_color" =>"#000000",
                                "combo_menu_info" => [
                                    "combo_id" =>"2102246899",
                                    "title" =>"春日桃桃双杯组合",
                                    "title_color" =>"#000000",
                                    "sub_title" =>"限时第二杯半价",
                                    "sub_title_color" =>"#000000",
                                    "theme_color" =>"#000000",
                                    "mechanism" =>"",
                                    "mechanism_color" =>"#000000",
                                    "artwork" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_ef5597a0-2b5b-43f5-bd10-342ed4aabc35.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_ef5597a0-2b5b-43f5-bd10-342ed4aabc35.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_ef5597a0-2b5b-43f5-bd10-342ed4aabc35.jpg"
                                    ],
                                    "artworkThumb" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_33376bb4-83a1-4ddd-91fc-f759fe2ef3e2.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_33376bb4-83a1-4ddd-91fc-f759fe2ef3e2.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_33376bb4-83a1-4ddd-91fc-f759fe2ef3e2.jpg"
                                    ],
                                    "artworkWX" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_b395e6ca-7fd6-49e8-96cd-c4eee2c579e8.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_b395e6ca-7fd6-49e8-96cd-c4eee2c579e8.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_b395e6ca-7fd6-49e8-96cd-c4eee2c579e8.jpg"
                                    ],
                                    "background_color" =>"#000000",
                                    "content" =>"冰摇桃桃第二杯半价，清香茶韵融合清甜桃汁，有颜值有美味。\n*此商品暂无法参与好礼星星兑换",
                                    "has_term" =>1,
                                    "terms_and_conditions" => [
                                        "cta" =>"知道了",
                                        "title" =>"活动条款",
                                        "content" =>"1.2021年2月25日至2021年4月30日（下称 “活动期间” ），星享俱乐部会员（下称“会员”）通过星巴克小程序，从啡快菜单主页进入“春日桃桃双杯组合”页面后，在同一笔订单中使用有效的付款方式正价购买任意1杯指定手工调制饮品，即可享受该笔订单中第2杯指定手工调制饮品正价5折优惠。\n2.本活动条款所称“手工调制饮品”包括：冰摇桃桃乌龙茶。活动期间内产品是否有售以订单页面届时显示的实际选项为准。\n3.请您注意，在非“春日桃桃双杯组合”页面的其他页面上购买的对应饮品无法享受本活动优惠。您需要在下单啡快门店的营业时间结束前完成付款方能享受优惠。\n4. 本活动仅限通过星巴克微信小程序（限微信7.0.0及以上版本）使用啡快服务参与，不可兑换现金。星巴克微信小程序（限微信7.0.0及以上版本）中的啡快服务不参与平安银行信用卡每周三单笔满70元减18元及工商银行每周一单笔满70元减15元的满减活动。\n5. 如果享受本活动优惠的啡快服务订单发生退货退款，退款以实际支付的产品价款为准，优惠部分金额不退还，所使用的优惠均不返还或补偿。\n6. 星巴克将尽力确保本活动的顺利进行。若因特定原因而导致星巴克暂停或提前结束活动的，除非法律、法规另有不同的强制性规定，星巴克不承担任何法律责任。"
                                    ],
                                    "has_pos" =>0,
                                    "category_position" =>null,
                                    "type" =>"ComboDiscount",
                                    "icon_type" =>2,
                                    "combo_category_title" =>"星级套餐",
                                    "combo_in_store" =>1
                                ],
                                "default_image" =>"https://artwork.starbucks.com.cn/mop-combo/main_33376bb4-83a1-4ddd-91fc-f759fe2ef3e2.jpg",
                                "sequence" =>0,
                                "status" =>2,
                                "stock" =>-1,
                                "type" =>6,
                                "default_attr" =>"",
                                "price" =>0,
                                "bff_is_new" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ],
                                "has_customization" =>0,
                                "sku" =>"",
                                "is_combo" =>1
                            ],
                            [
                                "id" =>"2103267968",
                                "name" =>"悠享甜蜜下午茶",
                                "combo_type" =>"ComboDiscount",
                                "content" =>"樱花季特饮搭配甜蜜蛋糕，开启满满春意。\n*此商品暂无法参与好礼星星兑换",
                                "icon" =>2,
                                "discount_hint" =>"满满春意",
                                "background_color" =>"#000000",
                                "combo_menu_info" => [
                                    "combo_id" =>"2103267968",
                                    "title" =>"悠享甜蜜下午茶",
                                    "title_color" =>"#000000",
                                    "sub_title" =>"满满春意",
                                    "sub_title_color" =>"#000000",
                                    "theme_color" =>"#000000",
                                    "mechanism" =>"",
                                    "mechanism_color" =>"#000000",
                                    "artwork" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_abceb609-fcfc-4349-ba04-49633e920452.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_abceb609-fcfc-4349-ba04-49633e920452.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_abceb609-fcfc-4349-ba04-49633e920452.jpg"
                                    ],
                                    "artworkThumb" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_91788403-dc2e-4b64-9132-ff41206fe482.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_91788403-dc2e-4b64-9132-ff41206fe482.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_91788403-dc2e-4b64-9132-ff41206fe482.jpg"
                                    ],
                                    "artworkWX" => [
                                        "x1" =>"https://artwork.starbucks.com.cn/mop-combo/main_80b297f6-fcc8-48fc-904c-8e0e58af542c.jpg",
                                        "x2" =>"https://artwork.starbucks.com.cn/mop-combo/main_80b297f6-fcc8-48fc-904c-8e0e58af542c.jpg",
                                        "x3" =>"https://artwork.starbucks.com.cn/mop-combo/main_80b297f6-fcc8-48fc-904c-8e0e58af542c.jpg"
                                    ],
                                    "background_color" =>"#000000",
                                    "content" =>"樱花季特饮搭配甜蜜蛋糕，开启满满春意。\n*此商品暂无法参与好礼星星兑换",
                                    "has_term" =>0,
                                    "terms_and_conditions" =>null,
                                    "has_pos" =>0,
                                    "category_position" =>null,
                                    "type" =>"ComboDiscount",
                                    "icon_type" =>2,
                                    "combo_category_title" =>"星级套餐",
                                    "combo_in_store" =>1
                                ],
                                "default_image" =>"https://artwork.starbucks.com.cn/mop-combo/main_91788403-dc2e-4b64-9132-ff41206fe482.jpg",
                                "sequence" =>0,
                                "status" =>2,
                                "stock" =>-1,
                                "type" =>6,
                                "default_attr" =>"",
                                "price" =>0,
                                "bff_is_new" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ],
                                "has_customization" =>0,
                                "sku" =>"",
                                "is_combo" =>1
                            ]
                        ],
                        "sequence" =>0,
                        "menu_category_type" =>0,
                        "sub_categories" =>[],
                        "show_in_list" =>1,
                        "is_combo" =>1
                    ]
                ],
                "show_in_list" =>0,
                "is_combo" =>1
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"星巴克必点",
                "products" =>[],
                "sequence" =>0,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"星巴克必点",
                        "products" =>[
                            [
                                "id" =>"135533136935125531",
                                "sku" =>"44",
                                "name" =>"拿铁",
                                "price" =>3200,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/44-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135443225128206903",
                                "sku" =>"16",
                                "name" =>"馥芮白®",
                                "price" =>3700,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/16-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877589176864",
                                "sku" =>"22",
                                "name" =>"红茶拿铁",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/22-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877522067993",
                                "sku" =>"42",
                                "name" =>"抹茶拿铁",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/42-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895567965356563",
                                "sku" =>"106",
                                "name" =>"红茶咖啡拿铁鸳鸯",
                                "price" =>3700,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/106-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807441311891969",
                                "sku" =>"17211290",
                                "name" =>"星巴克咖啡提拉米苏蛋糕",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/17211290-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>45,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>0,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"当季新品",
                "products" =>[],
                "sequence" =>0,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"当季新品",
                        "products" =>[
                            [
                                "id" =>"203259870912184855",
                                "sku" =>"281",
                                "name" =>"燕麦丝绒拿铁",
                                "price" =>3800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/281-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203259869338272285",
                                "sku" =>"277",
                                "name" =>"橙香蜜脆玛奇朵",
                                "price" =>4100,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/277-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>1,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203267107378430495",
                                "sku" =>"278",
                                "name" =>"橙香蜜脆星冰乐",
                                "price" =>4100,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/278-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>1,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260349958324752",
                                "sku" =>"710013982",
                                "name" =>"沙漠卫士蛋糕",
                                "price" =>3600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710013982-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>549,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260148487029258",
                                "sku" =>"710013983",
                                "name" =>"绿色星球蛋糕",
                                "price" =>3600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710013983-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>554,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260150272754187",
                                "sku" =>"710015311",
                                "name" =>"黑巧绵绵蛋糕",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710015311-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>7,
                                "status" =>2,
                                "stock" =>47,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260148282556936",
                                "sku" =>"710015312",
                                "name" =>"双层轻芝蛋糕",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710015312-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>8,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>0,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"“咖啡搭子”组合",
                "products" =>[],
                "sequence" =>1,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"“咖啡搭子”组合",
                        "products" =>[
                            [
                                "id" =>"173361274814464515",
                                "sku" =>"1195218",
                                "name" =>"“热拿铁星人”组合 (3杯)",
                                "price" =>9600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/1195218-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"173361422612300303",
                                "sku" =>"1295033",
                                "name" =>"“冰拿铁星人”组合（3杯）",
                                "price" =>9600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/1295033-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"经典咖啡",
                "products" =>[],
                "sequence" =>3,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"浓缩咖啡",
                        "products" =>[
                            [
                                "id" =>"203259869338272285",
                                "sku" =>"277",
                                "name" =>"橙香蜜脆玛奇朵",
                                "price" =>4100,
                                "default_attr" =>"大杯/热/牛奶和稀奶油混合液",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/277-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>1,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203259870912184855",
                                "sku" =>"281",
                                "name" =>"燕麦丝绒拿铁",
                                "price" =>3800,
                                "default_attr" =>"大杯/热/燕麦奶",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/281-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"200262979733684743",
                                "sku" =>"266",
                                "name" =>"樱花初绽玛奇朵",
                                "price" =>4100,
                                "default_attr" =>"大杯/热",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202102/266-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"172556834595406384",
                                "sku" =>"186",
                                "name" =>"燕麦拿铁",
                                "price" =>3200,
                                "default_attr" =>"大杯/热/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/186-MOPCatalog-0-342x324_2-zh.png?resize=p_4,w_228,",
                                "sequence" =>19,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135443225128206903",
                                "sku" =>"16",
                                "name" =>"馥芮白®",
                                "price" =>3700,
                                "default_attr" =>"大杯/热/全脂牛奶/精萃浓缩咖啡/精萃浓缩咖啡/浓缩份数/浓缩份数/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/16-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>21,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533136935125531",
                                "sku" =>"44",
                                "name" =>"拿铁",
                                "price" =>3200,
                                "default_attr" =>"大杯/热/全脂牛奶/标准奶泡/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/44-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>22,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533136191685166",
                                "sku" =>"34",
                                "name" =>"美式咖啡",
                                "price" =>2800,
                                "default_attr" =>"大杯/热/标准/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/34-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>23,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533135927443977",
                                "sku" =>"68",
                                "name" =>"焦糖玛奇朵",
                                "price" =>3600,
                                "default_attr" =>"大杯/热/全脂牛奶/香草糖浆/焦糖风味酱/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/68-MODCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>24,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533135463973434",
                                "sku" =>"104",
                                "name" =>"摩卡",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/全脂牛奶/标准奶油/摩卡酱/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/104-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>25,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877075374652",
                                "sku" =>"51",
                                "name" =>"卡布奇诺",
                                "price" =>3200,
                                "default_attr" =>"大杯/热/全脂牛奶/标准奶泡/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/51-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>26,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533136841802260",
                                "sku" =>"59",
                                "name" =>"香草风味拿铁",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/全脂牛奶/香草糖浆/标准奶泡/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/59-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>27,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533141640086065",
                                "sku" =>"65",
                                "name" =>"榛果风味拿铁",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/全脂牛奶/榛果糖浆/标准奶泡/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/65-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>28,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533137102897698",
                                "sku" =>"50",
                                "name" =>"浓郁咖啡拿铁",
                                "price" =>3600,
                                "default_attr" =>"大杯/热/全脂牛奶/标准奶泡/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/50-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>29,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"冷萃咖啡",
                        "products" =>[
                            [
                                "id" =>"174019515807433248",
                                "sku" =>"190",
                                "name" =>"大溪地风情绵云冷萃",
                                "price" =>3900,
                                "default_attr" =>"大杯/冰/脱脂牛奶",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/190-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807438254244402",
                                "sku" =>"31",
                                "name" =>"冷萃冰咖啡",
                                "price" =>3600,
                                "default_attr" =>"大杯/冰",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/31-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>5,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"星冰乐&冰淇淋",
                "products" =>[],
                "sequence" =>4,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"咖啡星冰乐",
                        "products" =>[
                            [
                                "id" =>"135895595137106448",
                                "sku" =>"69",
                                "name" =>"摩卡可可碎片星冰乐®",
                                "price" =>3700,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/摩卡酱/可可碎片",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/69-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895579475575334",
                                "sku" =>"105",
                                "name" =>"摩卡星冰乐®",
                                "price" =>3500,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/摩卡酱",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/105-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895586562900539",
                                "sku" =>"64",
                                "name" =>"榛果风味摩卡星冰乐®",
                                "price" =>3800,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/榛果糖浆/摩卡淋酱",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/64-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"无咖啡星冰乐",
                        "products" =>[
                            [
                                "id" =>"203267107378430495",
                                "sku" =>"278",
                                "name" =>"橙香蜜脆星冰乐",
                                "price" =>4100,
                                "default_attr" =>"大杯/冷/牛奶和稀奶油混合液",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/278-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>1,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895574267298355",
                                "sku" =>"43",
                                "name" =>"抹茶星冰乐®",
                                "price" =>3500,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/标准/香草糖浆/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/43-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895586245182004",
                                "sku" =>"41",
                                "name" =>"抹茶可可碎片星冰乐®",
                                "price" =>3800,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/标准/香草糖浆/可可碎片/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/41-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895561001763357",
                                "sku" =>"60",
                                "name" =>"香草风味星冰乐®",
                                "price" =>3300,
                                "default_attr" =>"大杯/冰/全脂牛奶/标准搅打奶油/香草糖浆",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/60-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>6,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"茶瓦纳",
                "products" =>[],
                "sequence" =>5,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"茶拿铁",
                        "products" =>[
                            [
                                "id" =>"172556854626353707",
                                "sku" =>"187",
                                "name" =>"燕麦抹茶拿铁",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/燕麦奶",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/187-MOPCatalog-0-342x324_2-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877522067993",
                                "sku" =>"42",
                                "name" =>"抹茶拿铁",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/全脂牛奶/标准/标准奶泡",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/42-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>7,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877589176864",
                                "sku" =>"22",
                                "name" =>"红茶拿铁",
                                "price" =>3300,
                                "default_attr" =>"大杯/热/全脂牛奶/标准/香草糖浆/标准/标准奶泡",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/22-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>8,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895567965356563",
                                "sku" =>"106",
                                "name" =>"红茶咖啡拿铁鸳鸯",
                                "price" =>3700,
                                "default_attr" =>"大杯/热/全脂牛奶/标准/香草糖浆/标准/标准浓缩咖啡/标准浓缩咖啡/标准/浓缩份数/浓缩份数",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/106-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>9,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"冰摇茶",
                        "products" =>[
                            [
                                "id" =>"135533136013427216",
                                "sku" =>"8",
                                "name" =>"冰摇桃桃乌龙茶",
                                "price" =>3700,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/8-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533135090680344",
                                "sku" =>"23",
                                "name" =>"冰摇红莓黑加仑茶",
                                "price" =>3000,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/23-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135533136271376942",
                                "sku" =>"6",
                                "name" =>"冰摇柠檬茶",
                                "price" =>2800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>7,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"热茶",
                        "products" =>[
                            [
                                "id" =>"137695101438657063",
                                "sku" =>"80",
                                "name" =>"英式早餐红茶",
                                "price" =>2300,
                                "default_attr" =>"中杯/热/标准/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/80-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"137695103034589741",
                                "sku" =>"82",
                                "name" =>"碧螺春绿茶",
                                "price" =>2300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/82-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"137695097417368119",
                                "sku" =>"83",
                                "name" =>"金萱乌龙茶",
                                "price" =>2300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/83-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>8,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"巧克力&其他饮品",
                "products" =>[],
                "sequence" =>6,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"其他饮品",
                        "products" =>[
                            [
                                "id" =>"188403981991543333",
                                "sku" =>"225",
                                "name" =>"原味蒸气奶",
                                "price" =>2100,
                                "default_attr" =>"中杯/热/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/225-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"188403566970405388",
                                "sku" =>"226",
                                "name" =>"香草味蒸气奶",
                                "price" =>2400,
                                "default_attr" =>"中杯/热/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/226-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"188403989620982299",
                                "sku" =>"227",
                                "name" =>"可可蒸气奶",
                                "price" =>2400,
                                "default_attr" =>"中杯/热/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/227-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>8,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"在家做咖啡",
                "products" =>[],
                "sequence" =>7,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"咖啡豆",
                        "products" =>[
                            [
                                "id" =>"135262880184402436",
                                "sku" =>"6101138",
                                "name" =>"星巴克®早餐综合咖啡豆",
                                "price" =>8500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101138-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>10,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262875613659659",
                                "sku" =>"6101128",
                                "name" =>"星巴克®派克市场烘焙咖啡豆",
                                "price" =>10500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101128-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>11,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262875376681523",
                                "sku" =>"6101131",
                                "name" =>"星巴克®哥伦比亚咖啡豆",
                                "price" =>9500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101131-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>13,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262879840469565",
                                "sku" =>"6101132",
                                "name" =>"星巴克®危地马拉安提瓜咖啡豆",
                                "price" =>9500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101132-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>14,
                                "status" =>2,
                                "stock" =>54,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262877269361173",
                                "sku" =>"6101133",
                                "name" =>"星巴克®首选咖啡豆",
                                "price" =>8500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101133-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>15,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262876876145210",
                                "sku" =>"6101134",
                                "name" =>"星巴克®肯亚咖啡豆",
                                "price" =>9500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101134-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>16,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"168429690238796306",
                                "sku" =>"6101135",
                                "name" =>"星巴克®低因祥龙综合咖啡豆",
                                "price" =>8500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101135-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>17,
                                "status" =>2,
                                "stock" =>22,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262875856929295",
                                "sku" =>"6101129",
                                "name" =>"星巴克®佛罗娜咖啡豆",
                                "price" =>8500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101129-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>18,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262874643726862",
                                "sku" =>"6101137",
                                "name" =>"星巴克®意式烘焙咖啡豆",
                                "price" =>8500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6101137-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>19,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>9,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"挂耳滴滤咖啡",
                        "products" =>[
                            [
                                "id" =>"203293010994135584",
                                "sku" =>"700007161",
                                "name" =>"星巴克Origami®周年纪念综合",
                                "price" =>7900,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/700007161-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>555,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>10,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"VIA免煮咖啡",
                        "products" =>[
                            [
                                "id" =>"203260148384268809",
                                "sku" =>"700005018",
                                "name" =>"星巴克VIA®周年纪念综合",
                                "price" =>8800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/700005018-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>555,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"167584375806886407",
                                "sku" =>"6110121",
                                "name" =>"星巴克VIA®香草拿铁风味免煮咖啡固体饮料",
                                "price" =>4000,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6110121-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"167582269321511448",
                                "sku" =>"6110120",
                                "name" =>"星巴克VIA®焦糖拿铁风味免煮咖啡固体饮料",
                                "price" =>4000,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6110120-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"166480648566997533",
                                "sku" =>"6110103",
                                "name" =>"星巴克VIA®意式烘焙免煮咖啡",
                                "price" =>8800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6110103-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>8,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>11,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"星善食",
                "products" =>[],
                "sequence" =>8,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"燕麦奶饮品",
                        "products" =>[
                            [
                                "id" =>"203259870912184855",
                                "sku" =>"281",
                                "name" =>"燕麦丝绒拿铁",
                                "price" =>3800,
                                "default_attr" =>"大杯/热/燕麦奶",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/281-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"172556834595406384",
                                "sku" =>"186",
                                "name" =>"燕麦拿铁",
                                "price" =>3200,
                                "default_attr" =>"大杯/热/标准",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/186-MOPCatalog-0-342x324_2-zh.png?resize=p_4,w_228,",
                                "sequence" =>7,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"172556854626353707",
                                "sku" =>"187",
                                "name" =>"燕麦抹茶拿铁",
                                "price" =>3500,
                                "default_attr" =>"大杯/热/燕麦奶",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/187-MOPCatalog-0-342x324_2-zh.png?resize=p_4,w_228,",
                                "sequence" =>8,
                                "status" =>2,
                                "stock" =>-1,
                                "stock_limit" =>1,
                                "type" =>6,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"植物肉食品",
                        "products" =>[
                            [
                                "id" =>"197549542725386813",
                                "sku" =>"710013862",
                                "name" =>"别样牛肉™ 番茄芝士卷饼",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202101/710013862-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>221,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"190032310008021505",
                                "sku" =>"710007699",
                                "name" =>"别样牛肉™日式照烧大卷",
                                "price" =>4500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/710007699-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"183711067383267863",
                                "sku" =>"700004978",
                                "name" =>"别样牛肉™ 烧烤风味三明治",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/700004978-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>2,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"烘焙&三明治",
                "products" =>[],
                "sequence" =>9,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"三明治大卷",
                        "products" =>[
                            [
                                "id" =>"183711067383267863",
                                "sku" =>"700004978",
                                "name" =>"别样牛肉™ 烧烤风味三明治",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/700004978-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"190032310008021505",
                                "sku" =>"710007699",
                                "name" =>"别样牛肉™日式照烧大卷",
                                "price" =>4500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/710007699-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"188403550162780677",
                                "sku" =>"700004993",
                                "name" =>"培根芝士蛋堡",
                                "price" =>2400,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/700004993-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"176749620345438727",
                                "sku" =>"7311147",
                                "name" =>"太阳蛋培根烤吐司",
                                "price" =>1900,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7311147-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"176749626361119277",
                                "sku" =>"7311155",
                                "name" =>"鸡蛋吞拿三明治（迷你装）",
                                "price" =>1900,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7311155-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>50,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"176749523216892428",
                                "sku" =>"7311149",
                                "name" =>"热辣鸡肉大卷",
                                "price" =>3900,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7311149-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>10,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"145651477185036857",
                                "sku" =>"7311128",
                                "name" =>"牛肉菠菜大卷",
                                "price" =>3900,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7311128-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>15,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807428194206209",
                                "sku" =>"7311057",
                                "name" =>"鸡蛋培根帕尼尼",
                                "price" =>2600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7311057-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>18,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"139976130258010650",
                                "sku" =>"7111125",
                                "name" =>"火腿芝士可颂",
                                "price" =>2200,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7111125-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>19,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"烘焙食品",
                        "products" =>[
                            [
                                "id" =>"135807433295528494",
                                "sku" =>"7131009",
                                "name" =>"芝士丹麦酥",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7131009-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>19,
                                "status" =>2,
                                "stock" =>120,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807427084812841",
                                "sku" =>"7131011",
                                "name" =>"大蘑菇头形香浓巧克力麦芬",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7131011-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>23,
                                "status" =>2,
                                "stock" =>20,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807443784434229",
                                "sku" =>"7131012",
                                "name" =>"大蘑菇头形清新蓝莓麦芬",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7131012-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>24,
                                "status" =>2,
                                "stock" =>20,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807430390972955",
                                "sku" =>"7111214",
                                "name" =>"法式香浓巧克力可颂",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7111214-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>25,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807433906848276",
                                "sku" =>"7131002",
                                "name" =>"法式香酥可颂",
                                "price" =>1600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7131002-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>26,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807440245490222",
                                "sku" =>"7211303",
                                "name" =>"法式焦糖酥",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7211303-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>27,
                                "status" =>2,
                                "stock" =>49,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>10,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"蛋糕&星享小点",
                "products" =>[],
                "sequence" =>10,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"蛋糕甜品",
                        "products" =>[
                            [
                                "id" =>"203260349958324752",
                                "sku" =>"710013982",
                                "name" =>"沙漠卫士蛋糕",
                                "price" =>3600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710013982-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>549,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260148487029258",
                                "sku" =>"710013983",
                                "name" =>"绿色星球蛋糕",
                                "price" =>3600,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710013983-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>2,
                                "status" =>2,
                                "stock" =>554,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260150272754187",
                                "sku" =>"710015311",
                                "name" =>"黑巧绵绵蛋糕",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710015311-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>47,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"203260148282556936",
                                "sku" =>"710015312",
                                "name" =>"双层轻芝蛋糕",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202103/710015312-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>1,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"162670770569347618",
                                "sku" =>"7211360",
                                "name" =>"芝士咸蛋黄蛋糕",
                                "price" =>3500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/7211360-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>28,
                                "status" =>2,
                                "stock" =>48,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807426933817895",
                                "sku" =>"17211287",
                                "name" =>"纽约风浓郁重芝士蛋糕",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/17211287-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>32,
                                "status" =>2,
                                "stock" =>45,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807441311891969",
                                "sku" =>"17211290",
                                "name" =>"星巴克咖啡提拉米苏蛋糕",
                                "price" =>3300,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/17211290-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>33,
                                "status" =>2,
                                "stock" =>45,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"盒装星享小点",
                        "products" =>[
                            [
                                "id" =>"183710738368430605",
                                "sku" =>"700004995",
                                "name" =>"咸香小点",
                                "price" =>4800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/700004995-MOPCatalog-0-342x324_3-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>46,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135262876038332946",
                                "sku" =>"6990011",
                                "name" =>"法式小点",
                                "price" =>4800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6990011-MOPCatalog-0-342x324_2-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>86,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135807434367173154",
                                "sku" =>"6990012",
                                "name" =>"甜心小点",
                                "price" =>4800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/6990012-MOPCatalog-0-342x324_1-zh.png?resize=p_4,w_228,",
                                "sequence" =>7,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>12,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ],
            [
                "default_image" =>"",
                "id" =>"",
                "name" =>"包装食品饮品",
                "products" =>[],
                "sequence" =>12,
                "menu_category_type" =>0,
                "show_in_list" =>0,
                "sub_categories" =>[
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"包装食品",
                        "products" =>[
                            [
                                "id" =>"167748324715135504",
                                "sku" =>"8100057",
                                "name" =>"英伦风味黄油饼干",
                                "price" =>1200,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/8100057-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"151664115321930250",
                                "sku" =>"8400006",
                                "name" =>"混合果脯果仁",
                                "price" =>2500,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/8400006-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>8,
                                "status" =>2,
                                "stock" =>24,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"200294888210694702",
                                "sku" =>"8300020",
                                "name" =>"百香果味薄荷糖",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202102/8300020-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>9,
                                "status" =>2,
                                "stock" =>22,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"200263378838487591",
                                "sku" =>"8300021",
                                "name" =>"沁凉薄荷糖",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202102/8300021-MOP-0-342x324_0-zh.png?resize=p_4,w_228,",
                                "sequence" =>10,
                                "status" =>2,
                                "stock" =>22,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"151727331283567106",
                                "sku" =>"8100059",
                                "name" =>"星巴克咖啡味蛋卷",
                                "price" =>1800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/8100059-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>12,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>1,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ],
                    [
                        "default_image" =>"",
                        "id" =>"",
                        "name" =>"瓶装饮品",
                        "products" =>[
                            [
                                "id" =>"176355437733478926",
                                "sku" =>"4220036",
                                "name" =>"普娜饮用天然泉水",
                                "price" =>2200,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/4220036-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>1,
                                "status" =>2,
                                "stock" =>11,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"176355437632815629",
                                "sku" =>"4220038",
                                "name" =>"Perrier含气青柠味饮料",
                                "price" =>2200,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/4220038-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>3,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>1,
                                "bff_is_new" =>0,
                                "has_customization" =>0,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895562805314065",
                                "sku" =>"4220026",
                                "name" =>"橙汁",
                                "price" =>2800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/4220026-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>4,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895581294854700",
                                "sku" =>"4220027",
                                "name" =>"猕猴桃汁",
                                "price" =>2800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/4220027-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>5,
                                "status" =>2,
                                "stock" =>21,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ],
                            [
                                "id" =>"135895587692216866",
                                "sku" =>"4220028",
                                "name" =>"混合莓果汁",
                                "price" =>2800,
                                "default_attr" =>"",
                                "default_image" =>"https://pcmd.starbucks.com.cn/MopPics/202012/4220028-MOPCatalog-0-342x324-zh.png?resize=p_4,w_228,",
                                "sequence" =>6,
                                "status" =>2,
                                "stock" =>221,
                                "stock_limit" =>0,
                                "type" =>5,
                                "bff_is_new" =>0,
                                "has_customization" =>1,
                                "product_status" => [
                                    "out_of_shelf" =>0,
                                    "unavailable" =>0,
                                    "bff_unavailable_message" =>""
                                ]
                            ]
                        ],
                        "sequence" =>13,
                        "menu_category_type" =>0,
                        "show_in_list" =>1,
                        "sub_categories" =>[]
                    ]
                ]
            ]
        ],
        "SHOW_PIECE_ORDER" =>true,
        "SHOW_MENU_SEARCH" =>true
    ]
];


echo json_encode($data, JSON_UNESCAPED_UNICODE);
