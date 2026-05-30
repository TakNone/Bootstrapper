# messageActionPhoneCall

**Description** : *A phone call*

**Layer** : 222

```tl
messageActionPhoneCall#80e11a7f flags:# video:flags.2?true call_id:long reason:flags.0?PhoneCallDiscardReason duration:flags.1?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.2?true`](type/true) | Is this a video call? |
| <mark>call_id</mark> | [`long`](type/long) | Call ID |
| **reason** | [`flags.0?PhoneCallDiscardReason`](type/PhoneCallDiscardReason) | If the call has ended, the reason why it ended |
| **duration** | [`flags.1?int`](type/int) | Duration of the call in seconds |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPhoneCall(
	video : true,
	call_id : 5545311460601795743,
	reason : $client->phoneCallDiscardReasonMissed(),
	duration : 83,
);
```