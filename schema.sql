DROP TABLE if exists users;
DROP TABLE if exists posts;

-- Users Table
CREATE TABLE users(id integer PRIMARY KEY, username text, email integer, password text);

INSERT INTO users(id, username, email, password) VALUES
    (1, "developer", "developer@app.com", "$2y$10$9cLVIkAV5U4zKz/wI4MGEexSk91/e5TS6DODu/Dkd/Zkih19OpA7O"),
    (2, "admin", "admin@app.com", "$2y$10$9cLVIkAV5U4zKz/wI4MGEexSk91/e5TS6DODu/Dkd/Zkih19OpA7O");

-- Posts Table
CREATE TABLE posts(id integer PRIMARY KEY, title text, content text);
INSERT INTO  posts(id, title, content) VALUES
    (1, "First Post Title", "First Post Content Here."),
    (2, "Second Post Title", "Second Post Content Here."),
    (3, "Third Post Title", "Third Post Content Here.");
