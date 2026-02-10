# chatParticipants

**Description** : *Group members*

**Layer** : 222

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
	chat_id : 6545710335467426222,
	participants : array(
		$client->chatParticipant(
			user_id : 5122922639083485067,
			inviter_id : 4816908354676344654,
			date : 82,
		),
		$client->chatParticipantCreator(
			user_id : 3325561924404851379,
		),
		$client->chatParticipantAdmin(
			user_id : 6850228734284879185,
			inviter_id : 6747446982500647055,
			date : 73,
		),
	),
	version : 76,
);
```