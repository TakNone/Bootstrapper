# communities.create

**Layer** : 229

```tl
communities.create#a63859ec flags:# hidden:flags.1?true title:string about:flags.0?string peer:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **hidden** | [`flags.1?true`](type/true) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **about** | [`flags.0?string`](type/string) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->communities->create(
	hidden : true,
	title : 'CejUTwsdyNDY4Bqi',
	about : 'sqr9EkQfOYB4LhNX',
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```