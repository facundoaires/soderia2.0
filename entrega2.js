        const inputVendedor = document.getElementById("inputVendedor");
        const resultadoDiv= document.getElementById("resultadoDiv");
        const vendedorDiv= document.getElementById("vendedorDiv");

        inputVendedor.addEventListener("input", function() {
            const inputTerm=inputVendedor.value;
            if (inputTerm.length >= 3) {
                fetch("entrega2back.php?term=" + inputTerm)
                .then(response => response.json())
                .then(data => mostrarResultado(data));
            }else{
                resultadoDiv.innerHTML="";
            }                
        });

        function mostrarResultado(resultados){
            resultadoDiv.innerHTML = "";
            resultados.forEach(function(product){
                const productDiv = document.createElement("div");
                productDiv.textContent = product.NOMBREPERSONA;

                const addButton = document.createElement("button");
                addButton.textContent = "Agregar";
                addButton.addEventListener("click", function() {
                    agregarVendedor(product);
                });

            productDiv.appendChild(addButton);
            resultadoDiv.appendChild(productDiv);

            });

            function agregarVendedor(product) {
                resultadoDiv.innerHTML = "";
                inputVendedor.hidden=true;

                const contVendedor=document.createElement("div");
                contVendedor.innerHTML="<input type='hidden' id='idVendedor' name='idVendedor' value='"+ product.IDPERSONA +"'>"+product.NOMBREPERSONA ;
                vendedorDiv.appendChild(contVendedor);
            };
        }

            
