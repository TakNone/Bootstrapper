# updateGroupCall

**Description** : *A new groupcall was started*

**Layer** : 216

```tl
updateGroupCall#97d64341 flags:# chat_id:flags.0?long call:GroupCall = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **chat_id** | [`flags.0?long`](type/long) | The channel/supergroup where this group call or livestream takes place |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call or livestream |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCall(
	chat_id : -2093165860574074099,
	call : $client->groupCallDiscarded(
		id : 7461628139106745399,
		access_hash : -7493953368046932823,
		duration : 56,
	),
);
```