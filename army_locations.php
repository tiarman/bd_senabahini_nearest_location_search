<?php
header('Content-Type: application/json');

$armyLocations = [
    "ঢাকা বিভাগ" => [
        ["name" => "ঢাকা ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 23.8103, "lng" => 90.4125, "phones" => ["01711111111", "01722222222"]],
        ["name" => "সাভার ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 23.9447, "lng" => 90.2803, "phones" => ["01733333333", "01744444444"]],
        ["name" => "মিরপুর সেনানিবাস (ক্যান্টনমেন্ট)", "lat" => 23.8210, "lng" => 90.3654, "phones" => ["01755555555", "01766666666"]],
        
        ["name" => "গাজীপুর সেনানিবাস (ক্যাম্প)", "lat" => 24.0025, "lng" => 90.4266, "phones" => ["01777777777", "01788888888"]],
        ["name" => "নরসিংদী সেনানিবাস (ক্যাম্প)", "lat" => 23.9237, "lng" => 90.7177, "phones" => ["01799999999", "01700000000"]],
        ["name" => "মানিকগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 23.8644, "lng" => 89.9901, "phones" => ["01811111111", "01822222222"]],
        ["name" => "মুন্সিগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 23.5422, "lng" => 90.5305, "phones" => ["01833333333", "01844444444"]],
        ["name" => "টাঙ্গাইল সেনানিবাস (ক্যাম্প)", "lat" => 24.2513, "lng" => 89.9167, "phones" => ["01855555555", "01866666666"]],
        ["name" => "কিশোরগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 24.4394, "lng" => 90.7766, "phones" => ["01877777777", "01888888888"]],
        ["name" => "ফরিদপুর সেনানিবাস (ক্যাম্প)", "lat" => 23.6077, "lng" => 89.8370, "phones" => ["01899999999", "01800000000"]],
        ["name" => "শরীয়তপুর সেনানিবাস (ক্যাম্প)", "lat" => 23.2185, "lng" => 90.3506, "phones" => ["01911111111", "01922222222"]],
        ["name" => "রাজবাড়ী সেনানিবাস (ক্যাম্প)", "lat" => 23.7572, "lng" => 89.6448, "phones" => ["01933333333", "01944444444"]],
        ["name" => "গোপালগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 23.0054, "lng" => 89.8261, "phones" => ["01955555555", "01966666666"]],
        ["name" => "মাদারীপুর সেনানিবাস (ক্যাম্প)", "lat" => 23.1645, "lng" => 90.1896, "phones" => ["01977777777", "01988888888"]],
        ["name" => "ঢাকা সেনানিবাস (স্পেশাল ইউনিট)", "lat" => 23.7806, "lng" => 90.4074, "phones" => ["01999999999", "01900000000"]],
        ["name" => "পল্টন সেনানিবাস (স্পেশাল ইউনিট)", "lat" => 23.7333, "lng" => 90.4167, "phones" => ["01711223344", "01722334455"]],
        ["name" => "আর্মি এভিয়েশন গ্রুপ (স্পেশাল ইউনিট)", "lat" => 23.8151, "lng" => 90.4255, "phones" => ["01733445566", "01744556677"]],
        ["name" => "বিমানবাহিনী ঘাঁটি বঙ্গবন্ধু (বিমানবাহিনী)", "lat" => 23.8493, "lng" => 90.3984, "phones" => ["01755667788", "01766778899"]],
        ["name" => "বিমানবাহিনী ঘাঁটি জহুরুল হক (বিমানবাহিনী)", "lat" => 23.8342, "lng" => 90.4105, "phones" => ["01777889900", "01788990011"]],
        ["name" => "বিমানবাহিনী ঘাঁটি বাশার (বিমানবাহিনী)", "lat" => 23.8207, "lng" => 90.4318, "phones" => ["01799001122", "01711002233"]],
        ["name" => "নৌবাহিনী ঘাঁটি হাশিম (নৌবাহিনী)", "lat" => 23.7801, "lng" => 90.3845, "phones" => ["01811223344", "01822334455"]],
    ],
    "চট্টগ্রাম বিভাগ" => [
        ["name" => "চট্টগ্রাম ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 22.3357, "lng" => 91.8078, "phones" => ["01833333333", "01844444444"]],
        ["name" => "রামু ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 21.4581, "lng" => 92.1599, "phones" => ["01855555555", "01866666666"]],
        ["name" => "কক্সবাজার সেনানিবাস (ক্যান্টনমেন্ট)", "lat" => 21.4272, "lng" => 92.0058, "phones" => ["01877777777", "01888888888"]],
        ["name" => "কুমিল্লা ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 23.4683, "lng" => 91.1785, "phones" => ["01777777777", "01788888888"]],
        
        // সেনানিবাস ও ক্যাম্প
        ["name" => "ফেনী সেনানিবাস (ক্যাম্প)", "lat" => 23.0200, "lng" => 91.4047, "phones" => ["01899999999", "01800000000"]],
        ["name" => "নোয়াখালী সেনানিবাস (ক্যাম্প)", "lat" => 22.8231, "lng" => 91.0960, "phones" => ["01911111111", "01922222222"]],
        ["name" => "হালিশহর সেনানিবাস (ক্যাম্প)", "lat" => 22.3419, "lng" => 91.7832, "phones" => ["01933333333", "01944444444"]],
        ["name" => "পতেঙ্গা নৌ ঘাঁটি (নৌবাহিনী)", "lat" => 22.2973, "lng" => 91.7935, "phones" => ["01955555555", "01966666666"]],
        ["name" => "সীতাকুণ্ড সেনানিবাস (ক্যাম্প)", "lat" => 22.5948, "lng" => 91.7039, "phones" => ["01977777777", "01988888888"]],
        ["name" => "লক্ষ্মীপুর সেনানিবাস (ক্যাম্প)", "lat" => 22.9424, "lng" => 90.8412, "phones" => ["01999999999", "01900000000"]],
        ["name" => "বাঁশখালী সেনানিবাস (ক্যাম্প)", "lat" => 21.5555, "lng" => 91.9635, "phones" => ["01712345678", "01787654321"]],
        ["name" => "খাগড়াছড়ি সেনানিবাস (ক্যাম্প)", "lat" => 23.1175, "lng" => 91.9843, "phones" => ["01711223344", "01722334455"]],
        ["name" => "বান্দরবান সেনানিবাস (ক্যাম্প)", "lat" => 22.1953, "lng" => 92.2187, "phones" => ["01733445566", "01744556677"]],
        ["name" => "রাঙ্গামাটি সেনানিবাস (ক্যাম্প)", "lat" => 22.6374, "lng" => 92.2210, "phones" => ["01755667788", "01766778899"]],
        ["name" => "বোয়ালখালী সেনানিবাস (ক্যাম্প)", "lat" => 22.3546, "lng" => 91.9190, "phones" => ["01777889900", "01788990011"]],

    ],
    "খুলনা বিভাগ" => [
        ["name" => "যশোর ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 23.1695, "lng" => 89.2137, "phones" => ["01711111111", "01722222222"]],
        ["name" => "খুলনা ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 22.8456, "lng" => 89.5403, "phones" => ["01733333333", "01744444444"]],
       
        // সেনানিবাস ও ক্যাম্প
        ["name" => "সাতক্ষীরা সেনানিবাস (ক্যাম্প)", "lat" => 22.7185, "lng" => 89.0706, "phones" => ["01755555555", "01766666666"]],
        ["name" => "বাগেরহাট সেনানিবাস (ক্যাম্প)", "lat" => 22.6516, "lng" => 89.7856, "phones" => ["01777777777", "01788888888"]],
        ["name" => "নড়াইল সেনানিবাস (ক্যাম্প)", "lat" => 23.1725, "lng" => 89.5121, "phones" => ["01799999999", "01700000000"]],
        ["name" => "কুষ্টিয়া সেনানিবাস (ক্যাম্প)", "lat" => 23.9013, "lng" => 89.1198, "phones" => ["01811111111", "01822222222"]],
        ["name" => "ঝিনাইদহ সেনানিবাস (ক্যাম্প)", "lat" => 23.5412, "lng" => 89.1535, "phones" => ["01833333333", "01844444444"]],
        ["name" => "চুয়াডাঙ্গা সেনানিবাস (ক্যাম্প)", "lat" => 23.6400, "lng" => 88.8410, "phones" => ["01855555555", "01866666666"]],
        ["name" => "মেহেরপুর সেনানিবাস (ক্যাম্প)", "lat" => 23.7685, "lng" => 88.6316, "phones" => ["01877777777", "01888888888"]],
        ["name" => "মাগুরা সেনানিবাস (ক্যাম্প)", "lat" => 23.4873, "lng" => 89.4192, "phones" => ["01899999999", "01800000000"]],
    ],
    "রাজশাহী বিভাগ" => [
         // ক্যান্টনমেন্ট
         ["name" => "বগুড়া ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 24.8481, "lng" => 89.3724, "phones" => ["01711111111", "01722222222"]],
         ["name" => "রাজশাহী ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 24.3740, "lng" => 88.6042, "phones" => ["01733333333", "01744444444"]],
     
         // সেনানিবাস ও ক্যাম্প
         ["name" => "পাবনা সেনানিবাস (ক্যাম্প)", "lat" => 23.9985, "lng" => 89.2332, "phones" => ["01755555555", "01766666666"]],
         ["name" => "নাটোর সেনানিবাস (ক্যাম্প)", "lat" => 24.4131, "lng" => 89.0075, "phones" => ["01777777777", "01788888888"]],
         ["name" => "জয়পুরহাট সেনানিবাস (ক্যাম্প)", "lat" => 25.0968, "lng" => 89.0230, "phones" => ["01799999999", "01700000000"]],
         ["name" => "সিরাজগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 24.4569, "lng" => 89.7002, "phones" => ["01811111111", "01822222222"]],
         ["name" => "চাঁপাইনবাবগঞ্জ সেনানিবাস (ক্যাম্প)", "lat" => 24.5965, "lng" => 88.2775, "phones" => ["01833333333", "01844444444"]],
         ["name" => "নওগাঁ সেনানিবাস (ক্যাম্প)", "lat" => 24.9135, "lng" => 88.7533, "phones" => ["01855555555", "01866666666"]],
    ],
    "সিলেট বিভাগ" => [
        ["name" => "সিলেট ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 24.8978, "lng" => 91.8687, "phones" => ["01655555555", "01666666666"]],
    ],
    "রংপুর বিভাগ" => [
       // ক্যান্টনমেন্ট
       ["name" => "রংপুর ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 25.7466, "lng" => 89.2511, "phones" => ["01711111111", "01722222222"]],
       ["name" => "দিনাজপুর ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 25.6217, "lng" => 88.6357, "phones" => ["01733333333", "01744444444"]],
   
       // সেনানিবাস ও ক্যাম্প
       ["name" => "গাইবান্ধা সেনানিবাস (ক্যাম্প)", "lat" => 25.3288, "lng" => 89.5280, "phones" => ["01755555555", "01766666666"]],
       ["name" => "ঠাকুরগাঁও সেনানিবাস (ক্যাম্প)", "lat" => 26.0335, "lng" => 88.4615, "phones" => ["01777777777", "01788888888"]],
       ["name" => "কুড়িগ্রাম সেনানিবাস (ক্যাম্প)", "lat" => 25.8051, "lng" => 89.6362, "phones" => ["01799999999", "01700000000"]],
       ["name" => "লালমনিরহাট সেনানিবাস (ক্যাম্প)", "lat" => 25.9220, "lng" => 89.4482, "phones" => ["01811111111", "01822222222"]],
       ["name" => "পঞ্চগড় সেনানিবাস (ক্যাম্প)", "lat" => 26.3411, "lng" => 88.5542, "phones" => ["01833333333", "01844444444"]],
       ["name" => "নীলফামারী সেনানিবাস (ক্যাম্প)", "lat" => 25.9312, "lng" => 88.8560, "phones" => ["01855555555", "01866666666"]],
    ],
    "বরিশাল বিভাগ" => [
       // ক্যান্টনমেন্ট
       ["name" => "বরিশাল ক্যান্টনমেন্ট (ক্যান্টনমেন্ট)", "lat" => 22.7010, "lng" => 90.3535, "phones" => ["01711111111", "01722222222"]],

       // সেনানিবাস ও ক্যাম্প
       ["name" => "পটুয়াখালী সেনানিবাস (ক্যাম্প)", "lat" => 22.3596, "lng" => 90.3296, "phones" => ["01733333333", "01744444444"]],
       ["name" => "ভোলা সেনানিবাস (ক্যাম্প)", "lat" => 22.6859, "lng" => 90.6480, "phones" => ["01755555555", "01766666666"]],
       ["name" => "ঝালকাঠি সেনানিবাস (ক্যাম্প)", "lat" => 22.6406, "lng" => 90.2000, "phones" => ["01777777777", "01788888888"]],
    ],
];

echo json_encode($armyLocations, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
