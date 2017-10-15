function personAttack(){
		var r = Math.random()*100;
			var damage = person.power;
			if (person.weapon.durability > 0){
				damage += person.weapon.attack;
			}else if (person.weapon.durability < 0){
				person.weapon.durability = undefined;
				console.log("Оружие сломалось!");
			}
			if (person.critical > r){
				damage *= 2;
			}
			damage -= spider.absorb;
			person.weapon.durability -= spider.absorb;
			spider.health -= damage;
	}
	function spiderAttack(){
		var r = Math.random()*100;
		var	damage = spider.power;
			if ( spider.critical > r){
				damage *= 2;
			}
			damage -= person.absorb;
			person.health -= damage;
	}
	