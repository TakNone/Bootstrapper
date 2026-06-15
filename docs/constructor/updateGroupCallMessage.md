# updateGroupCallMessage

**Layer** : 227

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
		id : -8487746332115264688,
		access_hash : -1788229344328033772,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 87,
		from_id : $client->peerUser(
			user_id : -8566781833899367206,
		),
		date : 54,
		message : $client->textWithEntities(
			text : 'UgqFpyZaJ2Nnm8P6',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 68,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 66,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 53,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 82,
					language : 'r0wxtPUWib42yeYT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : -4567995988979187707,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 30,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : -2789348297106417375,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 37,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 100,
					date : 40,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 24,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 36,
					old_text : 'vwSN4OL2DlIuTXhG',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 90,
				),
			),
		),
		paid_message_stars : -1355842173525789542,
	),
);
```