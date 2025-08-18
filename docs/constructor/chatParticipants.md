# chatParticipants

**Description** : *Group members*

**Layer** : 211

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
	chat_id : 2350705773849918602,
	participants : array(
		$client->chatParticipant(
			user_id : -4541449262755554188,
			inviter_id : 2887444828161127984,
			date : 92,
		),
		$client->chatParticipantCreator(
			user_id : -308146189364639308,
		),
		$client->chatParticipantAdmin(
			user_id : 4238849600923651479,
			inviter_id : -669395530830233393,
			date : 49,
		),
	),
	version : 64,
);
```