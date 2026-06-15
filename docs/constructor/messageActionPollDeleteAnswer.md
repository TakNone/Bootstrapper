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
			text : 'E1mJsBzNqlY4Ke7T',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 29,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 67,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 6,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 61,
					language : 'QMP8koTwJcgFsZbA',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 9,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 5178397023576790390,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 16,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 94,
					document_id : -5523669278553987137,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 39,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 9,
					date : 9,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 74,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 2,
					old_text : 'BhoMpfNg5eFcnCu9',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 36,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : 8176253593716843399,
		),
		date : 41,
	),
);
```