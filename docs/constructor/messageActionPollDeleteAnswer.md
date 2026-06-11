# messageActionPollDeleteAnswer

**Layer** : 227

```tl
messageActionPollDeleteAnswer#399674dc answer:PollAnswer = MessageAction;
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
$messageAction = $client->messageActionPollDeleteAnswer(
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : '1f432DBhFaxtTYLG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 91,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 22,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 84,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 5,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 4,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 'BGA2WINYRuwQintE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : -8976731895777430709,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 30,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 33,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 99,
					document_id : -9087408283412023854,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 71,
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
					date : 68,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 60,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 83,
					old_text : 'lf6tpoG8ZUNyKz2c',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 56,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -5876308629817484544,
		),
		date : 85,
	),
);
```