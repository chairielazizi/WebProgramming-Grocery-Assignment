const frozenFoods = document.querySelector('#c-frozen-foods')
const cannedGoods = document.querySelector('#c-canned-goods')
const beverage = document.querySelector('#c-beverages')
const personalCare = document.querySelector('#c-personal-care')
const frozenButton = document.querySelector('.c-frozen-foods-button')


const frozen = [
    { name: 'Waffles', price: 'RM12.00' },
    { name: 'Ayamas Frozen Chicken Wings', price: 'RM14.50' },
    { name: 'Ayamas Chicken Frankfurters', price: 'RM8.00' },
    { name: 'Instant Pizza', price: 'RM9.00' },
    { name: 'Frozen Vegetables', price: 'RM7.60' },
    { name: 'Paratha', price: 'RM10.00' },
    { name: 'Pau', price: 'RM8.50' },
    { name: 'Frozen Fried Rice', price: 'RM4.50' },
    { name: 'Beef Patties', price: 'RM9.00' },
    { name: 'Chicken Patties', price: 'RM9.00' },
    { name: 'Tilapia Fish', price: 'RM13.00' },
]

const canned = [
    { name: 'Sardines', price: 'RM12.00' },
    { name: 'Spaghetti Sauce', price: 'RM14.50' },
    { name: 'Carbonara Sauce', price: 'RM8.00' },
    { name: 'Mackerels', price: 'RM9.00' },
    { name: 'Canned Pineapples', price: 'RM7.60' },
    { name: 'Baked Beans', price: 'RM10.00' },
    { name: 'Button Mushrooms', price: 'RM8.50' },
    { name: 'Chicken Curry', price: 'RM4.50' },
    { name: 'Rendang', price: 'RM9.00' },
    { name: 'Sambal', price: 'RM9.00' },
    { name: 'Ayam Brand Sardines', price: 'RM13.00' },
]

const beverages = [
    { name: 'Coca-Cola', price: 'RM12.00' },
    { name: 'Sprite', price: 'RM14.50' },
    { name: 'Milo', price: 'RM8.00' },
    { name: 'Chrysanthemum', price: 'RM9.00' },
    { name: 'Carlsberg', price: 'RM7.60' },
    { name: 'Sagota', price: 'RM10.00' },
    { name: 'Lipton Green Tea', price: 'RM8.50' },
    { name: 'Lipton Iced Lemon Tea', price: 'RM4.50' },
    { name: 'Asahi', price: 'RM9.00' },
    { name: 'Heineken', price: 'RM9.00' },
    { name: 'Soya', price: 'RM13.00' },
]

const personalCareProducts = [
    { name: 'Colgate Toothpaste', price: 'RM12.00' },
    { name: 'Colgate Toothbrush', price: 'RM14.50' },
    { name: 'Floss', price: 'RM8.00' },
    { name: 'Gatsby Hair Gel', price: 'RM9.00' },
    { name: 'Gatsby Hairwax', price: 'RM7.60' },
    { name: 'Razors', price: 'RM10.00' },
    { name: 'Baby Oil', price: 'RM8.50' },
    { name: 'Deodorant', price: 'RM4.50' },
    { name: 'Deodorant Spray', price: 'RM9.00' },
    { name: 'Hair Serum', price: 'RM9.00' },
    { name: 'Body Wash', price: 'RM13.00' },
]

frozen.forEach(function(products) {
    var frozenFoodCard = document.createElement('div')
    frozenFoodCard.className = 'card card-block mx-2'

    var frozenFoodPhoto = document.createElement('img')
    frozenFoodPhoto.className = 'card-img-top'

    var frozenFoodButton = document.createElement('button')
    frozenFoodButton.className = 'delete-button btn btn-danger'
    frozenFoodButton.textContent = 'Delete'

    var frozenFoodName = document.createElement('h6')
    frozenFoodName.className = 'card-title'
    frozenFoodName.textContent = products.name


    var frozenFoodPrice = document.createElement('p')
    frozenFoodPrice.className = 'card-text'
    frozenFoodPrice.textContent = products.price

    frozenFoodCard.appendChild(frozenFoodPhoto)
    frozenFoodCard.appendChild(frozenFoodName)
    frozenFoodCard.appendChild(frozenFoodPrice)
    frozenFoodCard.appendChild(frozenFoodButton)

    frozenFoods.appendChild(frozenFoodCard)
    console.log(frozenFoods)
})

beverages.forEach(function(products) {
    var beverageCard = document.createElement('div')
    beverageCard.className = 'card card-block mx-2'

    var beveragePhoto = document.createElement('img')
    beveragePhoto.className = 'card-img-top'

    var beverageButton = document.createElement('button')
    beverageButton.className = 'delete-button btn btn-danger'
    beverageButton.textContent = 'Delete'

    var beverageName = document.createElement('h6')
    beverageName.className = 'card-title'
    beverageName.textContent = products.name


    var beveragePrice = document.createElement('p')
    beveragePrice.className = 'card-text'
    beveragePrice.textContent = products.price

    beverageCard.appendChild(beveragePhoto)
    beverageCard.appendChild(beverageName)
    beverageCard.appendChild(beveragePrice)
    beverageCard.appendChild(beverageButton)

    beverage.appendChild(beverageCard)
})

canned.forEach(function(products) {
    var cannedGoodsCard = document.createElement('div')
    cannedGoodsCard.className = 'card card-block mx-2'

    var cannedGoodsPhoto = document.createElement('img')
    cannedGoodsPhoto.className = 'card-img-top'

    var cannedButton = document.createElement('button')
    cannedButton.className = 'delete-button btn btn-danger'
    cannedButton.textContent = 'Delete'

    var cannedGoodsName = document.createElement('h6')
    cannedGoodsName.className = 'card-title'
    cannedGoodsName.textContent = products.name


    var cannedGoodsPrice = document.createElement('p')
    cannedGoodsPrice.className = 'card-text'
    cannedGoodsPrice.textContent = products.price

    cannedGoodsCard.appendChild(cannedGoodsPhoto)
    cannedGoodsCard.appendChild(cannedGoodsName)
    cannedGoodsCard.appendChild(cannedGoodsPrice)
    cannedGoodsCard.appendChild(cannedButton)

    cannedGoods.appendChild(cannedGoodsCard)
})

personalCareProducts.forEach(function(products) {
    var personalCareCard = document.createElement('div')
    personalCareCard.className = 'card card-block mx-2'

    var personalCarePhoto = document.createElement('img')
    personalCarePhoto.className = 'card-img-top'

    var personalCareButton = document.createElement('button')
    personalCareButton.className = 'delete-button btn btn-danger'
    personalCareButton.textContent = 'Delete'

    var personalCareName = document.createElement('h6')
    personalCareName.className = 'card-title'
    personalCareName.textContent = products.name


    var personalCarePrice = document.createElement('p')
    personalCarePrice.className = 'card-text'
    personalCarePrice.textContent = products.price

    personalCareCard.appendChild(personalCarePhoto)
    personalCareCard.appendChild(personalCareName)
    personalCareCard.appendChild(personalCarePrice)
    personalCareCard.appendChild(personalCareButton)

    personalCare.appendChild(personalCareCard)
})


