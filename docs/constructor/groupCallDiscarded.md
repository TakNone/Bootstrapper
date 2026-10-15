# groupCallDiscarded

**Description** : *Describes an ended group call*

**Layer** : 229

```tl
groupCallDiscarded#7780bcb4 id:long access_hash:long duration:int = GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Group call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Group call access hash |
| <mark>duration</mark> | [`int`](type/int) | Group call duration |

---

## Type

[GroupCall](type/GroupCall)

---

## Example

```php
$groupCall = $client->groupCallDiscarded(
	id : 7730084598391577216,
	access_hash : 7571643223320215550,
	duration : 33,
);
```