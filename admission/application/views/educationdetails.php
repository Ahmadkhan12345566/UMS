<div class="content">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Education Details</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url("educationdetails")?>">
                                <div class="row">
                                    <div class="col-md-12 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Degree</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">View</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#ModalLoginForm">
                                                            Matric / O - Level
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="ModalLoginForm" data-backdrop="static" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">Matric / O - Level</h3>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="<?php echo base_url("educationdetails");?>">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="education_level_id" id="matricdegree" required class="form-control">
                                                                                    <?php foreach ($education_levels as $education_level){?>
                                                                                    <option value="<?php echo $education_level->id;?>"><?php echo $education_level->name;?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="1">Matric</option>-->
<!--                                                                                    <option value="2">O Level</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='passingyears' id='matricpassingyear' class="form-control" required>
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value=2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
<!--                                                                                    <option value='2012'>2012</option>-->
<!--                                                                                    <option value='2011'>2011</option>-->
<!--                                                                                    <option value='2010'>2010</option>-->
<!--                                                                                    <option value='2009'>2009</option>-->
<!--                                                                                    <option value='2008'>2008</option>-->
<!--                                                                                    <option value='2007'>2007</option>-->
<!--                                                                                    <option value='2006'>2006</option>-->
<!--                                                                                    <option value='2005'>2005</option>-->
<!--                                                                                    <option value='2004'>2004</option>-->
<!--                                                                                    <option value='2003'>2003</option>-->
<!--                                                                                    <option value='2002'>2002</option>-->
<!--                                                                                    <option value='2001'>2001</option>-->
<!--                                                                                    <option value='2000'>2000</option>-->
<!--                                                                                    <option value='1999'>1999</option>-->
<!--                                                                                    <option value='1998'>1998</option>-->
<!--                                                                                    <option value='1997'>1997</option>-->
<!--                                                                                    <option value='1996'>1996</option>-->
<!--                                                                                    <option value='1995'>1995</option>-->
<!--                                                                                    <option value='1994'>1994</option>-->
<!--                                                                                    <option value='1993'>1993</option>-->
<!--                                                                                    <option value='1992'>1992</option>-->
<!--                                                                                    <option value='1991'>1991</option>-->
<!--                                                                                    <option value='1990'>1990</option>-->
<!--                                                                                    <option value='1989'>1989</option>-->
<!--                                                                                    <option value='1988'>1988</option>-->
<!--                                                                                    <option value='1987'>1987</option>-->
<!--                                                                                    <option value='1986'>1986</option>-->
<!--                                                                                    <option value='1985'>1985</option>-->
<!--                                                                                    <option value='1999'>1984</option>-->
<!--                                                                                    <option value='1998'>1983</option>-->
<!--                                                                                    <option value='1997'>1982</option>-->
<!--                                                                                    <option value='1996'>1981</option>-->
<!--                                                                                    <option value='1995'>1970</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select name="board_id" id="Matricboard" class="form-control" required>
                                                                                    <option value="">Select Board / University</option>
                                                                                    <?php foreach ($boards as $board){?>
                                                                                    <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">BISE, Abbotabad</option>-->
<!--                                                                                    <option value="3">BISE, AJK</option>-->
<!--                                                                                    <option value="4">BISE, Bahawalpur</option>-->
<!--                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>-->
<!--                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>-->
<!--                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>-->
<!--                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>-->
<!--                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>-->
<!--                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>-->
<!--                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>-->
<!--                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>-->
<!--                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>-->
<!--                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>-->
<!--                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>-->
<!--                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>-->
<!--                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>-->
<!--                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>-->
<!--                                                                                    <option value="BISE, Multan">BISE, Multan</option>-->
<!--                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>-->
<!--                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>-->
<!--                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>-->
<!--                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>-->
<!--                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>-->
<!--                                                                                    <option value="BISE, Swat">BISE, Swat</option>-->
<!--                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>-->
<!--                                                                                    <option value="Cambridge Board">Cambridge Board</option>-->
<!--                                                                                    <option value="Edexcel International">Edexcel International</option>-->
<!--                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>-->
<!--                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>-->
<!--                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>-->
<!--                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>-->
<!--                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>-->
<!--                                                                                    <option value="Other">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="degree_id" id="matricSubject" required class="form-control">
                                                                                    <option value="Select">Select Subject</option>
                                                                                    <?php foreach ($degrees as $degree){?>
                                                                                    <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">Arts</option>-->
<!--                                                                                    <option value="3">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Total Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="totalmarks" id="Matricminimum_marks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainmarks" id="MatricObtainedmarks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="submit" name="submit" class="btn btn-success" value="matric">
                                                                                        Save
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-ignore" data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#ModalLoginForm"><i class="far fa-edit" style="font-size: 22px;">
                                                            </i></a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#IntermediateForm">
                                                            Intermediate
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="IntermediateForm" data-backdrop="static" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">Intermediate</h3>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="<?php echo base_url("educationdetails")?>">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="education_level_id" id="Interdegree" required class="form-control">
                                                                                    <option value="">Select Degree</option>
                                                                                    <?php foreach ($education_levels as $education_level){?>
                                                                                        <option value="<?php echo $education_level->id; ?>"><?php echo $education_level->name; ?></option>
                                                                                    <?php }?>

<!--                                                                                    <option value="2">ICS</option>-->
<!--                                                                                    <option value="3">I.COM</option>-->
<!--                                                                                    <option value="4">D.COM</option>-->
<!--                                                                                    <option value="5">A-Level</option>-->
<!--                                                                                    <option value="6">DAE</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name="passingyears" id="Interpassyear" class="form-control" required>
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value=2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
<!--                                                                                    <option value='2012'>2012</option>-->
<!--                                                                                    <option value='2011'>2011</option>-->
<!--                                                                                    <option value='2010'>2010</option>-->
<!--                                                                                    <option value='2009'>2009</option>-->
<!--                                                                                    <option value='2008'>2008</option>-->
<!--                                                                                    <option value='2007'>2007</option>-->
<!--                                                                                    <option value='2006'>2006</option>-->
<!--                                                                                    <option value='2005'>2005</option>-->
<!--                                                                                    <option value='2004'>2004</option>-->
<!--                                                                                    <option value='2003'>2003</option>-->
<!--                                                                                    <option value='2002'>2002</option>-->
<!--                                                                                    <option value='2001'>2001</option>-->
<!--                                                                                    <option value='2000'>2000</option>-->
<!--                                                                                    <option value='1999'>1999</option>-->
<!--                                                                                    <option value='1998'>1998</option>-->
<!--                                                                                    <option value='1997'>1997</option>-->
<!--                                                                                    <option value='1996'>1996</option>-->
<!--                                                                                    <option value='1995'>1995</option>-->
<!--                                                                                    <option value='1994'>1994</option>-->
<!--                                                                                    <option value='1993'>1993</option>-->
<!--                                                                                    <option value='1992'>1992</option>-->
<!--                                                                                    <option value='1991'>1991</option>-->
<!--                                                                                    <option value='1990'>1990</option>-->
<!--                                                                                    <option value='1989'>1989</option>-->
<!--                                                                                    <option value='1988'>1988</option>-->
<!--                                                                                    <option value='1987'>1987</option>-->
<!--                                                                                    <option value='1986'>1986</option>-->
<!--                                                                                    <option value='1985'>1985</option>-->
<!--                                                                                    <option value='1999'>1984</option>-->
<!--                                                                                    <option value='1998'>1983</option>-->
<!--                                                                                    <option value='1997'>1982</option>-->
<!--                                                                                    <option value='1996'>1981</option>-->
<!--                                                                                    <option value='1995'>1970</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select name="board_id" id="Interboard" class="form-control" required>
                                                                                    <option value="">Select Board / University</option>
                                                                                    <?php foreach ($boards as $board){?>
                                                                                        <option value="<?php echo $board->id; ?>"><?php echo $board->boardname; ?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">BISE, Abbotabad</option>-->
<!--                                                                                    <option value="3">BISE, AJK</option>-->
<!--                                                                                    <option value="BISE, Bahawalpur">BISE, Bahawalpur</option>-->
<!--                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>-->
<!--                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>-->
<!--                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>-->
<!--                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>-->
<!--                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>-->
<!--                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>-->
<!--                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>-->
<!--                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>-->
<!--                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>-->
<!--                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>-->
<!--                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>-->
<!--                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>-->
<!--                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>-->
<!--                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>-->
<!--                                                                                    <option value="BISE, Multan">BISE, Multan</option>-->
<!--                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>-->
<!--                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>-->
<!--                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>-->
<!--                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>-->
<!--                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>-->
<!--                                                                                    <option value="BISE, Swat">BISE, Swat</option>-->
<!--                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>-->
<!--                                                                                    <option value="Cambridge Board">Cambridge Board</option>-->
<!--                                                                                    <option value="Edexcel International">Edexcel International</option>-->
<!--                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>-->
<!--                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>-->
<!--                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>-->
<!--                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>-->
<!--                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>-->
<!--                                                                                    <option value="Other">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="degree_id" id="Intersubject" required class="form-control">
                                                                                    <option value="Select">Select Subject</option>
                                                                                    <?php foreach ($degrees as $degree){?>
                                                                                        <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">Computer Science</option>-->
<!--                                                                                    <option value="3">Pre Medical</option>-->
<!--                                                                                    <option value="4">Arts & Humanities</option>-->
<!--                                                                                    <option value="5">Commerce</option>-->
<!--                                                                                    <option value="6">General Science</option>-->
<!--                                                                                    <option value="7">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Total Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="totalmarks" id="Interminimum_marks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainmarks" id="Interobtainedmarks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="submit" name="submit" class="btn btn-success" value="intermediate">
                                                                                        Save
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-ignore" data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#IntermediateForm">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#14yearForm">
                                                            14 Years (Optional)
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="14yearForm" data-backdrop="static" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">14 years (Optional)</h3>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="<?php echo base_url("educationdetails")?>">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="education_level_id" id="fourteenyeardegree" class="form-control" required>
                                                                                    <option value="Select">Select Degree</option>
                                                                                    <?php foreach ($education_levels as $education_level){?>
                                                                                    <option value="<?php echo $education_level->id?>"><?php echo $education_level->name?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">BSC</option>-->
<!--                                                                                    <option value="3">B.Com</option>-->
<!--                                                                                    <option value="4">BBA (2 years)</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='passingyears' id='fourteenyearpassing' class="form-control" required>
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value=2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
<!--                                                                                    <option value='2012'>2012</option>-->
<!--                                                                                    <option value='2011'>2011</option>-->
<!--                                                                                    <option value='2010'>2010</option>-->
<!--                                                                                    <option value='2009'>2009</option>-->
<!--                                                                                    <option value='2008'>2008</option>-->
<!--                                                                                    <option value='2007'>2007</option>-->
<!--                                                                                    <option value='2006'>2006</option>-->
<!--                                                                                    <option value='2005'>2005</option>-->
<!--                                                                                    <option value='2004'>2004</option>-->
<!--                                                                                    <option value='2003'>2003</option>-->
<!--                                                                                    <option value='2002'>2002</option>-->
<!--                                                                                    <option value='2001'>2001</option>-->
<!--                                                                                    <option value='2000'>2000</option>-->
<!--                                                                                    <option value='1999'>1999</option>-->
<!--                                                                                    <option value='1998'>1998</option>-->
<!--                                                                                    <option value='1997'>1997</option>-->
<!--                                                                                    <option value='1996'>1996</option>-->
<!--                                                                                    <option value='1995'>1995</option>-->
<!--                                                                                    <option value='1994'>1994</option>-->
<!--                                                                                    <option value='1993'>1993</option>-->
<!--                                                                                    <option value='1992'>1992</option>-->
<!--                                                                                    <option value='1991'>1991</option>-->
<!--                                                                                    <option value='1990'>1990</option>-->
<!--                                                                                    <option value='1989'>1989</option>-->
<!--                                                                                    <option value='1988'>1988</option>-->
<!--                                                                                    <option value='1987'>1987</option>-->
<!--                                                                                    <option value='1986'>1986</option>-->
<!--                                                                                    <option value='1985'>1985</option>-->
<!--                                                                                    <option value='1999'>1984</option>-->
<!--                                                                                    <option value='1998'>1983</option>-->
<!--                                                                                    <option value='1997'>1982</option>-->
<!--                                                                                    <option value='1996'>1981</option>-->
<!--                                                                                    <option value='1995'>1970</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select name="board_id" id="fourteenyearboard_uni" class="form-control" required>
                                                                                    <option value="">Select Board / University</option>
                                                                                    <?php foreach ($boards as $board) {?>
                                                                                        <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                                                                    <?php }?>
<!--                                                                                    <option value="2">Aga Khan University</option>-->
<!--                                                                                    <option value="AIOU Islamabad">AIOU Islamabad</option>-->
<!--                                                                                    <option value="Air University Islamabad">Air University Islamabad</option>-->
<!--                                                                                    <option value="Bahauddin Zakariya University,&nbsp;Multan">Bahauddin Zakariya University,&nbsp;Multan</option>-->
<!--                                                                                    <option value="Balochistan University of Information Technology, Engineering and Management Sciences Quetta">Balochistan University of Information Technology, Engineering and Management Sciences Quetta</option>-->
<!--                                                                                    <option value="Bahria University">Bahria University</option>-->
<!--                                                                                    <option value="Comsats Instituate of Information Technology">Comsats Instituate of Information Technology</option>-->
<!--                                                                                    <option value="City University of Science and Information Technology Peshawar">City University of Science and Information Technology Peshawar</option>-->
<!--                                                                                    <option value="Dr AQ khan Institute of Computer Sciences and Information Technology">Dr AQ khan Institute of Computer Sciences and Information Technology</option>-->
<!--                                                                                    <option value="Fatima Jinnah Women University, Rawalpindi">Fatima Jinnah Women University, Rawalpindi</option>-->
<!--                                                                                    <option value="Federal Urdu University of Science &amp; Technology">Federal Urdu University of Science &amp; Technology</option>-->
<!--                                                                                    <option value="GC University Faisalabad">GC University Faisalabad</option>-->
<!--                                                                                    <option value="GIFT University, Gujranwala">GIFT University, Gujranwala</option>-->
<!--                                                                                    <option value="Gomal University DI Khan">Gomal University DI Khan</option>-->
<!--                                                                                    <option value="Government College University Lahore">Government College University Lahore</option>-->
<!--                                                                                    <option value="Hazara University Haripur Campus">Hazara University Haripur Campus</option>-->
<!--                                                                                    <option value="Hazara Universty Mansehra">Hazara Universty Mansehra</option>-->
<!--                                                                                    <option value="Institute of Management Sciences Peshawar">Institute of Management Sciences Peshawar</option>-->
<!--                                                                                    <option value="International Islamic University Islamabad">International Islamic University Islamabad</option>-->
<!--                                                                                    <option value="Iqra National University Peshawar">Iqra National University Peshawar</option>-->
<!--                                                                                    <option value="Iqra University Quetta Campus">Iqra University Quetta Campus</option>-->
<!--                                                                                    <option value="Islamia University Bahawalpur">Islamia University Bahawalpur</option>-->
<!--                                                                                    <option value="Isra University Hyderabad">Isra University Hyderabad</option>-->
<!--                                                                                    <option value="Karakarum International University Giligit">Karakarum International University Giligit</option>-->
<!--                                                                                    <option value="Khyber Pakhtoon Khwa agriculture University Peshawar">Khyber Pakhtoon Khwa agriculture University Peshawar</option>-->
<!--                                                                                    <option value="Kohat University of Science and Technology">Kohat University of Science and Technology</option>-->
<!--                                                                                    <option value="Liaquat National University of Medical and Health Sciences jamshoro">Liaquat National University of Medical and Health Sciences jamshoro</option>-->
<!--                                                                                    <option value="Mehran University of Engineering and Technology Jamshoro">Mehran University of Engineering and Technology Jamshoro</option>-->
<!--                                                                                    <option value="Muhammad Ali Jinnah University">Muhammad Ali Jinnah University</option>-->
<!--                                                                                    <option value="National Textile University">National Textile University</option>-->
<!--                                                                                    <option value="National University of Computer and Emerging Sciences">National University of Computer and Emerging Sciences</option>-->
<!--                                                                                    <option value="National University of Modern Languages&nbsp;(NUML)">National University of Modern Languages&nbsp;(NUML)</option>-->
<!--                                                                                    <option value="National University of Sciences and Technology&nbsp;(NUST)">National University of Sciences and Technology&nbsp;(NUST)</option>-->
<!--                                                                                    <option value="NED University of Engineering and Technology">NED University of Engineering and Technology</option>-->
<!--                                                                                    <option value="NFC Institute of Engineering and Technological Training">NFC Institute of Engineering and Technological Training</option>-->
<!--                                                                                    <option value="PMAS Arid Agriculture University Rawalpindi">PMAS Arid Agriculture University Rawalpindi</option>-->
<!--                                                                                    <option value="Preston University, Pakistan">Preston University, Pakistan</option>-->
<!--                                                                                    <option value="Sarhad University">Sarhad University</option>-->
<!--                                                                                    <option value="Shah Abdul Latif University,&nbsp;Khairpur">Shah Abdul Latif University,&nbsp;Khairpur</option>-->
<!--                                                                                    <option value="Superior University, Lahore">Superior University, Lahore</option>-->
<!--                                                                                    <option value="The University of Agriculture Peshawar">The University of Agriculture Peshawar</option>-->
<!--                                                                                    <option value="UET Peshawar Gist&nbsp;Campus">UET Peshawar Gist&nbsp;Campus</option>-->
<!--                                                                                    <option value="UET Taxila">UET Taxila</option>-->
<!--                                                                                    <option value="University of Azad Jammu and Kashmir - Muzaffarabad">University of Azad Jammu and Kashmir - Muzaffarabad</option>-->
<!--                                                                                    <option value="University of Balochistan">University of Balochistan</option>-->
<!--                                                                                    <option value="University of East Hyderabad Sindh Latifabad">University of East Hyderabad Sindh Latifabad</option>-->
<!--                                                                                    <option value="University of Education Attock">University of Education Attock</option>-->
<!--                                                                                    <option value="University of Education,&nbsp;Lahore">University of Education,&nbsp;Lahore</option>-->
<!--                                                                                    <option value="University of Engineering and Technology(UET) Lahore">University of Engineering and Technology(UET) Lahore</option>-->
<!--                                                                                    <option value="University of Gujrat">University of Gujrat</option>-->
<!--                                                                                    <option value="University of Health Sciences Lahore">University of Health Sciences Lahore</option>-->
<!--                                                                                    <option value="University of Karachi">University of Karachi</option>-->
<!--                                                                                    <option value="University of Malakand">University of Malakand</option>-->
<!--                                                                                    <option value="University of Punjab">University of Punjab</option>-->
<!--                                                                                    <option value="University of Punjab Gujranwala Campus">University of Punjab Gujranwala Campus</option>-->
<!--                                                                                    <option value="University of Sargodha">University of Sargodha</option>-->
<!--                                                                                    <option value="University of Science &amp; Technology Bannu">University of Science &amp; Technology Bannu</option>-->
<!--                                                                                    <option value="University of West London">University of West London</option>-->
<!--                                                                                    <option value="University of Wollongong">University of Wollongong</option>-->
<!--                                                                                    <option value="University&nbsp;of&nbsp;Balochistan, Quetta">University&nbsp;of&nbsp;Balochistan, Quetta</option>-->
<!--                                                                                    <option value="University&nbsp;of&nbsp;Cambridge">University&nbsp;of&nbsp;Cambridge</option>-->
<!--                                                                                    <option value="University&nbsp;of&nbsp;East&nbsp;Hyderabad">University&nbsp;of&nbsp;East&nbsp;Hyderabad</option>-->
<!--                                                                                    <option value="University&nbsp;of&nbsp;Peshawar">University&nbsp;of&nbsp;Peshawar</option>-->
<!--                                                                                    <option value="University&nbsp;of&nbsp;Sindh">University&nbsp;of&nbsp;Sindh</option>-->
<!--                                                                                    <option value="Virtual University of Pakistan">Virtual University of Pakistan</option>-->
<!--                                                                                    <option value="Other">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="degree_id" id="fourteenyearsubject" class="form-control" required>
                                                                                    <option value="Select">Select Subject</option>
                                                                                     <?php foreach ($degrees as $degree){?>
                                                                                        <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                                    <?php }?>
                                                                                    <option value="2">Biological Science</option>
<!--                                                                                    <option value="Commerce">Commerce</option>-->
<!--                                                                                    <option value="Social Science">Social Science</option>-->
<!--                                                                                    <option value="Management Science">Management Science</option>-->
<!--                                                                                    <option value="Physicaly Science">Physicaly Science</option>-->
<!--                                                                                    <option value="Oriental & Islamic Studies">Oriental & Islamic Studies</option>-->
<!--                                                                                    <option value="Other">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Total Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="totalmarks" id="Fourteenyearminimum-marks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainmarks" id="Fourteenyearobtainedmarks" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="submit" name="submit" class="btn btn-success" value="fourteenyears">
                                                                                        Save
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-ignore" data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#14yearForm">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#16yearform">
                                                            16 Years
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="16yearform" data-backdrop="static" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">16 Years Education</h3>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="<?php echo base_url("educationdetails")?>">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="education_level_id" id="sixteendegreename" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name="passingyears" id="sixteenpassyear" class="form-control">
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value='2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
                                                                                    <option value='2012'>2012</option>
                                                                                    <option value='2011'>2011</option>
                                                                                    <option value='2010'>2010</option>
                                                                                    <option value='2009'>2009</option>
                                                                                    <option value='2008'>2008</option>
                                                                                    <option value='2007'>2007</option>
                                                                                    <option value='2006'>2006</option>
                                                                                    <option value='2005'>2005</option>
                                                                                    <option value='2004'>2004</option>
                                                                                    <option value='2003'>2003</option>
                                                                                    <option value='2002'>2002</option>
                                                                                    <option value='2001'>2001</option>
                                                                                    <option value='2000'>2000</option>
                                                                                    <option value='1999'>1999</option>
                                                                                    <option value='1998'>1998</option>
                                                                                    <option value='1997'>1997</option>
                                                                                    <option value='1996'>1996</option>
                                                                                    <option value='1995'>1995</option>
                                                                                    <option value='1994'>1994</option>
                                                                                    <option value='1993'>1993</option>
                                                                                    <option value='1992'>1992</option>
                                                                                    <option value='1991'>1991</option>
                                                                                    <option value='1990'>1990</option>
                                                                                    <option value='1989'>1989</option>
                                                                                    <option value='1988'>1988</option>
                                                                                    <option value='1987'>1987</option>
                                                                                    <option value='1986'>1986</option>
                                                                                    <option value='1985'>1985</option>
                                                                                    <option value='1999'>1984</option>
                                                                                    <option value='1998'>1983</option>
                                                                                    <option value='1997'>1982</option>
                                                                                    <option value='1996'>1981</option>
                                                                                    <option value='1995'>1970</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board/University</label>
                                                                                <select name="board_id" id="sixteenyearsboard_uni" class="form-control">
                                                                                    <option value="Select Board / University">Select Board / University</option>
                                                                                    <?php foreach ($boards as $board) {?>
                                                                                    <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                                                                    <?php }?>

<!--                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>-->
<!--                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>-->
<!--                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>-->
<!--                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>-->
<!--                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>-->
<!--                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>-->
<!--                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>-->
<!--                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>-->
<!--                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>-->
<!--                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>-->
<!--                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>-->
<!--                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>-->
<!--                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>-->
<!--                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>-->
<!--                                                                                    <option value="BISE, Multan">BISE, Multan</option>-->
<!--                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>-->
<!--                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>-->
<!--                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>-->
<!--                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>-->
<!--                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>-->
<!--                                                                                    <option value="BISE, Swat">BISE, Swat</option>-->
<!--                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>-->
<!--                                                                                    <option value="Cambridge Board">Cambridge Board</option>-->
<!--                                                                                    <option value="Edexcel International">Edexcel International</option>-->
<!--                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>-->
<!--                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>-->
<!--                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>-->
<!--                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>-->
<!--                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>-->
<!--                                                                                    <option value="Other">Other</option>-->
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="degree_id" id="sixteenyearssubjectname" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">CGPA Max / Max Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="totalmarks" id="cgpa" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">CGPA Obtained / Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainmarks" id="cgpaobtained" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="submit" name="submit" class="btn btn-success" value="16 Years">
                                                                                        Save
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-ignore" data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#16yearform">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Save and Move Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    Enter your education details in this form.
                                </li>
                                <li>
                                    If you are applying in <b>undergraduate</b> proggram and your intermediate result is not arrived yet, click the <b>Result Awaiting</b> checkbox.
                                </li>
                                <li>
                                    Select the Board / University from the dropdown list and if your Board / University are not mentioned in the dropdownlist, select <b>Other</b> option and enter your Board / University name manually.
                                </li>
                                <li>
                                    Select the subjects of your degree from the dropdown list and if they are not appearing our dropdown then select <b>Other</b> option and enter your subject name manually.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="button-container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                        <small><b>Any misuse or false attempt will result in cancellation of your application.
                                                You are liable to provide the information that is true to the best of your knowledge.
                                                Administration is not responsible for any misuse or false attempt.</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
