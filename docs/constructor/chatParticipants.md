# chatParticipants

**Description** : *Group members*

**Layer** : 218

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
	chat_id : 4881789804046669361,
	participants : array(
		$client->chatParticipant(
			user_id : -4810673181010397723,
			inviter_id : -7013220388235432221,
			date : 42,
		),
		$client->chatParticipantCreator(
			user_id : 7803306869579996057,
		),
		$client->chatParticipantAdmin(
			user_id : 1060490694168642175,
			inviter_id : -4936583415932258321,
			date : 100,
		),
	),
	version : 66,
);
```