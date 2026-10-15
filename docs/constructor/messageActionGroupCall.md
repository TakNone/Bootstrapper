# messageActionGroupCall

**Description** : *A video chat/livestream was started or terminated*

**Layer** : 229

```tl
messageActionGroupCall#7a0d7f42 flags:# call:InputGroupCall duration:flags.0?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream that started or ended |
| **duration** | [`flags.0?int`](type/int) | Duration of the group call in seconds, for terminated calls |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGroupCall(
	call : $client->inputGroupCall(
		id : 6478792479802890311,
		access_hash : -2678001613246917031,
	),
	duration : 62,
);
```