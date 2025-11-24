# updateGroupCallMessage

**Layer** : 218

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
		id : 7926842726188263908,
		access_hash : 2548174622453009651,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 11,
		from_id : $client->peerUser(
			user_id : -3907535041874380231,
		),
		date : 72,
		message : $client->textWithEntities(
			text : 'xbw7NXtYJpLrSRyT',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 50,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 35,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 35,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : 'q6o3TYQWijDrLP2V',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 21,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : 2333621617217716301,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 40,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 80,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 100,
					document_id : 4882257669194490193,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
			),
		),
		paid_message_stars : -4360818315078487430,
	),
);
```