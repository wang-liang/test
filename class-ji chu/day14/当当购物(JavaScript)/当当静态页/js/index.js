

/**********************************************************************/

//案例要求：首页焦点广告图片下面的tab标签式浏览效果：
function show(index)
{
	//boob_type_out是标签的当前样式
	//book_type不是标签的当前样式
	//book_show是内容的当前样式
	//book_none不是当前的内容样式

	//定义一个数组
	var arr = ["history","family","culture","novel"];
	//循环数组
	for(var i=0;i<arr.length;i++)
	{	
		//让所有的标签CSS属性变为book_type（这里包括文字、标签背景和下划线）
		document.getElementById(arr[i]).className = "book_type";
		//让所有的标签中书籍内容显示为none
		document.getElementById("book_"+arr[i]).className = "book_none";

	}
	//让当前的标签CSS属性变为book_type_out（这里包括文字和标签背景和下划线）
	document.getElementById(arr[index]).className = "book_type_out";
	//让当前的标签下的书籍内容的样式变为block
	document.getElementById("book_"+arr[index]).className = "book_block";
}

/******************************图片和文字滚动******************************************/

window.onload = init;
	
function init()
{
	//设定图片滚动定时器
	var timer = setInterval("start3()",1000);
	//弹出新窗口
	var win2 = window.open("yake.html","yake","width=500,height=327,left=350,top=150");
	//文字滚动，找对象
	var dome = document.getElementById("dome");
	var dome1 = document.getElementById("dome1");
	var dome2 = document.getElementById("dome2");

	dome1.style.height = dome.offsetHeight + "px";   //让dome1的div高度等于dome元素的可见高度（指边框范围内可见,不含px）
	dome2.style.height = dome.offsetHeight + "px";
	dome2.innerHTML = dome1.innerHTML;               //将dome1中的内容复制到dome2中
	//设置文字滚动定时器
	var timer1 = window.setInterval("start2()",40);  //隔40ms执行一次函数,即scrollTop++;

	//创建鼠标事件，开始和停止文字滚动，这个事件是在网页加载完成后进行的
	dome.onmouseover = function()
	{
		window.clearInterval(timer1);
	}
	dome.onmouseout = function()
	{
		timer1 = window.setInterval("start2()",40);
	}
}

//图片滚动执行函数
	var i = 1;
	function start3()
{
	var imgObj = document.getElementById("dd_scroll");
	imgObj.src="images/dd_scroll_"+i+".jpg";
	i++;
	if(i>6)
	{
		i = 1;
	}
}

//文字滚动执行函数
function start2()
{
	if(dome.scrollTop == dome.offsetHeight)  //如果dome中的内容向上滚动的距离等于dome元素对象的可见高度（边框范围内可见）
	{
		dome.scrollTop=0;   
	}
	else
	{
		dome.scrollTop++;    //实现动画效果
	}
}


