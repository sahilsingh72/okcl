durgesh 1st commit
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
 
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
 
.container {
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
 
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #ddd;
    padding-bottom: 15px;
    margin-bottom: 25px;
    background-color: blue;
}
 
.header h1 {
    font-size: 26px;
    color: white;
}
 
.menu-icon {
    width: 35px;
    height: 30px;
    background: url('https://img.icons8.com/ios-filled/50/000000/menu--v1.png') no-repeat center center;
    background-size: cover;
    background-color: #fff;
    margin-top: 10px;
    margin-right: 5px;
}
 
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
 
.form-group {
    display: flex;
    flex-direction: column;
}
 
label {
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}
 
input[type="text"],
input[type="email"],
select {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
 
input[type="text"]:focus,
input[type="email"]:focus,
select:focus {
    border-color: #4CAF50;
    outline: none;
}
 
.dob-container {
    display: flex;
    align-items: center;
    position: relative;
}
 
input[type="date"]#dob {
    flex: 1;
    padding-right: 36px; /* Space for the calendar icon */
    width:600px; 
    height:50px; 
    border:1px solid #ccc;
    border-radius: 5px;
    padding-left: 15px;
    font-size: 16px;
}
 
.calendar-icon {
    width: 24px;
    height: 24px;
    /* background: url('https://img.icons8.com/ios-filled/50/000000/calendar--v1.png') no-repeat center center; */
    background-size: cover;
    position: absolute;
    right: 10px;
    cursor: pointer;
}
 
.button-group {
    grid-column: span 2;
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
 
.back-button,
.submit-button {
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}
 
.back-button {
    background-color: #f44336;
    color: #fff;
}
 
.back-button:hover {
    background-color: #d32f2f;
}
 
.submit-button {
    background-color: #4CAF50;
    color: #fff;
}
 
.submit-button:hover {
    background-color: #45a049;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo $page_title; ?>
                    <a href="<?php echo site_url('school/student_list'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"> <i class="mdi mdi-arrow-left"></i> <?php echo get_phrase('student_list'); ?></a>
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
 
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">  
                    <body class="bg-gray-100">
                        <div class="max-w-12xl mx-auto  bg-white shadow-md rounded-md ">
                        <form action="<?php echo base_url('School/student_info_save'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="teacherName">Student Full Name<span class="text-danger"> *</span></label>
                                <input type="text" id="teacherName" placeholder="Enter Student Full Name">
                            </div>

                            <div class="form-group">
                                <label for="registrationNum">Registration Number<span class="text-danger"> *</span></label>
                                <input type="text" id="registrationNum" placeholder="Enter Student's Registration Number">
                            </div>
                            
                            <div class="form-group">
                                <label for="parentName">Parent Name<span class="text-danger"> *</span></label>
                                <input type="text" id="parentName" placeholder="Enter Student's Father Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="gender">Gender<span class="text-danger"> *</span></label>
                                <select id="gender">
                                    <option>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject For Olympiad<span class="text-danger"> *</span></label>
                                <select id="subject">
                                    <option>Select Subject For Olympiad</option>
                                    <option>Mathematics</option>
                                    <option>Science</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dob">DOB<span class="text-danger"> *</span></label>
                                <div class="dob-container">
                                    <input  type="date" id="dob" placeholder="dd-mm-yyyy">
                                    <div class="calendar-icon"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="teacherFatherName">Student Father Name<span class="text-danger"> *</span></label>
                                <input type="text" id="teacherFatherName" placeholder="Enter Student Father Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="class">Class<span class="text-danger"> *</span></label>
                                <select id="class">
                                    <option value="class3">Select class</option>
                                    <option value="class3">Class III</option>
                                    <option value="class4">Class IV</option>
                                    <option value="class5">Class V</option>
                                    <option value="class6">Class VI</option>
                                    <option value="class7">Class VII</option>
                                    <option value="class8">Class VIII</option>
                                    <option value="class9">Class IX</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="school">District<span class="text-danger"> *</span></label>
                                <select class="district appearance-none w-full bg-white border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" onchange="Get_block(this.value)" id="district" name="district">
                                    <option value="">Select District</option>
                                    <?php foreach ($district as $data){ ?>
                                        <option value="<?= $data->DSM_DSCD ?>"><?= $data->DSM_DSNM ?></option>
                                    <?php } ?>
                                </select>
                                <!-- Display error message for district -->
                                <span class="text-danger"><?php echo form_error('district'); ?></span>
                            </div>

                            <!-- Block Selection -->
                            <div class="form-group">
                                <label for="block">Block<span class="text-danger"> *</span></label>
                                <select class="form-select" onchange="Get_gp(this.value)" id="block_id" name="block">
                                    <option value="">Select Block</option>
                                    <!-- This should be dynamically populated -->
                                </select>
                                <!-- Display error message for Block_id -->
                                <span class="text-danger"><?php echo form_error('block'); ?></span>
                            </div>
                             
                            <!-- GP Selection -->
                            <div class="form-group">
                                <label for="gp">GP<span class="text-danger"> *</span></label>
                                <select class="form-select" onchange="getVillage(this.value)" id="gp_id" name="gp">
                                    <option value="">Select GP</option>
                                    <!-- This will be dynamically populated -->
                                </select>
                                <!-- Display error message for GP -->
                                <span class="text-danger"><?php echo form_error('gp'); ?></span>
                            </div>

                             
                            <div class="form-group">
                                <label for="village">Village<span class="text-danger"> *</span></label>
                                <select class="village appearance-none w-full bg-white border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="village_id" name="village_id">
                                    <option value="">Select Village</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="school">School<span class="text-danger"> *</span></label>
                                <select class="school appearance-none w-full bg-white border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="school_id" name="school_id">
                                    <option value="">Select School</option>
                                </select>
                            </div>

                            <div class="button-group">
                                <button type="button" class="back-button">Back</button>
                                <button type="submit" class="submit-button">Submit</button>
                            </div>
                        </form>
                        </div> 
                    </body>
                </div>
            </div>
        </div>
    </div>    
</div>
<script>
 // Populate Block dropdown based on selected district
 $('#district').on('change', function() {
        var selectedDistrict = $(this).val();
        
        if (selectedDistrict) {
            $.ajax({
                url: '<?php echo site_url('Dependancy/Get_block'); ?>',
                method: 'GET',
                data: { districtId: selectedDistrict },
                dataType: 'json',
                success: function(response) {
                    $('#block_id').empty().append('<option value="">Select Block</option>');
                    $.each(response, function(index, value) {
                        $('#block_id').append('<option value="' + value.BLM_BLCD + '">' + value.BLM_BLNM + '</option>');
                    });

                    // Set the previously selected block value after populating
                    if (selectedBlock) {
                        $('#block_id').val(selectedBlock).trigger('change');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching blocks:', error);
                }
            });
        }
    }).trigger('change'); // Trigger the change event to repopulate on form reload


    
    // Populate School dropdown based on selected block
    $('#Block_id').on('change', function() {
        var selectedBlock = $(this).val();

            if (selectedBlock) {
                $.ajax({
                    url: '<?php echo site_url('Dependancy/Get_gp'); ?>',
                    method: 'GET',
                    data: { blockID: selectedBlock },
                    dataType: 'json',
                    success: function(response) {
                        $('#gp_id').empty().append('<option value="">Select GP</option>');
                        $.each(response, function(index, value) {
                            $('#gp_id').append('<option value="' + value.GPM_GPCD + '">' + value.GPM_GPNM + '</option>');
                        });

                        // Set the previously selected school value after populating
                        if (selectedGpk) {
                            $('#gp_id').val(selectedGpk).trigger('change');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching gps:', error);
                    }
                });
            }
    }).trigger('change');
    


</script>
<!-- $this->master_model->get_District()->result(); -->