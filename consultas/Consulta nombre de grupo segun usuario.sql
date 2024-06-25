SELECT 
    DISTINCT `groups`.name
FROM users_groups 
INNER JOIN `groups` ON `groups`.id = users_groups.groups_id
WHERE users_groups.user_id = 15
