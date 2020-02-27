namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class LoginTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('utilizador', 'Username é necessário')
            ->notEmpty('password', 'Senha é necessária')
            ->notEmpty('role', 'Função é necessária')
            ]);
    }

}