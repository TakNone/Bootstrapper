# chatParticipants

**Description** : *Contains the full list of members of basic groups &raquo;; is NOT usable for supergroups/channels*

**Layer** : 229

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
	chat_id : 3219457558242458571,
	participants : array(
		$client->chatParticipant(
			user_id : -7596792824093166851,
			inviter_id : -8501478189519593837,
			date : 34,
			rank : '2NTZw8LbeX9dxmpV',
		),
		$client->chatParticipantCreator(
			user_id : -346958253246995375,
			rank : 'YRkDq23OxUvn9WCP',
		),
		$client->chatParticipantAdmin(
			user_id : -1270768565805981393,
			inviter_id : 8056573190427678666,
			date : 30,
			rank : 'aj7A3fZBbCyhn2wv',
		),
	),
	version : 100,
);
```