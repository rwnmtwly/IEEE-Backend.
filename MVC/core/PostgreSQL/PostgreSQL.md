# PostgreSQL

## Content:
1. [What is RDBMS?](#what-is-rdbms)
1. [RDBMS vs. DBMS.](#rdbms-vs-dbms)
1. [What Is PostgreSQL?](#what-is-postgresql)
1. [PostgreSQL Clients.](#postgresql-clients)
1. [What purpose does pgAdmin serve in PostgreSQL?](#what-purpose-does-pgadmin-serve-in-postgresql)
1. [Naming conventions.](#naming-conventions)
1. [Refernces in order of appearance.](#refernces-in-order-of-appearance)
1. [Constraints in Postgresql.](#constraints-in-postgresql)
1. [Indexing in Postgresql.](#indexing-in-postgresql)
1. [Relationships:](#relationships)
    * [One to one.](#one-to-one)
    * [One to many.](#one-to-many)
 
1. [Multi-version concurrency Control.](#multi-version-concurrency-control)
1. [Triggers.](#triggers)
1. [How can you take the backup of a database?](#how-can-you-take-the-backup-of-a-database)
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
### RDBMS vs. DBMS:

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
### PostgreSQL Clients: 
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

### Constraints in Postgresql:
Constraints are the rules enforced on data columns on table. These are used to prevent invalid data from being entered into the database. This ensures the accuracy and reliability of the data in the database.

Constraints could be column level or table level. Column level constraints are applied only to one column whereas table level constraints are applied to the whole table. Defining a data type for a column is a constraint in itself. For example, a column of type DATE constrains the column to valid dates.

|Constraint Type |Function|
|:---------------|:-------|
|NOT NULL |Ensures that a column cannot have NULL value.|
|UNIQUE |Ensures that all values in a column are different.|
|PRIMARY Key |Uniquely identifies each row/record in a database table.|
|FOREIGN Key |Constrains data based on columns in other tables.|
|CHECK |The CHECK constraint ensures that all values in a column satisfy certain conditions.|
|EXCLUSION |The EXCLUDE constraint ensures that if any two rows are compared on the specified column(s) or expression(s) using the specified operator(s), not all of these comparisons will return TRUE.| 

--- 

### Indexing in Postgresql:
Indexing in PostgreSQL is a process that involves creating data structures that are optimized to efficiently search and retrieve data from tables.

PostgreSQL has several index types: B-tree, Hash, GiST, SP-GiST, GIN, and BRIN. Each index type uses a different storage structure and algorithm to cope with different kinds of queries.

When you use the `CREATE INDEX` statement without specifying the index type, PostgreSQL uses the B-tree index type by default because it is best to fit the most common queries.

#### B-tree indexing:
B-tree is a self-balancing tree that maintains sorted data and allows searches, insertions, deletions, and sequential access in logarithmic time.

#### Hash indexes:
Hash indexes can handle only simple equality comparison (=). It means that whenever an indexed column is involved in a comparison using the equal(=) operator, the query planner will consider using a hash index.

#### GIN indexes:
GIN stands for generalized inverted indexes. Useful when you have multiple values stored in a single column, for example, hstore, array, jsonb, and range types.

#### BRIN:
BRIN stands for block range indexes. BRIN is much smaller and less costly to maintain in comparison with a B-tree index.

BRIN allows the use of an index on a very large table that would previously be impractical using a B-tree without horizontal partitioning.

BRIN is often used on a column that has a linear sort order, for example, the created date column of the sales order table.

#### GiST:
GiST stands for Generalized Search Tree. GiST indexes allow the building of general tree structures. GiST indexes are useful in indexing geometric data types and full-text searches.

#### SP-GiST:
SP-GiST stands for space-partitioned GiST. SP-GiST supports partitioned search trees that facilitate the development of a wide range of different non-balanced data structures.

SP-GiST indexes are most useful for data that has a natural clustering element to it and is also not an equally balanced tree, for example, GIS, multimedia, phone routing, and IP routing.

---

### Relationships:
Relationships between tables are established using keys.

#### One to one:
* In a one-to-one relationship, each record in one table is related to exactly one record in another table, and vice versa.
* This relationship is established by creating a foreign key in one table that references the primary key in the other table.
* One common use case for a one-to-one relationship is when you have related information that you want to separate into distinct tables for organizational or performance reasons.
* For example, in a database for a company, you might have a **users** table and a **user_profile** table. Each user record in the users table might have a corresponding profile record in the user_profile table.

``` sql
-- One-to-One Relationship
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) UNIQUE
);

CREATE TABLE user_profile (
    id SERIAL PRIMARY KEY,
    user_id INT UNIQUE,
    full_name VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(id)
); 
``` 
#### One to many:
* In a one-to-many relationship, each record in one table can be related to one or more records in another table, but each record in the related table is related to only one record in the first table.
* This relationship is established by creating a foreign key in the "many" side table that references the primary key in the "one" side table.
* For example, in a database for a library, you might have a **books** table and an **authors** table. Each book can have only one author, but each author can have written multiple books. So, the **books** table would have a foreign key column referencing the **authors** table.
``` sql
-- One-to-Many Relationship
CREATE TABLE authors (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE books (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255),
    author_id INT,
    FOREIGN KEY (author_id) REFERENCES authors(id)
);
```
--- 
### Multi-version concurrency Control:
(MCC or MVCC), is a non-locking concurrency control method commonly used by database management systems to provide concurrent access to the database and in programming languages to implement transactional memory.

Unlike most other database systems which use locks for concurrency control, Postgres maintains data consistency by using a multiversion model. This means that while querying a database each transaction sees a snapshot of data (a database version) as it was some time ago, regardless of the current state of the underlying data. This protects the transaction from viewing inconsistent data that could be caused by (other) concurrent transaction updates on the same data rows, providing *transaction isolation* for each database session.

The main difference between multiversion and lock models is that in MVCC locks acquired for querying (reading) data don't conflict with locks acquired for writing data and so reading never blocks writing and writing never blocks reading.

---

### Triggers:
A trigger is a specification that the database should automatically execute a particular function whenever a certain type of operation is performed. Triggers can be defined to execute either before or after any INSERT, UPDATE, or DELETE operation, either once per modified row, or once per SQL statement. If a trigger event occurs, the trigger's function is called at the appropriate time to handle the event.

PostgreSQL provides two main types of triggers:
* Row-level triggers.
* Statement-level triggers.

The differences between the two kinds are how many times the trigger is invoked and at what time.

---

### How can you take the backup of a database?:

A PostgreSQL backup is a copy of the data that you can use to recover the database later. Typically, a backup includes all or selected data, schema, and configuration settings necessary to restore the database to a desired state.

You need to back up PostgreSQL databases regularly to prevent data loss in case of human errors, hardware failures, disasters, or other unforeseen circumstances.

Before backing up the databases, you should consider the following types of backups:

* Logical backups
* Physical backups

PostgreSQL comes with `pg_dump` and `pg_dumpall` tools that help you perform logical backups effectively. 

#### pg_dump

The `pg_dump` tool is a command-line utility that you can use to create a logical backup of a PostgreSQL database.

The `pg_dump` extracts a PostgreSQL database into a script file or other archive file. The file represents the snapshot of the database at the time `pg_dump` begins running.

The syntax of the `pg_dump` command:

``` sql
pg_dump [connection_option] [option] [dbname]
```
##### pg_dumpall
The `pg_dumpall` tool is a command-line utility that you can use to create logical backups of the entire PostgreSQL cluster, including all databases, schemas, roles, and other cluster-wide objects.

Unlike the `pg_dump` tool which backups individual databases or objects, the `pg_dumpall` tool offers a convenient way to make a backup of all databases in an PostgreSQL cluster (instance) in a single operation.

The syntax for `pg_dumpall` command:

``` sql 
pg_dump [connection_option] [option]
```
---
### Refernces in order of appearance:
1. [Google cloud](https://cloud.google.com/learn/what-is-a-relational-database).
1. [Geeks for Geeks](https://www.geeksforgeeks.org/difference-between-rdbms-and-dbms/).
1. [Youtube](https://www.youtube.com/watch?v=tzbA7VniRpw&list=PLwvrYc43l1MxAEOI_KwGe8l42uJxMoKeS&index=3&pp=iAQB).
1. [Hasura](https://hasura.io/learn/database/postgresql/installation/3-psql/).
1. [Youtube](https://www.youtube.com/watch?v=FFo8pH-kfQ8&list=PLwvrYc43l1MxAEOI_KwGe8l42uJxMoKeS&index=6).
1. [Enterprise DB](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjF6sfH_ZSEAxVCdqQEHRfIBDEQFnoECBAQAw&url=https%3A%2F%2Fwww.enterprisedb.com%2Fpostgres-tutorials%2Fpgadmin-comparable-tool-plsql-developer-postgresql&usg=AOvVaw0HfEVHAs7y0DD_ucG0w8Qm&opi=89978449).
1. [Geeks for Geeks](https://www.geeksforgeeks.org/postgresql-naming-conventions/).
1. [Tutorials Point](https://www.tutorialspoint.com/postgresql/postgresql_constraints.htm).
1. [Free Code Camp](https://www.freecodecamp.org/news/postgresql-indexing-strategies/).
1. [PostgreSQL Tutorial](https://www.postgresqltutorial.com/postgresql-indexes/postgresql-index-types/).
1. [ChatGPT](https://chat.openai.com/share/3e0a9f1b-70a4-46f2-b022-f21dac8241c3).
1. [Wikipedia](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjn_6jRnr-EAxWrQ6QEHZr9BUEQFnoECAYQAQ&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMultiversion_concurrency_control&usg=AOvVaw0rc8qcKso6XkgObFwC6Pcl&opi=89978449).
1. [PostgreSQL](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjn_6jRnr-EAxWrQ6QEHZr9BUEQFnoECBMQAQ&url=https%3A%2F%2Fwww.postgresql.org%2Fdocs%2F7.1%2Fmvcc.html&usg=AOvVaw1L8fO7AddalnLsofUUjgJA&opi=89978449).
1. [PostgreSQL Tutorial](https://www.postgresqltutorial.com/postgresql-triggers/introduction-postgresql-trigger/).
1. [PostgreSQL](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwis3O7ipr-EAxWSVqQEHc6HCXwQFnoECA8QAw&url=https%3A%2F%2Fwww.postgresql.org%2Fdocs%2F8.1%2Ftriggers.html&usg=AOvVaw3jHwll8kUTgNiH3Yifm3pV&opi=89978449).
1. [PostgreSQL Tutorial](https://www.postgresqltutorial.com/postgresql-administration/postgresql-backup-database/).
