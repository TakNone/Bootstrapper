# messages.addPollAnswer

**Layer** : 225

```tl
messages.addPollAnswer#19bc4b6d peer:InputPeer msg_id:int answer:PollAnswer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->addPollAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 44,
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : '0MGU1pZbf9ze7YgQ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 56,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 55,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 56,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 77,
					language : 'EvfYJIx9bk8lZ20m',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 91,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : -7614520414195950328,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 80,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 4,
					document_id : 7603905197406855834,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 29,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 57,
					date : 7,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 61,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 94,
					old_text : 'N90dWQaYCUJnPZcr',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 99,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -2962703906805540608,
		),
		date : 91,
	),
);
```