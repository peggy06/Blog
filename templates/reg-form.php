<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/23/2016
 * Time: 1:27 AM
 *
 * Type: HTML Template
 */
?>

<form action="modules/Register.php" role="form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control frmSignUp" size="30" name="fname" placeholder="First Name" required />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" size="30" name="lname" placeholder="Last Name" required/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" size="20" name="email" placeholder="Email" required />
    </div>
    <div class="form-group">
        <input type="email" class="form-control" size="20" name="reEmail" placeholder="Re-enter Email" required />
    </div>
    <div class="form-group">
        <input type="password" class="form-control" size="20" name="password" placeholder="Password" required/>
    </div>
    <div class="form-group">
        <label class="lblStyle">Birthday</label><br />
        <select name="month" class="optStyle" required >
            <option value="">Month</option>
            <?php
            $month=1;
            while($month<=12){
                $date=date_create("1990-".$month."-1");
                echo "<option value='".date_format($date,"F")."'>".date_format($date,"F")."</option>";
                $month=$month+1;
            }
            ?>
        </select>
        <select name="day" class="optStyle" required >
            <option value="">Day</option>
            <?php
            $day=1;
            while($day<=31){
                $date=date_create("1990-1-".$day);
                echo "<option value='".date_format($date,"d")."'>".date_format($date,"d")."</option>";
                $day=$day+1;
            }
            ?>
        </select>
        <select name="year" class="optStyle" required >
            <option value="">Year</option>
            <?php
            $year=1990;
            while($year<=2016){
                $date=date_create($year."-1-1");
                echo "<option value='".date_format($date,"Y")."'>".date_format($date,"Y")."</option>";
                $year=$year+1;
            }
            ?>
        </select>

    </div>

    <div class="form-group">
        <label class="radio-inline lblStyle"><input type="radio" name="gender" value="0" required>Female</label>
        <label class="radio-inline lblStyle"><input type="radio" name="gender" value="1" required>Male</label>
    </div>
    <p class="agreement">
        By clicking Sign Up you agree to our <a href="">Terms</a> and that you have<br />read our <a href="">Data Policy</a>, including our <a href="">Cookie Use</a>. -chos lang xD
    </p>
    <input type="submit" class="btn btn-default" value="Create Account" name="register" size="20" />
    <hr />
</form>