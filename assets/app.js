const edits = document.getElementsByClassName('edits');
console.log(edits);
console.log("Im loading");
Array.from(edits).forEach((element) => {
    element.addEventListener('click', (e) => {
        console.log("Script is working");
    })
})