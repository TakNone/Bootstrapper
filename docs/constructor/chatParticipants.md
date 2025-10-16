# chatParticipants

**Description** : *Group members*

**Layer** : 216

```tl
chatParticipants#3cbc93f8 chat_id:long participants:Vector<ChatParticipant> version:int = ChatParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group identifier |
| <mark>participants</mark> | [`Vector<ChatParticipant>`](type/ChatParticipant) | List of group members |
| <mark>version</mark> | [`int`](type/int) | Group version number |

---

## Type

[ChatParticipants](type/ChatParticipants)

---

## Example

```php
$chatParticipants = $client->chatParticipants(
	chat_id : -1948298403083467483,
	participants : array(
		$client->chatParticipant(
			user_id : 4245737459423997004,
			inviter_id : 4530639489533026007,
			date : 66,
		),
		$client->chatParticipantCreator(
			user_id : -6674083018364972828,
		),
		$client->chatParticipantAdmin(
			user_id : -7404854708300878868,
			inviter_id : 2909104256348951015,
			date : 61,
		),
	),
	version : 35,
);
```