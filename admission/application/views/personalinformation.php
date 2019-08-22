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
                    <h5 class="card-title">Personal Information</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url("personalinformation")?>">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Your full name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" placeholder="DOB">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>CNIC</label>
                                    <input type="text" class="form-control" data-inputmask="'mask': '99999-9999999-9'" name="cnic" id="cnic" maxlength="15" required>
                                    <small>Format : 61101-1234567-8</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobnumbers" class="form-control" id="mobnumbers" maxlength="11" required style="padding: 9px; font-size: 14px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country_id" class="form-control" id="country" required>
                                        <option value="">Select Country</option>
                                        <?php  foreach ($countries as $country){ ?>
                                        <option value="<?php  echo  $country->id;?>"><?php echo $country->name;?></option>
                                        <?php }?>
<!--                                                <option value="2">Afghan</option>-->
<!--                                                <option value="3">Albanian</option>-->
<!--                                                <option value="4">Algerian</option>-->
<!--                                                <option value="5">American</option>-->
<!--                                                <option value="6">Andorran</option>-->
<!--                                                <option value="7">Angolan</option>-->
<!--                                                <option value="8">Antiguans</option>-->
<!--                                                <option value="9">Argentinean</option>-->
<!--                                                <option value="10">Armenian</option>-->
<!--                                                <option value="11">Australian</option>-->
<!--                                                <option value="12">Austrian</option>-->
<!--                                                <option value="13">Azerbaijani</option>-->
<!--                                                <option value="14">Bahamian</option>-->
<!--                                                <option value="15">Bahraini</option>-->
<!--                                                <option value="16">Bangladeshi</option>-->
<!--                                                <option value="17">Barbadian</option>-->
<!--                                                <option value="18">Barbudans</option>-->
<!--                                                <option value="19">Batswana</option>-->
<!--                                                <option value="20">Belarusian</option>-->
<!--                                                <option value="21">Belgian</option>-->
<!--                                                <option value="22">Belizean</option>-->
<!--                                                <option value="23">Beninese</option>-->
<!--                                                <option value="24">Bhutanese</option>-->
<!--                                                <option value="25">Bolivian</option>-->
<!--                                                <option value="26">Bosnian</option>-->
<!--                                                <option value="27">Brazilian</option>-->
<!--                                                <option value="28">British</option>-->
<!--                                                <option value="29">Bruneian</option>-->
<!--                                                <option value="30">Bulgarian</option>-->
<!--                                                <option value="31">Burkinabe</option>-->
<!--                                                <option value="32">Burmese</option>-->
<!--                                                <option value="33">Burundian</option>-->
<!--                                                <option value="34">Cambodian</option>-->
<!--                                                <option value="35">Cameroonian</option>-->
<!--                                               <option value="canadian">Canadian</option>-->
<!--                                                <option value="cape verdean">Cape Verdean</option>-->
<!--                                                <option value="central african">Central African</option>-->
<!--                                                <option value="chadian">Chadian</option>-->
<!--                                                <option value="chilean">Chilean</option>-->
<!--                                                <option value="chinese">Chinese</option>-->
<!--                                                <option value="colombian">Colombian</option>-->
<!--                                                <option value="comoran">Comoran</option>-->
<!--                                                <option value="congolese">Congolese</option>-->
<!--                                                <option value="costa rican">Costa Rican</option>-->
<!--                                                <option value="croatian">Croatian</option>-->
<!--                                                <option value="cuban">Cuban</option>-->
<!--                                                <option value="cypriot">Cypriot</option>-->
<!--                                                <option value="czech">Czech</option>-->
<!--                                                <option value="danish">Danish</option>-->
<!--                                                <option value="djibouti">Djibouti</option>-->
<!--                                                <option value="dominican">Dominican</option>-->
<!--                                                <option value="dutch">Dutch</option>-->
<!--                                                <option value="east timorese">East Timorese</option>-->
<!--                                                <option value="ecuadorean">Ecuadorean</option>-->
<!--                                                <option value="egyptian">Egyptian</option>-->
<!--                                                <option value="emirian">Emirian</option>-->
<!--                                                <option value="equatorial guinean">Equatorial Guinean</option>-->
<!--                                                <option value="eritrean">Eritrean</option>-->
<!--                                                <option value="estonian">Estonian</option>-->
<!--                                                <option value="ethiopian">Ethiopian</option>-->
<!--                                                <option value="fijian">Fijian</option>-->
<!--                                                <option value="filipino">Filipino</option>-->
<!--                                                <option value="finnish">Finnish</option>-->
<!--                                                <option value="french">French</option>-->
<!--                                                <option value="gabonese">Gabonese</option>-->
<!--                                                <option value="gambian">Gambian</option>-->
<!--                                                <option value="georgian">Georgian</option>-->
<!--                                                <option value="german">German</option>-->
<!--                                                <option value="ghanaian">Ghanaian</option>-->
<!--                                                <option value="greek">Greek</option>-->
<!--                                                <option value="grenadian">Grenadian</option>-->
<!--                                                <option value="guatemalan">Guatemalan</option>-->
<!--                                                <option value="guinea-bissauan">Guinea-Bissauan</option>-->
<!--                                                <option value="guinean">Guinean</option>-->
<!--                                                <option value="guyanese">Guyanese</option>-->
<!--                                                <option value="haitian">Haitian</option>-->
<!--                                                <option value="herzegovinian">Herzegovinian</option>-->
<!--                                                <option value="honduran">Honduran</option>-->
<!--                                                <option value="hungarian">Hungarian</option>-->
<!--                                                <option value="icelander">Icelander</option>-->
<!--                                                <option value="indian">Indian</option>-->
<!--                                                <option value="indonesian">Indonesian</option>-->
<!--                                                <option value="iranian">Iranian</option>-->
<!--                                                <option value="iraqi">Iraqi</option>-->
<!--                                                <option value="irish">Irish</option>-->
<!--                                                <option value="israeli">Israeli</option>-->
<!--                                                <option value="italian">Italian</option>-->
<!--                                                <option value="ivorian">Ivorian</option>-->
<!--                                                <option value="jamaican">Jamaican</option>-->
<!--                                                <option value="japanese">Japanese</option>-->
<!--                                                <option value="jordanian">Jordanian</option>-->
<!--                                                <option value="kazakhstani">Kazakhstani</option>-->
<!--                                                <option value="kenyan">Kenyan</option>-->
<!--                                                <option value="kittian and nevisian">Kittian and Nevisian</option>-->
<!--                                                <option value="kuwaiti">Kuwaiti</option>-->
<!--                                                <option value="kyrgyz">Kyrgyz</option>-->
<!--                                                <option value="laotian">Laotian</option>-->
<!--                                                <option value="latvian">Latvian</option>-->
<!--                                                <option value="lebanese">Lebanese</option>-->
<!--                                                <option value="liberian">Liberian</option>-->
<!--                                                <option value="libyan">Libyan</option>-->
<!--                                                <option value="liechtensteiner">Liechtensteiner</option>-->
<!--                                                <option value="lithuanian">Lithuanian</option>-->
<!--                                                <option value="luxembourger">Luxembourger</option>-->
<!--                                                <option value="macedonian">Macedonian</option>-->
<!--                                                <option value="malagasy">Malagasy</option>-->
<!--                                                <option value="malawian">Malawian</option>-->
<!--                                                <option value="malaysian">Malaysian</option>-->
<!--                                                <option value="maldivan">Maldivan</option>-->
<!--                                                <option value="malian">Malian</option>-->
<!--                                                <option value="maltese">Maltese</option>-->
<!--                                                <option value="marshallese">Marshallese</option>-->
<!--                                                <option value="mauritanian">Mauritanian</option>-->
<!--                                                <option value="mauritian">Mauritian</option>-->
<!--                                                <option value="mexican">Mexican</option>-->
<!--                                                <option value="micronesian">Micronesian</option>-->
<!--                                                <option value="moldovan">Moldovan</option>-->
<!--                                                <option value="monacan">Monacan</option>-->
<!--                                                <option value="mongolian">Mongolian</option>-->
<!--                                                <option value="moroccan">Moroccan</option>-->
<!--                                                <option value="mosotho">Mosotho</option>-->
<!--                                                <option value="motswana">Motswana</option>-->
<!--                                                <option value="mozambican">Mozambican</option>-->
<!--                                                <option value="namibian">Namibian</option>-->
<!--                                                <option value="nauruan">Nauruan</option>-->
<!--                                                <option value="nepalese">Nepalese</option>-->
<!--                                                <option value="new zealander">New Zealander</option>-->
<!--                                                <option value="ni-vanuatu">Ni-Vanuatu</option>-->
<!--                                                <option value="nicaraguan">Nicaraguan</option>-->
<!--                                                <option value="nigerien">Nigerien</option>-->
<!--                                                <option value="north korean">North Korean</option>-->
<!--                                                <option value="northern irish">Northern Irish</option>-->
<!--                                                <option value="norwegian">Norwegian</option>-->
<!--                                                <option value="omani">Omani</option>-->
<!--                                                <option value="pakistani">Pakistani</option>-->
<!--                                                <option value="palauan">Palauan</option>-->
<!--                                                <option value="panamanian">Panamanian</option>-->
<!--                                                <option value="papua new guinean">Papua New Guinean</option>-->
<!--                                                <option value="paraguayan">Paraguayan</option>-->
<!--                                                <option value="peruvian">Peruvian</option>-->
<!--                                                <option value="polish">Polish</option>-->
<!--                                                <option value="portuguese">Portuguese</option>-->
<!--                                                <option value="qatari">Qatari</option>-->
<!--                                                <option value="romanian">Romanian</option>-->
<!--                                                <option value="russian">Russian</option>-->
<!--                                                <option value="rwandan">Rwandan</option>-->
<!--                                                <option value="saint lucian">Saint Lucian</option>-->
<!--                                                <option value="salvadoran">Salvadoran</option>-->
<!--                                                <option value="samoan">Samoan</option>-->
<!--                                                <option value="san marinese">San Marinese</option>-->
<!--                                                <option value="sao tomean">Sao Tomean</option>-->
<!--                                                <option value="saudi">Saudi</option>-->
<!--                                                <option value="scottish">Scottish</option>-->
<!--                                                <option value="senegalese">Senegalese</option>-->
<!--                                                <option value="serbian">Serbian</option>-->
<!--                                                <option value="seychellois">Seychellois</option>-->
<!--                                                <option value="sierra leonean">Sierra Leonean</option>-->
<!--                                                <option value="singaporean">Singaporean</option>-->
<!--                                                <option value="slovakian">Slovakian</option>-->
<!--                                                <option value="slovenian">Slovenian</option>-->
<!--                                                <option value="solomon islander">Solomon Islander</option>-->
<!--                                                <option value="somali">Somali</option>-->
<!--                                                <option value="south african">South African</option>-->
<!--                                                <option value="south korean">South Korean</option>-->
<!--                                                <option value="spanish">Spanish</option>-->
<!--                                                <option value="sri lankan">Sri Lankan</option>-->
<!--                                                <option value="sudanese">Sudanese</option>-->
<!--                                                <option value="surinamer">Surinamer</option>-->
<!--                                                <option value="swazi">Swazi</option>-->
<!--                                                <option value="swedish">Swedish</option>-->
<!--                                                <option value="swiss">Swiss</option>-->
<!--                                                <option value="syrian">Syrian</option>-->
<!--                                                <option value="taiwanese">Taiwanese</option>-->
<!--                                                <option value="tajik">Tajik</option>-->
<!--                                                <option value="tanzanian">Tanzanian</option>-->
<!--                                                <option value="thai">Thai</option>-->
<!--                                                <option value="togolese">Togolese</option>-->
<!--                                                <option value="tongan">Tongan</option>-->
<!--                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>-->
<!--                                                <option value="tunisian">Tunisian</option>-->
<!--                                                <option value="turkish">Turkish</option>-->
<!--                                                <option value="tuvaluan">Tuvaluan</option>-->
<!--                                                <option value="ugandan">Ugandan</option>-->
<!--                                                <option value="ukrainian">Ukrainian</option>-->
<!--                                                <option value="uruguayan">Uruguayan</option>-->
<!--                                                <option value="uzbekistani">Uzbekistani</option>-->
<!--                                                <option value="venezuelan">Venezuelan</option>-->
<!--                                                <option value="vietnamese">Vietnamese</option>-->
<!--                                                <option value="welsh">Welsh</option>-->
<!--                                                <option value="yemenite">Yemenite</option>-->
<!--                                                <option value="zambian">Zambian</option>-->
<!--                                                <option value="zimbabwean">Zimbabwean</option>-->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Domicile</label>
                                    <select name='domicile_id' id='Domicile' class="form-control" required>
                                        <option value="">Select Domicile</option>
                                        <?php foreach ($domiciles as $domicile){?>
                                            <option value="<?php echo $domicile->id;?>"><?php echo $domicile->name;?></option>
                                        <?php }?>

<!--                                                <option value="Balochistan">Balochistan</option>-->
<!--                                                <option value="Fata">Fata</option>-->
<!--                                                <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>-->
<!--                                                <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>-->
<!--                                                <option value="Khyber Pakhtoonkhawa">Khyber Pakhtoonkhawa</option>-->
<!--                                                <option value="Punjab">Punjab</option>-->
<!--                                                <option value="Sindh">Sindh</option>-->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name='gender' id='gender' class="form-control" required>
                                        <option value="SelectGender">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" class="form-control" name="fathername" placeholder="Your father full name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Father / Guardian CNIC</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fcnic" id="cnic" placeholder="xxxxx-xxxxxxx-x" maxlength="15" required>

                                </div>
                            </div>
                        </div>

                        <div class="row">

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
                            Enter Your full name consisting of First Name, Middle Name & Last Name as Per CNIC.
                        </li>
                        <li>
                            Enter Full Name of Father/ Gurdian as per CNIC consisting of First Name, Middle Name & Last Name.
                        </li>
                        <li>
                            Enter the date of birth as on your Matriculation Certificate/ O Level Certificate.
                        </li>
                        <li>
                            Enter Nationality as displayed on your CNIC card or Domicile Certificate.
                        </li>
                        <li>
                            Enter exactly the same CNIC no as displayed on your CNIC card without dashes.
                        </li>
                        <li>
                            Enter the mobile number where to contact you.
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