var textResult = {};

function init() {
  textResult = {};
  $("#result").html("");
  $("#result_table").html("");
}

function sort(dict) {
  // Create items array
  var items = Object.keys(dict).map(function(key) {
    return [key, dict[key]];
  });

  // Sort the array based on the second element
  items.sort(function(first, second) {
      return second[1] - first[1];
  });

  return items.slice(0, 30);
}

function showResult(data) {
  $("#result_table").html("");
  for(var i=0; i<data.length; i++){
    var temp = "" + data[i][0] + " : " + data[i][1];
    $("#result_table").append("<div>"+ temp +"</div>");
  }

}

function addEventForResult() {
  $('button').on('click', function(e) {
    var target = $(e.currentTarget).text();
    var result = sort(textResult[target].chats);
    var count = textResult[target].count;
    $("#result_count").html("");
    $("#result_count").append("<div>"+target+"의 메시지 수 : "+ count +"</div>");
    showResult(result);
  });
}

function checkChat(chat) {
  if(chat.includes('ㅋ') || chat.includes('ㅎ') || chat.includes('ㅜ') || chat.includes('ㅡ') || chat.includes('^') || chat.length < 3) {
    return false;
  }
  return true;
}

function addChats(items, key) {
  if(items[2]) {
    var chats = items[2].split(' ');

    for(var chat = 0 ; chat < chats.length ; chat++) {
      chats[chat] = chats[chat].replace(/"/gi, "");
      chats[chat] = chats[chat].replace(/ /, "");
      if(chats[chat] && checkChat(chats[chat])) {
        if(!textResult[key].chats.hasOwnProperty(chats[chat])) {
          textResult[key].chats[chats[chat]] = 1;
        } else {
          textResult[key].chats[chats[chat]]++;
        }
      }
    }
  }
}

function checkItem(items) {
  var id = items[1];
  if(items[0].includes('-') && items[0].includes(':') && items[1] && id.length < 24) {
    return true;
  }
  return false;
}

function receivedText() {
  init();
  var lines = this.result.split('\n');
  for(var line = 0; line < lines.length; line++){
    var items = lines[line].split(',');
    if(checkItem(items)) {
      items[1] = items[1].replace(/"/gi, "");
      var key = items[1];
      if(!textResult.hasOwnProperty(key)) {
        textResult[key] = {};
        textResult[key].count = 1;
        textResult[key].chats = {};
        $("#result").append("<button>"+key+"</button>")
        addChats(items,key);
      } else {
        textResult[key].count++;
        addChats(items,key);
      }
    }
  }
  addEventForResult();
}

function receivedTextForWindow() {
  init();
  var lines = this.result.split('\n');
  for(var line = 0; line < lines.length; line++){
    var items = lines[line].split(']');
    if(items[0] && items[1] && items[1].includes(':')) {
      items[0] = items[0].replace(/\[/gi, "");
      var key = items[0];
      if(!textResult.hasOwnProperty(key)) {
        textResult[key] = {};
        textResult[key].count = 1;
        textResult[key].chats = {};
        $("#result").append("<button>"+key+"</button>")
        addChats(items,key);
      } else {
        textResult[key].count++;
        addChats(items,key);
      }
    }
  }
  addEventForResult();
}

$('#btnLoad').on('click', function(e) {
  if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
      alert('The File APIs are not fully supported in this browser.');
      return;
    }

  var input = document.getElementById("ex_file");
  if (!input) {
    alert("Um, couldn't find the fileinput element.");
  }
  else if (!input.files) {
    alert("This browser doesn't seem to support the `files` property of file inputs.");
  }
  else if (!input.files[0]) {
    alert("Please select a file before clicking 'Load'");
  }
  else {
    file = input.files[0];
    fr = new FileReader();
    fr.onload = receivedText;
    fr.readAsText(file);
  }
});


$('#btnLoadforWin').on('click', function(e) {
  if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
      alert('The File APIs are not fully supported in this browser.');
      return;
    }

  var input = document.getElementById("ex_file_win");
  if (!input) {
    alert("Um, couldn't find the fileinput element.");
  }
  else if (!input.files) {
    alert("This browser doesn't seem to support the `files` property of file inputs.");
  }
  else if (!input.files[0]) {
    alert("Please select a file before clicking 'Load'");
  }
  else {
    file = input.files[0];
    fr = new FileReader();
    fr.onload = receivedTextForWindow;
    fr.readAsText(file);
  }
});
