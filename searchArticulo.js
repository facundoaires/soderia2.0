            const productoInput = document.getElementById("inputProducto");
            const resultsDiv = document.getElementById("results");
            const detalleList = document.getElementById("detalleList");
            const total = document.getElementById("total");
            const detalleFactura = [];
        
            // Función para mostrar resultados de búsqueda
            function showResults(results) {
                resultsDiv.innerHTML = "";
                results.forEach(function(product) {
                    const productDiv = document.createElement("div");
                    productDiv.textContent = product.NOMBREARTICULO + " - $" + product.PRECIOARTICULO;
        
                    const addButton = document.createElement("button");
                    addButton.textContent = "Agregar";
                    addButton.addEventListener("click", function() {
                        agregarProducto(product);
                    });
        
                    productDiv.appendChild(addButton);
                    resultsDiv.appendChild(productDiv);
                });
            }

            // Función para buscar productos en tiempo real
            productoInput.addEventListener("input", function() {
                const searchTerm = productoInput.value;
        
                if (searchTerm.length >= 3) {
                    // Realizar una solicitud AJAX al servidor
                    fetch("searchArticulo.php?term=" + searchTerm)
                        .then(response => response.json())
                        .then(data => showResults(data));
                        resultsDiv.innerHTML = "";
                } else {
                    resultsDiv.innerHTML = "";
                }
            });
        
            // Función para agregar un producto al detalle de factura
            function agregarProducto(product) {
                detalleFactura.push(product);
                const listItem = document.createElement("div");
                listItem.textContent = product.NOMBREARTICULO + " - $" + product.PRECIOARTICULO;
                detalleList.appendChild(listItem);
        
                // Actualizar el total
                const currentTotal = parseFloat(total.textContent);
                total.textContent = (currentTotal + parseFloat(product.PRECIOARTICULO)).toFixed(2);
            };