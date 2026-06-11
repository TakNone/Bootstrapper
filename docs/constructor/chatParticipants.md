# chatParticipants

**Description** : *Group members*

**Layer** : 227

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
	chat_id : 2591405584528932916,
	participants : array(
		$client->chatParticipant(
			user_id : -2946237274425007827,
			inviter_id : -4920189608652253639,
			date : 63,
			rank : 'zrM2LhC1j0kSo9nQ',
		),
		$client->chatParticipantCreator(
			user_id : -862450213059128728,
			rank : 'A2Dq5SpENMZ8ieC7',
		),
		$client->chatParticipantAdmin(
			user_id : 7225322526377236601,
			inviter_id : -8667720976799327134,
			date : 52,
			rank : '0gQAWnVEPiTwF6HO',
		),
	),
	version : 35,
);
```