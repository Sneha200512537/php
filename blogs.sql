Use Sneha200512537;
CREATE table users(
	first_name varchar (255),
	last_name varchar (255),
	email varchar (255),
	password varchar (255),
    primary key (email)
);

CREATE table Blogs(
	blog_id int not null auto_increment,
	blog_subject varchar (255),
    blog_information varchar(255),
    primary key (blog_id)
);
