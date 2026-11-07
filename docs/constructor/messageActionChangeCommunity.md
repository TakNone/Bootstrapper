# messageActionChangeCommunity

**Layer** : 233

```tl
messageActionChangeCommunity#5d20bae8 flags:# community_id:flags.0?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **community_id** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChangeCommunity(
	community_id : -5072896462711600647,
);
```