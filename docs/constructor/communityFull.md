# communityFull

**Layer** : 233

```tl
communityFull#cbb7a507 flags:# id:long about:string chat_photo:Photo linked_peers:Vector<CommunityPeer> admins_count:flags.1?int kicked_count:flags.2?int peer_link_requests_pending:flags.0?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| <mark>about</mark> | [`string`](type/string) | NOTHING |
| <mark>chat_photo</mark> | [`Photo`](type/Photo) | NOTHING |
| <mark>linked_peers</mark> | [`Vector<CommunityPeer>`](type/CommunityPeer) | NOTHING |
| **admins_count** | [`flags.1?int`](type/int) | NOTHING |
| **kicked_count** | [`flags.2?int`](type/int) | NOTHING |
| **peer_link_requests_pending** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[ChatFull](type/ChatFull)

---

## Example

```php
$chatFull = $client->communityFull(
	id : 6634772042465730297,
	about : 'FVHerAlIz2p6OqSU',
	chat_photo : $client->photoEmpty(
		id : -2406320332739750185,
	),
	linked_peers : array(
		$client->communityPeer(
			can_view_history : true,
			visible : false,
			peer : $client->peerUser(
				user_id : 6412048022670441041,
			),
		),
	),
	admins_count : 61,
	kicked_count : 64,
	peer_link_requests_pending : 87,
);
```