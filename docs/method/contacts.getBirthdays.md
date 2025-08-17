# contacts.getBirthdays

**Description** : *Fetch all users with birthdays that fall within +1/-1 days, relative to the current day: this method should be invoked by clients every 6-8 hours, and if the result is non-empty, it should be used to appropriately update locally cached birthday information in user.birthday*

**Layer** : 211

```tl
contacts.getBirthdays#daeda864 = contacts.ContactBirthdays;
```

---

## Result

[contacts.ContactBirthdays](type/contacts.ContactBirthdays)

---

## Example

```php
$contactsContactBirthdays = $client->contacts->getBirthdays();
```