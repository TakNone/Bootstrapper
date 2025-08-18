# updateGroupCall

**Description** : *A new groupcall was started*

**Layer** : 211

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
	chat_id : 3354862958735691510,
	call : $client->groupCallDiscarded(
		id : -467168216503356380,
		access_hash : 6498270587380629637,
		duration : 91,
	),
);
```