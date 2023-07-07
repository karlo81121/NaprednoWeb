function getTripPointForm(index) {
    return `
<div id="trip_point_${index}" class="trip-point mb-3">
    <p><b>#${index}</b></p>

    <label for="name_${index}"><b>Name</b></label>
    <input name="attractions[${index}][name]" type="text" id="name_${index}" placeholder="Name" required>
    <br>

    <label for="image_url_${index}"><b>Image URL</b></label>
    <input name="attractions[${index}][picture]" type="text" id="image_url_${index}" placeholder="Image URL" required>
    <br>

    <label for="description_${index}"><b>Description</b></label>
    <textarea name="attractions[${index}][description]"  id="description_${index}" placeholder="Description" cols="23" rows="5" class="mb-1" required></textarea>
    <br>
</div>`
};

let addNewAttractionButton = document.getElementById('button_add_new_attraction');
addNewAttractionButton.onclick = () => {
    let tripPointsList = document.getElementById('trip_points');
    let tripPointsCount = tripPointsList.childElementCount;

    if (tripPointsCount >= 5) return;

    const newAttractionForm = document.createElement('div');
    newAttractionForm.innerHTML = getTripPointForm(tripPointsCount + 1);

    tripPointsList.appendChild(newAttractionForm)

    if (tripPointsCount == 4) {
        addNewAttractionButton.remove();
    }
};

