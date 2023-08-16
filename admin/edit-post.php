<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require 'config/database.php';
include 'partials/header.php';


?>
                        <section class="form-section">
                            <div class="container form-section-container">
                                <h2>Edith Post</h2>
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
                                        <label for="thumbnail">change Thumbnail</label>
                                        <input type="file" id="Thumbnail" checked>

                                    </div>
                                    <button type="submit" class="btn">Update Post</button>
                                </form>
                            </div>
                        </section>
                        <!---------END OF FORM------>

                    <?php

include '../partials/header.php';


?>