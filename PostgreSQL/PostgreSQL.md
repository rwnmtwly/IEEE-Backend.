# PostgreSQL

## Content:
1. [What is RDBMS?](#what-is-rdbms)
1. [RDBMS vs. DBMS.](#rdbms-vs-dbms)
1. [What Is PostgreSQL?](#what-is-postgresql)
1. [PostgreSQL Clients.](#postgresql-clients)
1. [What purpose does pgAdmin serve in PostgreSQL?](#what-purpose-does-pgadmin-serve-in-postgresql)
1. [Naming conventions.](#naming-conventions)
1. [Refernces in order of appearance.](#refernces-in-order-of-appearance)
<br>
---

### What is RDBMS?
It stands for Relational Database Management System, and it's a program used to create, update, and manage relational databases.

**Some of the most well-known RDBMSs include:** 

- MySQL
- PostgreSQL
- MariaDB
- Microsoft SQL Server
- Oracle Database.
---
### RDBMS vs. DBMS.

|RDBMS |DBMS|
|:--------------|:------------|
|Stores data in tables|Stores data as files|
|Multiple data elements can be accessed at the same time|Data elements are accessed individually|
|Data tables are related to each other|No relationship between data|
|Normalization is present |Normalization is not present|
|supports distributed database|Does not support distributed database|
|Deals with large amount of data|Deals with small amounts of data|
|More security|Less secure|
|Does not allow data redundancy|Data redundancy is common|
|Supports multiple users|supports a single user|
---
### What Is PostgreSQL?
It's a modern opensource object-relational database management system, released: july 8, 1996.

---
### PostgreSQL Clients.
Clients are just wrappers over the SQL commands that get excuted on the server and return a response.

To connect to the database using clients, *there are different types*:
1. **GUI client**: this eases the way in which you connect to the database and it makes it easier to perform inserts, delets, and view the data base.
2. **Terminal\CMD**: this is prefered, since you learn the commands that your data base needs.
3. **Applications**.
---
### What purpose does pgAdmin serve in PostgreSQL?
It is the leading open source management tool for postgreSQL.
It's designed to meet the needs of both novice and experienced postgres users alike, providing a powerful ***GUI*** that simplifies the creation, maintenance, and use of database objects.

---
### Naming conventions:
- Names in PostgreSQL must begin with a letter or an underscore(_).
- The subsequent chracter in a name can be letters, digits, or underscore.
- The names containing other characters can be formed by surrounding them with double quotes(").
- PostgreSQL stores all the table and column names in lowercase.
- Quoting a name makes it case-sensitive, whereas unquoted names are alwyas folded to lowercase.
- Double quotes can be used to protect a name that would otherwise be taken as a PostgreSQL reserved keyword.
- Postgres reserves system column names for internal use in every table, these columns are implicitly defined by the system. Therefore, these names cannot be used as names of user-defined columns.
- Names in Postgres must be unique within each type of each object. They cannot be the same as another PostgreSQL object that has the same type.
- The Postgres system uses no more than NAMEDATALEN-1 characters of a name. longer names will be truncated. So, NAMEDATALEN is 32 so the maximum name length is 31 but at the time the system is built.
---
### Refernces in order of appearance:
1. [Google cloud](https://cloud.google.com/learn/what-is-a-relational-database).
1. [Geeks for Geeks](https://www.geeksforgeeks.org/difference-between-rdbms-and-dbms/).
1. [Youtube](https://www.youtube.com/watch?v=tzbA7VniRpw&list=PLwvrYc43l1MxAEOI_KwGe8l42uJxMoKeS&index=3&pp=iAQB).
1. [Hasura](https://hasura.io/learn/database/postgresql/installation/3-psql/).
1. [Youtube](https://www.youtube.com/watch?v=FFo8pH-kfQ8&list=PLwvrYc43l1MxAEOI_KwGe8l42uJxMoKeS&index=6).