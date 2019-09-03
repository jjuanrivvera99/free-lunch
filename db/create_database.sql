-- DROP DATABASE laravel;

CREATE DATABASE laravel
    WITH 
    OWNER = laravel
    ENCODING = 'UTF8'
    -- LC_COLLATE = 'en_US.utf8'
    -- LC_CTYPE = 'en_US.utf8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE TABLE public.kitchener (
    kitchener_id INTEGER NOT NULL,
    user_id INTEGER NOT NULL,
    CONSTRAINT kitchener_pk PRIMARY KEY (kitchener_id)
);


CREATE TABLE public.plate_state (
    plate_state_id INTEGER NOT NULL,
    description VARCHAR NOT NULL,
    CONSTRAINT plate_state_pk PRIMARY KEY (plate_state_id)
);


CREATE TABLE public.ingredient (
    ingredient_id INTEGER NOT NULL,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(100) NOT NULL,
    CONSTRAINT ingredient_pk PRIMARY KEY (ingredient_id)
);


CREATE TABLE public.grocery (
    grocery_id VARCHAR NOT NULL,
    ingredient_id INTEGER NOT NULL,
    quantity INTEGER NOT NULL,
    CONSTRAINT grocery_pk PRIMARY KEY (grocery_id)
);


CREATE TABLE public.plate (
    plate_id INTEGER NOT NULL,
    plate_state_id INTEGER NOT NULL,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(100) NOT NULL,
    CONSTRAINT plate_pk PRIMARY KEY (plate_id)
);


CREATE TABLE public.request (
    request_id INTEGER NOT NULL,
    plate_id INTEGER NOT NULL,
    kitchener_id INTEGER NOT NULL,
    date DATE NOT NULL,
    CONSTRAINT request_pk PRIMARY KEY (request_id)
);


CREATE TABLE public.plate_ingredient (
    plate_ingredient_id INTEGER NOT NULL,
    plate_id INTEGER NOT NULL,
    ingredient_id INTEGER NOT NULL,
    unit INTEGER NOT NULL,
    CONSTRAINT plate_ingredient_pk PRIMARY KEY (plate_ingredient_id)
);


ALTER TABLE public.request ADD CONSTRAINT kitchener_order_fk
FOREIGN KEY (kitchener_id)
REFERENCES public.kitchener (kitchener_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.plate ADD CONSTRAINT plate_state_plate_fk
FOREIGN KEY (plate_state_id)
REFERENCES public.plate_state (plate_state_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.plate_ingredient ADD CONSTRAINT ingredient_plate_ingredient_fk
FOREIGN KEY (ingredient_id)
REFERENCES public.ingredient (ingredient_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.grocery ADD CONSTRAINT ingredient_grocery_fk
FOREIGN KEY (ingredient_id)
REFERENCES public.ingredient (ingredient_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.plate_ingredient ADD CONSTRAINT plate_plate_ingredient_fk
FOREIGN KEY (plate_id)
REFERENCES public.plate (plate_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.request ADD CONSTRAINT plate_order_fk
FOREIGN KEY (plate_id)
REFERENCES public.plate (plate_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;