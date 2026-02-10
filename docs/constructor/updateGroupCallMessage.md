# updateGroupCallMessage

**Layer** : 222

```tl
updateGroupCallMessage#d8326f0d call:InputGroupCall message:GroupCallMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>message</mark> | [`GroupCallMessage`](type/GroupCallMessage) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallMessage(
	call : $client->inputGroupCall(
		id : 3875815760106318259,
		access_hash : -5776066838658043425,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 88,
		from_id : $client->peerUser(
			user_id : 5705752077011884900,
		),
		date : 45,
		message : $client->textWithEntities(
			text : 'M8CzcsgOY0fxTykS',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 19,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 30,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : 'kE6bzXr5C1cOxjG8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : 8717737149240140274,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 91,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 66,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : 7011544287348114299,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 21,
				),
			),
		),
		paid_message_stars : 8179085161771652119,
	),
);
```