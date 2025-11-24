# messageActionGroupCallScheduled

**Description** : *A group call was scheduled*

**Layer** : 218

```tl
messageActionGroupCallScheduled#b3a07661 call:InputGroupCall schedule_date:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>schedule_date</mark> | [`int`](type/int) | When is this group call scheduled to start |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGroupCallScheduled(
	call : $client->inputGroupCall(
		id : 984635763840150467,
		access_hash : 2444531263318560388,
	),
	schedule_date : 96,
);
```