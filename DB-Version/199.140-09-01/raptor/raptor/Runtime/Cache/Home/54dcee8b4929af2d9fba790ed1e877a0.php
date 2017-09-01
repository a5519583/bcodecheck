<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:w="urn:schemas-microsoft-com:office:word"
      xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
      xmlns="http://www.w3.org/TR/REC-html40">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <xml><w:WordDocument><w:View>Print</w:View></xml>
</head>
<body>
<div class=WordSection1>
    <!--word首页标题信息-->
    <p align=center style='text-align:center'><span lang=EN-US style='font-size:30.0pt'><?php echo ($project_fw["task_name"]); ?></span></p>
    <p align=center style='text-align:center'><span style='font-size:30.0pt'>代码审计报告</span></p>
    <div style='margin-top:225.0pt;margin-bottom:112.5pt'>
        <p align=center style='text-align:center'>
                <span lang=EN-US>
                <span style='mso-no-proof:yes'>
                    <img width=147 height=37 id="_x0000_i1064" src="/Public/Images/logo.png" alt="/Public/Images/logo.png">
               </span>
                </span>
        </p>
        <p align=center style='text-align:center'><span style='font-size:18.0pt'>北京匠迪技术有限公司</span></p>
        <p class=MsoNormal align=center style='text-align:center'>
            <b><span lang=EN-US style='font-size:16.0pt'><?php echo ($year); ?></span></b>
            <span lang=EN-US> </span>
            <b><span style='font-size:16.0pt'>年</span></b>
            <b><span lang=EN-US style='font-size:16.0pt'><?php echo ($month); ?></span></b><span lang=EN-US> </span>
            <b><span style='font-size:16.0pt'>月</span></b>
            <span lang=EN-US><o:p></o:p></span></p>
    </div>
    <!--end-->
    <!--概述-->
    <div>
        <h1><span face=宋体><span lang=EN-US style='font-size:22.0pt'>1.</span></span>
            <span face=宋体><span style='font-size:22.0pt'>概述 <span lang=EN-US>&nbsp;</span></span></span><span lang=EN-US><o:p></o:p></span>
        </h1>
    </div>
    <div>
        <h2><span lang=EN-US style='font-size:16.0pt'><span face=宋体>1.1</span></span>
            <span face=宋体><span style='font-size:16.0pt'>项目目的 <span lang=EN-US>&nbsp;</span></span></span><span lang=EN-US><o:p></o:p></span>
        </h2>
        <p style='line-height:150%'>
                <span face=宋体><span lang=EN-US>&nbsp;&nbsp;</span>此次源代码审计工作针对<span lang=EN-US>121</span>
                    ，通过分析当前应用系统的源代码与业务流程，从应用系统结构、安全性等方面，检查其脆弱性和缺陷。在明确当前安全现状和需求的情况下，
                    对下一步的编码安全规范性建设进行指导，保障系统上线后安全稳定运行。以此展示<span lang=EN-US>Bcodecheck</span>代码审计设备的
                    功能与性能，以及匠迪科技在代码审计领域的相关技术。 </span><span lang=EN-US><o:p></o:p>
                </span>
        </p>
    </div>
    <div>
        <h2><span face=宋体><span lang=EN-US style='font-size:16.0pt'>1.2</span></span>
            <span face=宋体><span style='font-size:16.0pt'>项目概述 <span lang=EN-US>&nbsp;</span></span></span><span lang=EN-US><o:p></o:p></span>
        </h2>
        <p style='line-height:150%'>
                <span face=宋体><span lang=EN-US>&nbsp;&nbsp;<span face=宋体>&nbsp;</span>
                本文档即为匠迪科技代码审计团队利用<span lang=EN-US>Bcodecheck</span>代码审计设备在进行代码审计工作完成后所提交的报告资料，用于对<span
                            lang=EN-US style='color:red'><?php echo ($project_fw["task_name"]); ?></span>的安全状况从代码层面做出分析和建议，以此来展示匠迪科技的代码审计工作的相关情况。</span><span
                        lang=EN-US><br>&nbsp;&nbsp;</span>本次源代码审计工作主要突出代码编写的缺陷和脆弱性，以<span lang=EN-US>OWASP TOP 10</span>为检查依据，针对<span
                        lang=EN-US>OWASP</span>统计的问题作重点检查。 </span><span lang=EN-US><o:p></o:p></span>
        </p>
    </div>
    <div>
        <h2><span face=宋体><span lang=EN-US style='font-size:16.0pt'>1.3</span></span><span
                face=宋体><span style='font-size:16.0pt'>项目范围 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h2>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
               style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
                <td width="100%" nowrap colspan=2 style='width:100.0%;border:solid windowtext 1.0pt;
                    mso-border-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
                            <span face=宋体><b><span style='font-family:"微软雅黑",sans-serif;color:white'>项目基本信息表</span></b><span lang=EN-US><u2:p></u2:p></span></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:18.0pt'>
                <td width="58%" nowrap style='width:58.44%;border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'><b>
                        <span style='font-family:"微软雅黑",sans-serif;color:white'>扫描代码名称</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="41%" nowrap style='width:41.56%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
                        <span lang=EN-US style='font-size:11.0pt;font-family:等线;color:black'><?php echo ($project_fw["task_name"]); ?><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:18.0pt'>
                <td width="58%" nowrap style='width:58.44%;border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'><b>
                        <span style='font-family:"微软雅黑",sans-serif;color:white'>问题代码文件类型</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="41%" nowrap style='width:41.56%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
                        <span lang=EN-US style='font-size:11.0pt;font-family:等线;color:black'><?php echo ($project_fw["leak_file_type"]); ?><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:18.0pt'>
                <td width="58%" nowrap style='width:58.44%;border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'><b>
                        <span style='font-family:"微软雅黑",sans-serif;color:white'>代码总行数</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="41%" nowrap style='width:41.56%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
                        <span lang=EN-US style='font-size:11.0pt;font-family:等线;color:black'><?php echo ($project_fw["code_line_num"]); ?><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:18.0pt'>
                <td width="58%" nowrap style='width:58.44%;border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'><b>
                        <span style='font-family:"微软雅黑",sans-serif;color:white'>发现问题总数</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="41%" nowrap style='width:41.56%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
                        <span lang=EN-US style='font-size:11.0pt;font-family:等线;color:black'><?php echo ($project_fw["leak_num"]); ?><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h3><span lang=EN-US style='font-size:16.0pt'>1.3.1</span></span>
            <span face=宋体><span style='font-size:16.0pt'>审计过程 <span lang=EN-US>&nbsp;</span></span></span><span lang=EN-US><o:p></o:p></span>
        </h3>
        <p style='line-height:150%'><span face=宋体><span lang=EN-US>1.</span>准备阶段：<span lang=EN-US><br>&nbsp;&nbsp;</span>源代码审计需求分析，制定源代码审计方案。
                <span lang=EN-US><br>
                    2.</span>分析阶段：<span lang=EN-US><br>&nbsp;&nbsp;</span>环境部署，专业的<span lang=EN-US>Bcodecheck</span>工具扫描。<span
                    lang=EN-US><br>
                    3.</span>人工检查：<span lang=EN-US><br>
                    &nbsp;&nbsp;</span>漏洞分析验证，风险定级，提出修复建议。<span lang=EN-US><br>
                    4.</span>生成报告：<span lang=EN-US><br>
                    &nbsp;&nbsp;</span>报告编写，提交报告。 </span><span lang=EN-US><o:p></o:p></span>
        </p>
    </div>

    <div>
        <h3><span face=宋体><span lang=EN-US style='font-size:16.0pt'>1.3.2</span></span><span
                face=宋体><span style='font-size:16.0pt'>审计工具 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h3>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=544
               style='width:408.0pt;margin-left:-.25pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt'>
                <td width=84 nowrap style='width:63.0pt;border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
                background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                    auto;text-align:center'><span face=宋体><b><span style='font-size:11.0pt;
                    font-family:"微软雅黑",sans-serif;color:white'>审计工具</span></b><span lang=EN-US><u2:p></u2:p></span></p>
                </td>
                <td width=460 style='width:345.0pt;border:solid windowtext 1.0pt;border-left:none;
                mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
                mso-border-right-alt:solid windowtext .5pt;background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                    auto;text-align:center'><b><span style='color:white'>用途和说明</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:57.0pt'>
                <td width=84 nowrap style='width:63.0pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                white;padding:0cm 5.4pt 0cm 5.4pt;height:57.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                    auto;text-align:center'><span lang=EN-US style='font-size:11.0pt;color:black'>Bcodeheck<u2:p></u2:p></span>
                    </p>
                </td>
                <td width=460 style='width:345.0pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:57.0pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                            auto;text-align:center'><span style='color:black'>匠迪技术开发的静态、白盒应用源代码审计工具，提供<span
                            lang=EN-US>java</span>、<span lang=EN-US>php</span>、<span lang=EN-US>c/c++</span>等<span
                            lang=EN-US>13</span>种代码安全的自动扫描检查。依据<span lang=EN-US>CVE</span>、<span
                            lang=EN-US>OWASP</span>、<span lang=EN-US>SANS</span>等公共漏洞，结合积累的审计规则，发现潜在的安全漏洞问题，帮助企业和个人整改不安全的编码。</span><span
                            lang=EN-US><u2:p></u2:p></span></p>
                </td>
            </tr>
        </table>
    </div>
    <div>

        <h3><span lang=EN-US style='font-size:16.0pt'>1.3.3</span></span><span face=宋体><span
                style='font-size:16.0pt'>审计方法 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span></h3>

        <p style='line-height:150%'><span face=宋体><span lang=EN-US>&nbsp;&nbsp;</span>本次源代码审计采用工具测试和人工测试结合的方法进行，依照<span
                lang=EN-US>OWASP TOP 10</span>所披露的脆弱性，根据业务流来检查目标系统的脆弱性、缺陷以及结构上的问题。<span
                lang=EN-US><br>
                </span>本次源代码审计分为三个阶段：<span lang=EN-US><br>
                ①</span>信息收集<span lang=EN-US><br>
                &nbsp;&nbsp;</span>匠迪<span lang=EN-US>Bcodecheck</span>通过源代码安全扫描界面上传业务系统源代码进行信息收集。<span
                lang=EN-US>Bcodecheck</span>会自动分析待审计源码的结构设计、功能模块，输入输出流，以及确定审计检查重点。<span
                lang=EN-US><br>
                ②</span>代码安全性分析<span lang=EN-US><br>
                &nbsp;&nbsp;</span>使用<span lang=EN-US>Bcodecheck</span>对源代码进行静态扫描；对扫描结果进行人工确认，其中暴露出来的高危问题将对源代码进行人工审计，主要包含以下内容：<span
                lang=EN-US><br>
                &nbsp;&nbsp;</span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
                宋体;mso-hansi-font-family:宋体;mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
                style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>ü</span></span>输入<span
                lang=EN-US>/</span>输出验证：<span lang=EN-US>SQL</span>注入、跨站脚本、<span lang=EN-US>RCE</span>漏洞等未能较好的控制用户提交的内容造成的安全问题。<span
                lang=EN-US><br>
                &nbsp;&nbsp;</span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
                宋体;mso-hansi-font-family:宋体;mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
                style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>ü</span></span>安全功能：请求的参数没有限制范围导致信息泄露，<span
                lang=EN-US>Cookie</span>超时机制和有效域控制，权限控制、通信加密、文件权限等方面的内容。<span lang=EN-US><br>
                &nbsp;&nbsp;</span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
                宋体;mso-hansi-font-family:宋体;mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
                style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>ü</span></span>安全机制：忽略处理的异常、异常处理不恰当造成的信息泄露或是不便于进行错误定位等问题。<span
                lang=EN-US><br>
                ③</span>问题验证<span lang=EN-US><br>
                &nbsp;&nbsp;</span>对审计工具扫描的结果进行人工整理、分析，得出初步的风险问题，利用<span lang=EN-US>Bcodecheck</span>的在线审计工作台载入问题源代码进行人工查找、分析风险代码的上下文，直观的确定代码中存在的安全问题。<span
                lang=EN-US><br>
                &nbsp;&nbsp;</span>说明：由于客户源代码的实际运行环境，无法对源代码进行动态调试，造成部分安全问题无法验证，我们只是对安全缺陷代码做详细的分析，部分问题可由开发人员参考审计报告进行动态调试。
                </span><span lang=EN-US><o:p></o:p></span>
        </p>
    </div>
    <!--审计结果-->
    <div>
        <h1><span face=宋体><span lang=EN-US style='font-size:22.0pt'>2.</span></span><span
                face=宋体><span style='font-size:22.0pt'>审计结果 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h1>
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                text-indent:24.0pt;mso-char-indent-count:2.0;line-height:150%'><span face=宋体>匠迪源代码安全审查系统主要通过<b
                style='mso-bidi-font-weight:normal'><span style='color:red'>总览视图</span></b>和<b
                style='mso-bidi-font-weight:normal'><span style='color:red'>分览视图</span></b>，以总分的方式展现本次代码扫描的结果。审计情况概述如下表所示：</span>
        </p>
    </div>
    <!--总览视图-->
    <div>
        <h2 style='line-height:150%'><span face=宋体><span lang=EN-US style='font-size:
            16.0pt;line-height:150%'>2.1</span></span><span face=宋体><span style='font-size:
            16.0pt;line-height:150%'>总览视图 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h2>
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            text-indent:24.0pt;mso-char-indent-count:2.0;line-height:150%'>
            <span face=宋体>总览视图主要从整个源代码项目出发，通过文件分类视图、程度分类视图和风险分类是图三个维度展示本次代码审计所发现的问题情况。</span>
        </p>
        <!--文件分类视图-->
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            line-height:150%'><span lang=EN-US><br>
            </span>（<span lang=EN-US>1</span>） 文件分类视图
        </p>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
               style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.95pt'>
                <td width="100%" colspan=3 style='width:100.0%;border:solid windowtext 1.0pt;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:28.95pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;color:white'>一、文件分类视图（<span lang=EN-US><?php echo ($file_con); ?></span>）</span></b>
                        <span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:27.3pt'>
                <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>文件分类</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="27%" style='width:27.38%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>数量（个）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="36%" style='width:36.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>占比（<span lang=EN-US>%</span>）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <?php if(is_array($res_file)): foreach($res_file as $key=>$vo): ?><tr style='mso-yfti-irow:2;height:18.0pt'>
                    <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:white;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['file_type_name']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="27%" style='width:27.38%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['file_num']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="36%" style='width:36.82%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo (round($vo['file_num']/$file_con*100,2)); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div id="mainmap0" class="chart" style="width: 600px; height: 300px; display: none"></div>
        <div class="issues_view" ><img src=""></div>
        <!--end-->

        <!--程度分类视图-->
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            line-height:150%'><span lang=EN-US><br>
            </span>（<span lang=EN-US>1</span>） 程度分类视图
        </p>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
               style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.95pt'>
                <td width="100%" colspan=3 style='width:100.0%;border:solid windowtext 1.0pt;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:28.95pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;color:white'>一、程度分类视图（<span lang=EN-US><?php echo ($grade_con); ?></span>）</span></b>
                        <span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:27.3pt'>
                <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>程度分类</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="27%" style='width:27.38%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>数量（个）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="36%" style='width:36.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>占比（<span lang=EN-US>%</span>）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <?php if(is_array($res_grade)): foreach($res_grade as $key=>$vo): ?><tr style='mso-yfti-irow:2;height:18.0pt'>
                    <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:white;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['leak_grade']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="27%" style='width:27.38%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['grade_num']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="36%" style='width:36.82%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo (round($vo['grade_num']/$grade_con*100,2)); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div id="mainmap1" class="chart" style="width: 600px; height: 300px; display:  none; "></div>
        <div class="issues_view" ><img src=""></div>
        <!--end-->

        <!--风险分类视图-->
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            line-height:150%'><span lang=EN-US><br>
            </span>（<span lang=EN-US>1</span>） 风险分类视图
        </p>

        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
               style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.95pt'>
                <td width="100%" colspan=3 style='width:100.0%;border:solid windowtext 1.0pt;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:28.95pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;color:white'>一、风险分类视图（<span lang=EN-US><?php echo ($risk_con); ?></span>）</span></b>
                        <span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <tr style='mso-yfti-irow:1;height:27.3pt'>
                <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>风险分类</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="27%" style='width:27.38%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>数量（个）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
                <td width="36%" style='width:36.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#0070C0;padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
                    <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                        auto;text-align:center'><b><span style='font-family:"微软雅黑",sans-serif;
                        color:white'>占比（<span lang=EN-US>%</span>）</span></b><span lang=EN-US><u2:p></u2:p></span>
                    </p>
                </td>
            </tr>
            <?php if(is_array($res_risk)): foreach($res_risk as $key=>$vo): ?><tr style='mso-yfti-irow:2;height:18.0pt'>
                    <td width="35%" style='width:35.8%;border:solid windowtext 1.0pt;border-top:none;background:white;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['leak_name']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="27%" style='width:27.38%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo ($vo['risk_num']); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                    <td width="36%" style='width:36.82%;border-top:none;border-left:none;
                              border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                              padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                        <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                              auto;text-align:center'><span lang=EN-US style='font-family:"微软雅黑",sans-serif;
                              color:black'><?php echo (round($vo['risk_num']/$risk_con*100,2)); ?><u2:p></u2:p></span>
                        </p>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div id="mainmap2" class="chart" style="width: 670px; height: 280px; display: none; "></div>
        <div class="issues_view" ><img src=""></div>
        <!--end-->
    </div>
    <!--分览视图-->
    <div>
        <h2 style='line-height:150%'><span lang=EN-US style='font-size:16.0pt;
            line-height:150%'>2.2</span></span><span face=宋体><span style='font-size:16.0pt;
            line-height:150%'>分览视图 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h2>

        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            text-indent:24.0pt;mso-char-indent-count:2.0;line-height:150%'><span face=宋体>分览视图将系统源代码审查出来的各类问题，进行分解
            详细展示，针对每个问题将提供审查的依据和修复的建议。</span>
        </p>
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            line-height:150%'><span lang=EN-US><o:p>&nbsp;</o:p></span>
        </p>
        <?php if(is_array($risk_description)): foreach($risk_description as $key=>$vo): ?><h3 style='line-height:150%'  <?php echo ($title_num=1); ?>><span lang=EN-US>2.2.<?php echo ($file_title_num +=1); ?> <?php echo ($key); ?> </span>问题详情</h3>
            <div id="grade_<?php echo ($key); ?>" class="oc_grade"style="width: 600px; height: 300px; display:  none; "></div>
            <div id="risk_<?php echo ($key); ?>" class="oc_risk" style="width: 670px; height: 280px; display:  none; "></div>
            <div class="view_grade_<?php echo ($key); ?> fl_view"><img src=""></div>
            <div class="view_risk_<?php echo ($key); ?> fl_view"><img src=""></div>
            <?php if(is_array($vo)): foreach($vo as $key1=>$vi): ?><div>
                    <h4 style='line-height:150%'><span face=宋体><span lang=EN-US style='font-size:
                            16.0pt;line-height:150%'>2.2.<?php echo ($file_title_num); ?>.<?php echo ($title_num); ?></span></span><span face=宋体><span
                            style='font-size:16.0pt;line-height:150%'><?php echo ($key1); ?><span lang=EN-US>&nbsp;</span></span></span><span
                            lang=EN-US><o:p></o:p></span>
                    </h4>
                </div>
                <div align=center>
                    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=534
                           style='width:400.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;
                            mso-padding-alt:0cm 0cm 0cm 0cm;word-wrap:break-word'>
                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:58.5pt'>
                            <td colspan=2 style='border-top:windowtext 1.5pt;border-left:windowtext 1.5pt;
                                  border-bottom:windowtext 1.0pt;border-right:black 1.0pt;border-style:solid;
                                  background:#4472C4;padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                        auto;text-align:center;word-break:break-all'><b><span style='color:white'>风险名称</span></b><span
                                        lang=EN-US><u2:p></u2:p></span>
                                </p>
                            </td>
                            <td style='border-top:solid #00000A 1.5pt;border-left:none;border-bottom:
                                  solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;background:#4472C4;
                                  padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                    auto;text-align:center;word-break:break-all'><b><span style='color:white'><?php echo ($key1); ?></span></b><span
                                        lang=EN-US><u2:p></u2:p></span>
                                </p>
                            </td>
                            <td style='border-top:solid #00000A 1.5pt;border-left:none;border-bottom:
                                  solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;background:#4472C4;
                                  padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                    auto;text-align:center;word-break:break-all'><b><span style='color:white'>问题数量</span></b><span
                                        lang=EN-US><u2:p></u2:p></span>
                                </p>
                            </td>
                            <td style='border-top:solid #00000A 1.5pt;border-left:none;border-bottom:
                                  solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;background:#4472C4;
                                  padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                    auto;text-align:center;word-break:break-all'><b><span lang=EN-US style='color:white'><?php echo (count($vi)); ?><u2:p></u2:p></span></b>
                                </p>
                            </td>
                            <td style='border-top:solid #00000A 1.5pt;border-left:none;border-bottom:
                              solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;background:#4472C4;
                              padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                    auto;text-align:center;word-break:break-all'><b><span style='color:white'>风险等级</span></b><span
                                        lang=EN-US><u2:p></u2:p></span>
                                </p>
                            </td>
                            <td style='border-top:solid #00000A 1.5pt;border-left:none;border-bottom:
                              solid #00000A 1.0pt;border-right:solid #00000A 1.5pt;background:#4472C4;
                              padding:0cm 5.4pt 0cm 5.4pt;height:58.5pt'>
                                <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                    auto;text-align:center;word-break:break-all'><b><span style='color:white'><?php echo ($vi[0]['leak_grade']); ?></span></b><span
                                        lang=EN-US><u2:p></u2:p></span>
                                </p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:1;height:18.0pt'>
                            <td width=110 colspan=2 style='width:82.5pt;border-top:none;border-left:solid #00000A 1.5pt;
                                  border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;
                                  mso-border-top-alt:solid #00000A .75pt;mso-border-alt:solid #00000A .75pt;
                                  mso-border-left-alt:solid #00000A 1.5pt;padding:0cm 5.75pt 0cm 6.5pt;
                                  height:18.0pt'>
                                <p style='word-break:break-all'>风险描述<span lang=EN-US><o:p></o:p></span></p>
                            </td>
                            <td width=441 colspan=5 style='width:330.75pt;border-top:none;border-left:
                                  none;border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.5pt;
                                  mso-border-top-alt:solid #00000A .75pt;mso-border-left-alt:solid #00000A .75pt;
                                  mso-border-alt:solid #00000A .75pt;mso-border-right-alt:solid #00000A 1.5pt;
                                  padding:0cm 5.75pt 0cm 6.5pt;height:18.0pt;word-wrap:break-word'>
                                <p style='margin-top:5.0pt;margin-right:5.05pt;margin-bottom:5.0pt;
                                         margin-left:2.15pt;word-break:break-all'><span style='font-size:9.0pt'><?php echo ($vi[0]['leak_defect_des']); ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:2;height:16.5pt'>
                            <td width=110 colspan=2 style='width:82.5pt;border-top:none;border-left:solid #00000A 1.5pt;
                                  border-bottom:solid #00000A 1.5pt;border-right:solid #00000A 1.0pt;
                                  mso-border-top-alt:solid #00000A .75pt;mso-border-top-alt:.75pt;mso-border-left-alt:
                                  1.5pt;mso-border-bottom-alt:1.5pt;mso-border-right-alt:.75pt;mso-border-color-alt:
                                  #00000A;mso-border-style-alt:solid;padding:0cm 5.75pt 0cm 6.5pt;height:16.5pt'>
                                <p style='word-break:break-all'>修复建议<span lang=EN-US><o:p></o:p></span></p>
                            </td>
                            <td width=441 colspan=5 style='width:330.75pt;border-top:none;border-left:
                                  none;border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.5pt;
                                  mso-border-top-alt:solid #00000A .75pt;mso-border-left-alt:solid #00000A .75pt;
                                  mso-border-alt:solid #00000A .75pt;mso-border-right-alt:solid #00000A 1.5pt;
                                  padding:0cm 5.75pt 0cm 6.5pt;height:16.5pt;word-wrap:break-word'>
                                <p style='margin-top:5.0pt;margin-right:5.05pt;margin-bottom:5.0pt;
                                  margin-left:2.15pt;word-break:break-all'><span lang=EN-US style='font-size:
                                  9.0pt'><a href="../Downloads/N/A" target="_blank"><?php echo ($vi[0]['leak_modify_sug']); ?></a> </span></p>
                            </td>
                        </tr>
                            <?php if(is_array($vi)): foreach($vi as $key2=>$vc): ?><tr style='mso-yfti-irow:3'>
                                    <td width=16 rowspan=2 style='width:12.0pt;border-top:none;border-left:solid #00000A 1.5pt;
                                          border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;
                                          mso-border-top-alt:solid #00000A .75pt;mso-border-alt:solid #00000A .75pt;
                                          mso-border-left-alt:solid #00000A 1.5pt;padding:0cm 5.75pt 0cm 6.5pt'>
                                        <p style='word-break:break-all'>第<span lang=EN-US><?php echo ($key2+1); ?></span>处</p>
                                    </td>
                                    <td width=80 style='width:60.0pt;border-top:none;border-left:none;border-bottom:
                                          solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;mso-border-top-alt:solid #00000A .75pt;
                                          mso-border-left-alt:solid #00000A .75pt;mso-border-alt:solid #00000A .75pt;
                                          padding:0cm 5.75pt 0cm 6.5pt'>
                                        <p style='word-break:break-all'>代码位置<span lang=EN-US><o:p></o:p></span></p>
                                    </td>
                                    <td width=441 colspan=5 style='width:330.75pt;border-top:none;border-left:
                                          none;border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.5pt;
                                          mso-border-top-alt:solid #00000A .75pt;mso-border-left-alt:solid #00000A .75pt;
                                          mso-border-alt:solid #00000A .75pt;mso-border-right-alt:solid #00000A 1.5pt;
                                          padding:0cm 5.75pt 0cm 6.5pt;word-wrap:break-word'>
                                        <p style='margin-top:5.0pt;margin-right:5.05pt;margin-bottom:5.0pt;margin-left:2.15pt;word-break:break-all'>
                                            <span lang=EN-US style='font-size:9.0pt'>
                                                <?php echo ($vc['leak_file_pos']); ?>#L<?php echo ($vc['leak_line_num']); ?>
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr style='mso-yfti-irow:4'>
                                    <td width=80 style='width:60.0pt;border-top:none;border-left:none;border-bottom:
                                          solid #00000A 1.0pt;border-right:solid #00000A 1.0pt;mso-border-top-alt:solid #00000A .75pt;
                                          mso-border-left-alt:solid #00000A .75pt;mso-border-alt:solid #00000A .75pt;
                                          padding:0cm 5.75pt 0cm 6.5pt;word-wrap:break-word'>
                                        <p style='margin-top:5.0pt;margin-right:5.05pt;margin-bottom:5.0pt;
                                            margin-left:2.15pt;word-break:break-all'>源代码</p>
                                    </td>
                                    <td width=441 colspan=5 style='width:330.75pt;border-top:none;border-left:
                                          none;border-bottom:solid #00000A 1.0pt;border-right:solid #00000A 1.5pt;
                                          mso-border-top-alt:solid #00000A .75pt;mso-border-left-alt:solid #00000A .75pt;
                                          mso-border-alt:solid #00000A .75pt;mso-border-right-alt:solid #00000A 1.5pt;
                                          padding:0cm 5.75pt 0cm 6.5pt'>
                                        <p style='margin-top:5.0pt;margin-right:5.05pt;margin-bottom:5.0pt;
                                              margin-left:2.15pt;word-break:break-all'><span lang=EN-US style='font-size:
                                              9.0pt'><?php echo ($vc['code_part']); ?> </span>
                                        </p>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                        </table>
                    </div>
                <div <?php echo ($title_num+=1); ?>></div><?php endforeach; endif; endforeach; endif; ?>
    </div>
    <!--end-->
    <div>

        <h1 style='line-height:150%'><span face=宋体><span lang=EN-US style='font-size:
            22.0pt;line-height:150%'>3.</span></span><span face=宋体><span style='font-size:
            22.0pt;line-height:150%'>审计修复建议 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h1>

        <p style='line-height:150%'><span face=宋体><span lang=EN-US>&nbsp;&nbsp;</span>
            经过本次代码审计，发现被检测代码存在的一些问题或缺陷，并针对发现的问题提出改进建议，供开发人员、管理人员参考。<br>
            &nbsp;&nbsp;1.对用户的输入进行验证或过滤，用户的输入主要包括以下几类：<br>
            &nbsp;&nbsp;a)访问请求中的参数部分；<br>
            &nbsp;&nbsp;b)HTML表单通过或GET请求提交的数据；<br>
            &nbsp;&nbsp;c)在客户端临时保存的数据、文件等<br>
            &nbsp;&nbsp;d)数据库查询。<br>
            &nbsp;&nbsp;2.安全功能方面：<br>
            &nbsp;&nbsp;a)不要过于信任应用程序访问控制规则。<br>
            &nbsp;&nbsp;b)身份鉴别系统和会话管理可能会被绕过或是被篡改。<br>
            &nbsp;&nbsp;c)存储的敏感信息可能被抽取。<br>
            &nbsp;&nbsp;d)app广播发送的数据安全问题。<br>
            &nbsp;&nbsp;3.其它：<br>
            &nbsp;&nbsp;a)服务器：设置应用所在目录的读写权限；<br>
            &nbsp;&nbsp;b)app服务器软件：不要开启目录浏览、写入、脚本资源访问等功能；<br>
            &nbsp;&nbsp;c)错误处理：必须关闭详细错误显示，比较好的处理方式是开启错误重定向功能在出错后重定向到指定位置，并且这个位置不能把异常信息发送给客户端展现给用户；<br>
            &nbsp;&nbsp;d)代码质量：主要是指可用性、可维护性、运行效率、重复代码量等等指标，高质量的代码不仅易于维护，而且运行效率高，因为当受到拒绝服务攻击时可以有效降低对系统的影响。好的代码依赖于合理的系统架构、优秀的程序编写人员和严谨的工作作风；<br>
            &nbsp;&nbsp;e)系统上线前进行全面的测试；<br>
            &nbsp;&nbsp;f)</span>制定完善的开发文档。 </p>

    </div>
    <div>

        <h1 style='line-height:150%'><span face=宋体><span lang=EN-US style='font-size:
            22.0pt;line-height:150%'>4.</span></span><span face=宋体><span style='font-size:
            22.0pt;line-height:150%'>附录 <span lang=EN-US>&nbsp;</span></span></span><span
                lang=EN-US><o:p></o:p></span>
        </h1>

        <div align=center>
            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=414
                   style='width:310.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;
                     mso-padding-alt:0cm 0cm 0cm 0cm'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:25.5pt'>
                    <td width=329 colspan=2 style='width:246.4pt;border-top:double windowtext 1.5pt;
                      border-left:double windowtext 1.5pt;border-bottom:none;border-right:none;
                      background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                                margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                face=宋体><b>问题</b></span>
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:double windowtext 1.5pt;
                          border-left:none;border-bottom:none;border-right:double windowtext 1.5pt;
                          background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b>是<span
                                lang=EN-US>/</span>否</b>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:1;height:25.5pt'>
                    <td width=329 colspan=2 style='width:246.4pt;border:solid windowtext 1.0pt;
                          border-left:double windowtext 1.5pt;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b>版面风格</b>
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:solid windowtext 1.0pt;
                          border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 1.5pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:2;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>1</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>代码的编写格式是否一致？
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                      solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                      height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:3;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                                margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>2</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>代码的编写格式是否有助于代码的维护？
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                          solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:4;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>3</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>代码的编写格式是否有助于代码的可读性？
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                          solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:5;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>4</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>每行最多字包含一条语句吗？
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                      solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4ptheight:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                         margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:6;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>5</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释风格是否一致？
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                          solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                         margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:7;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>6</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释风格是否易于注释的维护？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                      solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                         height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:8;height:25.5pt'>
                    <td width=329 colspan=2 style='width:246.4pt;border-top:none;border-left:
                              double windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
                              solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;background:
                              #E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                        margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b>代码</b></p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                      solid windowtext 1.0pt;border-right:double windowtext 1.5pt;mso-border-top-alt:
                      solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>&nbsp;</span></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:9;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                             background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                        margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>1</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                            padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>定义的程序名是否有意义？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                        solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                        height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:10;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>2</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>程序接口清晰明确吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:11;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>3</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>标识符的命名是否清晰？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:12;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>4</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>变量命名适当吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:13;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>5</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>循环计数器的变量名称是有意义的吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:14;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>6</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否用定义的常量代替实际的数据或字符？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:15;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>7</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否睡数据类型，常量，本地变量，实例</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:16;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>8</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>数据类型和数据声明是否合理正确？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:17;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>9</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>所有参数都定义了，或者计算了吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:18;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>10</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>所有定义的数据都使用了吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:19;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>11</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>所有引用的之程序都定义了吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:20;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>12</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>所有定义的之程序都是用了吗？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:21;height:25.5pt'>
                    <td width=329 colspan=2 style='width:246.4pt;border-top:none;border-left:
  double windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;background:
  #E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b>注释</b></p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>&nbsp;</span></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:22;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>1</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释是否有助于他人对代码的理解？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:23;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>2</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释是否解释了代码的目的？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:24;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>3</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释是否是最新的？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:25;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>4</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释是否清晰正确？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:26;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>5</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>注释是否都有用？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:27;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>6</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否对代码含义进行了注释？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:28;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>7</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>声明全局变量时，是否给予了注释？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:29;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>8</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否说明了每个子程序的目的？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:30;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>9</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否对输入输出参数进行了说明？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:31;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>10</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否描述了文件目的？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:32;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>11</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否记录了作者名？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:33;height:25.5pt'>
                    <td width=329 colspan=2 style='width:246.4pt;border-top:none;border-left:
  double windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;background:
  #E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b>安全</b></p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>&nbsp;</span></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:34;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>1</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>索引，下标是否经过了数组，记录或文件的边界测试？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:35;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>2</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是否验证了导入的数据或输入的参数的正确性和完整性？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:36;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>3</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>所有输出变量是否都被赋值？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:37;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>4</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>在每个声明中的数据是否被正确操作？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:38;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>5</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>分配的内存空间是否都被释放？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:39;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>6</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>对于外部设备接入是否有超时设计或错误陷阱？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:40;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>7</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>在操作文件是否判断了文件存在与否</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:41;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>8</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>在程序结束是所有的文件和设备是否都保持了正确状态？</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:42;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>9</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Log</span>敏感信息泄露</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:43;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>10</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>https</span>校验错误忽略漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:44;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>11</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>sql</span>注入漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:45;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>12</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>https</span>空校验漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:46;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>13</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Provider</span>组件暴露漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:47;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>14</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Fragment</span>注入漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:48;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>15</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>WebView</span>远程代码执行</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:49;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>16</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>ContentResolver</span>暴露漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:50;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>17</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>https</span>通信没有校验服务器证书</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:51;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>18</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>https</span>通信允许所有的服务器证书</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:52;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>19</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Activity</span>安全漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:53;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>20</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Service</span>安全漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:54;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>21</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>使用不安全的加密模式</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:55;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>22</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Receiver</span>安全漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:56;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>23</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>存在外部可访问的表单</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:57;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>24</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>本地代码执行漏洞</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:58;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>25</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>KeyStore</span>风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:59;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>26</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>外部<span
                                lang=EN-US>URL</span>可控的<span lang=EN-US>Webview</span></p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:60;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>27</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Url</span>用户敏感信息泄露</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:61;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>28</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>全局可写文件</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:62;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>29</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>全局可读文件</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:63;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>30</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span
                                lang=EN-US>Activity</span>组件暴露风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:64;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>31</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>私有文件泄露风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:65;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>32</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>私有配置文件写风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:66;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>33</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>用户自定义权限滥用风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:67;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>34</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>外部存储使用风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:68;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>35</span></b></p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
  margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>广播信息泄露风险</p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:69;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                                margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span lang=EN-US>36</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><span lang=EN-US>Intent</span>泄露用户敏感信息
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                          solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                             margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是</p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:70;mso-yfti-lastrow:yes;height:25.5pt'>
                    <td width=44 style='width:33.0pt;border-top:none;border-left:double windowtext 1.5pt;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                                margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'><b><span
                                lang=EN-US>37</span></b>
                        </p>
                    </td>
                    <td width=285 style='width:213.4pt;border-top:none;border-left:none;
                          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                          padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>同源绕过漏洞
                        </p>
                    </td>
                    <td width=85 style='width:63.8pt;border-top:none;border-left:none;border-bottom:
                          solid windowtext 1.0pt;border-right:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
                          height:25.5pt'>
                        <p class=MsoNormal align=center style='margin-top:0cm;margin-right:5.25pt;
                            margin-bottom:0cm;margin-left:5.25pt;margin-bottom:.0001pt;text-align:center'>是
                        </p>
                    </td>
                </tr>
            </table>

        </div>

        <p class=western style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
            12.25pt'>注：“是”代表安全，“否”代表不安全。<span lang=EN-US><br>
            </span>名词解释：<span lang=EN-US><br>
            A.CVE </span>的英文全称是“<span lang=EN-US>Common Vulnerabilities &amp; Exposures</span>”公共漏洞和暴露。<span
                lang=EN-US>CVE</span>就好像是一个字典表，为广泛认同的信息安全漏洞或者已经暴露出来的弱点给出一个公共的名称。<span
                lang=EN-US><br>
                B.OWASP</span>开放式<span lang=EN-US>Web</span>应用程序安全项目<span lang=EN-US><br>
                C.SANS</span>中国漏洞信息库 <span lang=EN-US><o:p></o:p></span>
        </p>

    </div>
</div>
<script type="text/javascript" src="/Public/Js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/Public/Js/FileSaver.js"></script>
<script type="text/javascript" src="/Public/Js/echarts.js"></script>
<script type="text/javascript" src="/Public/Js/issues.js" data="word" info_id="<?php echo ($info_id); ?>"></script>
<!--<script type="text/javascript" src="/Public/Js/issues_bro.js" data="word"></script>-->

<script type="text/javascript">
    var flviewmhtmlBottom = '';
    window.onload=function (){
        //分览视图
        var file_type = <?php echo ($file_json); ?>;
        $.each(file_type,function(key,val){
             oc_gradeChart = echarts.init(document.getElementById('grade_'+val.file_type_name+''),'dark');
             oc_riskChart = echarts.init(document.getElementById('risk_'+val.file_type_name+''),'dark');

             option_gradeChart = {
                 backgroundColor:'#2a323d',
                 title: {
                     text: '程度分类视图',
                     x:'left'
                 },
                 tooltip: {
                     trigger: 'item',
                     formatter: "{a} <br/>{b}: {c} ({d}%)"
                 },
                 series: [{
                     name:'面积模式',
                     type:'pie',
                     radius : [30, 110],
                     center : ['50%', '50%'],
                     roseType : 'area',
                     data: [],
                     itemStyle:{
                         normal:{
                         label:{
                             show: true,
                             formatter: '{b} : {c} ({d}%)'
                         },
                         labelLine :{show:true}
                         }
                     }
                 }]
             };

             option_riskChart = {
                 backgroundColor:'#2a323d',
                 title: {
                     text: '风险分类视图',
                     x:'left'
                 },
                 tooltip: {
                     trigger: 'item',
                     formatter: "{a} <br/>{b}: {c} ({d}%)"
                 },
                 series: [{
                     name: '问题分布',
                     type: 'pie',
                     radius: ['30%', '70%'],
                     roseType : 'area',
                     avoidLabelOverlap: true,
                     selectedMode: 'single',
                     selectedOffset: 20, //选中是扇区偏移量
                         itemStyle:{
                         normal:{
                         label:{
                             show: true,
                             formatter: '{b} : {c} ({d}%)'
                         },
                            labelLine :{show:true}
                         }
                     },
                     data: []
                 }]
             };

             $.ajax({
                 type:"GET",
                 async : false,
                 url:"/Home/Analysis/issues_bro2?codetype="+val.file_type_name+"&info_id=<?php echo ($info_id); ?>",
                 success:function(result,status){
                     if(status == 'success'){
                     var json_owner = eval('('+ result +')'); //由JSON字符串转换为JSON对象

                     var gradeObj = json_owner.owner_grade;
                     var riskObj = json_owner.owner_risk;

                     var gradeArr = [];//封装legend
                     var riskArr = [];

                     var gradeArrData = [];//封装数据
                     var riskArrData = [];

                     for (var key in gradeObj) {
                         gradeArr.push(key);
                         var gradeDataObj = {};
                            gradeDataObj.name = key;
                         if(gradeDataObj.name == '高'){
                            gradeDataObj.itemStyle = {normal:{color:'#dd6b66'}};
                         }else if(gradeDataObj.name == '中'){
                            gradeDataObj.itemStyle = {normal:{color:'#fece56'}};
                         }else if(gradeDataObj.name == '低'){
                             gradeDataObj.itemStyle = {normal:{color:'#93d665'}};
                         }else{
                             gradeDataObj.itemStyle = {normal:{color:'#4179c7'}};
                         }
                         gradeDataObj.value = gradeObj[key];
                         gradeArrData.push(gradeDataObj);
                     }
                     option_gradeChart.series[0].data = gradeArrData;
                     oc_gradeChart.setOption(option_gradeChart);

                     for (var key in riskObj){
                         riskArr.push(key);
                         var riskDataObj = {};
                         riskDataObj.name = key;
                         riskDataObj.value = riskObj[key];
                         riskArrData.push(riskDataObj);
                     }
                     option_riskChart.series[0].data = riskArrData;
                     oc_riskChart.hideLoading();
                     oc_riskChart.setOption(option_riskChart);
                     //图片生成
                         //start
                         var flimgs = [],flcanvasArr = [oc_gradeChart, oc_riskChart];
                         var static_mu = "Mime-Version: 1.0\r\nContent-Base: " + location.href + "\r\nContent-Type: Multipart/related; boundary=\"NEXT.ITEM-BOUNDARY\";type=\"text/html\"\r\n\r\n--NEXT.ITEM-BOUNDARY\r\nContent-Type: text/html; charset=\"utf-8\"\r\nContent-Location: " + location.href + "";
                         for(var i = 0; i < flcanvasArr.length; i++){
                             var flcanvasIndex = flcanvasArr[i].getRenderedCanvas({
                                 pixelRatio: 1,
                                 backgroundColor: '#FFFFFF'
                             });
                             flimgs.push(flcanvasIndex.toDataURL('image/jpeg'));
                         }
                         var flimages = Array();
                         var flimg = [$('.view_grade_'+val.file_type_name+' img'),$('.view_risk_'+val.file_type_name+' img')];
                         for (var i = 0; i < flimgs.length; i++) {
                             var fluri = flimgs[i];
                             $(flimg[i]).attr("src", flimgs[i]);
                             flimages[i] = {
                                 type: fluri.substring(fluri.indexOf(":") + 1, fluri.indexOf(";")),
                                 encoding: fluri.substring(fluri.indexOf(";") + 1, fluri.indexOf(",")),
                                 location: $(flimg[i]).attr("src"),
                                 data: fluri.substring(fluri.indexOf(",") + 1)
                             };
                         }

                         flmhtmlBottom = "\r\n";
                         for (var i = 0; i < flimages.length; i++) {
                             flmhtmlBottom += "--NEXT.ITEM-BOUNDARY\r\n";
                             flmhtmlBottom += "Content-Location: " + flimages[i].location + "\r\n";
                             flmhtmlBottom += "Content-Type: " + flimages[i].type + "\r\n";
                             flmhtmlBottom += "Content-Transfer-Encoding: " + flimages[i].encoding + "\r\n\r\n";
                             flmhtmlBottom += flimages[i].data + "\r\n\r\n";
                         }
                         flviewmhtmlBottom += flmhtmlBottom;
                        //end
                     }else{
                        console.log("请求错误!");
                     }
                 },
                 error:function(){
                    console.log("请求错误!");
                 }
             },'json');

        });

    //总览试图
    //img类推
    var imgs = [],canvasArr = [mainmap0, mainmap1,mainmap2];
    var static_mu = "Mime-Version: 1.0\r\nContent-Base: " + location.href + "\r\nContent-Type: Multipart/related; boundary=\"NEXT.ITEM-BOUNDARY\";type=\"text/html\"\r\n\r\n--NEXT.ITEM-BOUNDARY\r\nContent-Type: text/html; charset=\"utf-8\"\r\nContent-Location: " + location.href + "";
    for(var i = 0; i < canvasArr.length; i++){
        var canvasIndex = canvasArr[i].getRenderedCanvas({
            pixelRatio: 1,
            backgroundColor: '#FFFFFF'
        });
        imgs.push(canvasIndex.toDataURL('image/jpeg'));
    }
    var images = Array();
    var img = $('.issues_view img');
    for (var i = 0; i < imgs.length; i++) {
        var uri = imgs[i];
        $(img[i]).attr("src", imgs[i]);
        images[i] = {
            type: uri.substring(uri.indexOf(":") + 1, uri.indexOf(";")),
            encoding: uri.substring(uri.indexOf(";") + 1, uri.indexOf(",")),
            location: $(img[i]).attr("src"),
            data: uri.substring(uri.indexOf(",") + 1)
        };
    }

    var mhtmlBottom = "\r\n";
    for (var i = 0; i < images.length; i++) {
        mhtmlBottom += "--NEXT.ITEM-BOUNDARY\r\n";
        mhtmlBottom += "Content-Location: " + images[i].location + "\r\n";
        mhtmlBottom += "Content-Type: " + images[i].type + "\r\n";
        mhtmlBottom += "Content-Transfer-Encoding: " + images[i].encoding + "\r\n\r\n";
        mhtmlBottom += images[i].data + "\r\n\r\n";
    }
    mhtmlBottom += flviewmhtmlBottom+"--NEXT.ITEM-BOUNDARY--";

    //主体函数，即将内容加入到word中
    function wordExport(fileName) {
        fileName = typeof fileName !== 'undefined' ? fileName : "导出";
        var body = $('body').html();
        var data = static_mu+body+mhtmlBottom;
        var blob = new Blob([data], {
            type: "application/msword;charset=utf-8"
        });
        saveAs(blob, fileName + ".doc");
    }
    wordExport('代码审计报告');
    };
</script>
</body>
</html>