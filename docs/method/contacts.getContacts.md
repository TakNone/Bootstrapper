# contacts.getContacts

**Description** : *Returns the current user&#039;s contact list*

**Layer** : 211

```tl
contacts.getContacts#5dd69e12 hash:long = contacts.Contacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here.Note that the hash is computed using the usual algorithm, passing to the algorithm first the previously returned contacts.contacts.saved_count field, then max 100000 sorted user IDs from the contact list, including the ID of the currently logged in user if it is saved as a contact. Example: tdlib implementation |

---

## Result

[contacts.Contacts](type/contacts.Contacts)

---

## Example

```php
$contactsContacts = $client->contacts->getContacts(
	hash : 4974497770552881280,
);
```