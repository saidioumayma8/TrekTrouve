<div class="add-form">
    <h3>Add Excursion and Trail</h3>
    <form id="excursion-trail-form" action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="excursion_name">Excursion Title:</label>
            <input type="text" id="excursion_name" name="excursion_name" required>
        </div>
        <div class="form-group">
            <label for="excursion_difficulty">Excursion Difficulty Level:</label><br>
           <select name="excursion_difficulty" id="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           </select>

        </div>

        <div class="form-group">
            <label for="excursion_date">Excursion Date:</label>
            <input type="date" id="excursion_date" name="excursion_date" required>
        </div>
        <div class="form-group">
            <label for="excursion_date">Excursion description:</label>
            <input type="text" id="excursion_text" name="excursion_text" required>
        </div>
        <div class="form-group">
            <label for="excursion_duration">Excursion Duration:</label>
            <input type="number" id="excursion_duration" name="excursion_duration" required>
        </div>
        <div class="form-group">
            <label for="excursion_location">Excursion Location:</label>
            <input type="text" id="excursion_location" name="excursion_location" required>
        </div>
        <div class="form-group">
            <label for="excursion_image">Excursion Image:</label>
            <input type="file" id="excursion_image" name="excursion_image" required>
        </div>

        <div class="form-group">
            <label for="trail_name">Trail Name:</label>
            <input type="text" id="trail_name" name="trail_name" required>
        </div>


        <div class="form-group">
            <label for="trail_start_point">Trail Start Point:</label>
            <input type="text" id="trail_start_point" name="trail_start_point" required>
        </div>
        <div class="form-group">
            <label for="trail_end_point">Trail End Point:</label>
            <input type="text" id="trail_end_point" name="trail_end_point" required>
        </div>
        <div class="form-group">
            <label for="trail_length">Trail Length:</label>
            <input type="number" id="trail_length" name="trail_length" required>
        </div>
        <button type="submit">Add Excursion and Trail</button>
    </form>
</div>
