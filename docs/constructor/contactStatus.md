# contactStatus

**Description** : *Contact status: online / offline*

**Layer** : 218

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
	user_id : -3802623193447141481,
	status : $client->userStatusEmpty(),
);
```