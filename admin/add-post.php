<?php

include 'partials/header.php';


?>
                        <section class="form-section">
                            <div class="container form-section-container">
                                <h2>Add Post</h2>
                                <div class="alert-message error">
                                    <p>
                                        This is an error message
                                    </p>
                                </div>
                                <form action="" enctype="multipart/form-data">
                                    <input type="text" placeholder="Title">
                                    <select>
                                        <option value="1">Travel</option>
                                        <option value="1">Art</option>
                                        <option value="1">Science & Technology</option>
                                        <option value="1">Travel</option>
                                        <option value="1">Travel</option>
                                        <option value="1">Travel</option>
                                    </select>

                                    <textarea rows="10" placeholder="Body"></textarea>
                                    <div class="form-control inline">
                                        <input type="checkbox" id="is-featured" checked>

                                        <label for="is-featured">Featured</label>
                                    </div>
                                    <div class="form-control">
                                        <label for="thumbnail">Add Thumbnail</label>
                                        <input type="file" id="Thumbnail" checked>

                                    </div>
                                    <button type="submit" class="btn">Add Post</button>
                                </form>
                            </div>
                        </section>
                        <!---------END OF FORM------>

                    <?php

include '../partials/footer.php';


?>