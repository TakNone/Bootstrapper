# messageActionPollAppendAnswer

**Description** : *A new answer option was added to an open\-answer poll &raquo;*

**Layer** : 233

```tl
messageActionPollAppendAnswer#9da1cd6c answer:PollAnswer = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | The answer that was added |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPollAppendAnswer(
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'cu7grFY5tLSyJjB1',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 100,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 60,
					language : 'mj3Wv4LAGT9EXeul',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : 3613000961215390806,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 53,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 67,
					document_id : -6658381679560299679,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 42,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 30,
					date : 39,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 94,
					old_text : 'OTIHRN26ZSEgtF4L',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 76,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 50,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -8274508763179364846,
		),
		date : 11,
	),
);
```