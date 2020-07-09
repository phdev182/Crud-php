
let id = $("input[name*='id']");
id.atrr("readonly","readonly");

$(".btnedit").click(e =>{
  let textvalues = displayData(e);

  let prod = $("input[name*='produto']");
  let marca = $("input[name*='marca']");
  let quant = $("input[name*='quantidade']");
  let preco = $("input[name*='preco']");

  id.val(textvalues[0]);
  prod.val(textvalues[1]);
  marca.val(textvalues[2]);
  quant.val(textvalues[3]);
  preco.val(textvalues[4].replace("R$",""));
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