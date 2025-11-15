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
		id : -2719898260328152246,
		access_hash : -6798689455353498698,
	),
	duration : 26,
);
```