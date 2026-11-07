# messageActionPollAppendAnswer

**Description** : *A new answer option was added to an open\-answer poll &raquo;*

**Layer** : 229

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
			text : 'sKhurHY36CGDfUQ5',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 85,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 96,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : '9BqQhv0JUgKCmb57',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 90,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : 5820751468046869228,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 95,
					document_id : -1347862584598383455,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 56,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 97,
					date : 60,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 2,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 85,
					old_text : 'VxGJDyzO82fsZpR9',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 48,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -7730320090879979336,
		),
		date : 94,
	),
);
```