# updateEditForumTopic

**Layer** : 233

```tl
updateEditForumTopic#2366665c flags:# peer:Peer topic_id:int title:flags.0?string icon_emoji_id:flags.1?long closed:flags.2?Bool hidden:flags.3?Bool = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>topic_id</mark> | [`int`](type/int) | NOTHING |
| **title** | [`flags.0?string`](type/string) | NOTHING |
| **icon_emoji_id** | [`flags.1?long`](type/long) | NOTHING |
| **closed** | [`flags.2?Bool`](type/Bool) | NOTHING |
| **hidden** | [`flags.3?Bool`](type/Bool) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEditForumTopic(
	peer : $client->peerUser(
		user_id : 8519738130968831146,
	),
	topic_id : 80,
	title : '8i4TGvPp0FLjAeIH',
	icon_emoji_id : 5070694877190973138,
	closed : false,
	hidden : false,
);
```