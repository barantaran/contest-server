CREATE OR REPLACE ALGORITHM=
MERGE VIEW `moderation_stack_grouped` AS
SELECT *
FROM `moderation_stack_filtered`
GROUP BY `email`,
         `name`,
         `surname`,
         `age`
ORDER BY `email`,
         `surname`,
         `name`