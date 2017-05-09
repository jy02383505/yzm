/**
 * 初始化uploadify插件
 * 使用示例：initUploadify('image_tmp', 'image_preview', 'image', 'solution', '方案详情');
 * 其中uploader指向php的upload函数请参见lym.php
 * @param  {string} id           [file类型input元素的id属性值]
 * @param  {string} previewClass [放置预览图片的div的class名]
 * @param  {string} name         [提交表单的hidden名称]
 * @param  {string} folderName   [Uploads目录下的子目录名称]
 * @param  {string} btnName      [上传按钮上显示的名称]
 */
function initUploadify(id, previewClass, name, folderName, btnName, swfPath, uploaderPath, upFolder){
    var str = '';
    $('#'+id).uploadify({
        'multi': false,
        'swf': swfPath,
        'uploader': uploaderPath,
        'buttonText': btnName,
        'formData': {pType: folderName},
        onUploadSuccess: function(file, data, response){
            str += "<img width='100%' src='" + upFolder + data + "'>";
            $('.'+previewClass).html(str);
            $('input[name='+name+']').val(data);
        }
    });
}