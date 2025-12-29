# inputUser

**Description** : *Defines a user for further interaction*

**Layer** : 218

```tl
inputUser#f21158c6 user_id:long access_hash:long = InputUser;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash value from the user constructor |

---

## Type

[InputUser](type/InputUser)

---

## Example

```php
$inputUser = $client->inputUser(
	user_id : -5092673700123861032,
	access_hash : -8130267996417569667,
);
```