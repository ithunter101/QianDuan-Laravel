@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/AddSvc_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<script type="text/javascript" src="./set5_files/ExgRt_L.js.下载"></script>

<div id="mid-col">

	<div class="box">

		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海关汇率</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">偏好 &gt; 韩国海关通知的汇率</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

					<td class="on" style="width:120px;"><a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></a></td>

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->



			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇率确认</font></font></button></span>


			<p class="clrBoth pHt30"></p>

			<!--iframe src="http://fx.kebhana.com/FER0001D.web" width="460" height="140" border="0" frameborder="no" scrolling="no" marginwidth="0"></iframe-->

			<p class="clrBoth pHt10"></p>

			<p class="mgB10 ft_30 bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中文：￥ 1.00 = ￦ 187.53</font></font></p>


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10807">
				<input type="hidden" name="sGo" id="sGo" value="1">
				<input type="hidden" name="sPageSize" id="sPageSize" value="20">

			<div class="notice-board">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="10%">
				<col width="20%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">期间（标题）</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇率</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				@foreach ($data as $row)
				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->round }}</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->country }}</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->period }}</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->exchange_rate }}</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel({{ $row->id }});"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>
				@endforeach

				<!-- <tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知信息</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">190</font></font></span></td>
					<td class="listBtn">
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel_M(&#39;1012&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr> -->

				</tbody></table>
			</div>

			<!-- <div class="pagDv">
				<div class="paging">	 <span class="num"><a href="javascript:" class="ArrowOff" title="没有前 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a><a href="javascript:" class="on" onclick="fnSearch(&#39;frmSearch&#39;, 1);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">一</font></font></a> <a href="javascript:" class="ArrowOff" title="没有下 10 页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>	</span></div>
				<div class="CntRt">
					<span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页 /
					 </font></font><span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
				</div>
			</div> -->

		</form>
		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>


<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header" id='edit_modal_header'>
			</div>
            <div class="modal-body">
                <form method="post" name="frmSmsCont" id="frmSmsCont">
					<table class="order_write order_table_top">
                        <colgroup>
                            <col width="20%">
                            <col width="80%">
                        </colgroup>

                        <tbody>
						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_country" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_round" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">期间</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_period" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇率</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_exchange_rate" maxlength="80" value="">
                            </td>
                        </tr>

                    </tbody></table>
                </form>
            </div>

            <div class="modal-footer">
                <div class="btn-area alCenter">
                    <span class="whGraBtn_bg ty2">
                        <button type="button" class="txt" onclick="fnSave()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Save</font></font></button>
                    </span>
                    <span class="whGraBtn ty2">
                        <button type="button" class="txt" onclick="fnEditModalClose()" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
