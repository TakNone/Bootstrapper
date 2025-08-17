# phoneCallDiscarded

**Description** : *Indicates a discarded phone call*

**Layer** : 211

```tl
phoneCallDiscarded#50ca4de1 flags:# need_rating:flags.2?true need_debug:flags.3?true video:flags.6?true id:long reason:flags.0?PhoneCallDiscardReason duration:flags.1?int = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **need_rating** | [`flags.2?true`](type/true) | Whether the server required the user to rate the call |
| **need_debug** | [`flags.3?true`](type/true) | Whether the server required the client to send the libtgvoip call debug data |
| **video** | [`flags.6?true`](type/true) | Whether the call was a video call |
| <mark>id</mark> | [`long`](type/long) | Call ID |
| **reason** | [`flags.0?PhoneCallDiscardReason`](type/PhoneCallDiscardReason) | Why was the phone call discarded |
| **duration** | [`flags.1?int`](type/int) | Duration of the phone call in seconds |

---

## Type

[PhoneCall](type/PhoneCall)

---

## Example

```php
$phoneCall = $client->phoneCallDiscarded(
	need_rating : true,
	need_debug : true,
	video : true,
	id : 7082131993149762492,
	reason : $client->phoneCallDiscardReasonMissed(),
	duration : 71,
);
```