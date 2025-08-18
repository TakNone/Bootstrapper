# contactStatus

**Description** : *Contact status: online / offline*

**Layer** : 211

```tl
contactStatus#16d9703b user_id:long status:UserStatus = ContactStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>status</mark> | [`UserStatus`](type/UserStatus) | Online status |

---

## Type

[ContactStatus](type/ContactStatus)

---

## Example

```php
$contactStatus = $client->contactStatus(
	user_id : 3045272094205650514,
	status : $client->userStatusEmpty(),
);
```