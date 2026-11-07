# messageMediaVideoStream

**Description** : *Identifies the active group call associated with a live story &raquo;*

**Layer** : 233

```tl
messageMediaVideoStream#ca5cab89 flags:# rtmp_stream:flags.0?true call:InputGroupCall = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **rtmp_stream** | [`flags.0?true`](type/true) | Whether the live story uses RTMP livestream mode » |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Active live story group call |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaVideoStream(
	rtmp_stream : true,
	call : $client->inputGroupCall(
		id : 380344184183266118,
		access_hash : 953372186468392205,
	),
);
```