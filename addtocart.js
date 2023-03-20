const product = [
    {
        id: 0,
        image: 'image/product-1.jpg',
        title: 'Red Printed T-Shirt',
        price: 200,
    },
    {
        id: 1,
        image: 'image/product-2.jpg',
        title: 'HRX Sports Shoes',
        price: 600,
    },
    {
        id: 2,
        image: 'image/product-3.jpg',
        title: 'HRX Gray Trackpants',
        price: 250,
    },
    {
        id: 3,
        image: 'image/product-4.jpg',
        title: 'Blue Printed T-Shirt',
        price: 200,
    }
];
const categories = [...new Set(product.map((item)=>  //map() creates a new array from calling a function for every array element.
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
            <div class='bottom'>
                <p>${title}</p>
                <h2>$ ${price}.00</h2>`+
                "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
            `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }
}