# contactBirthday

**Description** : *Birthday information of a contact*

**Layer** : 222

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
	contact_id : 3423766605372189210,
	birthday : $client->birthday(
		day : 22,
		month : 10,
		year : 62,
	),
);
```