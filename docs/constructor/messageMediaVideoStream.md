# messageMediaVideoStream

**Layer** : 218

```tl
messageMediaVideoStream#ca5cab89 flags:# rtmp_stream:flags.0?true call:InputGroupCall = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **rtmp_stream** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaVideoStream(
	rtmp_stream : true,
	call : $client->inputGroupCall(
		id : -8197490224688961415,
		access_hash : 5393892604443810887,
	),
);
```