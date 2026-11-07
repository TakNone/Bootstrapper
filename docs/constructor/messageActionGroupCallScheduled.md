# messageActionGroupCallScheduled

**Description** : *A video chat/livestream was scheduled*

**Layer** : 233

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
		id : -2116631529448244180,
		access_hash : -4068235953877903138,
	),
	schedule_date : 27,
);
```