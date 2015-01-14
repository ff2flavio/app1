<?php
App::uses('AppModel', 'Model');
/**
 * Funcionario Model
 *
 * @property Empresa $Empresa
 * @property Atestado $Atestado
 * @property Cargo $Cargo
 */
class Funcionario extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Atestado' => array(
			'className' => 'Atestado',
			'foreignKey' => 'atestado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'cargo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
