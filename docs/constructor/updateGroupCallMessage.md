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
		id : -1505925855450629540,
		access_hash : 7236814415310268386,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 69,
		from_id : $client->peerUser(
			user_id : 2209075702819970648,
		),
		date : 78,
		message : $client->textWithEntities(
			text : 'oKC8mQxeF1JGHNVA',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 91,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 42,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 35,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 27,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : 'Nz67BnopiYcQM2eZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 49,
					user_id : 7691510911432859452,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 70,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 4,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : 2911552487530843707,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 87,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 27,
					date : 56,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 94,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 27,
					old_text : 'OWk1rTAb3458IqgE',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 64,
				),
			),
		),
		paid_message_stars : -1618034524700580825,
	),
);
```