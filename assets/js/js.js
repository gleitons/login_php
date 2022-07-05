function cancela(id) {
    console.log(id);
    alert(id);
    document.getElementById(`'${id}'`).innerHTML += "";
    
}
function bt_Cancelar() {
    cancela('box_modelo');
    cancela('box_marca');
    cancela('box_ano');
    cancela('box_preco');

}
function editar() {
    console.log('Editado com sucesso');
}
function deletar() {
    console.log('Deletado com sucesso');
}