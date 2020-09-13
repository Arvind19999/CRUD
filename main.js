$(".btnedit").click(e=>{
    let textvalues = displayData(e);
    
    let id = $("input[name*='id']");
    let bookname = $("input[name*='book']");
    let authorname = $("input[name*='Author']");
    let bookprice = $("input[name*='Price']");

    id.val(textvalues[0]);
    bookname.val(textvalues[1]);
    authorname.val(textvalues[2]);
    bookprice.val(textvalues[3].replace("$",""));

});
function displayData(e){
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];
    for(const value of td){
        if(value.dataset.id == e.target.dataset.id){
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}
