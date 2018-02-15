var platform_id = 16;
var ref = '';
var counter = document.createElement("a");
var img = document.createElement("img");
counter.id='mobtop';
counter.href="http://mobtop.ru/in/" + platform_id;
counter.title="Рейтинг мобильных сайтов.";
img.alt="MobTop.Ru - Top Mobile Rating";
img.src="http://mtp.spaces.ru/"+platform_id+".gif?rnd=839491874961&ref="+ref;
img.style.cssText = "opacity: 1 !important";counter.appendChild(document.createTextNode("") );
counter.appendChild(img);
var arr = document.getElementsByTagName('script');
for (var i=0; i < arr.length; i++){
	if (arr[i].src == "http://mtp.spaces.ru/c/"+platform_id+".js") {
		var fnd = arr[i];
		break;
	}
}
fnd.parentNode.insertBefore(counter,fnd);
