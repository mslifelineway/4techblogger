

    <?php 
    session_start();
         $adminEmail="";
        $adminEmail = @$_SESSION['adminEmail'];
    echo $adminEmail;

    ?>
        <div class="container-fluid">
            <div class="row">
                <form width="600px">
                    <div class="row">
                        <div class="col-25">
                            <h5 class="text text-info">select your field</h5>
                        </div>
                        <div class="col-75">
                            <select id="inputOption">
                                <option id="JavaOption" value="Java">Java</option>
                                <option id="COption" value="C">C</option>
                                <option id="CPlusOption" value="CPlus">C++</option>
                                <option id="QuizOption" value="Quiz">Quiz</option>
                                <option id="TechOption" value="Tech">Tech</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Post Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="postTitle" id="postTitle" class="form-control" placeholder="Title .." >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label  >Descriptions</label>
                        </div>
                        <div class="col-75">
                            <textarea name="postDesc"  id="postDesc" placeholder="Write here .." ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" name="btnInsert" id="insertPost" class="btn btn-success">Post</button>
                    </div>
                </form>
            </div>
        </div>


<!-- code for posting data and inserting data onto database -->

<script>
    
    $(document).ready(function(){
        $("#insertPost").click(function(){
            var e = document.getElementById("inputOption");
            var selectedOption = e.options[e.selectedIndex].value; 
            var title=$("#postTitle").val();
            var desc=$("#postDesc").val();
            $.ajax({
                type: 'POST',
                url: 'Admin Page/InsertPost.php?sendData=<?php echo $adminEmail;?>',
                data:{postTitle:title,postDesc:desc,subject:selectedOption},
                success: function(data){
                    if ($.trim(data)== "Posted!") {
                        $("#loadData").html(data).append(" <label class='text text-danger'>now go to pending post to final varyfication..</label>");
                    }
                    else{
                        $("#loadData").html(data).slideright();
                    }
                }
            });
        });
    });

</script>

