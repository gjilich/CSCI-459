# Create the user
create user 'ts_user' identified by 'ts_user';

# Allow it to do anything
grant all privileges on *.* to 'ts_user';
