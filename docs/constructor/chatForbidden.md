# chatForbidden

**Description** : *A group to which the user has no access\. E\.g\., because the user was kicked from the group*

**Layer** : 218

```tl
chatForbidden#6592a1a7 id:long title:string = Chat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | User identifier |
| <mark>title</mark> | [`string`](type/string) | Group name |

---

## Type

[Chat](type/Chat)

---

## Example

```php
$chat = $client->chatForbidden(
	id : -3576533392693152569,
	title : '41F9k7UKOINVQHep',
);
```