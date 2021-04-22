if (!window.WebSocket && window.MozWebSocket) {
    window.WebSocket = window.MozWebSocket;
}

if (!window.WebSocket) {
    alert("WebSocket not supported by this browser");
}

// function $$ () {
//     return document.getElementById(arguments[0]);
// }
// function $F () {
//     return document.getElementById(arguments[0]).value;
// }

function getKeyCode (ev) {
    if (window.event)
        return window.event.keyCode;
    return ev.keyCode;
}

var wstool = {
    connect: function () {
        //        var location = document.location.toString().replace('http://', 'ws://') + "echo";
        // var location = document.location.origin.toString().replace('http://', 'ws://') + "/smartcard";
        var location = "ws://localhost:8443/moph/smartcard";
        wstool.info("Document URI: " + document.location);
        wstool.info("WS URI: " + location);

        this._scount = 0;

        try {
            //            this._ws = new WebSocket(location);
            this._ws = new ReconnectingWebSocket(location, null, { debug: true, reconnectInterval: 3000 });
            this._ws.onopen = this._onopen;
            this._ws.onmessage = this._onmessage;
            this._ws.onclose = this._onclose;
        } catch (exception) {
            wstool.info("Connect Error: " + exception);
        }
    },

    close: function () {
        this._ws.close(1000);
    },

    _out: function (css, message) {
        var consoleResult = $('#console');
        var spanText = document.createElement('span');
        spanText.className = 'text ' + css;
        spanText.innerHTML = message;
        var lineBreak = document.createElement('br');
        consoleResult.append(spanText);
        consoleResult.append(lineBreak);
        // console.scrollTop = console.scrollHeight - console.clientHeight;
        consoleResult.animate({
            scrollTop: consoleResult.height()
        }, 300);
    },

    setState: function (enabled) {
        $('#connectBtn').attr("disabled", enabled);// = enabled;
        // $('#close').attr("disabled", !enabled);
        // $('#hello').attr("disabled", !enabled);
    },

    info: function (message) {
        wstool._out("info", message);
    },

    error: function (message) {
        wstool._out("error", message);
    },

    infoc: function (message) {
        wstool._out("client", "[c] " + message);
    },

    infos: function (message) {
        this._scount++;
        wstool._out("server", "[s" + this._scount + "] " + message);
        try {
            // console.log(message);
            message = JSON.parse(message);
            // console.log(message);
            if (message && message.status && message.status == "Card Exited") {
                clearForm();
            }
            if (message && message.data && message.data.length > 5000) {
                document.getElementById("myImg").src = 'data:image/jpeg;base64,' + message.data;
            } else {
                if (message.data && message.data.cid) {
                        $("#card_reader_no").val(message.cardReaderNo);
                	var month_text = ["มกราคม",
                		"เธ.เ",
                		"เธกเธต.เธ.",
                		"เน€เธก.เธข.",
                		"พฤษภาคม",
                		"เธกเธด.เธข.",
                		"เธ.เธ.",
                		"เธช.เธ.",
                		"เธ.เธข.",
                		"เธ•.เธ.",
                		"เธ.เธข.",
                		"เธ.เธ."];
                    console.log(message.data.cid);
                    $("#process_time").val(message.data.process_time);
                    $("#cid").val(message.data.cid);
                    $("#title").val(message.data.thai_title);
                    $("#first_name").val(message.data.thai_firstname);
                    $("#last_name").val(message.data.thai_lastname);
                    $("#title_en").val(message.data.eng_title);
                    $("#first_name_en").val(message.data.eng_firstname);
                    $("#last_name_en").val(message.data.eng_lastname);
                    $("#location").val(message.data.address);
                    var birthdate = message.data.birthdate;
                    $("#birthdate").val(birthdate.substring(6,8) + " " +month_text[(birthdate.substring(4,6) - 1)]+ " " + birthdate.substring(0,4));
                    // document.getElementById("line4").value = message.data.birthdate;
                    // findCodeByCid(message.data.cid);
                }
                document.getElementById("myImg").src = 'data:image/png;base64, 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';
            }
        } catch (error) {
            console.log(error);
        }
    },

    _onopen: function () {
        $('#connectBtn').attr("disabled", true);
        wstool.setState(true);
        wstool.info("Websocket Connected");
    },

    _send: function (message) {
        if (this._ws) {
            this._ws.send(message);
            wstool.infoc(message);
        }
    },

    write: function (text) {
        wstool._send(text);
    },

    _onmessage: function (m) {
//        console.log(m);
        if (m.data) {
            wstool.infos(m.data);
        }
    },

    _onclose: function (closeEvent) {
        this._ws = null;
        wstool.setState(false);
        wstool.info("Websocket Closed");
        wstool.info("  .wasClean = " + closeEvent.wasClean);

        var codeMap = {};
        codeMap[1000] = "(NORMAL)";
        codeMap[1001] = "(ENDPOINT_GOING_AWAY)";
        codeMap[1002] = "(PROTOCOL_ERROR)";
        codeMap[1003] = "(UNSUPPORTED_DATA)";
        codeMap[1004] = "(UNUSED/RESERVED)";
        codeMap[1005] = "(INTERNAL/NO_CODE_PRESENT)";
        codeMap[1006] = "(INTERNAL/ABNORMAL_CLOSE)";
        codeMap[1007] = "(BAD_DATA)";
        codeMap[1008] = "(POLICY_VIOLATION)";
        codeMap[1009] = "(MESSAGE_TOO_BIG)";
        codeMap[1010] = "(HANDSHAKE/EXT_FAILURE)";
        codeMap[1011] = "(SERVER/UNEXPECTED_CONDITION)";
        codeMap[1015] = "(INTERNAL/TLS_ERROR)";
        var codeStr = codeMap[closeEvent.code];
        wstool.info("  .code = " + closeEvent.code + "  " + codeStr);
        wstool.info("  .reason = " + closeEvent.reason);
    }
};