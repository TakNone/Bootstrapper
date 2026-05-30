# messageActionGroupCall

**Description** : *The group call has ended*

**Layer** : 222

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
		id : 6092518254981451520,
		access_hash : -1618717374322157032,
	),
	duration : 99,
);
```