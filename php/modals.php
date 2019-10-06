<div id="updateUserModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="container">
                        <div class="form-group">
                            <br />

                            <div class="row"> 
                                <div class="col-sm-3" align="right" >
                                    <label for="" class="control-label">
                                        Number:
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="" type="text" class="form-control userId" disabled>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col-sm-3" align="right" >
                                    <label for="" class="control-label">
                                        First name:
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control userFname" name="newFname" placeholder="Ex: Juan Dela Cruz">
                                </div>
                            </div>
                            
                            <div class="row"> 
                                <div class="col-sm-3" align="right" >
                                    <label for="" class="control-label">
                                        Last name:
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="userLname" type="text" class="form-control userLname" name="newLname" placeholder="Ex: Juan Dela Cruz">
                                </div>
                            </div>
                            
                            <div class="row"> 
                                <div class="col-sm-3" align="right" >
                                    <label for="" class="control-label">
                                        Username:
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="userEmail" type="text" class="form-control userEmail" name= "newEmail" placeholder="Ex: juan_delacruz">
                                </div>
                            </div> 
                            
                            <div class="row">
                                <div class="col-sm-3" align="right" >
                                    <label for="" class="control-label" >
                                        Password:
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="userPass" type="text" class="form-control userPass" name="newPass" placeholder="Ex: 12345juandelacruz">
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="addPersonnelSaveButton" type="button" class="btn btn-primary" role="button" onclick="updateUser()">
                    Update
                </button>
            </div>
        </div>
    </div>    
</div>