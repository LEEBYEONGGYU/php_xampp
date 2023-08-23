//삭제클릭시
function remove(idx){
    if(confirm("정말 삭제할거야?")){
        alert("삭제완료");
    }
}

//수정 클릭시
function edit(idx){
    $("#dialog").dialog();
}

//입력
$("#write_icon").click(function(){
    $("#dialog").dialog();
});