# updates.state

**Description** : *Updates state*

**Layer** : 214

```tl
updates.state#a56c2a3e pts:int qts:int date:int seq:int unread_count:int = updates.State;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pts</mark> | [`int`](type/int) | Number of events occurred in a text box |
| <mark>qts</mark> | [`int`](type/int) | Position in a sequence of updates in secret chats. For further details refer to article secret chats |
| <mark>date</mark> | [`int`](type/int) | Date of condition |
| <mark>seq</mark> | [`int`](type/int) | Number of sent updates |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |

---

## Type

[updates.State](type/updates.State)

---

## Example

```php
$updatesState = $client->updates->state(
	pts : 18,
	qts : 8,
	date : 68,
	seq : 26,
	unread_count : 2,
);
```