<?php
//This is for home and Generic user testing: 
namespace Tests\Feature;
use Tests\TestCase;

class GenericUserTest extends TestCase
{

    public function test_homePage()
    {
        $response = $this->get('/');
        
        $response->assertSeeText('You are logged in!'); 
    }

    public function GenericUserTest()
    {
        $response = $this->get('/home');
        
        $response->assertSeeText('Dashboard'); 
    }

    public function RegisterTest()
    {
        $response = $this->get('/register');
        
        $response->assertSeeText('Register'); 
    }
  

}
