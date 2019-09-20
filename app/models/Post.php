<?php

	class Post {

		private $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		public function getPosts()
		{
			$this->db->query("SELECT *,
								  post.id as PostId,
								  user.id as UserId 
								  FROM post
								  INNER JOIN user
								  ON post.user_id = user.id
								  ORDER BY post.created_at DESC 
								  ");

			$results = $this->db->resultSet();

			return $results;
		}

	}