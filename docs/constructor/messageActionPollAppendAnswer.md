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
			text : 'toDkGxhUEXKwu1aq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 34,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 26,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 44,
					language : '5C1KwytSuTseBGNW',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 15,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : 7126133978757767235,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 28,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 56,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 64,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 83,
					document_id : -5997568047816188344,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 83,
					date : 58,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 1,
					old_text : 'RAOp9IctM51gbeVN',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 87,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -473630863101975433,
		),
		date : 63,
	),
);
```