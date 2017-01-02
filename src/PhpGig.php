<?php

namespace Yuzoiwasaki\PhpGig;

class PhpGig {

    private $USER_NAME;

    public function __construct($USER_NAME) {
        $this->url = "https://api.github.com/users/${USER_NAME}";
    }

    public function getUserId() {
        $user_info = $this->_getUserInfo();
        return $user_info['login'];
    }

    public function getUserImage() {
        $user_info = $this->_getUserInfo();
        return $user_info['avatar_url'];
    }

    public function getUserFollowers() {
        $user_info = $this->_getUserInfo();
        return $user_info['followers_url'];
    }

    public function getUserFollowings() {
        $user_info = $this->_getUserInfo();
        return $user_info['following_url'];
    }

    public function getUserName() {
        $user_info = $this->_getUserInfo();
        return $user_info['name'];
    }

    public function getUserCompany() {
        $user_info = $this->_getUserInfo();
        return $user_info['company'];
    }

    public function getUserLocation() {
        $user_info = $this->_getUserInfo();
        return $user_info['location'];
    }

    public function getUserEmail() {
        $user_info = $this->_getUserInfo();
        return $user_info['email'];
    }

    public function getUserBio() {
        $user_info = $this->_getUserInfo();
        return $user_info['bio'];
    }

    private function _getUserInfo() {
        $context = stream_context_create(array('http' => array(
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
        )));
        $response_json_str = file_get_contents($this->url, false, $context);
        return json_decode($response_json_str, true);
    }

}
