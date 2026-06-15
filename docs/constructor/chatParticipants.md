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
	chat_id : -225667753987627897,
	participants : array(
		$client->chatParticipant(
			user_id : 5027954320969950358,
			inviter_id : 3617878843035997537,
			date : 23,
			rank : 'VfMh3mjcP6ZXayH0',
		),
		$client->chatParticipantCreator(
			user_id : -891239855342288350,
			rank : 'KwrS6QXatkTNUh8c',
		),
		$client->chatParticipantAdmin(
			user_id : -8718261949285969257,
			inviter_id : 2855804113702032622,
			date : 94,
			rank : '7TahLldWZJKBONCm',
		),
	),
	version : 98,
);
```