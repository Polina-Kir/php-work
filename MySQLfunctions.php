<?php

const USERNAME = "khokhlacheva";
const PASSWORD = "7902";
const URL = "mysql:host=db.mkalmo.xyz;dbname=khokhlacheva";

function addPerson($Contact)
{
    $connection = new PDO(URL, USERNAME, PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("insert into khokhlacheva.contacts (firstName, lastName) 
        values (:first, :last)");
    $statement->bindValue(":first", $Contact->firstName);
    $statement->bindValue(":last", $Contact->lastName);
    $statement->execute();

    $contactId = $connection->lastInsertId();

    $statement = $connection->prepare("insert into khokhlacheva.phones (contact_id, phone) 
values(:id, :phone)");
    $statement->bindValue(":id", $contactId);
    $statement->bindValue(":phone", $Contact->phone1);

    $statement->execute();

    if ($Contact->phone2 != "") {
        $statement = $connection->prepare("insert into khokhlacheva.phones (contact_id, phone) 
values(:id, :phone)");
        $statement->bindValue(":id", $contactId);
        $statement->bindValue(":phone", $Contact->phone2);

        $statement->execute();
    }

    if ($Contact->phone3 != "") {
        $statement = $connection->prepare("insert into khokhlacheva.phones (contact_id, phone) 
values(:id, :phone)");
        $statement->bindValue(":id", $contactId);
        $statement->bindValue(":phone", $Contact->phone3);

        $statement->execute();
    }


}

function getPersons()
{
    $connection = new PDO(URL, USERNAME, PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("select * from contacts, phones
    where contacts.id = phones.contact_id;");
    $statement->execute();

    $Persons = [];
    foreach ($statement as $row) {
        $id = $row["contact_id"];
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        if (array_key_exists($id, $Persons)) {
            if ($Persons[$id]->phone2 == "") {
                $Persons[$id]->phone2 = $row["phone"];
            } elseif ($Persons[$id]->phone3 == "") {
                $Persons[$id]->phone3 = $row["phone"];
            }
        } else {
            $phone = $row["phone"];
            $Person = new item($firstName, $lastName, $phone);
            $Persons[$id] = $Person;
        }

    }
    return array_values($Persons);
}
