CREATE TYPE contactTypes AS ENUM ('Door', 'Window', 'Garage Door', 'Other');
CREATE TYPE lockStates AS ENUM ('Locked', 'Unlocked', 'Unknown');
CREATE TYPE contactStates AS ENUM ('Open', 'Closed', 'Unknown');
	

CREATE TABLE public.systems (
	systemID BIGSERIAL NOT NULL PRIMARY KEY,
	systemName VARCHAR(50) NOT NULL
);

CREATE TABLE public.users (
	userID BIGSERIAL NOT NULL PRIMARY KEY,
	userName VARCHAR NOT NULL,
	userPass VARCHAR(255) NOT NULL,
	userEmail VARCHAR NOT NULL,
	systemID BIGINT NOT NULL REFERENCES public.systems(systemID),
	CONSTRAINT uk_userEmail UNIQUE (userEmail)
);

CREATE TABLE public.devices (
	dbDeviceID BIGSERIAL NOT NULL PRIMARY KEY,
	deviceID BIGINT NOT NULL,
	systemID BIGINT NOT NULL REFERENCES public.systems(systemID)
);

CREATE TABLE public.lights (
	lightID BIGSERIAL NOT NULL PRIMARY KEY,
	lightName VARCHAR(50) NOT NULL,
	lightLevel INT,
	dbDeviceID BIGINT NOT NULL REFERENCES public.devices(dbDeviceID)
);

CREATE TABLE public.locks (
	lockID BIGSERIAL NOT NULL PRIMARY KEY,
	lockName VARCHAR(50) NOT NULL,
	lockState lockStates NOT NULL,
	dbDeviceID BIGINT NOT NULL REFERENCES public.devices(dbDeviceID)
);

CREATE TABLE public.contacts (
	contactID BIGSERIAL NOT NULL PRIMARY KEY,
	contactName VARCHAR NOT NULL,
	contactState contactStates NOT NULL,
	contactType contactTypes NOT NULL,
	dbDeviceID BIGINT NOT NULL REFERENCES public.devices(dbDeviceID)
);
