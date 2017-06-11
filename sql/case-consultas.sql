select a.titulo 'TITULO',
u.name 'AUTHOR',
sc.name 'SUBCATEGORIA',
c.name 'CATEGORIA'
from articles a
left join sub_categories sc on a.sub_category_id = sc.id
LEFT JOIN categories c on c.id = sc.category_id
left join users u on u.id = a.user_id 
