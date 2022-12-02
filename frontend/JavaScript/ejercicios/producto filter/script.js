let products = {
    data: [
        {
            productName: "Regular White T-Shirt",
            category: "Topwear",
            price: "30",
            image: "White-tshirt.jpg",
        },
        {
            productName: "Beige Short Skirt",
            category: "Bottomwear",
            price: "49",
            image: "short-skirt.jpg",
        },
        {
            productName: "Sporty SmartWatch",
            category: "Watch",
            price: "99",
            image: "sporty-smartwatch.jpg",
        },
        {
            productName: "Basic Knitted Top",
            category: "Topwear",
            price: "29",
            image: "knitted-top.jpg",
        },
        //search codewithrandom for all images that show is projects
    ]
};

for (let i of products.data) {
    //Create card
    let card= document.createElement('div');
    // card should have category and should stay hidden initially
    card.classList.add('card', i.category, "hide");
    //image div
    let imgContainer =document.createElement('div');
    imgContainer.classList.add("image-container");
}