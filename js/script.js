//Read Msg

let msgdiv=document.querySelector(".msg");
setInterval(()=>{
    fetch("readMsg.php")
    .then(r=>{
        if(r.ok){
            return r.text();
        }
    }).then(d=>{
        msgdiv.innerHTML=d;
    })
},500)


//Add Messages to the database
window.onkeydown = (e) => {
    if (e.key == "Enter") {
        update()
    }
}
function update() {
    let msg = msg_input.value.trim();
    msg_input.value = "";
    if (msg.length >= 1) {
        fetch(`addMsg.php?msg=${msg}`)
            .then(r => {
                if (r.ok) {
                    return r.text();
                }
            }).then(d => {
                console.log("msg has been added")
                msgdiv.scrollTop=msgdiv.scrollHeight-msgdiv.clientHeight;
            })
    }

}