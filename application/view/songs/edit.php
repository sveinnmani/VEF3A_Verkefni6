<div class="container">
    <h2>You are in the View: application/view/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a song</h3>
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?php echo htmlspecialchars($song->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?php echo htmlspecialchars($song->publisher, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($song->year, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="song_id" value="<?php echo htmlspecialchars($song->ID, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_song" value="Update" />
        </form>
    </div>
</div>

