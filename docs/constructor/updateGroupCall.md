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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **chat_id** | [`flags.0?long`](type/long) | The channel/supergroup where this group call or livestream takes place |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call or livestream |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCall(
	chat_id : -5164281159451262643,
	call : $client->groupCallDiscarded(
		id : 9130479460086626731,
		access_hash : 4109728038897799111,
		duration : 62,
	),
);
```