<div class="content">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="progress mb-1">
                <div class="progress-bar  progress-bar-striped bg-success" style="width:10%">10%</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Publication Details</h5>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddNew">
                        Add New
                    </a>
                    <!-- Modal HTML Markup -->
                    <div id="AddNew" class="modal fade">
                        <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Enter Publication Details</h3>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="POST" action="<?php echo base_url("publicationdetails")?>">
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <div>
                                                <input type="text" name="title" id="title" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <select name="jobtype" id="jobtype" class="form-control" required>
                                                <option value="Conference">Conference</option>
                                                <option value="Journal">Journal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Level</label>
                                            <select name="level" id="level" class="form-control" required>
                                                <option value="National">National</option>
                                                <option value="International">International</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">First Author</label>
                                            <div>
                                                <input type="text" class="form-control" name="firstauthor" id="firstauthor" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Second Author</label>
                                            <div>
                                                <input type="text" class="form-control" name="secondauthor" id="secondauthor" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Third Author</label>
                                            <div>
                                                <input type="text" class="form-control" name="thirdauthor" id="thirdauthor" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Publisher</label>
                                            <div>
                                                <input type="text" class="form-control" name="publisher" id="publisher" required>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="board">Publishing Years</label>
                                                <select name='year' id='year' class="form-control" required>
                                                    <option value='Years'>Years</option>
                                                    <option value='1970'>1970</option>
                                                    <option value='1971'>1971</option>
                                                    <option value='1972'>1972</option>
                                                    <option value='1973'>1973</option>
                                                    <option value='1974'>1974</option>
                                                    <option value='1975'>1975</option>
                                                    <option value='1976'>1976</option>
                                                    <option value='1977'>1977</option>
                                                    <option value='1978'>1978</option>
                                                    <option value='1979'>1979</option>
                                                    <option value='1980'>1980</option>
                                                    <option value='1981'>1981</option>
                                                    <option value='1982'>1982</option>
                                                    <option value='1983'>1983</option>
                                                    <option value='1984'>1984</option>
                                                    <option value='1985'>1985</option>
                                                    <option value='1986'>1986</option>
                                                    <option value='1987'>1987</option>
                                                    <option value='1988'>1988</option>
                                                    <option value='1989'>1989</option>
                                                    <option value='1990'>1990</option>
                                                    <option value='1991'>1991</option>
                                                    <option value='1992'>1992</option>
                                                    <option value='1993'>1993</option>
                                                    <option value='1994'>1994</option>
                                                    <option value='1995'>1995</option>
                                                    <option value='1996'>1996</option>
                                                    <option value='1997'>1997</option>
                                                    <option value='1998'>1998</option>
                                                    <option value='1999'>1999</option>
                                                    <option value='2000'>2000</option>
                                                    <option value='2001'>2001</option>
                                                    <option value='2002'>2002</option>
                                                    <option value='2003'>2003</option>
                                                    <option value='2004'>2004</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="control-label">Volume</label>
                                            <input type="text" class="form-control" name="volume" id="volume" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Chapters</label>
                                            <div>
                                                <input type="text" class="form-control" name="chapters" id="chapters">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Pages</label>
                                            <div>
                                                <input type="text" class="form-control" name="pages" id="pages" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success">
                                                    Save
                                                </button>
                                                <button type="submit" class="btn btn-ignore">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url("Student/publication_details_submit")?>">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">organization</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td name="title"></td>
                                            <td name="organization"></td>
                                            <td name="action"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Skip and Move Next</button>
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
                            If you have published a research paper ever, you can enter its details in this form.
                        </li>
                        <li>
                            You'll have to enter publisher name, year your paper was published, and any other author names that were accompanying you.
                        </li>
                        <li>
                            Skip this step if you are not sure.
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
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
</div>