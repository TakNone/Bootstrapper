# inlineButtonTypeSwitchInline

**Layer** : 233

```tl
inlineButtonTypeSwitchInline#93773ff5 flags:# same_peer:flags.0?true query:string peer_types:flags.1?Vector<InlineQueryPeerType> = InlineButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **same_peer** | [`flags.0?true`](type/true) | NOTHING |
| <mark>query</mark> | [`string`](type/string) | NOTHING |
| **peer_types** | [`flags.1?Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | NOTHING |

---

## Type

[InlineButtonType](type/InlineButtonType)

---

## Example

```php
$inlineButtonType = $client->inlineButtonTypeSwitchInline(
	same_peer : true,
	query : 'Pexc5yYkhuLjvbSm',
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
);
```