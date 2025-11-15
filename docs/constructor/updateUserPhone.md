# updateUserPhone

**Description** : *A user&#039;s phone number was changed*

**Layer** : 216

```tl
updateUserPhone#5492a13 user_id:long phone:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>phone</mark> | [`string`](type/string) | New phone number |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserPhone(
	user_id : -7656443932106279833,
	phone : '+1234567890',
);
```