function selectedItem(){
	var foods = document.getElementsByClassName('food_item');
	var foodsQty = document.getElementsByClassName('food_item_qty');

	for (var i = 0; i < foods.length; i++) {
		foods[i].addEventListener('click',addInfo);
		foodsQty[i].addEventListener('change',updateInfo);
	};
}

function addInfo(){
	var qty = parseInt(this.parentElement.children[2].value);

	if(this.checked){
		if(qty > 4){
			alert('quantity cannot be more than 4.');
			this.parentElement.children[2].value = 4;
			qty = 4;
		}else if(qty < 1){
			alert('quantity cannot be less than 1.');
			this.parentElement.children[2].value = 1;
			qty = 1;
		}

		var price = parseInt(this.parentElement.children[3].children[0].innerText);
		var subTotal = qty * price;
		var foodLabel = this.parentElement.children[1].innerText;
		var selectedText = foodLabel + " [" + qty + "x" + price + "] = <span>" + subTotal + "</span>";
		var selectedFoodDiv = document.createElement('div');
		selectedFoodDiv.setAttribute('id',this.name);
		selectedFoodDiv.innerHTML = selectedText;
		document.getElementById('selected_items').children[1].appendChild(selectedFoodDiv);
		updateTotal();
	}else{
		document.getElementById(this.name).remove();
		updateTotal();
	}
}

function updateInfo(){
	var qty = parseInt(this.value);

	if(qty > 4){
		alert('quantity cannot be more than 4.');
		this.value = 4;
		qty = 4;
	}else if(qty < 1){
		alert('quantity cannot be less than 1.');
		this.value = 1;
		qty = 1;
	}

	selectedFoodDivId = this.parentElement.children[0].name;
	var selectedFoodDiv = document.getElementById(selectedFoodDivId);

	if(selectedFoodDiv != null){
		selectedFoodDiv.remove();
		var price = parseInt(this.parentElement.children[3].children[0].innerText);
		var subTotal = qty * price;
		var foodLabel = this.parentElement.children[1].innerText;
		var selectedText = foodLabel + " [" + qty + "x" + price + "] = <span>" + subTotal + "</span>";
		selectedFoodDiv = document.createElement('div');
		selectedFoodDiv.setAttribute('id',selectedFoodDivId);
		selectedFoodDiv.innerHTML = selectedText;
		document.getElementById('selected_items').children[1].appendChild(selectedFoodDiv);
		updateTotal();
	}	
}

function updateTotal(){
	var totalItems = document.getElementById('selected_items').children[1].children.length;
	var total = 0;
	for (var i = 0; i < totalItems; i++) {
		total = total + parseInt(document.getElementById('selected_items').children[1].children[i].children[0].innerText);
	};

	document.getElementById('selected_items').children[2].children[0].innerText = total;
}


window.onload = function(){
	selectedItem();
};