@extends('master')
@section('head')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../froala/css/froala_editor.css">
  <link rel="stylesheet" href="../../froala/css/froala_style.css">
  <link rel="stylesheet" href="../../froala/css/plugins/code_view.css">
  <link rel="stylesheet" href="../../froala/css/plugins/colors.css">
  <link rel="stylesheet" href="../../froala/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../../froala/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../../froala/css/plugins/image.css">
  <link rel="stylesheet" href="../../froala/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../../froala/css/plugins/table.css">
  <link rel="stylesheet" href="../../froala/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../../froala/css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"> 
    {{-- <style>
      body {
          text-align: center;
      }

      div#editor {
          width: 81%;
          margin: auto;
          text-align: left;
      }
  </style> --}}   
@endsection
@section('content')


    <form method="post" action="/show">
    {{ csrf_field() }}
  <div id="editor">
      
       <lable>Title</lable>
       <input type="text" name="title">

        <lable>Key Words</lable>
       <input type="text" name="keywords">
       
        <textarea id="froala-editor" name="data">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>

      
       
      <button type="submit" >บันทึก</button>
  </div>
  </form>

@endsection

@section('footer')
   {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../../froala/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../../froala/js/plugins/save.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor({
        fullPage: true
      })
    });
  </script>

  <script>
  $(function() {
    $('textarea#froala-editor').froalaEditor()
  });
</script>   
@endsection

