<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form oction="db/db_pengguna.php?proses=insert"method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama"name= "nama"placeholder="nama anda"required>
                    </div>
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name="username"placeholder="username anda"requeried>
                </div>
                  <div class="form-group">
                    <label for="passwoard">Password</label>
                    <input type="password" class="form-control" id="passwoard" name="passwoard"placeholder="Password"required>
                  </div>
                          
                          <div class="form-group">
                          <label>select</label>
                          <select class="form-control"name="level">
                          <option value="admin">admin</option>
                          <option value="user">user</option>

                        </select>
                      </div>
                  <!-- < class="form-group"> 
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>  
                  
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
                  </div>
                  <!-- <card-body> -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i> simpan</button>
                  <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>reset</button>
                </div>
              </form>
            </div>