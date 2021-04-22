<!DOCTYPE html>
<html lang="en">

<head>
  <?php require 'common/head.php'; ?>
  <title>Project Genre</title>
</head>

<body>
  <header>
    <?php require 'common/header.php';
    createHeader("Schedule"); ?>
  </header>
  <section class="ui form">
    <h1 class="ui header" style="text-align:center;">New Meeting</h1>

    <div class="ui two column grid">



      <div class="column">
        <div class="field">
          <div class="fields">
            <div class="five wide field">
              <label>Location</label>
              <select class="ui search dropdown">
                <option value="Virtual">Virtual</option>
                <option value="Physical">Physical</option>
              </select>
            </div>
            <div class="eleven wide field">
              <label>Address</label>
              <input type="text" placeholder="Street Address or Link">
            </div>
          </div>
        </div>

        <div class="inline field">
          <div class="ui checkbox">
            <input type="checkbox">
            <label>Use In-book Discussion <i class="star icon" data-content="Premium Feature"></i></label>
          </div>
        </div>

        <div class="field">
          <label>Add Participants</label>
          <select multiple="" class="ui search dropdown">
            <option value="">Add friends</option>
            <option value="1984">Charlie Chapel</option>
            <option value="at">Dave David</option>
            <option value="aw">Inigo Bains</option>
            <option value="bnw">Cali Dodson</option>
          </select>
        </div>


        <div class="field">
          <div class="fields">
            <div class="five wide field">
              <label>Maximum Participants</label>
              <input type="number">
            </div>
            <div class="eleven wide field">
              <label>Privacy</label>
              <select class="ui search dropdown">
                <option value="Virtual">Friends</option>
                <option value="Physical">Friends of Friends</option>
                <option value="Physical">Public</option>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <label>Description</label>
          <textarea rows="3"></textarea>
        </div>


      </div>

      <div class="column">

        <div class="field">
          <label>Book Title</label>
          <select class="ui search dropdown" id="new-meeting-book">
            <option value="">Select a book</option>
            <option value="1984">1984</option>
            <option value="at">A Tale of Two Cities</option>
            <option value="aw">Alice in Wonderland</option>
            <option value="bnw">Brave New World</option>
            <option value="f">Fahrenheit 451</option>
            <option value="m">Moby Dick</option>
          </select>
        </div>
          <div class="field">
            <label>Author</label>
            <input type="text" name="author" readonly placeholder="">
          </div>
          <div class="field">
            <label>ISBN</label>
            <input type="text" readonly name="isbn" placeholder="">
          </div>
        <div class="field">
          <label>Genre</label>
          <input type="text" name="genre" readonly placeholder="">
        </div>
        <div class="field">
          <label>Publication Date</label>
          <div class="field">
            <input type="text" name="public-date" readonly placeholder="">
          </div>
        </div>
      </div>
    </div>

    <div class="ui submit right floated button" style="margin-top: 20px">Submit</div>
  </section>
</body>

</html>