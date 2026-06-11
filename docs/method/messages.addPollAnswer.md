# messages.addPollAnswer

**Layer** : 227

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
	msg_id : 24,
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'ZSzJsLdMXKQEuGNv',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 10,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 50,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 85,
					language : 'NucCPOZ1LTQ8lUAY',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 49,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : -8466329652153633111,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 100,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 69,
					document_id : -7946782320890628762,
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
					length : 78,
					date : 0,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 13,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 47,
					old_text : 'jELv0SbK8OaCgsXl',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 69,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : 7775530811057481667,
		),
		date : 16,
	),
);
```