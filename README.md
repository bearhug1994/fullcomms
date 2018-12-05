# fullcomms
test

php artisan migrate will create the required tables in the database.

Create a record of the email address you want form submissions to be emailed to in the Owners table.
I have set up confirmation of form submission to be emailed to the last email address entered. Ideally i'd have taken the id
from $request and used find($id) to pluck the email from the database using the id submitted however this 
would have taken me significantly longer to do.
