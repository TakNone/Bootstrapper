# contacts.contactsNotModified

**Description** : *Contact list on the server is the same as the list on the client*

**Layer** : 211

```tl
contacts.contactsNotModified#b74ba9d2 = contacts.Contacts;
```

---

## Type

[contacts.Contacts](type/contacts.Contacts)

---

## Example

```php
$contactsContacts = $client->contacts->contactsNotModified();
```