
Runner.buttonEvents["SubmitToLoadBoard"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='SubmitToLoadBoard';if(!pageObj.buttonEventBefore['SubmitToLoadBoard']){pageObj.buttonEventBefore['SubmitToLoadBoard']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["txt"]="Hello";ajax.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['SubmitToLoadBoard']){pageObj.buttonEventAfter['SubmitToLoadBoard']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="SubmitToLoadBoard"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="SubmitToLoadBoard"+"_"+Runner.genId();var button_SubmitToLoadBoard=new Runner.form.Button({id:this.id,btnName:"SubmitToLoadBoard"});button_SubmitToLoadBoard.init({args:[pageObj,proxy,pageid]});});};