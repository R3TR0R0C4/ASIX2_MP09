create table phpasix.books
(
    id          int auto_increment
        primary key,
    name        varchar(255) not null,
    author      varchar(255) not null,
    releaseYear int          not null,
    genre       varchar(30)  null
);


create table phpasix.leaks
(
    id                int auto_increment
        primary key,
    name              varchar(255)                                 not null,
    company           varchar(255)                                 null,
    leak_date         date                                         null,
    leak_lines        bigint                                       null,
    sensitivity_level enum ('Low', 'Medium', 'High') default 'Low' null
);


