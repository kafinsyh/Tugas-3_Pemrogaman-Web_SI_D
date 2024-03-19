const button = document.querySelector("#submit");

button.addEventListener("click", () => {
    const dataFormulir = new FormData(document.getElementById("formulir"));

    axios.post("ajax[225150400111045].php", dataFormulir).then((response) => {
        document.getElementById("container").innerHTML = response.data;
    });
});
