// ****************************************
// Shopping Cart Functions

mk_shoppingCart = {};
mk_shoppingCart.cart = [];

mk_shoppingCart.Item = function (name, price, count) {
// this.id = id;
this.name = name;
this.price = price;
this.count = count;
};

mk_shoppingCart.addItemToCart =function(name, price, count) {
  for (var i in this.cart) {
      if (this.cart[i].name === name) {
          this.cart[i].count += count;
          this.saveCart();
          return;
      }
  }
  var item = new this.Item(name, price, count);
  this.cart.push(item);
  this.saveCart();
};

mk_shoppingCart.removeItemFromCart = function(name) {
  for(var i in this.cart){
      if(this.cart[i].name === name){
          this.cart[i].count --;
          if (this.cart[i].count === 0) {
              this.cart.splice(i, 1);
          }
          break;
      }
  }
  this.saveCart();
};

mk_shoppingCart.removeItemFromCartAll = function(name){
  for (var i in this.cart) {
      if (this.cart[i].name === name) {
          this.cart.splice(i, 1);
      break;
      }
  }
  this.saveCart();
};

mk_shoppingCart.clearCart = function() {
  this.cart = [];
  this.saveCart();
};

mk_shoppingCart.countCart = function(){
  var totalCount = 0;
  for (var i in this.cart) {
      totalCount += this.cart[i].count;
  }
  return totalCount;
};

mk_shoppingCart.totalCart = function() {
  var totalCost = 0;
  for(var i in this.cart){
      totalCost += this.cart[i].price * this.cart[i].count;
  }
  return totalCost.toFixed(2);
};

mk_shoppingCart.setCountForItem = function(name, count){
for(var i in this.cart){
    if(this.cart[i].name === name){
        this.cart[i].count = count;
        break;
    }
}
  this.saveCart();
};

mk_shoppingCart.listCart = function() {
  var cartCopy = [];
  for(var i in this.cart){
      var item = this.cart[i];
      var itemCopy = {};
      for(var p in item){
          itemCopy[p] = item[p];
      }
      itemCopy.total = (item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy);
  }
  return cartCopy;
  // return cart;
};

mk_shoppingCart.saveCart = function(){
  localStorage.setItem("Shopping Cart", JSON.stringify(this.cart));
};

mk_shoppingCart.loadCart = function(){
  this.cart = JSON.parse(localStorage.getItem("Shopping Cart"));
};

mk_shoppingCart.loadCart();