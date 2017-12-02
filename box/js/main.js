// function hello(x){
// 	console.log("Зря кликнул");
// }
var presents = ["Спинер", "Ничего, вы были плохим мальчиком", "50 рублей на телефон", "Водка(Русская)", "Мандарины", "Тортик", "Пятерка по информатике", "iPhone из китая", "Пушистые гантели", "Шавуха", "Право владением шаурмечной на молодежке", "Собака из березы", "Мухтар из мухаморов", "Манипулятор энергетического поля нулевого уровня"]
var imgs = ['spiner.png', 'plohoy.png', '50rub.png','vodka.png', 'mandariny.png', 'tort.png', '5.png', 'iphone.png', 'gant.png', 'shavyha.png', 'shayrmechnaya.png', 'dog.png', 'myhtar.png', 'gun.png']
$(".start").click(function(){
	var path = 'imgs/';
	var rand = Math.floor(Math.random() * 14);
	// console.log(presents[rand]);
	$('.header').text("Поздравляем!");
	$('.gift').text("Ваш подарок:"+presents[rand]);
	$('.start').attr('src', path+imgs[rand]);

})