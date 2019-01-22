<?php
namespace kouosl\site\models;
use kouosl\site\Module;
use yii\base\Model;
use kouosl\user\models\User;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required','message'=>'Kullanıcı adı boş bırakamazsınız'],
            ['username', 'unique', 'targetClass' => '\kouosl\user\models\User',
                'message' => 'bu kullanıcı adı vardır.'],
            ['username', 'string', 'min' => 2, 'max' => 15,'message'=>'en çok 15 karakter'],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\kouosl\user\models\User',
                'message' => 'bu email yazıldı.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['verifyCode', 'captcha','captchaAction'=>'/site/auth/captcha']

        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}