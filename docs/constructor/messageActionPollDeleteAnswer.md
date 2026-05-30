# messageActionPollDeleteAnswer

**Layer** : 225

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
			text : 'L7h9RfB40eHFPobQ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 47,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 96,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 61,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'hvm8EfBdSCLUblDa',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 18,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 43,
					user_id : 5740116696769044630,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 63,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 64,
					document_id : 493894654967627927,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 20,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 7,
					date : 47,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 38,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 80,
					old_text : 'wZ9MfYjl8eHILcKG',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 68,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -5141731431150558611,
		),
		date : 20,
	),
);
```