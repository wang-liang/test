
/**********************************购物车当当为您推荐隐藏区域***************************/
//案例要求：购物车页面（shopping.html）：“为您推荐”列表的右上角可以“打开/关闭”该列表

function shopping_commend_show(imgObj)
{
	//通过id获取div对象
	var divObj = document.getElementById("shopping_commend_sort"); 
	//条件判断
	if(divObj.style.display=="block")
	{
		divObj.style.display="none"; 
		imgObj.src = "images/shopping_arrow_down.gif";
	}
	else
	{
		divObj.style.display="block";
		imgObj.src = "images/shopping_arrow_up.gif";
	}
}

/***************************************************************************************/
//鼠标放到行上改变背景色，鼠标移出后恢复背景色
//这里通过this这个参数获取当前对象传入函数中
function changeover(trObj)
{
	trObj.style.backgroundColor = "#cc0";
}

function changeout(trObj)
{
	trObj.style.backgroundColor = "white";
}

/***************************************************************************************/
//删除产品(删除表格行)
function deleteProduct(id)    //这里传一个id为“shopping_del01”的值过来
{
	if(window.confirm("您确定要删除吗？"))
	{
		//获取对象行
		var trObj = document.getElementById(id);
		//找到父节点，从父节点上删除当前行
		trObj.parentNode.removeChild(trObj);
		//进行商品统计
		productCount(); //调用onBlur="productCount()"函数
	}
}
/*******************************************************************************************/
//商品计算：节省金额、可获商品积分、商品金额总计
//节省金额 = （市场价-当前价）*数量
//可获商品积分 = 单品积分 * 数量
//商品金额总计 = 当当价 * 数量

function productCount(){

	//定义变量，用于存储节省金额、可获商品积分、商品金额总计
	var total = 0;
	var jifen = 0;
	var jiesheng = 0;
	//先找到id = shoplist这个表格对象
	var tableObj = document.getElementById("shopList");
	//获取表格中的所有行
	var arr_tr = tableObj.rows;
	//获取每一行中的单元格
	for(var i=0;i<arr_tr.length;i++)
	{
		var arr_td = arr_tr[i].cells;
		//求得市场价："￥32.00" ——> "32.00"——> 32
		var price1 = parseFloat(arr_td[2].innerHTML.substr(1));
		//求得当当价："￥18.90 (59折)"——>"18.90(59折)"——>18.9
		var price2 = parseFloat(arr_td[3].innerHTML.substr(1));
		//将数量有字符串转为数值型
		var count = parseInt(arr_td[4].firstChild.value);
		//求得积分
		var price3 = parseInt(arr_td[1].innerHTML);

		//*******************************************************
		total += price2 * count;
		jifen += price3 * count;
		jiesheng += (price1-price2) * count;

	}
		//将节省金额、可获商品积分、商品金额总计下乳到对应的id中
		document.getElementById("total").innerHTML = "&yen;"+total.toFixed(2);
		document.getElementById("jifen").innerHTML = jifen;
		document.getElementById("jiesheng").innerHTML = "&yen;"+jiesheng.toFixed(2);
}

//网页加载完成，调用价格统计函数;该函数传地址不带小括号
window.onload = productCount;