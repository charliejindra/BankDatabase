create table customer
	(customer_ID		numeric(20)NOT NULL,
	username			varchar(20)NOT NULL,
	password			varchar(20)NOT NULL,
	account_holder		varchar(20)NOT NULL,
	Birthday			numeric(8),
	SSN					numeric(9)NOT NULL,
	phone_number		numeric(15)NOT NULL,
	email				varchar(20),
	address1			varchar(20),	
	address2			varchar(20),
	primary key (customer_ID)
	);

create table account
	(account_number	numeric(20)NOT NULL,
	customer_ID		numeric(20)NOT NULL, 
	account_type	varchar(1),
	balance			numeric(12,2),
	primary key (account_number),
	foreign key (customer_ID) references customer(customer_ID)
	);

create table transaction_history
	(transaction_number		varchar(8)NOT NULL,
	to_account				numeric(20), 
	from_account			numeric(20),
	amount					numeric(12,2),
	trans_date				numeric(8)NOT NULL,
	trans_time				numeric(6)NOT NULL,
	primary key (transaction_number),
	foreign key (to_account) references account(account_number),
    foreign key (from_account) references account(account_number)
	);

create table card
	(card_number			numeric(16)NOT NULL, 
	card_type				varchar(1),
	account_number			numeric(20)NOT NULL, 
	credit					numeric(12,2),
	primary key (card_number),
	foreign key (account_number) references account(account_number)
	);
