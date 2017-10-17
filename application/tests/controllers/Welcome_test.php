<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{ 
        public function setUp(){
            $this->resetInstance();
            $this->obj = $this->newModel('mod_kategori');
            $this->obj2 = $this->newModel('mod_product');
        }
        
	public function test_index()
	{
		$output = $this->request('GET', 'admin/kategori/index');
		$this->assertContains('<th>Nama Kategori</th>', $output); //di view diambil dari controoler sama model,
	}
        
        public function test_delete_kategori()
	{
		$output = $this->request('GET', 'admin/kategori/delete');
		$this->assertContains('<th>Nama Kategori</th>', $output); //di view diambil dari controoler sama model,
	}
        
        public function test_post_kategori(){
            $this->request('POST', 'admin/kategori/post',
                    [
                        'nama_kategori' => 'Pakaian Wanita',
                        'parent' => 0,
                        'link' => 'ga ada link',
                        'nama_kategori_seo' => 'pakaian-wanita',
                    ]
                    );
            $this->assertEquals('Pakaian Wanita', 0 , 'ga ada link','pakaian-wanita');
            $this->assertContains('<p>Kategori</p>');
        }
        
        public function test_edit_kategori(){
            $this->request('POST', 'admin/kategori/edit');
            $this->assertContains('<label>Nama Kategori</label>');
        }
        
        public function test_delete_product()
	{
		$output = $this->request('GET', 'admin/product/delete');
		$this->assertContains('<th>Nama Kategori</th>', $output); //di view diambil dari controoler sama model,
	}
        
        public function test_index_product(){
                $output = $this->request('GET', 'admin/product/index');
		$this->assertContains('<th>Nama Kategori</th>', $output); //di view diambil dari controoler sama model,
        }

        public function test_index_demo(){
                $output = $this->request('GET', 'demo/index');
		$this->assertContains('<p>Why not buy a new awesome theme?</p>', $output); //di view diambil dari controoler sama model,
        }
     
        
        
        public function test_edit_product(){
            $this->request('POST', 'admin/product/edit');
            $this->assertContains('<p>Edit</p>');
        }
        
         public function test_post_product(){
            $this->request('POST', 'admin/product/post',
                    [
                    'nama_product'     =>  'cek',
                    'harga'            =>  222,
                    'kategori_id'      =>  3,
                    'nama_product_seo' =>  'cek',
                    ]
                    );
            $this->assertEquals('cek', 222 , 3,'cek');
            $this->assertContains('<label>Nama Product</label>');
        }
        
        public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404); //dipake pas waktu, dia salah masukin, semisal kita ngasih test
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
