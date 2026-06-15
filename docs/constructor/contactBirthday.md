# contactBirthday

**Description** : *Birthday information of a contact*

**Layer** : 227

```tl
contactBirthday#1d998733 contact_id:long birthday:Birthday = ContactBirthday;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contact_id</mark> | [`long`](type/long) | User ID |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | Birthday information |

---

## Type

[ContactBirthday](type/ContactBirthday)

---

## Example

```php
$contactBirthday = $client->contactBirthday(
	contact_id : -3649853588481709320,
	birthday : $client->birthday(
		day : 89,
		month : 61,
		year : 10,
	),
);
```