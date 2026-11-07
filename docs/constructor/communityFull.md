# communityFull

**Layer** : 229

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
	id : 1903314138633303239,
	about : 'kfDJXMcwUeQVnb0p',
	chat_photo : $client->photoEmpty(
		id : -1553948671341453792,
	),
	linked_peers : array(
		$client->communityPeer(
			can_view_history : true,
			visible : true,
			peer : $client->peerUser(
				user_id : 6924663671737766489,
			),
		),
	),
	admins_count : 93,
	kicked_count : 4,
	peer_link_requests_pending : 7,
);
```