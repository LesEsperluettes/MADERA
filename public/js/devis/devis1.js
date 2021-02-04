function unselectAllClient(){
    // remove active from previous selection
    let clients = document.querySelectorAll('*[id^="client_"]');
    clients.forEach((client) => {
        client.classList.remove("active");
    })
}

function filterClients(search_input){
    let search_text = search_input.value;

    let clients = document.querySelectorAll('*[id^="client_"]');
    clients.forEach((client) => {
        unselectAllClient();
        if(client.innerHTML.indexOf(search_text) >= 0) client.style.display = "initial";
        else client.style.display = "none";
    })
}

function selectClient(id){
    unselectAllClient();

    // set active selected client
    let client = document.querySelector("#client_"+id)
    client.classList.add("active");

    // update form
    updateSelectedClientForm();
}

function getSelectedClient(){
    let clients = document.querySelectorAll('*[id^="client_"]');
    let return_client = null;
    clients.forEach((client) => {
        if(client.classList.contains("active")) return_client = client;
    })
    return return_client;
}

function updateSelectedClientForm(){
    let selected_client = getSelectedClient();
    let client_id = selected_client.id.split('_')[1]

    document.querySelector("#selected_client_input").value = client_id;
}
