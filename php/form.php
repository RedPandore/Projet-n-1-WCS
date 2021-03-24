<?php require_once ("form-rules.php"); ?>
<section class="formulaire" id="contact">
<div class="form-titre"> <h2>Contact Ivern Jungle</h2>
  <div class="formulaire-box">
              <form class="contactForm" action="" method="POST">
                

                <?php if (!empty($errors)) : ?>
                  <ul class="error">
                    <?php foreach ($errors as $error) : ?>
                      <li><?= $error ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>

                <label for="name">Name:</label> <br/>
                <input type="text" id="name" name="name" placeholder="Marguerite Roncepied" value="<?= $data['name'] ?? '' ?>" required> <br/>

                <label for="email">Email:</label> <br/>
                <input type="email" id="email" name="email" placeholder="Marguerite.Roncepied@gmail.com" value="<?= $data['email'] ?? '' ?>" required><br/>

                <label for="message">Message:</label> <br/>
                <textarea id="message" name="message" value=" <?= $data['message'] ?? '' ?>"></textarea> <br/><br/>

                <button class="button">Send</button>
              </form>
  </div>
</div> 
</section>
