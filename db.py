from sqlalchemy import URL, create_engine

connection_string = URL.create(
    'postgresql',
    username='koyeb-adm',
    password='vYKHloa5JTI0',
    host='ep-divine-star-a2dgp9yr.eu-central-1.pg.koyeb.app',
    database='koyebdb',
)

engine = create_engine(connection_string)
