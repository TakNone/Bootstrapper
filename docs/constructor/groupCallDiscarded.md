# groupCallDiscarded

**Description** : *An ended group call*

**Layer** : 218

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
	id : 868487978452336322,
	access_hash : -6639953727591448035,
	duration : 94,
);
```