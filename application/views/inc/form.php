<form>
    <div class="form-group mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required />
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Mobile No</label>
        <input type="text" class="form-control" name="phone" required />
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required />
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Select a Project</label>
        <select class="form-control" required>
            <option value="">--Select--</option>
            <option value="1.5 Katha Villa">1.5 Katha Villa</option>
            <option value="2 Katha Villa">2 Katha Villa</option>
            <option value="3 Katha Villa">3 Katha Villa</option>
            <option value="3 Katha Villa Elite">3 Katha Villa Elite</option>
            <option value="4 Katha Villa Elite">4 Katha Villa Elite</option>
            <option value="2 BHK Apartment">2 BHK Apartment</option>
            <option value="3 BHK Apartment">3 BHK Apartment</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Message</label>
        <textarea type="text" class="form-control" name="name" rows="3" required></textarea>
    </div>
    <div class="form-group" style="text-align: center;">
       <button class="btn btn-danger btn-lg convicity-background-color convicity-button" type="submit">SEND</button>
    </div>
</form>