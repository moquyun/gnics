<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    public function index()
    {
        $name = '5E0A5A31A365BB69A2A90A51A33123A4F3CA791C523A1E3EAC83D47A561B68E597AD4AC4D25C659CC4350F3A84516A6F1F70AD0C44B98F5630F2C778A413D8D82A2711F4524E50C9D75249FA7BE8C2D6640B53FBB3C9AC1EC07C8E767DB77CAC415051D0B34EA2567B0BB4F1E4E372C352218913F1A1DBE10E90CB206C4AC5D797BFB56EE34BAA2678FDF6D982FF584A894A3C48303BDAE234B1CC83D6A9C104ACB0431C83E6483619A6D9D1DD3E675BA6826898CE5D6CE62E2A0EDB25D0E3F96A16064C15C5BC8EC02B4502BA4E35BAB10D26D05EF1623000DCE4BEA47E5389A7C2C94DDAD2A58E40E670490C41E674DCD6D6E33EADFDB84E98A23B5A43F1084C04BD4E4F40350AF5208553B6E2A4CDC33CB42BD74C56C82D6A8A7C93A9779AEDD411FF820676B514DBD6967B11AF9B454999E3ED6646DF374F1AE59DB5AD187EFB0B9D8BF5F8F005710D6E8C951BAD0BDD757D1946392BE4E903DB938857B09E0401D97B02F5F098C0C4B9BCBB4004813C86521FECBE0C';
        $names = base64_encode(iconv('utf-8','gbk',"$name"));

        return $names;
    }

    public function test()
    {
    	$data = array();
    	$data['id'] = '1';
    	$data['name'] = 'pp';
    	$data['pid'] = 'mm_3423432_43234_123213';
        return json($data);
    }
    public function testa()
    {
    	$test = new \taopassword\Tptaopassword();
    	$data = $test->test();
    	
        return $data;
    }


    public function hk_test()
    {
        
        $url = 'http://lx.heikeyun.net/Main.aspx';

        $data = array();
        //$data[''] = '';
        $data['__EVENTTARGET'] = '';
        $data['__EVENTARGUMENT'] = '';
        $data['__VIEWSTATE'] = 'W30OC4rz2FVsxk484YwwPR2930OkJz+DmEb27Obod1qemrGOsuSzqzxR7QW/6NFzWnKclAOoN5t6EshF8lqn90aXqkoc8WTtJMLtMOteLdiFIsZJg/Bjqvw6fuSvS0h/kP1VC4HaYyjQm1vrEVavmyv+hVyZ3N2RMZqZkoZ1atMLKRsFvWEa8DeIMszySImIzKrbFJVuOj+tpii7yJBsfLl5PoRJs53mJQJYthfFvJz5pTLy5lb3tYUWpTBG5EPWhXOBmRgkwknshiMMD1Ir3FFlilTxCogdDTqzaxwZvusxHhuGKscKucAmq2K8ebdkJCt/Z1LHmSk72uQrLN4Qo4mwOU4VMazcRmBhsPHk7SG3GtuQkAQG+7ouYDPTEm7ba7yeVGfZyyRx64c7+MB3//JMdXHmNlLtpL/eKo//2qVR/I0iU4kZYvN7byI+ee6d9dSDhg==';
        $data['ctl00$ContentPlaceHolder1$FileOpenTorrent'] = '';
        $data['ctl00$ContentPlaceHolder1$txtBtHash'] = 'magnet:?xt=urn:btih:1e37f6aae2f7eab0f74722138c1c66afec979dca';
        $data['ctl00$ContentPlaceHolder1$btnGoHash'] = '解析';
        /*
        $data['FileOpenTorrent'] = '';
        $data['txtBtHash'] = 'magnet:?xt=urn:btih:1e37f6aae2f7eab0f74722138c1c66afec979dca';
        $data['btnGoHash'] = '解析';
        */


        
       
        $header = array();
        $header[] = 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
        $header[] = 'Accept-Encoding:gzip, deflate';
        $header[] = 'Accept-Language:zh-CN,zh;q=0.8';
        $header[] = 'Accept-Language:zh-CN,zh;q=0.8';
        $header[] = 'Content-Type:multipart/form-data; boundary=----WebKitFormBoundary6MnrLq5K66tzB3eE';
        //Cookie:TrackID=1cAzc41R65aLFgbi6_fP44RKXNHW9MoMDihv7PD0YU-V9Fm63GYe1JJT21CqEDJgDe15pYZbyc4IxQqBhXrkJVAy49ylePIUJ5IAlq4VUoPM; pinId=5mpamhd1whbZ-pGX3nFEfLV9-x-f3wj7; _ntSppxt=tH3ugvKTUEDiwS4iP+bxHAzKC3qq8KCkh5w1dpWfg60=; __jdv=95931165|direct|-|none|-|1487384707150; _ntGJCaC=yR5pvndn7H8x+Hf/KJTs6DTVWw39e6JN/uTJSg0mjMg=; _ntspTah=P1PLFJZdZN6zvCrQ72devFMQA2vnTrk3wafl3GCBNMg=; _ntEomsA=u3iiVAY2d59docJ5tfwMrfFYkxY0muK5LLDFNtmQnko=; _ntwRFpZ=MnkKCSLYSCKiRNA+5AdUO3K3KuaRBs+udpeulRyoyeg=; alc=44NE8FYTee0hTT6bY6UpYA==; _ntFyDix=en8ESKgNIq2psaXvhp5uNI6GmRiHQ8Gt8CfnJxs1A9Q=; __jda=95931165.706278443.1469867109.1484538282.1487384707.14; __jdb=95931165.4.706278443|14.1487384707; __jdc=95931165; 3AB9D23F7A4B3C9B=XOJ4U5OPLA2VRZFFKXOCXYJNPBLYWFRFYHDUUYFEV7D6MSCDDOCNA6I7UXMUCEXTVMDCNLXGG55E5EH5WNS2ZO6OQU; __jdu=706278443
        $header[] = 'Cookie:__guid=35485052.3097296315240440300.1502177377816.7534; yd_cookie=ab72e98b-a853-4779cc9deb6a7d7397704b38aadd9752ff20; ASP.NET_SessionId=yn13ityd0zlbitz2q3oqwov5; ; HKUSER=UserName=dbg8685&UserPassword=dbg8685; yd_srvbl=06549327c213b4c7ca848ec090b1c20f; monitor_count=264';
        //_ntwRFpZ=MnkKCSLYSCKiRNA+5AdUO3K3KuaRBs+udpeulRyoyeg=;
        $header[] = 'Host:lx.heikeyun.net';
        //$header[] = 'Origin:https://passport.jd.com';
        //$header[] = 'Referer:https://passport.jd.com/common/loginPage?from=media&ReturnUrl=http%3A%2F%2Fmedia.jd.com%2Findex%2Foverview';
        
        $login_get = $this->curl_post_cons($url,$header,$data);

        


        dump($login_get);
        //return $this->curl_post_cons($url,$header,$data);
    }

    public function hk_key(Request $request)
    {
        $key = $request->input('n');;
        $ks = $request->input('k');;

        //多开,1多。。。0单
        if(!empty($ks)){
            $duokai = 1;
        }else{
            $duokai = 0;
        }
       
        if(!empty($key)){
            //nanren磁力
            $key = urlencode($key);
            $url_caiji_a = 'http://nanrencili.net/list/'.$key.'.html';
            
            $caijia_info = $this->curlGet($url_caiji_a);
            $caijia_info_a = preg_replace("/\s/","",$caijia_info);
            //dump($caijia_info_a);
            @preg_match_all('/<dlclass="detail"><dt><ahref="(.*?)"target="_blank">(.*?)文档大小:<b>(.*?)<\/b><\/span><span>(.*?)<\/b><\/span><span><ahref="(.*?)"target="_blank">磁力链接<\/a><\/span><\/dd><ulclass="filelist"><li><imgsrc=\'(.*?)\'alt=\'(.*?)<spanclass="gray_color(.*?)<\/dl>/',$caijia_info_a,$arr_a);
            //dump($arr_a);
            if(!empty($arr_a[1])){
                $i_count = count($arr_a[1]);
                $vod_arrs = array();
                for ($i=0; $i < $i_count; $i++) {
                    if(strstr($arr_a[6][$i],'mp4') || strstr($arr_a[6][$i],'MP4')){

                        $hkyun_k = $this->hk_bt_url($arr_a[5][$i]);//----
                        //dump($hkyun_k);
                        /**/
                        $vod_arrs[$i]['name'] = $arr_a[7][$i];
                        $vod_arrs[$i]['size'] = $arr_a[3][$i];
                        $vod_arrs[$i]['btr'] = $arr_a[5][$i];
                        $vod_arrs[$i]['leixing'] = $arr_a[6][$i];

                        if($duokai == 0 && $hkyun_k['code'] == 200){
                            //$i = $i_count+1;
                            //return json_encode(array('code'=>201,'msg'=>'单条保存成功','msgs'=>$hkyun_k['msg']));
                            return '单条保存成功';
                        }
                    }
                    
                    
                }
                unset($arr_a);
                //dump($vod_arrs);
                //return array('code'=>200,'msg'=>'多条保存成功');
                return '多条保存成功';
            }else{
                //return array('code'=>103,'msg'=>'搜索结果为0');
                return '搜索结果为0';
            }


            

        }else{
            //return array('code'=>101,'msg'=>'关键词不存在');
            return '关键词不存在';
        }


        
    }


    public function hk_bt_url($text='magnet:?xt=urn:btih:bc4b142021280b09cf7e3a85ec5c0057d81c2dc9')
    {
        $cookie = 'Cookie:yd_cookie=bd129e5c-3f00-49b2150535871a5056f5cc6f6affabe0c577; ASP.NET_SessionId=hxtguyphefg1nbgvhzr04sna; __guid=35485052.197201346687323360.1518622313056.7651; yd_srvbl=06549327c213b4c7ca848ec090b1c20f; HKUSER=UserName=dbg8685&UserPassword=dbg8685; monitor_count=2';
        $bth='解析';
        $vie='ACDw3DY3Ap2UgJKtwE0FPr7q7eNLF1TiFj46ANUyjb2AZHcf/k25Tj6I6ShIdOCUyfwWSvGMk8bACzncj7WhElHl8mprElDQLZQW6R0aBu94uu2HX8RwAEzqit6C+zO+ygSLlERqX6EeDQrwxKJ+UODjQG8ZbbZSqi7odcw2PKi5kaMCV74pRzmcRJOyq8qEtMsAJ1HowIzvChLEXR7+bnPagFBcgJvuMu3FMiIG5y1nHuHpw7gG0MpuBeEoVBl4L/TRWfpDnPOkrS2UBjNKAlsT2fi967j4QMKpr0C+vC45yW+P3USWKG8zwEZ1Z8U21uADMhlHW+bc3XFTMRd+UZpXBcXa9ocEp99xIj4QaKI1UKW6z0VAiQyhPbClbvYaagfVieLQQPPqUI85BSXHPxVGybbpByF8+xka1RVbiXO/qJ5cdjs8gxh7ThfXavR4hJ2/vfEbL37e7bHo';


        $url = 'http://lx.heikeyun.net/Main.aspx';
        $data = array(
            '__EVENTTARGET'=>'',
            '__EVENTARGUMENT'=>'',
            '__VIEWSTATE'=>$vie,
            'ctl00$ContentPlaceHolder1$FileOpenTorrent'=>'',
            'ctl00$ContentPlaceHolder1$txtBtHash'=>$text,
            'ctl00$ContentPlaceHolder1$btnGoHash'=>$bth
            );

        $header = array();
        //$header[] = $cookie;
        $header[] = $cookie;
        $header[] = 'Host:lx.heikeyun.net';

        $content = $this->curl_post_cons($url,$header,$data);
        //dump($content);//解析跳转
        list($header,$body) = explode("\r\n\r\n",$content);
        $body = preg_replace("/\s/","",$body);
        @preg_match('#d=(.*?)Server#iUs',$body,$arr);
        $Location = $arr[1];
        //dump($Location);
        $row_caiji = $this->curl_caiji($Location,$cookie);
        //dump($row_caiji);
        if($row_caiji['code'] == 200){
            return array('code'=>200,'msg'=>'成功');
        }else{
            return array('code'=>301,'msg'=>$row_caiji['msg']);
        }
        return array('code'=>304,'msg'=>'意外错误');
    }

    //http://lx.heikeyun.net/HashList.aspx?d=5E0A5A31A365BB69A2A90A51A33123A4F3CA791C523A1E3EAC83D47A561B68E597AD4AC4D25C659CC4350F3A84516A6F1F70AD0C44B98F5630F2C778A413D8D82A2711F4524E50C9D75249FA7BE8C2D6640B53FBB3C9AC1EC07C8E767DB77CAC415051D0B34EA2567B0BB4F1E4E372C352218913F1A1DBE10E90CB206C4AC5D797BFB56EE34BAA2678FDF6D982FF584A894A3C48303BDAE234B1CC83D6A9C104ACB0431C83E648368DBAC28CE3487F03608274C5BAA82F811AFE75B5C76922BF88B9221717147F0804FDB952F7F439E49494FBB4A02D0CFE322A9FE21AA9E05F90A89782B745EB7CAFD14778D69DD4511A8AF8E89093727226A69C4C248D7557A44E82043A667DFF1462C706A2EFAA71B2BAFA2E69434C4058148DC342F29A81DDE943C52E2B47402B97A1CB42C4C58F837FC76655B33AE481AC81D2B577B6C4875B2B0D4FBB2C1AC7F71D3C59DDA32FD62B59F70C68B7FE652008E19C47847AA5ABB5803082E2064F176E8A61A9FF8A5AF24713990DE259

    public function curl_caiji($btm=null,$cookie=null){

        $curl = 'http://lx.heikeyun.net/HashList.aspx?d=';
        $url = $curl.$btm;
        
        $ch = curl_init();
        $header = array();
        //$header[] = 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
        $header[] = $cookie;
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 保存到字符串而不是输出
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
        curl_setopt($ch, CURLOPT_MAXREDIRS,2); 
        $rt = curl_exec($ch);
        curl_close($ch);
        //dump($rt)

        @preg_match('#<div class="title text-center"><strong>(.*?)<div class="content"><span class="title">#iUs',$rt,$rt_arr);
        if(!empty($rt_arr)){
            $rt_arr[1] = preg_replace("/\s/","",$rt_arr[1]);
            //dump($rt_arr[1]);
          @preg_match_all('/aid="(.*?)"st="1"ditem="true"class="itemmulti-lineswith-avatar"ftios="1"ck="(.*?)"ft="1"data="(.*?)"ix="(.*?)"analytical="false"s1="(.*?)"jxd1="(.*?)"jxd2="(.*?)"onclick="(.*?)"><divclass="avatarcirclegreenoutline"><iclass="iconicon-check"><\/i><\/div><divclass="avatarcircleyellowoutline"><iclass="iconicon-film"><\/i><\/div><divclass="content"><spanclass="title"decode="true">(.*?)<\/span><div><smallclass="text-blue">(.*?)<\/small>&nbsp;<divclass="pull-rightlabelblue-paletext-tint"><iclass="iconicon-mobile"><\/i><\/div><\/div><\/div><\/a>/',$rt_arr[1],$rt_arrb);
            //dump($rt_arrb);
            if(!empty($rt_arrb[1])){
                $i_count = count($rt_arrb[1]);
                $vod_arr = array();
                $vod_sa = 0;
                for ($i=0; $i < $i_count; $i++) {
                    $vod_arr[$i]['names'] = $this->romCharCode($rt_arrb[9][$i]);
                    //if(strstr($vod_arr[$i]['names'],'.mp4') or strstr($vod_arr[$i]['names'],'.avi')){
                    if(strstr($vod_arr[$i]['names'],'.mp4') || strstr($vod_arr[$i]['names'],'.MP4')){
                        $url_ajax = 'http://lx.heikeyun.net/CommonAjax.ashx?type=HsCollection';
                        $data_ajax = array(
                            'data'=>$rt_arrb[3][$i],
                            'tag'=>$rt_arrb[5][$i]
                            );
                        $data_ajax =  $rts = json_encode($data_ajax);
                        $header_a = array();
                        $header_a[] = $cookie;
                        $header_a[] = 'Referer:'.$url;
                        $ajax_cun = $this->curl_post_con($url_ajax,$header_a,$data_ajax);
                        $ajax_fankui = json_decode($ajax_cun,1);
                        if(strstr($ajax_fankui['Msg'],'该资源已在云空间中')){
                            $vod_sa = 1;
                        }elseif(strstr($ajax_fankui['Msg'],'成功')){
                            $vod_sa = 1;
                        }else{
                            
                        }
                    }
                    $vod_arr[$i]['id_a'] = $rt_arrb[3][$i];
                    $vod_arr[$i]['id_b'] = $rt_arrb[5][$i];
                    $vod_arr[$i]['id_c'] = $rt_arrb[6][$i];
                    $vod_arr[$i]['id_e'] = $rt_arrb[7][$i];
                    $vod_arr[$i]['name'] = $rt_arrb[9][$i];
                    $vod_arr[$i]['size'] = $rt_arrb[10][$i];  
                }
                unset($rt);
                unset($rt_arr);
                unset($rt_arrb);
                if($vod_sa == 1){
                    return array('code'=>200,'msg'=>'成功');
                }else{

                    return array('code'=>101,'msg'=>'转存失败');
                }
            }else{
                return array('code'=>102,'msg'=>'视频数量为空');
            }

        }else{
            return array('code'=>103,'msg'=>'cookie解析内容不存在');
        }
        return array('code'=>104,'msg'=>'未知错误');
    }


    public function romCharCode($stra="1575·7494·12291·61430·71523·52300·11287·11297·52297·21349·31839·0835·7482·1492·8499·7451·42324·61743·61694·92310·21404·21714·42290·91659·21803·42333·11338·31461·52291·61448·91673·12338·51514·61687·02298·11431·71632·62308·61395·11376·32322·91835·51753·92286·11865·81865·72290·01368·31764·92329·41892·81664·22282·51849·11385·42309·91839·51776·32296·21501·41370·62295·01435·41637·12287·51862·61642·22331·41715·31523·82300·41846·01338·52317·51374·41366·2468·41094·61122·3526") {
        $str = '';
        $text=explode("·",$stra);
        $t_count = count($text);
        for ($i=0; $i < $t_count; $i++) { 
            $text[$i]=substr($text[$i], 1);
            $text[$i]=substr($text[$i], null,-1);
            //$str .= chr($text[$i]);
            $str .= $this->uchr($text[$i]);
        }
        unset($text);
        return $str;
    }

    function uchr ($codes) {
        if (is_scalar($codes)) $codes= func_get_args();
        $str= '';
        foreach ($codes as $code) $str.= html_entity_decode('&#'.$code.';',ENT_NOQUOTES,'UTF-8');
        return $str;
    }

    public function curl_post_cons($url,$header,$data=null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERAGENT, 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        unset($url);
        unset($header);
        unset($data);
        return $content;
    }

    public function curl_post_con($url,$header,$data=null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERAGENT, 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        unset($url);
        unset($header);
        unset($data);
        return $content;
    }

    public function curlGet($url){
        $ch = curl_init();
        $header = "Accept-Charset: utf-8";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        //curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
        //curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERAGENT, 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $temp = curl_exec($ch);
        return $temp;
    }
}
