# messageActionPollDeleteAnswer

**Description** : *An answer option was removed from an open\-answer poll &raquo;*

**Layer** : 229

```tl
messageActionPollDeleteAnswer#399674dc answer:PollAnswer = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | The answer that was removed |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPollDeleteAnswer(
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'marqwD1EVR2IHXW4',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 100,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 4,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 0,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : 'etCnR6aZbdcHlkNT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 6,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : -6311857137098508553,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 57,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : -5122363066579530773,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 78,
					date : 88,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 43,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 10,
					old_text : 'zJWCA3DaNxLSoZ7M',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 37,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : 7685552755358216459,
		),
		date : 31,
	),
);
```