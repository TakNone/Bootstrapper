# messageMediaVideoStream

**Layer** : 225

```tl
messageMediaVideoStream#ca5cab89 flags:# rtmp_stream:flags.0?true call:InputGroupCall = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
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
		id : 8065058002080561171,
		access_hash : -9113950767657998274,
	),
);
```