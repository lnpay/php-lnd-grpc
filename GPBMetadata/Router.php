<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace GPBMetadata;

class Router
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Rpc::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a91290a0c726f757465722e70726f746f1209726f7574657272706322e4" .
            "040a1253656e645061796d656e7452657175657374120c0a046465737418" .
            "012001280c120b0a03616d7418022001280312100a08616d745f6d736174" .
            "180c2001280312140a0c7061796d656e745f6861736818032001280c1218" .
            "0a1066696e616c5f636c74765f64656c746118042001280512170a0f7061" .
            "796d656e745f7265717565737418052001280912170a0f74696d656f7574" .
            "5f7365636f6e647318062001280512150a0d6665655f6c696d69745f7361" .
            "7418072001280312160a0e6665655f6c696d69745f6d736174180d200128" .
            "03121e0a106f7574676f696e675f6368616e5f6964180820012804420418" .
            "01300112190a116f7574676f696e675f6368616e5f696473181320032804" .
            "12170a0f6c6173745f686f705f7075626b6579180e2001280c12120a0a63" .
            "6c74765f6c696d697418092001280512250a0b726f7574655f68696e7473" .
            "180a2003280b32102e6c6e7270632e526f75746548696e7412510a136465" .
            "73745f637573746f6d5f7265636f726473180b2003280b32342e726f7574" .
            "65727270632e53656e645061796d656e74526571756573742e4465737443" .
            "7573746f6d5265636f726473456e747279121a0a12616c6c6f775f73656c" .
            "665f7061796d656e74180f2001280812280a0d646573745f666561747572" .
            "657318102003280e32112e6c6e7270632e4665617475726542697412110a" .
            "096d61785f706172747318112001280d121b0a136e6f5f696e666c696768" .
            "745f757064617465731812200128081a380a1644657374437573746f6d52" .
            "65636f726473456e747279120b0a036b6579180120012804120d0a057661" .
            "6c756518022001280c3a02380122480a13547261636b5061796d656e7452" .
            "65717565737412140a0c7061796d656e745f6861736818012001280c121b" .
            "0a136e6f5f696e666c696768745f7570646174657318022001280822300a" .
            "0f526f75746546656552657175657374120c0a046465737418012001280c" .
            "120f0a07616d745f73617418022001280322450a10526f75746546656552" .
            "6573706f6e736512180a10726f7574696e675f6665655f6d736174180120" .
            "01280312170a0f74696d655f6c6f636b5f64656c61791802200128032247" .
            "0a1253656e64546f526f7574655265717565737412140a0c7061796d656e" .
            "745f6861736818012001280c121b0a05726f75746518022001280b320c2e" .
            "6c6e7270632e526f75746522480a1353656e64546f526f75746552657370" .
            "6f6e736512100a08707265696d61676518012001280c121f0a076661696c" .
            "75726518022001280b320e2e6c6e7270632e4661696c757265221c0a1a52" .
            "657365744d697373696f6e436f6e74726f6c52657175657374221d0a1b52" .
            "657365744d697373696f6e436f6e74726f6c526573706f6e7365221c0a1a" .
            "51756572794d697373696f6e436f6e74726f6c52657175657374224a0a1b" .
            "51756572794d697373696f6e436f6e74726f6c526573706f6e736512250a" .
            "05706169727318022003280b32162e726f757465727270632e5061697248" .
            "6973746f72794a0408011002226f0a0b50616972486973746f727912110a" .
            "096e6f64655f66726f6d18012001280c120f0a076e6f64655f746f180220" .
            "01280c12240a07686973746f727918072001280b32132e726f7574657272" .
            "70632e50616972446174614a04080310044a04080410054a04080510064a" .
            "04080610072299010a08506169724461746112110a096661696c5f74696d" .
            "6518012001280312140a0c6661696c5f616d745f73617418022001280312" .
            "150a0d6661696c5f616d745f6d73617418042001280312140a0c73756363" .
            "6573735f74696d6518052001280312170a0f737563636573735f616d745f" .
            "73617418062001280312180a10737563636573735f616d745f6d73617418" .
            "07200128034a0408031004224f0a17517565727950726f626162696c6974" .
            "795265717565737412110a0966726f6d5f6e6f646518012001280c120f0a" .
            "07746f5f6e6f646518022001280c12100a08616d745f6d73617418032001" .
            "280322550a18517565727950726f626162696c697479526573706f6e7365" .
            "12130a0b70726f626162696c69747918012001280112240a07686973746f" .
            "727918022001280b32132e726f757465727270632e506169724461746122" .
            "720a114275696c64526f7574655265717565737412100a08616d745f6d73" .
            "617418012001280312180a1066696e616c5f636c74765f64656c74611802" .
            "20012805121c0a106f7574676f696e675f6368616e5f6964180320012804" .
            "4202300112130a0b686f705f7075626b65797318042003280c22310a1242" .
            "75696c64526f757465526573706f6e7365121b0a05726f75746518012001" .
            "280b320c2e6c6e7270632e526f757465221c0a1a53756273637269626548" .
            "746c634576656e74735265717565737422dc030a0948746c634576656e74" .
            "121b0a13696e636f6d696e675f6368616e6e656c5f696418012001280412" .
            "1b0a136f7574676f696e675f6368616e6e656c5f69641802200128041218" .
            "0a10696e636f6d696e675f68746c635f696418032001280412180a106f75" .
            "74676f696e675f68746c635f696418042001280412140a0c74696d657374" .
            "616d705f6e7318052001280412320a0a6576656e745f7479706518062001" .
            "280e321e2e726f757465727270632e48746c634576656e742e4576656e74" .
            "5479706512300a0d666f72776172645f6576656e7418072001280b32172e" .
            "726f757465727270632e466f72776172644576656e74480012390a12666f" .
            "72776172645f6661696c5f6576656e7418082001280b321b2e726f757465" .
            "727270632e466f72776172644661696c4576656e744800122e0a0c736574" .
            "746c655f6576656e7418092001280b32162e726f757465727270632e5365" .
            "74746c654576656e74480012330a0f6c696e6b5f6661696c5f6576656e74" .
            "180a2001280b32182e726f757465727270632e4c696e6b4661696c457665" .
            "6e744800223c0a094576656e7454797065120b0a07554e4b4e4f574e1000" .
            "12080a0453454e441001120b0a07524543454956451002120b0a07464f52" .
            "57415244100342070a056576656e7422760a0848746c63496e666f12190a" .
            "11696e636f6d696e675f74696d656c6f636b18012001280d12190a116f75" .
            "74676f696e675f74696d656c6f636b18022001280d12190a11696e636f6d" .
            "696e675f616d745f6d73617418032001280412190a116f7574676f696e67" .
            "5f616d745f6d73617418042001280422310a0c466f72776172644576656e" .
            "7412210a04696e666f18012001280b32132e726f757465727270632e4874" .
            "6c63496e666f22120a10466f72776172644661696c4576656e74220d0a0b" .
            "536574746c654576656e7422ae010a0d4c696e6b4661696c4576656e7412" .
            "210a04696e666f18012001280b32132e726f757465727270632e48746c63" .
            "496e666f12300a0c776972655f6661696c75726518022001280e321a2e6c" .
            "6e7270632e4661696c7572652e4661696c757265436f646512300a0e6661" .
            "696c7572655f64657461696c18032001280e32182e726f75746572727063" .
            "2e4661696c75726544657461696c12160a0e6661696c7572655f73747269" .
            "6e6718042001280922720a0d5061796d656e7453746174757312260a0573" .
            "7461746518012001280e32172e726f757465727270632e5061796d656e74" .
            "537461746512100a08707265696d61676518022001280c12210a0568746c" .
            "637318042003280b32122e6c6e7270632e48544c43417474656d70744a04" .
            "08031004222e0a0a436972637569744b6579120f0a076368616e5f696418" .
            "0120012804120f0a0768746c635f69641802200128042283030a1b466f72" .
            "7761726448746c63496e746572636570745265717565737412330a14696e" .
            "636f6d696e675f636972637569745f6b657918012001280b32152e726f75" .
            "7465727270632e436972637569744b6579121c0a14696e636f6d696e675f" .
            "616d6f756e745f6d73617418052001280412170a0f696e636f6d696e675f" .
            "65787069727918062001280d12140a0c7061796d656e745f686173681802" .
            "2001280c12220a1a6f7574676f696e675f7265717565737465645f636861" .
            "6e5f6964180720012804121c0a146f7574676f696e675f616d6f756e745f" .
            "6d73617418032001280412170a0f6f7574676f696e675f65787069727918" .
            "042001280d12510a0e637573746f6d5f7265636f72647318082003280b32" .
            "392e726f757465727270632e466f727761726448746c63496e7465726365" .
            "7074526571756573742e437573746f6d5265636f726473456e7472791a34" .
            "0a12437573746f6d5265636f726473456e747279120b0a036b6579180120" .
            "012804120d0a0576616c756518022001280c3a023801229a010a1c466f72" .
            "7761726448746c63496e74657263657074526573706f6e736512330a1469" .
            "6e636f6d696e675f636972637569745f6b657918012001280b32152e726f" .
            "757465727270632e436972637569744b657912330a06616374696f6e1802" .
            "2001280e32232e726f757465727270632e5265736f6c7665486f6c64466f" .
            "7277617264416374696f6e12100a08707265696d61676518032001280c2a" .
            "81040a0d4661696c75726544657461696c120b0a07554e4b4e4f574e1000" .
            "120d0a094e4f5f44455441494c100112100a0c4f4e494f4e5f4445434f44" .
            "45100212150a114c494e4b5f4e4f545f454c494749424c45100312140a10" .
            "4f4e5f434841494e5f54494d454f5554100412140a1048544c435f455843" .
            "454544535f4d4158100512180a14494e53554646494349454e545f42414c" .
            "414e4345100612160a12494e434f4d504c4554455f464f52574152441007" .
            "12130a0f48544c435f4144445f4641494c4544100812150a11464f525741" .
            "5244535f44495341424c4544100912140a10494e564f4943455f43414e43" .
            "454c4544100a12150a11494e564f4943455f554e44455250414944100b12" .
            "1b0a17494e564f4943455f4558504952595f544f4f5f534f4f4e100c1214" .
            "0a10494e564f4943455f4e4f545f4f50454e100d12170a134d50505f494e" .
            "564f4943455f54494d454f5554100e12140a10414444524553535f4d4953" .
            "4d41544348100f12160a125345545f544f54414c5f4d49534d4154434810" .
            "1012150a115345545f544f54414c5f544f4f5f4c4f57101112100a0c5345" .
            "545f4f56455250414944101212130a0f554e4b4e4f574e5f494e564f4943" .
            "45101312130a0f494e56414c49445f4b455953454e44101412130a0f4d50" .
            "505f494e5f50524f4752455353101512120a0e43495243554c41525f524f" .
            "55544510162aae010a0c5061796d656e745374617465120d0a09494e5f46" .
            "4c494748541000120d0a09535543434545444544100112120a0e4641494c" .
            "45445f54494d454f5554100212130a0f4641494c45445f4e4f5f524f5554" .
            "45100312100a0c4641494c45445f4552524f52100412240a204641494c45" .
            "445f494e434f52524543545f5041594d454e545f44455441494c53100512" .
            "1f0a1b4641494c45445f494e53554646494349454e545f42414c414e4345" .
            "10062a3c0a185265736f6c7665486f6c64466f7277617264416374696f6e" .
            "120a0a06534554544c45100012080a044641494c1001120a0a0652455355" .
            "4d45100232c4080a06526f7574657212400a0d53656e645061796d656e74" .
            "5632121d2e726f757465727270632e53656e645061796d656e7452657175" .
            "6573741a0e2e6c6e7270632e5061796d656e74300112420a0e547261636b" .
            "5061796d656e745632121e2e726f757465727270632e547261636b506179" .
            "6d656e74526571756573741a0e2e6c6e7270632e5061796d656e74300112" .
            "4b0a10457374696d617465526f757465466565121a2e726f757465727270" .
            "632e526f757465466565526571756573741a1b2e726f757465727270632e" .
            "526f757465466565526573706f6e736512510a0b53656e64546f526f7574" .
            "65121d2e726f757465727270632e53656e64546f526f7574655265717565" .
            "73741a1e2e726f757465727270632e53656e64546f526f75746552657370" .
            "6f6e7365220388020112420a0d53656e64546f526f7574655632121d2e72" .
            "6f757465727270632e53656e64546f526f757465526571756573741a122e" .
            "6c6e7270632e48544c43417474656d707412640a1352657365744d697373" .
            "696f6e436f6e74726f6c12252e726f757465727270632e52657365744d69" .
            "7373696f6e436f6e74726f6c526571756573741a262e726f757465727270" .
            "632e52657365744d697373696f6e436f6e74726f6c526573706f6e736512" .
            "640a1351756572794d697373696f6e436f6e74726f6c12252e726f757465" .
            "727270632e51756572794d697373696f6e436f6e74726f6c526571756573" .
            "741a262e726f757465727270632e51756572794d697373696f6e436f6e74" .
            "726f6c526573706f6e7365125b0a10517565727950726f626162696c6974" .
            "7912222e726f757465727270632e517565727950726f626162696c697479" .
            "526571756573741a232e726f757465727270632e517565727950726f6261" .
            "62696c697479526573706f6e736512490a0a4275696c64526f757465121c" .
            "2e726f757465727270632e4275696c64526f757465526571756573741a1d" .
            "2e726f757465727270632e4275696c64526f757465526573706f6e736512" .
            "540a1353756273637269626548746c634576656e747312252e726f757465" .
            "727270632e53756273637269626548746c634576656e7473526571756573" .
            "741a142e726f757465727270632e48746c634576656e743001124d0a0b53" .
            "656e645061796d656e74121d2e726f757465727270632e53656e64506179" .
            "6d656e74526571756573741a182e726f757465727270632e5061796d656e" .
            "7453746174757322038802013001124f0a0c547261636b5061796d656e74" .
            "121e2e726f757465727270632e547261636b5061796d656e745265717565" .
            "73741a182e726f757465727270632e5061796d656e745374617475732203" .
            "880201300112660a0f48746c63496e746572636570746f7212272e726f75" .
            "7465727270632e466f727761726448746c63496e74657263657074526573" .
            "706f6e73651a262e726f757465727270632e466f727761726448746c6349" .
            "6e74657263657074526571756573742801300142315a2f6769746875622e" .
            "636f6d2f6c696768746e696e676e6574776f726b2f6c6e642f6c6e727063" .
            "2f726f75746572727063620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

