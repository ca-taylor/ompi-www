/* find this proc in the local children */
			for (item = opal_list_get_first(&orte_local_children);
				item != opal_list_get_end(&orte_local_children);
				item = opal_list_get_next(item)) {
				child = (orte_odls_child_t*)item;
				if (child->name->jobid == proc->jobid &&
					child->name->vpid == proc->vpid) {
                                        /*Si encontramos el child lo enviamos de momento al protector,
                                         para eso lo empaquetamos primero con el comando ORTE_DAEMON_RESTORE_CHECKPOINT_CMD
                                         y luego lo enviamos con rml_send*/

                                         OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,"CHILD a restaurar %s",ORTE_NAME_PRINT(child->name)));
                                        

                                        command = ORTE_DAEMON_UPDATE_STATE_CMD;
                                        buffer = OBJ_NEW(opal_buffer_t);
                                        
                                        if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &command, 1, ORTE_DAEMON_CMD))) {
                                            ORTE_ERROR_LOG(rc);
                                            OBJ_RELEASE(buffer);
                                            goto CLEANUP;
                                        }

                                        orte_proc_state_t state = ORTE_PROC_STATE_FAULT;
                                        /* Pack the faulty vpid */
                                        if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &proc, 1, ORTE_NAME))) {
                                            ORTE_ERROR_LOG(rc);
                                            goto CLEANUP;
                                        }

                                        /* Pack the state */
                                        if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &state, 1, OPAL_UINT16))) {
                                            ORTE_ERROR_LOG(rc);
                                            goto CLEANUP;
                                        }

                                        /*Aqui se envia el buffer al lugar donde se restaurá.*/
                                        OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output, "ENVIANDO AL HNP"));
                                        if (0 > orte_rml.send_buffer(ORTE_PROC_MY_HNP, buffer, ORTE_RML_TAG_DAEMON, 0)) {
                                            ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);
                                            exit_status = ORTE_ERR_COMM_FAILURE;
                                        }
                                        
										return ORTE_SUCCESS;

                                        CLEANUP:
                                            OBJ_DESTRUCT(&buffer);
								}			
						}

						OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
								 "%s errmgr:orted Children NOT found!",
								 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
								 ORTE_NAME_PRINT(proc)));
