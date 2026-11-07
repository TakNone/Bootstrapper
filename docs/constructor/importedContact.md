# importedContact

**Description** : *Successfully imported contact*

**Layer** : 229

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
	user_id : -8937415017986405388,
	client_id : 8646084405742383545,
);
```