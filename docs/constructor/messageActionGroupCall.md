# messageActionGroupCall

**Description** : *The group call has ended*

**Layer** : 216

```tl
messageActionGroupCall#7a0d7f42 flags:# call:InputGroupCall duration:flags.0?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| **duration** | [`flags.0?int`](type/int) | Group call duration |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGroupCall(
	call : $client->inputGroupCall(
		id : -1462617584561382495,
		access_hash : 8638675998897431477,
	),
	duration : 98,
);
```