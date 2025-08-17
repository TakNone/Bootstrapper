# importedContact

**Description** : *Successfully imported contact*

**Layer** : 211

```tl
importedContact#c13e3c50 user_id:long client_id:long = ImportedContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>client_id</mark> | [`long`](type/long) | The contact's client identifier (passed to one of the InputContact constructors) |

---

## Type

[ImportedContact](type/ImportedContact)

---

## Example

```php
$importedContact = $client->importedContact(
	user_id : 5877309856899303367,
	client_id : -5864179422377113931,
);
```