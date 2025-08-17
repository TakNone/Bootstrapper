# contactBirthday

**Description** : *Birthday information of a contact*

**Layer** : 211

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
	contact_id : -4659509931712558001,
	birthday : $client->birthday(
		day : 29,
		month : 82,
		year : 13,
	),
);
```