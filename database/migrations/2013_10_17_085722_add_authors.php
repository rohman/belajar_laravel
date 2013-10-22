<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=> 'Syahril Rohman',
			'Bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod faucibus sapien, quis aliquet est molestie at. In commodo augue arcu, non pulvinar felis porttitor a. Integer a ultricies urna, sed pulvinar tortor. Curabitur enim tortor, malesuada vitae consectetur a, hendrerit vitae nibh. Nunc elementum urna ac orci vestibulum scelerisque a vitae ipsum. Pellentesque ullamcorper, est nec scelerisque viverra, quam sapien malesuada odio, id euismod tellus neque sit amet dui. Suspendisse gravida nisi sed tincidunt dapibus. Nam vulputate est quis ullamcorper blandit. ',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
		));
		
		DB::table('authors')->insert(array(
			'name'=> 'Rohman Ariel',
			'Bio' => 'Vivamus convallis, odio ac placerat posuere, odio quam malesuada orci, non facilisis dolor ante eu leo. Donec convallis libero et elementum bibendum. Aliquam at sodales purus. Nam convallis elit sed purus venenatis vestibulum. Morbi eget orci orci. Proin ligula nisi, accumsan non mauris et, pellentesque tristique erat. Nunc quis nibh metus. Etiam magna sem, iaculis vel ante eget, scelerisque dignissim sem. Morbi convallis, justo sed volutpat bibendum, ipsum metus pulvinar ante, sed elementum tortor risus molestie quam. Cras semper mauris eget lobortis commodo. ',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
		));
		
		DB::table('authors')->insert(array(
			'name'=> 'Ulfah',
			'Bio' => 'Nullam sed leo vitae felis consequat gravida a vitae diam. Duis vulputate sapien ut mauris varius, ut malesuada erat lobortis. Phasellus interdum vel sem quis imperdiet. Quisque consectetur eu orci id porta. Etiam at rutrum eros. Aliquam erat volutpat. Mauris vel eleifend quam. Nullam pharetra libero id eros rhoncus, in placerat est mattis. Nullam convallis purus magna. Curabitur lectus elit, consectetur non erat eget, gravida porttitor enim. ',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
		));
		
		DB::table('authors')->insert(array(
			'name'=> 'Muhammad Syafii Hadzami',
			'Bio' => 'Pellentesque velit dui, tempus a tempus sed, porta nec ante. Suspendisse ut blandit metus. Nunc id nunc et felis pellentesque venenatis bibendum ut tortor. Fusce ultrices sapien sit amet mauris fermentum, ut feugiat diam euismod. Vestibulum sed placerat purus, nec vestibulum eros. Aliquam eget interdum urna, vel pellentesque sem. Nam ultrices, felis ut bibendum eleifend, risus lacus viverra magna, nec rhoncus velit elit sit amet orci. Donec sed dui tristique metus luctus tempor. Pellentesque ultrices et neque vel ullamcorper. Curabitur fermentum enim felis, sit amet aliquam neque rutrum quis. Morbi rutrum condimentum elit, vitae vestibulum mi tempor id. Suspendisse facilisis ipsum elit, ut placerat felis porttitor sit amet. Morbi congue mi odio, vulputate tincidunt massa tempor eu. Fusce ut dolor sed dui volutpat porttitor vel ut augue. ',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->delete(1);
		DB::table('authors')->delete(2);
		DB::table('authors')->delete(3);
		DB::table('authors')->delete(4);

	}

}