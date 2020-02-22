                        <!-- Modal agregar maestros -->

                            <div class="modal fade" id="maestros" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                            <div class="modal-content">
                            <div class="modal-header border-left-primary bg-white shadow">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="color:black"> <strong>Agregar Maestros</strong> </h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body border-left-dark">
                            <form  action="includes/funciones.php" method="post">
                            <div class="form-row">
                              <div class="col">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nom" value="">

                              </div>
                              <div class="col">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="ape" value="">

                              </div>


                            </div>
                            <div class="form-row">
                              <div class="col">
                                <label>Direccion</label>
                                <input type="text" class="form-control" name="dir" value="">

                              </div>
                              <div class="col">
                                <label>Clave centro de trabajo</label>
                                <input type="text" id="cct_maestro" class="form-control" name="cct" value="">

                              </div>


                            </div>


                              <div class="modal-footer ">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                  <input type="submit" class="btn btn-primary" name="maestros" value="Guardar">
                                </div>
                              </form>
                              </div>
                                </div>
                                  </div>
                                  </div>


                                  <!-- Modal agregar calificacion 1 -->

                                      <div class="modal fade" id="calificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered " role="document">
                                      <div class="modal-content">
                                      <div class="modal-header border-left-primary bg-dark">
                                      <h5 class="modal-title" id="exampleModalLongTitle" style="color:white"> <strong>Agregar calificacion</strong> </h5>

                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body border-left-dark">
                                      <form  action="includes/funciones.php" method="post">
                                      <div class="form-row">
                                        <div class="col">
                                          <label>Español I</label>
                                          <input type="number" class="form-control" name="esp" value="">

                                        </div>
                                        <div class="col">
                                          <label>Matematicas I</label>
                                          <input type="number" class="form-control" name="mat" value="">

                                        </div>

                                        <div class="col">
                                          <label>Biologia I</label>
                                          <input type="number" class="form-control" name="bio" value="">

                                        </div>


                                      </div>
                                      <div class="form-row">
                                        <div class="col">
                                          <label>Quimica I</label>
                                          <input type="number" class="form-control" name="qui" value="">

                                        </div>
                                        <div class="col">
                                          <label>Ingles I</label>
                                          <input type="number" id="" class="form-control" name="ing" value="">

                                        </div>
                                        <div class="col">
                                          <label>Matricula</label>
                                          <input type="number" id="mat" class="form-control" name="matr" value="">

                                        </div>


                                      </div>


                                        <div class="modal-footer ">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                            <input type="submit" class="btn btn-primary" name="materia1" value="Guardar">
                                          </div>
                                        </form>
                                        </div>
                                          </div>
                                            </div>
                                            </div>


                                            <!-- Modal agregar calificacion 2 -->

                                                <div class="modal fade " id="calificacion2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered " role="document">
                                                <div class="modal-content">
                                                <div class="modal-header border-left-primary bg-white shadow ">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:Blue"> <strong>Agregar calificacion</strong> </h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body border-left-dark ">
                                                <form  action="includes/funciones.php" method="post">
                                                  <br>
                                                <div class="form-row">
                                                  <div class="col">
                                                    <label>Español II</label>
                                                    <input type="number" class="form-control" name="esp" value="">

                                                  </div>
                                                  <div class="col">
                                                    <label>Matematicas II</label>
                                                    <input type="number" class="form-control" name="mat" value="">

                                                  </div>

                                                  <div class="col">
                                                    <label>Biologia II</label>
                                                    <input type="number" class="form-control" name="bio" value="">

                                                  </div>


                                                </div>
                                                <div class="form-row">
                                                  <div class="col">
                                                    <label>Quimica II</label>
                                                    <input type="number" class="form-control" name="qui" value="">

                                                  </div>
                                                  <div class="col">
                                                    <label>Ingles II</label>
                                                    <input type="number" id="" class="form-control" name="ing" value="">

                                                  </div>
                                                  <div class="col">
                                                    <label>Matricula</label>
                                                    <input type="number" id="mat2" class="form-control" name="matr" value="">

                                                  </div>


                                                </div>


                                                  <div class="modal-footer ">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                      <input type="submit" class="btn btn-primary" name="materia2" value="Guardar">
                                                    </div>
                                                  </form>
                                                  </div>
                                                    </div>
                                                      </div>
                                                      </div>


                                                      <!-- Modal agregar calificacion 3 -->

                                                          <div class="modal fade" id="calificacion3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                          <div class="modal-dialog modal-dialog-centered " role="document">
                                                          <div class="modal-content">
                                                          <div class="modal-header border-left-primary bg-dark">
                                                          <h5 class="modal-title" id="exampleModalLongTitle" style="color:white"> <strong>Agregar calificacion</strong> </h5>

                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                          </button>
                                                          </div>
                                                          <div class="modal-body border-left-dark">
                                                          <form  action="includes/funciones.php" method="post">
                                                          <div class="form-row">
                                                            <div class="col">
                                                              <label>Español III</label>
                                                              <input type="number" class="form-control" name="esp" value="">

                                                            </div>
                                                            <div class="col">
                                                              <label>Matematicas III</label>
                                                              <input type="number" class="form-control" name="mat" value="">

                                                            </div>

                                                            <div class="col">
                                                              <label>Biologia III</label>
                                                              <input type="number" class="form-control" name="bio" value="">

                                                            </div>


                                                          </div>
                                                          <div class="form-row">
                                                            <div class="col">
                                                              <label>Quimica III</label>
                                                              <input type="number" class="form-control" name="qui" value="">

                                                            </div>
                                                            <div class="col">
                                                              <label>Ingles III</label>
                                                              <input type="number" id="" class="form-control" name="ing" value="">

                                                            </div>
                                                            <div class="col">
                                                              <label>Matricula</label>
                                                              <input type="number" id="mat3" class="form-control" name="matr" value="">

                                                            </div>


                                                          </div>


                                                            <div class="modal-footer ">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                <input type="submit" class="btn btn-primary" name="materia3" value="Guardar">
                                                              </div>
                                                            </form>
                                                            </div>
                                                              </div>
                                                                </div>
                                                                </div>


                                                          <!-- Modal agregar director bueno -->
                                                                  <div class="modal fade" id="directores" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                  <div class="modal-dialog modal-dialog-centered " role="document">
                                                                    <div class="modal-content">
                                                                  <div class="modal-header border-left-dark bg-white shadow">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black"> <strong>Nuevo Director </strong> </h5>

                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                    <div class="modal-body border-left-dark">
                                                                  <form  action="includes/funciones.php" method="post">
                                                                    <div class="form-row">
                                                                      <div class="col">
                                                                        <label>Nombre </label>
                                                                        <input type="text" class="form-control" name="nom" required value="">

                                                                      </div>
                                                                      <div class="col">
                                                                        <label>Apellidos </label>
                                                                        <input type="text" class="form-control" name="ape" required value="">

                                                                      </div>




                                                                    </div>
                                                                    <div class="form-row">
                                                                      <div class="col">
                                                                        <label>telefono</label>
                                                                        <input type="number" class="form-control" name="tel" required value="">

                                                                      </div>

                                                                      <div class="col">
                                                                        <label>Cct de la escuela</label>
                                                                        <input type="text" id="cct" class="form-control" required name="cct" value="">

                                                                      </div>


                                                                    </div>


                                                                      <div class="modal-footer ">
                                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                          <input type="submit" class="btn btn-primary" name="director" value="Guardar">
                                                                        </div>
                                                                      </form>
                                                                      </div>
                                                                        </div>
                                                                          </div>
                                                                        </div>





                                                                        <!-- Modal agregar alumnos -->

                                                                            <div class="modal fade" id="alumnos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header border-left-primary bg-white shadow">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle" style="color:black"> <strong>Agregar Alumnos</strong>  </h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            </div>
                                                                            <br>
                                                                            <div class="modal-body border-left-dark">
                                                                            <form  action="includes/funciones.php" method="post">
                                                                            <div class="form-row">
                                                                              <div class="col">
                                                                                <label>Matricula</label>
                                                                                <input type="text" class="form-control" name="mat" value="">

                                                                              </div>
                                                                              <div class="col">
                                                                                <label>CCT</label>
                                                                                <input type="text" id="cct_a" class="form-control" name="ctt" value="">

                                                                              </div>

                                                                              <div class="col">
                                                                                <label>Nombre</label>
                                                                                <input type="text" class="form-control" name="nom" value="">

                                                                              </div>
                                                                              <div class="col">
                                                                                <label>Apellidos</label>
                                                                                <input type="text" class="form-control" name="ape" value="">

                                                                              </div>


                                                                            </div>
                                                                            <div class="form-row">
                                                                              <div class="col">
                                                                                <label>CURP</label>
                                                                                <input type="text" class="form-control" name="cur" value="">

                                                                              </div>
                                                                              <div class="col">
                                                                                <label>Sexo</label>
                                                                                <select class="form-control" name="sex">
                                                                                  <option value="HOMBRE">HOMBRE</option>
                                                                                  <option value="MUJER">MUJER</option>
                                                                                </select>

                                                                              </div>
                                                                              <div class="col">
                                                                                <label>Grupo</label>
                                                                                <input type="text" id="mat" class="form-control" name="grup" value="">

                                                                              </div>
                                                                              <div class="col">
                                                                                <label>Grado</label>
                                                                                <select class="form-control" name="grap">
                                                                                  <option value="1">1 grado</option>
                                                                                  <option value="2">2 grado</option>
                                                                                  <option value="3">3 grado</option>
                                                                                </select>

                                                                              </div>


                                                                            </div>


                                                                              <div class="modal-footer ">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                                  <input type="submit" class="btn btn-primary" name="alumnos" value="Guardar">
                                                                                </div>
                                                                              </form>
                                                                              </div>
                                                                                </div>
                                                                                  </div>
                                                                                  </div>

                                                                                  <!-- Modal editar director bueno -->
                                                                                          <div class="modal fade" id="editar_direc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                          <div class="modal-dialog modal-dialog-centered " role="document">
                                                                                            <div class="modal-content">
                                                                                          <div class="modal-header border-left-dark bg-white shadow">
                                                                                            <h5 class="modal-title" id="exampleModalLongTitle" style="color: black"> <strong>Editar </strong> </h5>

                                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                          </div>
                                                                                            <div class="modal-body border-left-dark">
                                                                                          <form  action="includes/funciones.php" method="post">
                                                                                            <div class="form-row">
                                                                                              <div class="col">
                                                                                                <label>Nombre </label>
                                                                                                <input type="text" id="nom_dir" class="form-control" name="nom" required value="">

                                                                                              </div>
                                                                                              <div class="col">
                                                                                                <label>Apellidos </label>
                                                                                                <input type="text" id="ape_dir" class="form-control" name="ape" required value="">

                                                                                              </div>
                                                                                              <div class="col">
                                                                                                <label>telefono</label>
                                                                                                <input type="number"id="tel" class="form-control" name="tel" required value="">

                                                                                              </div>




                                                                                            </div>


                                                                                              <input type="text" id="cct_dir" hidden class="form-control" required name="id_dir" value="">
                                                                                              <div class="modal-footer ">
                                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                                                  <input type="submit" class="btn btn-primary" name="editar_direc" value="Editar">
                                                                                                </div>
                                                                                              </form>
                                                                                              </div>
                                                                                                </div>
                                                                                                  </div>
                                                                                                </div>


                                                                                                <!-- Modal editar maestros -->
                                                                                                        <div class="modal fade" id="editar_maestros" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-centered " role="document">
                                                                                                          <div class="modal-content">
                                                                                                        <div class="modal-header border-left-dark bg-white shadow">
                                                                                                          <h5 class="modal-title" id="exampleModalLongTitle" style="color: black"> <strong>Editar </strong> </h5>

                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                          <span aria-hidden="true">&times;</span>
                                                                                                          </button>
                                                                                                        </div>
                                                                                                          <div class="modal-body border-left-dark">
                                                                                                        <form  action="includes/funciones.php" method="post">
                                                                                                          <div class="form-row">
                                                                                                            <div class="col">
                                                                                                              <label>Nombre </label>
                                                                                                              <input type="text" id="nom_ma" class="form-control" name="nom" required value="">

                                                                                                            </div>
                                                                                                            <div class="col">
                                                                                                              <label>Apellidos </label>
                                                                                                              <input type="text" id="ape_ma" class="form-control" name="ape" required value="">

                                                                                                            </div>
                                                                                                            <div class="col">
                                                                                                              <label>Direccion</label>
                                                                                                              <input type="text"id="dir_ma" class="form-control" name="tel" required value="">

                                                                                                            </div>




                                                                                                          </div>


                                                                                                            <input type="text" id="id_ma" hidden class="form-control" required name="id_ma" value="">
                                                                                                            <div class="modal-footer ">
                                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                                                                <input type="submit" class="btn btn-primary" name="editar_maestros" value="Edita">
                                                                                                              </div>
                                                                                                            </form>
                                                                                                            </div>
                                                                                                              </div>
                                                                                                                </div>
                                                                                                              </div>



                                                                                                              <!-- Modal TOTALES ALUMNOS -->
                                                                                                                      <div class="modal fade" id="totales" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                                      <div class="modal-dialog modal-dialog-centered  " role="document">
                                                                                                                        <div class="modal-content">
                                                                                                                      <div class="modal-header border-left-dark bg-white shadow">
                                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: black"> <strong>Totales: <input id="nom_esc" type="text" name="" value=""> </strong> </h5>

                                                                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                      </div>
                                                                                                                        <div class="modal-body border-left-dark">

                                                                                                                        <div class="form-group">
                                                                                                                          <label><h6>Primer grado</h6></label>
                                                                                                                        </div>
                                                                                                                        <div class="form-row">
                                                                                                                          <div class="col">
                                                                                                                            <label>Niños </label>
                                                                                                                            <input type="number" id="p_na" class="form-control" name="nom" required value="">

                                                                                                                          </div>
                                                                                                                          <div class="col">
                                                                                                                            <label>Niñas </label>
                                                                                                                            <input type="number" id="p_no" class="form-control" name="ape" required value="">

                                                                                                                          </div>
                                                                                                                          <div class="col">
                                                                                                                            <label>Total</label>
                                                                                                                            <input type="number" id="p_total" class="form-control" name="tel" required value="">

                                                                                                                          </div>
                                                                                                                          </div>


                                                                                                                          <div class="form-group">
                                                                                                                            <hr>
                                                                                                                            <label><h6>Segundo grado</h6></label>
                                                                                                                          </div>
                                                                                                                          <div class="form-row">
                                                                                                                            <div class="col">
                                                                                                                              <label>Niños </label>
                                                                                                                              <input type="number" id="s_na" class="form-control" name="nom" required value="">

                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                              <label>Niñas </label>
                                                                                                                              <input type="number" id="s_no" class="form-control" name="ape" required value="">

                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                              <label>Total</label>
                                                                                                                              <input type="number"id="s_total" class="form-control"  required value="">

                                                                                                                            </div>
                                                                                                                            </div>


                                                                                                                            <div class="form-group">
                                                                                                                              <hr>
                                                                                                                              <label><h6>Tercer grado</h6></label>
                                                                                                                            </div>
                                                                                                                            <div class="form-row">
                                                                                                                              <div class="col">
                                                                                                                                <label>Niños </label>
                                                                                                                                <input type="number" id="t_na" class="form-control" name="nom" required value="">

                                                                                                                              </div>
                                                                                                                              <div class="col">
                                                                                                                                <label>Niñas </label>
                                                                                                                                <input type="number" id="t_no" class="form-control" name="ape" required value="">

                                                                                                                              </div>
                                                                                                                              <div class="col">
                                                                                                                                <label>Total</label>
                                                                                                                                <input type="number"id="t_total" class="form-control" name="tel" required value="">

                                                                                                                              </div>
                                                                                                                              </div>


                                                                                                                              <div class="form-group">
                                                                                                                                <hr>
                                                                                                                                <label><h6>Totales</h6></label>
                                                                                                                              </div>
                                                                                                                              <div class="form-row">
                                                                                                                                <div class="col">
                                                                                                                                  <label>Niños </label>
                                                                                                                                  <input type="number" id="to_na" class="form-control" name="nom" required value="">

                                                                                                                                </div>
                                                                                                                                <div class="col">
                                                                                                                                  <label>Niñas </label>
                                                                                                                                  <input type="number" id="to_no" class="form-control" name="ape" required value="">

                                                                                                                                </div>
                                                                                                                                <div class="col">
                                                                                                                                  <label>Total</label>
                                                                                                                                  <input type="number"id="to_total" class="form-control" name="tel" required value="">

                                                                                                                                </div>
                                                                                                                                </div>


                                                                                                                          <input type="text"  hidden class="form-control" required name="id_ma" value="">
                                                                                                                          <div class="modal-footer ">
                                                                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                                                                                              <input type="submit" class="btn btn-primary" name="editar_maestros" value="Edita">
                                                                                                                            </div>

                                                                                                                          </div>
                                                                                                                            </div>
                                                                                                                              </div>
                                                                                                                            </div>


                                                                                                                            <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro que quieres salir?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">



    <div class="col">
      <h6>  Da click en el botón para cerrar la sesion</h6>
    </div>

    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="includes/cerrar.php?cerrar">salir</a>
  </div>
</div>
</div>
</div>
