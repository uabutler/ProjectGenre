<!DOCTYPE html>
<html lang="en">

<head>
  <script>
    GET_MEETING = <?php echo isset($_GET['book']) ? "true" : "false"; ?>;
  </script>
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
            <div class="six wide field">
              <label>Day</label>
              <input type="date">
            </div>
            <div class="five wide field">
              <label>Start Time</label>
              <input type="time">
            </div>
            <div class="five wide field">
              <label>End Time</label>
              <input type="time">
            </div>
          </div>
        </div>

        <div class="field">
          <div class="fields">
            <div class="eight wide field">
              <label>Frequency</label>
              <select class="ui search dropdown">
                <option value="Virtual">Not Repeat</option>
                <option value="Physical">Daily</option>
                <option value="Physical">Weekly</option>
                <option value="Physical">Monthly</option>
                <option value="Physical">Custom</option>
              </select>
            </div>

            <div class="eight wide field">
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
          <label>Add Participants</label>
          <select multiple="" class="ui search dropdown">
            <option value="">Add friends</option>
            <option value="1984">Charlie Chapel</option>
            <option value="at">Dave David</option>
            <option value="aw">Inigo Bains</option>
            <option value="bnw">Cali Dodson</option>
          </select>
        </div>

        <!-- <div class="inline field">
          <div class="ui checkbox " >
            <input disabled type="checkbox">
            <label>Use In-book Discussion <i class="star icon hintable" data-content="Please subscribe to our Premium Package to access this feature"></i></label>
          </div>
        </div> -->


        <div class="field">
          <label>Description</label>
          <textarea rows="5"></textarea>
        </div>


      </div>

      <div class="column">

        <div class="field">
          <label>Book Title</label>
          <select class="ui search dropdown" id="new-meeting-book">
            <option value="">Select a book</option>
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
          <label>Genre</label>
          <input type="text" name="genre" readonly placeholder="">
        </div>

        <div class="field">
          <label>ISBN</label>
          <input type="text" name="isbn" placeholder="">
        </div>

        <div class="field">
          <label>Publication Date</label>
          <input type="text" name="public-date" placeholder="">
        </div>

        <!-- <div class="field">
          <div class="fields">
            <div class="eight wide field">
              <label>ISBN</label>
              <input type="text" name="isbn" placeholder="">
            </div>
            <div class="eight wide field">
              <label>Publication Date</label>
              <input type="text" name="public-date" placeholder="">
            </div>
          </div>
        </div> -->

      </div>
    </div>

    <div class="ui submit right floated button" onclick="window.location='meeting-detail.php'" style="margin-top: 20px">Submit</div>
  </section>
</body>

</html>