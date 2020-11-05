<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta;

class WebSecurityScanner
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\CrawledUrl::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\FindingTypeStats::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfig::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanRun::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa92d0a41676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f7765625f73656375726974795f7363616e6e65722e70726f746f1226676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574611a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a38676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f637261776c65645f75726c2e70726f746f1a34676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f66696e64696e672e70726f746f1a3f676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f66696e64696e675f747970655f73746174732e70726f746f1a38676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f7363616e5f636f6e6669672e70726f746f1a35676f6f676c652f636c6f75642f77656273656375726974797363616e6e65722f7631626574612f7363616e5f72756e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22ac010a174372656174655363616e436f6e6669675265717565737412430a06706172656e741801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a656374124c0a0b7363616e5f636f6e66696718022001280b32322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669674203e04102225d0a1744656c6574655363616e436f6e6669675265717565737412420a046e616d651801200128094234e04102fa412e0a2c77656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e436f6e666967225a0a144765745363616e436f6e6669675265717565737412420a046e616d651801200128094234e04102fa412e0a2c77656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e436f6e6669672284010a164c6973745363616e436f6e666967735265717565737412430a06706172656e741801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412120a0a706167655f746f6b656e18022001280912110a09706167655f73697a65180320012805229d010a175570646174655363616e436f6e66696752657175657374124c0a0b7363616e5f636f6e66696718022001280b32322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e6669674203e0410212340a0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e04102227c0a174c6973745363616e436f6e66696773526573706f6e736512480a0c7363616e5f636f6e6669677318012003280b32322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e66696712170a0f6e6578745f706167655f746f6b656e18022001280922590a1353746172745363616e52756e5265717565737412420a046e616d651801200128094234e04102fa412e0a2c77656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e436f6e66696722540a114765745363616e52756e52657175657374123f0a046e616d651801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e52756e2282010a134c6973745363616e52756e735265717565737412440a06706172656e741801200128094234e04102fa412e0a2c77656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e436f6e66696712120a0a706167655f746f6b656e18022001280912110a09706167655f73697a6518032001280522730a144c6973745363616e52756e73526573706f6e736512420a097363616e5f72756e7318012003280b322f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e52756e12170a0f6e6578745f706167655f746f6b656e18022001280922550a1253746f705363616e52756e52657175657374123f0a046e616d651801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e52756e2282010a164c697374437261776c656455726c735265717565737412410a06706172656e741801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e52756e12120a0a706167655f746f6b656e18022001280912110a09706167655f73697a65180320012805227c0a174c697374437261776c656455726c73526573706f6e736512480a0c637261776c65645f75726c7318012003280b32322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e437261776c656455726c12170a0f6e6578745f706167655f746f6b656e18022001280922540a1147657446696e64696e6752657175657374123f0a046e616d651801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f46696e64696e672294010a134c69737446696e64696e67735265717565737412410a06706172656e741801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e52756e12130a0666696c7465721802200128094203e0410212120a0a706167655f746f6b656e18032001280912110a09706167655f73697a6518042001280522720a144c69737446696e64696e6773526573706f6e736512410a0866696e64696e677318012003280b322f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e46696e64696e6712170a0f6e6578745f706167655f746f6b656e18022001280922600a1b4c69737446696e64696e675479706553746174735265717565737412410a06706172656e741801200128094231e04102fa412b0a2977656273656375726974797363616e6e65722e676f6f676c65617069732e636f6d2f5363616e52756e22740a1c4c69737446696e64696e67547970655374617473526573706f6e736512540a1266696e64696e675f747970655f737461747318012003280b32382e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e46696e64696e67547970655374617473328e160a1257656253656375726974795363616e6e657212da010a104372656174655363616e436f6e666967123f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4372656174655363616e436f6e666967526571756573741a322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e666967225182d3e493023622272f7631626574612f7b706172656e743d70726f6a656374732f2a7d2f7363616e436f6e666967733a0b7363616e5f636f6e666967da4112706172656e742c7363616e5f636f6e66696712a3010a1044656c6574655363616e436f6e666967123f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e44656c6574655363616e436f6e666967526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223682d3e49302292a272f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a7dda41046e616d6512b9010a0d4765745363616e436f6e666967123c2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4765745363616e436f6e666967526571756573741a322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e666967223682d3e493022912272f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a7dda41046e616d6512cc010a0f4c6973745363616e436f6e66696773123e2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c6973745363616e436f6e66696773526571756573741a3f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c6973745363616e436f6e66696773526573706f6e7365223882d3e493022912272f7631626574612f7b706172656e743d70726f6a656374732f2a7d2f7363616e436f6e66696773da4106706172656e7412eb010a105570646174655363616e436f6e666967123f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5570646174655363616e436f6e666967526571756573741a322e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e436f6e666967226282d3e493024232332f7631626574612f7b7363616e5f636f6e6669672e6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a7d3a0b7363616e5f636f6e666967da41177363616e5f636f6e6669672c7570646174655f6d61736b12bd010a0c53746172745363616e52756e123b2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e53746172745363616e52756e526571756573741a2f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e52756e223f82d3e4930232222d2f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a7d3a73746172743a012ada41046e616d6512bb010a0a4765745363616e52756e12392e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4765745363616e52756e526571756573741a2f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e52756e224182d3e493023412322f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a7dda41046e616d6512ce010a0c4c6973745363616e52756e73123b2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c6973745363616e52756e73526571756573741a3c2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c6973745363616e52756e73526573706f6e7365224382d3e493023412322f7631626574612f7b706172656e743d70726f6a656374732f2a2f7363616e436f6e666967732f2a7d2f7363616e52756e73da4106706172656e7412c5010a0b53746f705363616e52756e123a2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e53746f705363616e52756e526571756573741a2f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e5363616e52756e224982d3e493023c22372f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a7d3a73746f703a012ada41046e616d6512e5010a0f4c697374437261776c656455726c73123e2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c697374437261776c656455726c73526571756573741a3f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c697374437261776c656455726c73526573706f6e7365225182d3e493024212402f7631626574612f7b706172656e743d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a7d2f637261776c656455726c73da4106706172656e7412c6010a0a47657446696e64696e6712392e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e47657446696e64696e67526571756573741a2f2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e46696e64696e67224c82d3e493023f123d2f7631626574612f7b6e616d653d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a2f66696e64696e67732f2a7dda41046e616d6512e0010a0c4c69737446696e64696e6773123b2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c69737446696e64696e6773526571756573741a3c2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c69737446696e64696e6773526573706f6e7365225582d3e493023f123d2f7631626574612f7b706172656e743d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a7d2f66696e64696e6773da410d706172656e742c66696c74657212f9010a144c69737446696e64696e6754797065537461747312432e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c69737446696e64696e67547970655374617473526571756573741a442e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e7631626574612e4c69737446696e64696e67547970655374617473526573706f6e7365225682d3e493024712452f7631626574612f7b706172656e743d70726f6a656374732f2a2f7363616e436f6e666967732f2a2f7363616e52756e732f2a7d2f66696e64696e67547970655374617473da4106706172656e741a55ca412177656273656375726974797363616e6e65722e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d429f020a2a636f6d2e676f6f676c652e636c6f75642e77656273656375726974797363616e6e65722e763162657461421757656253656375726974795363616e6e657250726f746f50015a58676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f77656273656375726974797363616e6e65722f7631626574613b77656273656375726974797363616e6e6572aa0226476f6f676c652e436c6f75642e57656253656375726974795363616e6e65722e563142657461ca0226476f6f676c655c436c6f75645c57656253656375726974795363616e6e65725c563162657461ea0229476f6f676c653a3a436c6f75643a3a57656253656375726974795363616e6e65723a3a563162657461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

