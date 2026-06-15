# messageActionGroupCallScheduled

**Description** : *A group call was scheduled*

**Layer** : 227

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
		id : 6363643090350404563,
		access_hash : -163579931795756307,
	),
	schedule_date : 24,
);
```