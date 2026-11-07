# messageActionGroupCallScheduled

**Description** : *A video chat/livestream was scheduled*

**Layer** : 229

```tl
messageActionGroupCallScheduled#b3a07661 call:InputGroupCall schedule_date:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Scheduled video chat/livestream |
| <mark>schedule_date</mark> | [`int`](type/int) | When is the group call scheduled to start |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGroupCallScheduled(
	call : $client->inputGroupCall(
		id : 248271142764531903,
		access_hash : 6718925539831214062,
	),
	schedule_date : 51,
);
```