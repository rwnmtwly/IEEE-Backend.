CREATE TABLE members(
    members_id NOT NULL BIGSERIAL PRIMARY KEY,
    name VARCHAR(40) NOT NULL,
    address VARCHAR(200) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(120)
);

CREATE TABLE subscriptions(
    sub_id NOT NULL BIGSERIAL PRIMARY KEY,
    members_id NOT NULL BIGSERIAL,
    FOREIGN KEY (members_id) REFERENCES members(members_id)
);

CREATE TABLE instructors(
    instructor_id BIGSERIAL PRIMARY KEY NOT NULL,
    name VARCHAR (40),
    address VARCHAR(200),
    phone_number VARCHAR(15),
    email VARCHAR(120),
    expertise VARCHAR(600)
);

CREATE TABLE fitness_classes(
    class_id BIGSERIAL PRIMARY KEY NOT NULL,
    title VARCHAR(30) NOT NULL,
    description VARCHAR(600) NOT NULL,
    schedule TIMESTAMP NOT NULL,
    maximum_capacity INT,
    instructor_id BIGINT,
    FOREIGN KEY (instructor_id) REFERENCES instructors(instructor_id)
);

CREATE TABLE class_enrollment(
    enrollment_id BIGSERIAL PRIMARY KEY NOT NULL,
    members_id BIGINT,
    class_id BIGINT,
    enrollment_date_&_time TIMESTAMP NOT NULL,
    FOREIGN KEY (members_id) REFERENCES members(members_id),
    FOREIGN KEY (class_id) REFERENCES fitness_classes(class_id)
);

CREATE TABLE equipment(
    equipment_id BIGSERIAL PRIMARY KEY NOT NULL,
    name VARCHAR(40),
    description VARCHAR(600),
    availability BOOLEAN
);

CREATE TABLE gym_equipment_assignment(
    assigned_id BIGSERIAL PRIMARY KEY NOT NULL,
    equipment_id BIGINT,
    class_id BIGINT,
    FOREIGN KEY (equipment_id) REFERENCES equipment(equipment_id),
    FOREIGN KEY (class_id) REFERENCES fitness_classes(class_id)
);
