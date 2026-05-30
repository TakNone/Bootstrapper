# messageActionPollAppendAnswer

**Layer** : 225

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
			text : '21Gp9OBU7nIyNXgF',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 52,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 91,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'o3WE4lTh2vnAbrY6',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : -620610133865727627,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 1,
					document_id : 6552588854993728521,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 98,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 25,
					date : 57,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 31,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 81,
					old_text : 'pSNxBU2HXGWIecvw',
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
			user_id : -5717597193507538886,
		),
		date : 58,
	),
);
```