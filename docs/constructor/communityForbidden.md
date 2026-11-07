# communityForbidden

**Layer** : 233

```tl
communityForbidden#fd3cdab8 flags:# id:long access_hash:flags.13?long title:string = Chat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| **access_hash** | [`flags.13?long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |

---

## Type

[Chat](type/Chat)

---

## Example

```php
$chat = $client->communityForbidden(
	id : -7615897353694966343,
	access_hash : -3532602589872329009,
	title : 'PlJtXDN1hHw7gykf',
);
```