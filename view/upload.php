<?php 
	include 'view/logInHeader.php';
?>
<body class="light">

<div class="content-wrapper" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 upload-page" id='start-upload'>

                <div class="u-area">
	                <form id='formUpload' enctype='multipart/form-data' method="post">
	                   	<input name="video" id ='video' type="file" accept="video/*"  /><i class="cv cvicon-cv-upload-video" onclick ="javascript:document.getElementById('video').click();"></i>
	                    <input type='hidden' id='MAX_FILE_SIZE'  name='MAX_FILE_SIZE' value='1000000000' />
	                    
	                    <p class="u-text1">Select Video files to upload</p>
	                    <p class="u-text2">or drag and drop video files</p>
	                    <input type='submit' id='UploadForm' name='uploadEdit' value='Upload Video' class="btn btn-primary u-btn" onclick = 'event.preventDefault()'/>
	                    
	                </form>
                </div>

                <div class="u-terms">
                    <p>By submitting your videos to circle, you acknowledge that you agree to circle's <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                    <p>Please be sure not to violate others' copyright or privacy rights. Learn more</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="content-wrapper upload-page edit-page" id = 'uploading-file'>
    <div class="container-fluid u-details-wrap">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="u-details">
                            <div class="row">
                                <div class="col-lg-12 ud-caption">Upload Details</div>
                                <div class="col-lg-2"><img id='videoPoster' alt="" src="assets/images/loading.gif"></div>
                                <div class="col-lg-10">
                                	<div class="u-area" id = 'delete'>
	            						<a class="btn btn-primary u-btn" href="UploadController.php" id='deleteVideo'>Delete</a>	            						
	            					</div>
                                	<div class="u-title" id='print-title'></div>
                                    <div class="u-title" id = 'print-duration'></div>
                                    <div class="u-size" id = 'print-size'></div>
                                    <p id='type-error'>Please, wait....</p>
                                    
                                    <div class="u-desc" id ='message'><p id='type-error'></p></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 " id='videoDetails'>

			<form action="addVideoController.php" method="post">
                <div class="u-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e1">Video Title</label>
                                <input type="text" class="form-control" name='title' id="title" placeholder='Enter title'>
                                <p id = 'titleError'></p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e2">About</label>
                                <textarea class="form-control" name="description" id="description" rows="3">Description</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e4">Privacy Settings</label>
                                <select class="form-control" id="privace" name="privace">
                                    <option value='false'>Public</option>
                                    <option value='true'>Private</option>

                                </select>
                             </div>
                         </div>
                         <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e4">Gategory</label>
                                <select class="form-control" id="category" name="category" onclick='showMusicGenre()'>
                                    <option value='1'>Film & Animation</option>
                                    <option value='2'>Cars & Vehicles</option>
                                    <option value='3'>Music</option>
                                    <option value='4'>Pets & Animals</option>
                                    <option value='5'>Sport</option>
                                    <option value='6'>Travel & Events</option>
                                    <option value='7'>Gaming</option>
                                    <option value='8'>People & Blogs</option>
                                    <option value='9'>Comedy</option>
                                    <option value='10'>Entertaiment</option>
                                    <option value='11'>News & Politics</option>
                                    <option value='12'>How-to & Style</option>
                                    <option value='13'>Educations</option>
                                    <option value='14'>Science & Technology</option>
                                    <option value='9'>Non-profits $ Activism</option>
                                </select>                               
                            </div>
                        </div>
                    </div>
                    </div>

                    <div id='conteinerMusicGenre'>
                    <div class="row ">
                        <div class="col-lg-12 u-category" id='genre-css'> Music genre</div>
                    </div>

                    <div class="row">
                        <!-- checkbox 1col -->
                    	<div>
	                        <div class="col-lg-2">
		                        <div class='radio-genre'>
			                        <label class = 'genre'>
			                            <input type="radio"  name="musicGenre" value = '1'>
			                            <span class="arrow"></span> Asian Pop (J-Pop, K-pop)
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '2'/>
			                            <span class="arrow"></span> Blues
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '3'/>
			                            <span class="arrow"></span> Children’s Music
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '4'/>
			                            <span class="arrow"></span> Classical Music
			                       </label> 
		                       </div>                           
	                        </div>

	                        <!-- checkbox 2col -->
	                        <div class="col-lg-2">
		                        <div class='radio-genre'>
			                        <label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '5'/>
			                            <span class="arrow"></span> Country Music
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '6'/>
			                            <span class="arrow"></span> Dance Music
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '7'/>
			                            <span class="arrow"></span> European Music (Folk/Pop)
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '8'/>
			                            <span class="arrow"></span> Hip Hop/Rap
			                        </label>
		                        </div>                            
	                        </div>

	                        <!-- checkbox 3col -->
	                        <div class="col-lg-2">
		                        <div class='radio-genre'>
			                        <label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '9'/>
			                            <span class="arrow"></span> Indie Pop
			                        </label> 
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '10'/>
			                            <span class="arrow"></span> Inspirational (incl. Gospel)
			                        </label> 
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '11'/>
			                            <span class="arrow"></span> Jazz
			                        </label> 
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '12'/>
			                            <span class="arrow"></span> Latin Music
			                        </label> 
		                        </div>
                            
                        	</div>
	                        <!-- checkbox 4col -->
	                        <div class="col-lg-2">
	                        	<div class='radio-genre'>
		                        	<label class = 'genre'>
		                            	<input type="radio" name="musicGenre" value = '13'/>
		                            	<span class="arrow"></span> New Age
		                            </label>
	                            </div>
	                            <div class='radio-genre'>
									<label class = 'genre'>
		                            	<input type="radio" name="musicGenre" value = '14'/>
		                            	<span class="arrow"></span> Opera
		                            </label>
	                            </div>
	                            <div class='radio-genre'>
		                           	<label class = 'genre'>           
			                            <input type="radio" name="musicGenre" value = '15'/>
			                            <span class="arrow"></span> Pop (Popular music)
		                           	</label>
	                           	</div>
	                           	<div class='radio-genre'>
									<label class = 'genre'>
		                              <input type="radio" name="musicGenre" value = '16'/>
		                              <span class="arrow"></span> R&B/Soulz
		                            </label>
	                            </div>
                        
                        	</div>
                       		 <!-- checkbox 5col -->
                        	<div class="col-lg-2">
		                        <div class='radio-genre'>
			                        <label class = 'genre'>
			                             <input type="radio" name="musicGenre" value = '17'/>
			                             <span class="arrow"></span> Reggae
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                             <input type="radio" name="musicGenre" value = '18'/>
			                             <span class="arrow"></span> Rock
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                             <input type="radio" name="musicGenre" value = '19'/>
			                             <span class="arrow"></span> Singer/Songw
			                        </label>
		                        </div>
		                        <div class='radio-genre'>
									<label class = 'genre'>
			                             <input type="radio" name="musicGenre" value ='20'/>
			                             <span class="arrow"></span>  Singer/Songwriter (inc. Folk)
			                        </label>
		                        </div>
                        	</div>
                        	<!-- checkbox 6col -->
	                        <div class="col-lg-2">
	                        	<div class='radio-genre'>
			                        <label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '21'/>
			                            <span class="arrow"></span> Soundtrack
			                        </label>
		                        </div>
								<div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value = '22'/>
			                            <span class="arrow"></span> Vocal
			                        </label>
								</div>
								<div class='radio-genre'>
									<label class = 'genre'>
			                            <input type="radio" name="musicGenre" value ='23'/>
			                            <span class="arrow"></span> World Music/Beats 
			                        </label>
	                        	</div>
                        	</div>
                    	</div>
                    </div>
                </div>
                    <div id='errorUploded'>
            			<p>Please, try again later</p>
            		</div>
                    <div class="u-area">
                        <input type="hidden" id = 'duration' value=''/>
						<input type='hidden' id='videoPath' value='' />
						<input type='hidden' id='videoPosterPath' value='' />
						<input type='hidden' id='originName' value='' />
                        <input type = 'submit' name='addVideo' value = 'save' class="btn btn-primary u-btn" id='addVideo' onclick = 'event.preventDefault(), uploded()' />
                   	</div>
                </form>
                
                <div class="u-terms">
                    <p>By submitting your videos to circle, you acknowledge that you agree to circle's <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                    <p>Please be sure not to violate others' copyright or privacy rights. Learn more</p>
                </div>
            </div>
            
            <div id='sucssesUploded'>
            	<div>
            		<p id='uploded'>Upload successfully!</p>
            	</div>
            	 
	            <div class="u-area" id='uploadVideo' >
	            	<a class="btn btn-primary u-btn" href='HomePageController.php'>Go to home page</a>
	            </div>
	        </div>
	        <div class="u-area" id ='back'>
	            	<a class="btn btn-primary u-btn" href='UploadController.php'>Back</a>
	        </div>
        </div>
    </div>
</div>

<?php 
	include 'view/footer.php';
?>