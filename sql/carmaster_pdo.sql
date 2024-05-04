
create table order_cars
(
    model         varchar(50)  not null,
    brand         varchar(50)  not null,
    year          int          not null,
    car_id_number int unsigned auto_increment
        primary key,
    client_id_con int unsigned null comment 'connect_to_clients_tabke',
    constraint order_cars___fk
        foreign key (client_id_con) references clients (client_id)
)
    comment 'all clients car for service and description';


create table clients
(
    first_name   varchar(50) not null,
    last_name    varchar(50) not null,
    phone_number int         null,
    client_id    int unsigned auto_increment
        primary key
)
    comment 'Table list of Clients CarService';



create table car_parts
(
    name     varchar(200) not null,
    id       int unsigned auto_increment
        primary key,
    quantity int          null
);


create table car_parts_client_link_table
(
    client_id int unsigned not null,
    car_id    int unsigned not null,
    constraint car_parts_client_link_table_ibfk_1
        foreign key (client_id) references clients (client_id),
    constraint car_parts_client_link_table_ibfk_2
        foreign key (car_id) references car_parts (id)
);

create index car_id
    on car_parts_client_link_table (car_id);

create index client_id
    on car_parts_client_link_table (client_id);




-- //crud delete
-- delete from schema_name.order_cars where client_id_con =4 ;
--
-- //crud insert
-- insert into order_cars (model, brand, year, car_id_number, client_id_con)
--
-- values ('NewModel','new brand', '2021', '855454', '4');
--
-- //crud update
-- update order_cars set model ='Changed name' where client_id_con = 4;