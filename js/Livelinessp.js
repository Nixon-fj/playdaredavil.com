var urlproxyplayer = "//dgsproxy.bettingcenter.ag/Proxyplayer.asmx";
var urlproxywager = "//dgsproxy.bettingcenter.ag/ProxyWager.asmx";
var strprmCurrencycode = "";
var intWTStraigth = 0;
var leagueSelected = "";
var prmidBook = 1;
var prmidProfile = 1;
var prmidLineType = 11;
var prmidProfileLimits = 1;
var prmNHLLine = 'A'
var prmidWagerType = 0;
var prmMLBLine = 'N';
var prmLineStyle = 'E';
var prmidLanguage = 0;
var prmLoadLines = true;

function GetLivelinesLeagues(prmidBook, prmidProfile, prmidLineType, prmidProfileLimits, prmNHLLine, prmidWagerType, prmMLBLine, prmLineStyle, prmidLanguage, prmLoadLines) {
    $.ajax({
        type: "POST",
        url: urlproxywager + "/GetActiveLeagues",
        data: { IdBook: prmidBook, IdProfile: prmidProfile, IdLineType: prmidLineType, WagerType: prmidWagerType, Language: prmidLanguage },
        contentType: "application/x-www-form-urlencoded",
        crossDomain: true,
        dataType: "xml",
        cache: false,
        beforeSend: function () { $('#spanLeagues').html('<img src="/images/freeliveodds/loading.gif" />'); },
        success: GetLivelinesLeaguesSuccessOccur,
        error: GetLivelinesLeaguesErrorOccur,
        complete: function () {
            if (prmLoadLines == true) {
                if ($('input[id^="league_"]:checkbox').length) {
                    leagueSelected = $('input[id^="league_"]:checkbox').first().attr('id').split('_')[1];
                    var leagueSelected = $($('span#spanLeagues #accordion div.panel.panel-default:first')).find("input[type=checkbox]").map(function () { return this.value; }).get().join(",");
                    GetLivelinesSchedule(prmidBook, prmidProfile, prmidProfileLimits, prmidLineType, prmNHLLine, prmMLBLine, prmLineStyle, prmidWagerType,
                        leagueSelected, prmidWagerType, prmidLanguage, -100, 1)

                }
            }
        }
    });
}
function GetLivelinesLeaguesSuccessOccur(data, status, req) {
    if (status == "success") {
        var strLeagues = "";
        var strsport = "";
        var idsport = "";
        strLeagues = strLeagues + "<div class='panel-group' id='accordion'>";
        var reqxml = req.responseText.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&');
        xmlDoc = $.parseXML(reqxml), $xml = $(xmlDoc), $xmlindex = $xml.find('index');
        $xmlindex.each(function (iindex, indexelement) {
            strsport = indexelement.attributes["value"].value;
            strsport = strsport.replace('_', " ").trim();
            strLeagues = strLeagues + "<div class='panel panel-default'><div class='panel-heading'>";
            strLeagues = strLeagues + "<div class='panel-title'>";
            strLeagues = strLeagues + "<a class='accordion-toggle collapsed' data-toggle='collapse' href='#l_" + strsport.trim().replace(/["~!@#$%^&*\(\)_+=`{}\[\]\|\\:;'<>,.\/?"\- \t\r\n]+/g, '') + "'>";
            strLeagues = strLeagues + strsport + "</a></div></div>"

            strLeagues = strLeagues + "<div id='l_" + strsport.trim().replace(/["~!@#$%^&*\(\)_+=`{}\[\]\|\\:;'<>,.\/?"\- \t\r\n]+/g, '') + "' class='panel-collapse collapse' style='height: 0px;'><div class='panel-body'>";

            if ($(indexelement).children('league').length > 0) {
                $xmlleague = $(indexelement).find('league');
                $xmlleague.each(function (ileague, leagueelement) {
                    var idleague = leagueelement.attributes["id"].value;
                    var idsport = leagueelement.attributes["idsport"].value;
                    strLeagues = strLeagues + "<label class='checkbox'>";
                    strLeagues = strLeagues + "<input type='checkbox' class='league' value='" + idleague + "' id='league_" + idleague + "'> ";
                    strLeagues = strLeagues + leagueelement.attributes["desc"].value + "<br>";
                    strLeagues = strLeagues + "</label>";
                });
            }
            strLeagues = strLeagues + "</div></div>";
            strLeagues = strLeagues + "</div>";
        });
        strLeagues = strLeagues + "</div>";
        $("#spanLeagues").html(strLeagues);
    }
}
function GetLivelinesLeaguesErrorOccur(data, status, req) {
    $('#spanLeagues').html('An error occured: ' + status + '. ' + req + '.<br> ' + 'Your browser is out of date. It has known security flaws and may not display all features of this and other websites.  You should upgrade your browser or use another updated browser.'); checkVersion();
}

function GetLivelinesSchedule(prmIdBook, prmIdProfile, prmIdProfileLimits, prmIdLineType, prmNHLLine, prmMLBLine, prmLineStyle, prmWagerType, prmStrIdLeagues, prmIdWagerType, prmLanguage, prmUTC, prmIdAgent) {
    ;
    $.ajax({
        type: "POST",
        url: urlproxywager + "/GetScheduleUTC",
        data: {
            IdBook: prmIdBook,
            IdProfile: prmIdProfile,
            IdProfileLimits: prmIdProfileLimits,
            IdLineType: prmIdLineType,
            NHLLine: prmNHLLine,
            MLBLine: prmMLBLine,
            LineStyle: prmLineStyle,
            WagerType: prmWagerType,
            StrIdLeagues: prmStrIdLeagues,
            IdWagerType: prmIdWagerType,
            Language: prmLanguage,
            UTC: prmUTC,
            IdAgent: prmIdAgent
        },
        dataType: "xml",
        beforeSend: function () {
            $('#spanLines').html('<img src="./img/icons/loading.gif" />');
            try { xhr.responseType = "msxml-document"; } catch (err) { };
        },
        success: GetLivelinesScheduleSuccessOccur,
        error: GetLivelinesScheduleErrorOccur
    });
}
function GetLivelinesScheduleSuccessOccur(data, status, req) {
    if (status == "success") {
        var reqxml = req.responseText.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;amp;/g, '&amp;').replace('<string xmlns="http://tempuri.org/">', '').replace('</string>', '');
        reqxml = reqxml.replace(/&amp;frac14;/g, '&#188;').replace(/&amp;frac12;/g, '&#189;').replace(/&amp;frac34;/g, '&#190;').replace(/&amp;#xD;/g, "").replace(/&amp;#xA;/g, "");
        xmlDocx = $.parseXML(reqxml), $xml = $(xmlDocx);

        if (window.ActiveXObject) { xhttp = new ActiveXObject("Msxml2.XMLHTTP"); }
        else { xhttp = new XMLHttpRequest(); }

        var ie = (function () {
            var undef, v = 3, div = document.createElement('div'), all = div.getElementsByTagName('i');

            while (
                div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
                all[0]
            );
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                v = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }

            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                var rv = ua.indexOf('rv:');
                if (rv != -1) { v = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10); }
            }

            var edge = ua.indexOf('Edge/');
            if (edge > 0) {
                v = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
            }
            return v > 4 ? v : undef;
        }());
        if (ie == undefined) { xhttp.open("GET", '/xsl/Schedule.xslt', false); } // chrome
        else if (ie) { xhttp.open("GET", '/xsl/Schedule.xslt', false); } // ie11
        else { xhttp.open("GET", '/xsl/Schedule.xslt', true); }
        if (xhttp.responseType == "msxml-document") { $('#spanLines').xslt(reqxml, xhttp.responseText); }
        else if (xhttp.xml != undefined) { $('#spanLines').xslt(reqxml, xhttp.xml); }
        else { $('#spanLines').xslt(reqxml, xhttp.responseText); }
    }
}
function GetLivelinesScheduleErrorOccur(data, status, req) {
    $('#spanLines').html('An error occured: ' + status + '. ' + req + '.<br> ' + 'Your browser is out of date. It has known security flaws and may not display all features of this and other websites.  You should upgrade your browser or use another updated browser.');
}

function ckLine(ID, dID, tID) {
    var xck = document.getElementById(ID);
    var xdID = document.getElementById(dID);
    var xtID = document.getElementById(tID);

    idgametoadd = $(xck);
    if ($(idgametoadd).length) {
        if (xck.checked == 1) { xck.checked = 0; xdID.className = "ckline"; }
        else { xck.checked = 1; xdID.className = "ckline-checked"; }
    }
    var remActive = $(xtID).find('.ckline-checked').length;
    if (remActive == 0) { $(xtID).removeClass('active'); } else { $(xtID).addClass('active'); }

    var gametoadd = "";
    var tmpid = ID;

    gametoadd = gametoadd + '<div id="g_' + tmpid.replace('.', '') + '">';
    gametoadd = gametoadd + '<span class="pull-left" onclick="';
    gametoadd = gametoadd + 'ckLine(\'' + ID + '\',\'' + dID + '\',\'' + tID + '\')"><span class="glyphicon glyphicon-remove-circle red"></span></span>';
    gametoadd = gametoadd + '&nbsp;';
    gametoadd = gametoadd + $(idgametoadd).attr('descGame');
    gametoadd = gametoadd + '</div>';
    ID = ID.replace('.', '');
    idgametoadd = $('#g_' + ID);
    if ($(idgametoadd).length > 0) { $(idgametoadd).remove(); } else { $('#bslip_show').append(gametoadd); }
}

function showhidelines(ckname, divname) {
    if (document.getElementsByName) {
        var cks = document.getElementById(ckname);
        var nameas = document.getElementsByName(divname);
        if (cks.checked) { for (var i = 0; i < nameas.length; i = i + 1) { $(nameas[i]).fadeIn("1"); } }
        else { for (var i = 0; i < nameas.length; i = i + 1) { $(nameas[i]).fadeOut(1); } }
    }
}

function getInternetExplorerVersion() {
    var rv = -1;

    if (navigator.appName == 'Microsoft Internet Explorer') {
        var ua = navigator.userAgent;
        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");

        if (re.exec(ua) != null) {
            rv = parseFloat(RegExp.$1);
        }
    }

    return rv;
}

function checkVersion() {
    var msg = " ";
    var ver = getInternetExplorerVersion();

    if (ver > -1) {
        if (ver >= 9.0) {
        }
        else {
            msg = "Your browser is out of date. It has known security flaws and may not display all features of this and other websites.  You should upgrade your browser or use another updated browser.";
        }
    }
}

function displayTime() {
    var str = "";

    var currentTime = new Date()
    var hours = currentTime.getHours()
    var minutes = currentTime.getMinutes()
    var seconds = currentTime.getSeconds()
    var mseconds = currentTime.getMilliseconds()

    if (minutes < 10) {
        minutes = "0" + minutes
    }
    if (seconds < 10) {
        seconds = "0" + seconds
    }
    if (mseconds < 10) {
        mseconds = "00" + mseconds
    }
    str += hours + ":" + minutes + ":" + seconds + "." + mseconds;
    if (hours > 11) {
        str += "PM"
    } else {
        str += "AM"
    }
    return str;
}
$(function () {

    $.ajaxSetup({ cache: false });
    $(document).ajaxStart(function () { $("#divloading").show(); });
    $(document).ajaxStop(function () { $("#divloading").hide(); });

    //mlines_
    if ($('#ckmline').is(':checked')) { $('div[name="mlines_"]').each(function () { $(this).fadeIn("1"); }); }
    else { $('div[name="mlines_"]').each(function () { $(this).fadeOut(1); }); }

    //spreads_
    if ($('#ckspread').is(':checked')) { $('div[name="spreads_"]').each(function () { $(this).fadeIn("1"); }); }
    else { $('div[name="spreads_"]').each(function () { $(this).fadeOut(1); }); }

    //totals_
    if ($('#cktotal').is(':checked')) { $('div[name="totals_"]').each(function () { $(this).fadeIn("1"); }); }
    else { $('div[name="totals_"]').each(function () { $(this).fadeOut(1); }); }

    //click checkbox league
    $('body').on('change', 'input[id^="league_"]:checkbox', function () {
        leagueSelected = "";
        $('input[id^="league_"]:checkbox').each(function () {
            if ($(this).is(':checked')) { leagueSelected = leagueSelected + $(this).attr('id').split('_')[1] + ","; }
        });

        leagueSelected = leagueSelected.substring(0, leagueSelected.length - 1);
        if (leagueSelected.length == 0) { leagueSelected = $('input[id^="league_"]:checkbox').first().attr('id').split('_')[1]; }
        GetLivelinesSchedule(prmidBook, prmidProfile, prmidProfileLimits, prmidLineType, prmNHLLine, prmMLBLine, prmLineStyle, prmidWagerType, leagueSelected, prmidWagerType, prmidLanguage, -100, 1);
    });

});

$(document).ready(function () {
    $('input[name^="text_"]:checkbox').each(function () {
        if ($(this).attr('checked')) {
            var prmID = $(this).attr('value');
            var prmdID = "di_" + $(this).attr('value');
            var arr = prmID.split('_');
            var prmtID = "v_" + arr[1];
            ckLine(prmID, prmdID, prmtID);
            ckLine(prmID, prmdID, prmtID);
        }
    });
    GetLivelinesLeagues(prmidBook, prmidProfile, prmidLineType, prmidProfileLimits, prmNHLLine, prmidWagerType, prmMLBLine, prmLineStyle, prmidLanguage, prmLoadLines);
});