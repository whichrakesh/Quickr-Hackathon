alter table lawyers add constraint  fk_id_email foreign key (id,email) references users(id,email);