# messageActionPollAppendAnswer

**Layer** : 227

```tl
messageActionPollAppendAnswer#9da1cd6c answer:PollAnswer = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPollAppendAnswer(
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'GvHshRl4uJYj0fKa',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 42,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 68,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 29,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 13,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 39,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 94,
					language : 'fDITzLBO0RmG1lCk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 96,
					user_id : 4055649992867492115,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 22,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 81,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 18,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 96,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 89,
					document_id : 6348819874924256894,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 14,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 84,
					date : 50,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 61,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 29,
					old_text : 'kcy9qnp15H2uRFSQ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 55,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : 4880614982560630844,
		),
		date : 26,
	),
);
```