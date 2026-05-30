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
	chat_id : -5949265002236548650,
	participants : array(
		$client->chatParticipant(
			user_id : -3030301252826424130,
			inviter_id : -1444893432402434853,
			date : 97,
		),
		$client->chatParticipantCreator(
			user_id : -6110994272524308478,
		),
		$client->chatParticipantAdmin(
			user_id : -684738922618436695,
			inviter_id : 5173084528453605394,
			date : 79,
		),
	),
	version : 84,
);
```