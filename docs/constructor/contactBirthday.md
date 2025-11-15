# contactBirthday

**Description** : *Birthday information of a contact*

**Layer** : 218

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
	contact_id : -876097508074367487,
	birthday : $client->birthday(
		day : 99,
		month : 99,
		year : 34,
	),
);
```