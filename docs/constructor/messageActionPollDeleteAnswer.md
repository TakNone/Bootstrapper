# messageActionPollDeleteAnswer

**Description** : *An answer option was removed from an open\-answer poll &raquo;*

**Layer** : 233

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
			text : 'WgFMf8N4j0lTk2dy',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 84,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 1,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 14,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 53,
					language : 'ZDlapYoKm9JCWQ0s',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : -7785183917545148271,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 47,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : -5243945104035044386,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 60,
					date : 1,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 62,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 78,
					old_text : 'ZsJN7tbj16rwzxhc',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 4,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 74,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -8643093326369336960,
		),
		date : 23,
	),
);
```