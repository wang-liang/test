
/**********************************************************************/
//通过循环数组，变换当前书籍的文字样式和边框线，同时隐藏其它三种书籍，只显示当前的
function showMe(index)
{
var arr = ["history","family","culture","novel"];
//循环数组
	for(var i=0;i<arr.length;i++)
	{
		document.getElementById(arr[i]).className = "book_type";
		document.getElementById("book_"+arr[i]).className = "book_none";
	}
	document.getElementById(arr[index]).className = "book_type_out";
	document.getElementById("book_"+arr[index]).className = "book_block";
}



/**********************************************************************/

//表格中的行变背景色：鼠标放上变颜色，鼠标移出变回white
function productOver(trObj)
{
	trObj.style.backgroundColor = "red";
}
function productOut(trObj)
{
	trObj.style.backgroundColor = "white";
}


/************************************************************************/

//删除商品：删除行
function deleteProduct(id)
{
	if(window.confirm("你确定要删除吗？"))
	{
		//获取tr节点
		var trObj = document.getElementById(id);
		//删除节点
		trObj.parentNode.removeChild(trObj);
	}
}

//商品计算：商品总金额、商品总积分，共节省的总金额
function productCount()
{
	//变量初始化，目的是为了实现最终的结果统计（即求和 total +=）
	var = total = 0;
	var jiesheng = 0;
	var = jifen = 0
	//获取id = shopList的表格对象
	var tableObj = document.getElementById("shopList");
	//获取由tr元素组成的数组对象，即获得商品统计栏table表格中的每一行
	var arr_tr = tableObj.rows;
	//循环数组，获得表格每一行
	for(var i=0;i<arr_tr.length;i++)
	{
		var arr_td = arr_tr[i].cells;   //获取每一行中的每一个单元格（也就是表格中的列）
		var price1 = parseFloat(arr_td[2].innerHTML.substr(1)); //获取市场价  ￥32.00
		var price2 = parseFloat(arr_td[3].innerHTML.substr(1)); //获取当当价  ￥18.90 (59折)
		var count = parseInt(arr_td[4].firstChild.value);  //获取数量   
		var jifen2 = parseInt(arr_td[1].innerHTML);   //获取积分 
		//*****************************************************************
		total += price2 * count;   //总金额：当当价 * 数量
		jiesheng += (price1-price2) * count;  //总节省: （市场价-当当价）*数量
		jifen += jifen2 * count;  //总积分：单品积分 * 数量
	}
		/*******************将结果写到对应的id中*************************/
		document.getElementById("total").innerHTML = "&yen;"+total.toFixed(2);
		document.getElementById("jiesheng").innerHTML = "&yen;"+total.toFixed(2);
		document.getElementById("jifen").innerHTML = jifen;
}
	//网页加载完成，开始调用价格统计函数，该函数不带尖括号，是传地址
	window.onload = productCount;