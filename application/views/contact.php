<?php $this->load->view('header');?>
<div class="grid-container">
    <h1>Contact Form</h1>

                        <?php  if($this->session->flashdata('send_email')){?>
                               <div class="callout callout-success"><?php  echo $this->session->flashdata('send_email');
                                $this->session->unset_userdata('send_email');?> 
                                </div> 
                        <?php } ?>

                    <form id="contact-form" action="<?php echo base_url();?>contact/send_mail" class="form form-email inputs-underline" method="post" parsley-validate>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-12 medium-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>" required>
                                </div>
                            </div>
                            
                            <div class="cell small-12 medium-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="small-12">
                                <div class="form-group">
                                    <label for="tp">Telephone Number</label>
                                    <input type="text" class="form-control" name="tp" id="tp" value="<?php echo set_value('tp'); ?>">
                                </div>
                            </div>
                

                        <div class="small-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo set_value('subject'); ?>" required>
                                </div>
                            </div>
                            
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea  type="text" class="form-control" id="message" rows="4" name="message" required><?php echo set_value('message'); ?></textarea>
                        </div>
                        
                        <div class=" validation-errors"><?php echo validation_errors(); ?></div>

                        <input type="hidden" class="form-control" name="date" id="date" value="<?php echo date("Y-m-d");?>" hidden>
                        <input type="hidden" class="form-control" name="time" id="time" value="<?php date_default_timezone_set("Asia/Colombo"); echo date("H:i:s");?>" hidden>
                        <input type="hidden" class="form-control" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" hidden>

                        <!--user agent-->
                        <?php 
                            if ($this->agent->is_browser())
                            {
                                    $agent = $this->agent->browser();
                            }
                            elseif ($this->agent->is_robot())
                            {
                                    $agent = $this->agent->robot();
                            }
                            elseif ($this->agent->is_mobile())
                            {
                                    $agent = $this->agent->mobile();
                            }
                            else
                            {
                                    $agent = 'Unidentified User Agent';
                            }     
                        ?>

                        <input type="hidden" class="form-control" name="device" id="device" value="<?php echo $agent; ?>" >
                        
                        <?php 
                         ?>

                        <div class="form-group">
                            <button type="submit" class="button">Send Message</button>
                        </div>

                    </form>
</div>                    

<?php $this->load->view('footer');?>