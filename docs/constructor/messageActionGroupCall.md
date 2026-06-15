# messageActionGroupCall

**Description** : *The group call has ended*

**Layer** : 227

```tl
messageActionGroupCall#7a0d7f42 flags:# call:InputGroupCall duration:flags.0?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : 3071329043674092344,
		access_hash : 6286318052674350737,
	),
	duration : 59,
);
```