
Runner.buttonEvents["New_Button"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button';if(!pageObj.buttonEventBefore['New_Button']){pageObj.buttonEventBefore['New_Button']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var ctrlSQL=Runner.getControl(1,'sqlquery');if(ctrlSQL.getValue()==""){alert('No SQL Query to test. Enter some.');return false;}
else{params["testsql"]=ctrlSQL.getValue();return true;}}}
if(!pageObj.buttonEventAfter['New_Button']){pageObj.buttonEventAfter['New_Button']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;$("#sql_query").click();return false;}}
$('a[id="New_Button"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="New_Button"+"_"+Runner.genId();var button_New_Button=new Runner.form.Button({id:this.id,btnName:"New_Button"});button_New_Button.init({args:[pageObj,proxy,pageid]});});};