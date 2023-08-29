<?php
include_once "template/header.php";
?>
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/summernote/summernote-bs4.min.css">

  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/simplemde/simplemde.min.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Titulo Casa</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Tag Casa</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Intro Casa</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Botón Casa Cel</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                </div>

                
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Titulo Desc Casa</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Desc Casa</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                </div>

                
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Desc Jardin</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Footer casa</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                </div>


                
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Info Casa</label>
                    
                    <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
            <div class="card-footer">
              Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
            </div>
          </div>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Categoria casa Casa Cel</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                </div>  


                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">State</label>
                    <select class="custom-select" id="validationTooltip04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                    <div class="invalid-tooltip">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip05" required>
                    <div class="invalid-tooltip">
                      Please provide a valid zip.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>



                  </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>

<!-- Summernote -->
<script src="<?= base_url();?>/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="<?= base_url();?>/public/plugins/codemirror/codemirror.js"></script>
<script src="<?= base_url();?>/public/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= base_url();?>/public/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= base_url();?>/public/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>



<?php
include_once "template/footer.php";
?>